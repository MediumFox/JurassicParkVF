<?php

namespace App\Utils;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

trait TraitEmailFormat
{
    public function sendEmailOtp(string $toEmail, string $otp, MailerInterface $mailer): bool
    {
        $email = (new Email())
            ->from('no-reply@mon-site.com')
            ->to($toEmail)
            ->subject('Votre code de vérification')
            ->text("Votre code de vérification est : $otp");

        try {
            $mailer->send($email);
            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }

    
    public function sendMailResetPwd(string $toEmail, string $token, MailerInterface $mailer): bool
    {
        $email = (new Email())
            ->from('no-reply@mon-site.com')
            ->to($toEmail)
            ->subject('Réinitialisation de votre mot de passe')
            ->text("Voici le lien de réinitialisation : $token");

        try {
            $mailer->send($email);
            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }

    public function sendMailRecapitulatif(string $toEmail, MailerInterface $mailer): bool
    {
        $email = (new Email())
            ->from('no-reply@mon-site.com')
            ->to($toEmail)
            ->subject('Confirmation de votre commande')
            ->text("Votre commande a bien été passé.");

        try {
            $mailer->send($email);
            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }

    public function sendMailPaiementBoutique(string $toEmail, MailerInterface $mailer): bool
    {
        $email = (new Email())
            ->from('no-reply@mon-site.com')
            ->to($toEmail)
            ->subject('Confirmation de votre commande')
            ->text("Votre commande de produits sur notree boutique a bien été passé. <br><br> Afin de récuperer vos produits, n'oubliez pas de venir les chercher sur l'île.");

        try {
            $mailer->send($email);
            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }
}
