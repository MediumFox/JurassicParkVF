<?php
 
namespace App\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;;
 
class MailerController extends AbstractController
{
    #[Route('/send-email', name: 'app_send_email')]
    public function index(MailerInterface $mailer): Response
    {
        try {
            $email = (new Email())
                ->from('axou1202@gmail.com')
                ->to('axelrenard.pro@gmail.com')
                ->subject('Email Test')
                ->text('A sample email using Gmail SMTP.');
    
            $mailer->send($email);
    
            return new Response('Email sent successfully');
        } catch (\Exception $e) {
            return new Response('Error: ' . $e->getMessage());
        }
    }
}