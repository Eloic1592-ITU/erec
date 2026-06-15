<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;
use App\Entity\User;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class EmailService
{
    private $mailer;
    private $twig;
    private $logger;
    private $router;
    private $parameters;
    private $emailFrom;

    public function __construct(
        MailerInterface $mailer,
        Environment $twig,
        LoggerInterface $logger,
        RouterInterface $router,
        ParameterBagInterface $parameters
    ) {
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->logger = $logger;
        $this->router = $router;
        $this->parameters = $parameters;
        $this->emailFrom = $this->parameters->get('mail_from_address');
    }

    public function sendRegistrationEmail(User $user, string $plainPassword): void
    {
        $this->sendEmail(
            $user,
            'mail/registration.html.twig',
            'Confirmation d\'inscription',
            ['plainPassword' => $plainPassword]
        );
    }

    public function sendPasswordResetEmail(User $user, string $resetToken): void
    {
        $url = $this->router->generate('app_reset_password', ['token' => $resetToken], UrlGeneratorInterface::ABSOLUTE_URL);

        $this->sendEmail(
            $user,
            'mail/reset_password.html.twig',
            'Réinitialisation de mot de passe',
            ['url' => $url]
        );
    }

    public function sendApplicationConfirmationEmail(User $user): void
    {
        $this->sendEmail(
            $user,
            'mail/application_confirmation.html.twig',
            'Confirmation de candidature'
        );
    }

    private function sendEmail(User $user, string $template, string $subject, array $context = []): void
    {
        try {
            $htmlContent = $this->twig->render($template, array_merge([
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'email' => $user->getEmail(),
            ], $context));

            $email = (new Email())
                ->from($this->emailFrom)
                ->to($user->getEmail())
                ->bcc('ando.raharialinera@gmail.com') // Debug
                ->subject($subject)
                ->html($htmlContent);

            $this->mailer->send($email);

            $this->logger->info('E-mail envoyé avec succès à ' . $user->getEmail());
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de l\'envoi de l\'e-mail : ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * @param $toEmail
     * @param $content
     * @return void
     */
    public function sendTestEmail($toEmail, $content, &$outputConsole = null): void {
        try {
            $email = (new Email())
                ->from($this->emailFrom)
                ->to($toEmail)
                ->subject('Test Email')
                ->html($content);

            $this->mailer->send($email);
            if ($outputConsole) {
                $outputConsole->writeln('Email send to ' . $toEmail);
            }
        } catch (\Exception $e) {
            $outputConsole->writeln('Erreur lors de l\'envoi de l\'e-mail : ' . $e->getMessage());
            throw $e;
        }
    }
}
