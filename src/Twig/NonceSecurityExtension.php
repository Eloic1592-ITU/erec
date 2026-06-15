<?php

namespace App\Twig;

use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class NonceSecurityExtension extends AbstractExtension {
    private $requestStack;
    public function __construct(RequestStack $requestStack) {
        $this->requestStack = $requestStack;
    }

    public function getFilters(): array {
        return [];
    }

    public function getFunctions(): array {
        return [
            new TwigFunction('add_nonce', [$this, 'addNonceAttribute'])
        ];
    }

    public function getName(): string {
        return 'nonce_security_extension';
    }

    public function addNonceAttribute(): string {
        $nonce = $this->requestStack->getSession()->get('nonceValue');
        if (empty($nonce)) {
            return '';
        }

        return 'nonce="' . $nonce . '"';
    }

}