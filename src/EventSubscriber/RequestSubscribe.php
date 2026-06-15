<?php

namespace App\EventSubscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class RequestSubscribe implements EventSubscriberInterface {
    private $tokenGenerator;
    private $requestStack;
    private $tokenStorage;

    /**
     * @param TokenGeneratorInterface $tokenGenerator
     * @param RequestStack $requestStack
     * @param TokenStorageInterface $tokenStorage
     */
    public function __construct(TokenGeneratorInterface $tokenGenerator, RequestStack $requestStack, TokenStorageInterface $tokenStorage) {
        $this->tokenGenerator = $tokenGenerator;
        $this->requestStack = $requestStack;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @return string[]
     */
    public static function getSubscribedEvents(): array {
        return [
            KernelEvents::RESPONSE => 'onKernelResponse',
            KernelEvents::CONTROLLER => 'onKernelController'
        ];
    }

    /**
     * @param ControllerEvent $event
     * @return void
     */
    public function onKernelController(ControllerEvent $event): void {
        $session = $this->requestStack->getSession();
        if ($session) {
            $session->remove('nonceValue');
            $nonce = md5($this->tokenGenerator->generateToken());
            $session->set('nonceValue', $nonce);
        }
    }

    /**
     * @param ResponseEvent $event
     * @return void
     */
    public function onKernelResponse(ResponseEvent $event): void {
        $response = $event->getResponse();
        $session = $this->requestStack->getSession();
        if ($session) {
            $userToken = $this->tokenStorage->getToken();
            if ($event->isMainRequest()) {
                // On Front only
                if (empty($userToken)) {
                    $nonce = $session->get('nonceValue');
                    $response->headers->set('Content-Security-Policy', "script-src 'nonce-" . $nonce . "' ; frame-ancestors 'none'");
                } else {
                    // remove it on backoffice
                    $response->headers->remove('Content-Security-Policy');
                }
            }
        }
        $response->headers->set('X-Frame-Options', "SAMEORIGIN");
        $event->setResponse($response);
    }

}