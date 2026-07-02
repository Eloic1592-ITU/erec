<?php
 
namespace App\Security;

use App\Entity\Position;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    public function __construct(
        private RouterInterface $router,
        private EntityManagerInterface $entityManager
    ) {}

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): RedirectResponse
    {
        // Lire la ref depuis la session (pas encore régénérée à ce stade)
        $ref = $request->getSession()->get('_target_ref');

        if ($ref) {
            // Revalider la ref en base
            $position = $this->entityManager->getRepository(Position::class)->findOneBy(['reference' => $ref]);

            // Nettoyer la session
            $request->getSession()->remove('_target_ref');

            if ($position && !$position->isDeleted()) {
                return new RedirectResponse(
                    $this->router->generate('app_submission', ['ref' => $ref])
                );
            }
        }

        // Pas de ref → comportement normal via app_dispatch
        return new RedirectResponse(
            $this->router->generate('app_dispatch')
        );
    }
}