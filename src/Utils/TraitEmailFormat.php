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
}
