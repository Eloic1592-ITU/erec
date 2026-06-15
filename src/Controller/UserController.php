<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserPasswordType;
use App\Form\UserType;
use App\Service\OracleService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Bundle\SecurityBundle\Security;

class UserController extends AbstractController
{
    private OracleService $oracleService;

    public function __construct(OracleService $oracleService)
    {
        $this->oracleService = $oracleService;
    }

    #[Route('/utilisateur/edition/profil/{id}', name: 'app_user_edit_profile', methods: ['GET', 'POST'])]
    public function editProfile(int $id, Security $security, Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $hasher): Response
    {
        $this->oracleService->setOracleSessionParams();

        $user = $entityManager->getRepository(User::class)->find($id);

        // Vérifier si l'utilisateur existe
        if (!$user || !$user instanceof PasswordAuthenticatedUserInterface) {
            $this->addFlash('error', 'Accès non autorisé.');
            return $this->redirectToRoute('app_home');
        }

        // Vérifier que l'utilisateur connecté correspond à l'utilisateur dont le profil est édité
        if ($this->getUser() !== $user) {
            $this->addFlash('error', 'Accès non autorisé.');
            return $this->redirectToRoute('app_home');
        }

        // Vérification du type d'objet
        if (!$user instanceof \App\Entity\User) {
            throw new \Exception('User object is not an instance of App\Entity\User');
        }

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if($hasher->isPasswordValid($user, $form->getData()->getPlainPassword())) {
                try {
                    $entityManager->persist($user);
                    $entityManager->flush();

                    if ($this->isGranted('ROLE_ADMIN')) {
                        return new JsonResponse([
                            'status' => 'success', 
                            'message' => 'Les informations de votre compte ont bien été modifiées.',
                            'redirect_url' => $this->generateUrl('admin_dashboard')
                        ]);
                    } else {
                        return new JsonResponse([
                            'status' => 'success', 
                            'message' => 'Les informations de votre compte ont bien été modifiées.',
                            'redirect_url' => $this->generateUrl('app_home')
                        ]);
                    }

                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error', 
                        'message' => "Une erreur est survenue lors de l'enregistrement des données."
                    ]);
                }
            } else {
                return new JsonResponse([
                    'status' => 'error', 
                    'message' => "Le mot de passe renseigné est incorrect."
                ]);
            }
        }

        if ($request->isMethod('POST')) {
            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors[] = $error->getMessage();
            }

            return new JsonResponse([
                'status' => 'error', 
                'errors' => $errors
            ]);
        }

        if ($this->isGranted('ROLE_ADMIN')) {
            // Page Title
            $title = "Modifier mes informations";

            // Breadcrumb data
            $breadcrumbs = [
                ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
                ['name' => $title, 'url' => null]
            ];

            return $this->render('back/user/edit_profile.html.twig', [
                'form' => $form->createView(),
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
            ]);
        } elseif ($this->isGranted('ROLE_USER')) {
            return $this->render('front/user/edit_profile.html.twig', [
                'form' => $form->createView(),
                'user' => $user,
            ]);
        } else {
            $this->addFlash("error","Accès non autorisé");
            return $security->logout(false);
        }
    }

    #[Route('/utilisateur/edition/mot-de-passe/{id}', name: 'app_user_edit_password', methods: ['GET', 'POST'])]
    public function editPassword(int $id, Security $security, Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $hasher): Response
    {
        $this->oracleService->setOracleSessionParams();

        $user = $entityManager->getRepository(User::class)->find($id);

        // Vérifier si l'utilisateur existe
        if (!$user || !$user instanceof PasswordAuthenticatedUserInterface) {
            $this->addFlash('error', 'Accès non autorisé.');
            return $this->redirectToRoute('app_home');
        }

        // Vérifier que l'utilisateur connecté correspond à l'utilisateur dont le profil est édité
        if ($this->getUser() !== $user) {
            $this->addFlash('error', 'Accès non autorisé.');
            return $this->redirectToRoute('app_home');
        }

        // Vérification du type d'objet
        if (!$user instanceof \App\Entity\User) {
            throw new \Exception('User object is not an instance of App\Entity\User');
        }

        $form = $this->createForm(UserPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($hasher->isPasswordValid($user, $form->getData()['plainPassword'])) {
                try {
                    $user->setPassword(
                        $hasher->hashPassword(
                            $user,
                            $form->getData()['newPassword']
                        )
                    );

                    $entityManager->persist($user);
                    $entityManager->flush();

                    // Vérifier si la requête est AJAX
                    if ($request->isXmlHttpRequest()) {
                        return new JsonResponse([
                            'status' => 'success',
                            'message' => 'Le mot de passe a été modifié.',
                            'redirect_url' => $this->generateUrl('app_logout')
                        ]);
                    }

                    $this->addFlash(
                        'success', 
                        'Le mot de passe a été modifié.'
                    );

                    return $this->redirectToRoute('app_logout');

                } catch (\Exception $e) {
                    if ($request->isXmlHttpRequest()) {
                        return new JsonResponse([
                            'status' => 'error',
                            'message' => "Une erreur est survenue lors de l'enregistrement du mot de passe."
                        ]);
                    }

                    $this->addFlash(
                        'error', 
                        "Une erreur est survenue lors de l'enregistrement du mot de passe."
                    );
                }
            } else {
                if ($request->isXmlHttpRequest()) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => "Le mot de passe renseigné est incorrect."
                    ]);
                }

                $this->addFlash(
                    'error', 
                    "Le mot de passe renseigné est incorrect."
                );
            }
        }

        if ($request->isMethod('POST') && $request->isXmlHttpRequest()) {
            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors[] = $error->getMessage();
            }

            return new JsonResponse([
                'status' => 'error',
                'errors' => $errors
            ]);
        }

        if ($this->isGranted('ROLE_ADMIN')) {
            // Page Title
            $title = "Modifier mon mot de passe";

            // Breadcrumb data
            $breadcrumbs = [
                ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
                ['name' => $title, 'url' => null]
            ];

            return $this->render('back/user/edit_password.html.twig', [
                'form' => $form->createView(),
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
            ]);
        } elseif ($this->isGranted('ROLE_USER')) {
            return $this->render('front/user/edit_password.html.twig', [
                'form' => $form->createView(),
                'user' => $user,
            ]);
        } else {
            $this->addFlash("error","Accès non autorisé");
            return $security->logout(false);
        }
    }
}
