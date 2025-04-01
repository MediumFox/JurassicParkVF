<?php

namespace App\Security;

use App\Entity\Administrateur;
use App\Entity\Client;
use App\Entity\User;
use App\Utils\TraitEmailFormat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Core\Security;

class LoginAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;
    use TraitEmailFormat;

    private UrlGeneratorInterface $urlGenerator;
    private EntityManagerInterface $entityManager;
    private MailerInterface $mailer;

    public function __construct(UrlGeneratorInterface $urlGenerator, EntityManagerInterface $entityManager, MailerInterface $mailer)
    {
        $this->urlGenerator = $urlGenerator;
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        $password = $request->request->get('password', '');

        $request->getSession()->set(Security::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email, function ($userIdentifier) {
                $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $userIdentifier]);
                if (!$user) {
                    throw new CustomUserMessageAuthenticationException('Email ou mot de passe invalide.');
                }
                if (!$user->isVerified()) {
                    throw new CustomUserMessageAuthenticationException('Votre compte n\'est pas encore vérifié.');
                }
                return $user;
            }),
            new PasswordCredentials($password)
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse($this->urlGenerator->generate('app_user_accueil'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): Response
    {
        $message = $exception->getMessage();
    
        $request->getSession()->getFlashBag()->add('danger', $message);
        if (str_contains($message, 'pas encore vérifié')){
            $email = $request->request->get('email');
    
            if ($email) {
                $client = $this->entityManager->getRepository(Client::class)->findOneBy(['email' => $email]);
                $otp = random_int(100000, 999999);
                $client->setOtp($otp);
    
                $this->entityManager->persist($client);
                $this->entityManager->flush();

                $this->sendEmailOtp($client->getEmail(), $otp, $this->mailer);
                if ($client) {
                    return new RedirectResponse($this->urlGenerator->generate('app_verify_otp', [
                        'id' => $client->getId()
                    ]));
                }
            }
        }
    
        return new RedirectResponse($this->urlGenerator->generate('app_login'));
    }

    public function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate('app_login');
    }
}
