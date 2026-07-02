<?php

namespace App\Controller;

use App\Entity\Position;
use App\Entity\User;
use App\Form\ForgotPasswordType;
use App\Form\RegistrationType;
use App\Form\ResetPasswordType;
use App\Repository\PositionRepository;
use App\Repository\UserRepository;
use App\Service\EmailService;
use App\Service\OracleService;
use App\Utilities\PasswordGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Entity\UserPosition;

class SecurityController extends AbstractController
{
    private OracleService $oracleService;

    public function __construct(OracleService $oracleService)
    {
        $this->oracleService = $oracleService;
    }

    /**
     * Gère l'affichage du formulaire de connexion et le traitement des erreurs d'authentification.
     *
     * @param AuthenticationUtils $authenticationUtils : Utilitaire d'authentification Symfony.
     * @return Response
     */
    #[Route(path: '/connexion', name: 'app_login')]
    public function login(EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils, PositionRepository $positionRepository): Response
    {
        if($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        // get All Positions
        $query = $entityManager->createQuery(
            'SELECT u
            FROM App\Entity\Position u
            WHERE u.is_deleted = false OR u.is_deleted IS NULL'
        );

        $positions = $query->getResult();
        // dump($positions);

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // dump($error);

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        // dump($lastUsername = $authenticationUtils->getLastUsername());

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'positions' => $positions,
        ]);
    }
    /**
     * Gère l'affichage du formulaire de connexion et le traitement des erreurs d'authentification.
     * Passe l'ID du Poste choisi par l'utilisateur.
     *
     * @param AuthenticationUtils $authenticationUtils : Utilitaire d'authentification Symfony.
     * @param int $id : ID du Poste choisi par le utilisateur.
     * @return Response
     */
    #[Route(path: '/connexion/{ref}', name: 'app_first_login', defaults: ['ref' => null])]
    public function firstLogin(AuthenticationUtils $authenticationUtils, ?string $ref, EntityManagerInterface $entityManager,Request $request): Response
    {
        // dd($ref);
        if (empty($ref)) {
            return $this->redirectToRoute('app_home');
        }

        $existingPosition = $entityManager->getRepository(Position::class)->findOneBy(['reference' => $ref]);
        if (!$existingPosition instanceof Position) {
            return $this->redirectToRoute('app_positions');
        }

        if ($this->getUser()) {
            return $this->redirectToRoute('app_submission', ['ref' => $ref]);
        }

        // Sauvegarder la ref en session avant d'afficher le login
        $request->getSession()->set('_target_ref', $ref);

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'refPosition' => $ref,
        ]);
    }

    // #[Route(path: '/connexion/{ref}', name: 'app_first_login')]
    // public function firstLogin(AuthenticationUtils $authenticationUtils, string $ref, EntityManagerInterface $entityManager): Response
    // {
    //     if($this->getUser()) {
    //         return $this->redirectToRoute('app_home');
    //     }

    //     $existingPosition = $entityManager->getRepository(Position::class)->findOneBy(['reference' => $ref]);
    //     if ($existingPosition instanceof Position) {
    //         // get the login error if there is one
    //         $error = $authenticationUtils->getLastAuthenticationError();

    //         // last username entered by the user
    //         $lastUsername = $authenticationUtils->getLastUsername();

    //         return $this->render('security/login.html.twig', [
    //             'last_username' => $lastUsername,
    //             'error' => $error,
    //             'refPosition' => $ref,
    //         ]);
    //     }

    //     return $this->redirectToRoute('app_positions');
    // }


    /**
     * Cette méthode gère la déconnexion de l'utilisateur.
     * Elle est interceptée automatiquement par la configuration de sécurité.
     *
     * @return void
     */
    #[Route(path: '/deconnexion', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * Traite l'inscription d'un nouvel utilisateur.
     *
     * @param int $id : ID du Poste convoité.
     * @param Request $request : Requête Symfony contenant les données du formulaire.
     * @param EntityManagerInterface $entityManager : Gestionnaire d'entités Doctrine pour la persistance.
     * @param ValidatorInterface $validator : Validateur Symfony pour valider l'entité User.
     * @param EmailService $emailService : Service d'envoi d'e-mails.
     * @return Response
     */
    #[Route('/inscription/{ref}', name: 'app_registeration', methods: ['GET', 'POST'])]
    public function registeration(string $ref, Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator, EmailService $emailService): Response
    {
        $this->oracleService->setOracleSessionParams();

        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_user_new', ['ref' => $ref]);
        } 

        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        // Validate the ref
        $position = $entityManager->getRepository(Position::class)->findOneBy(['reference' => $ref]);
        if (!$position) {
            return $this->redirectToRoute('app_positions');
        }

        // Créer une nouvelle instance de l'utilisateur
        $user = new User();

        // Créer le formulaire
        $form = $this->createForm(RegistrationType::class, $user);

        // Traiter la requête
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Générer un mot de passe
            $passwordGenerator = new PasswordGenerator(12, 'luds'); // 12 caractères, avec lettres, chiffres et symboles
            $plainPassword = $passwordGenerator->generateStrongPassword();

            // Assigner les rôles par défaut
            $roles = ["ROLE_USER"];
            $user->setRoles($roles);
            $user->setPlainPassword($plainPassword);

            // Récupérer la position par sa référence
            $position = $entityManager->getRepository(Position::class)->findOneBy(['reference' => $ref]);

            if (!$position) {
                $this->addFlash('error', 'La position spécifiée est invalide.');
                return $this->redirectToRoute('app_registeration', ['ref' => $ref]);
            }
            $user->setReferencePosition($position);

            // Vérifier si le CIN existe déjà
            $existingUserByCin = $entityManager->getRepository(User::class)->findOneBy(['cin' => $user->getCin()]);
            if ($existingUserByCin) {
                $this->addFlash('error', 'Ce numéro de CIN est déjà utilisé.');
                return $this->redirectToRoute('app_registeration', ['ref' => $ref]);
            }

            // Vérifier si l'email existe déjà
            $existingUserByEmail = $entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
            if ($existingUserByEmail) {
                $this->addFlash('error', 'Cet email est déjà utilisé.');
                return $this->redirectToRoute('app_registeration', ['ref' => $ref]);
            }

            // Valider l'entité User
            $errors = $validator->validate($user);
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                try {
                    // Enregistrer l'utilisateur dans la base de données
                    $entityManager->persist($user);

                    // Créer la liaison UserPosition
                    // $userPosition = new UserPosition();
                    // $userPosition->setUser($user);
                    // $userPosition->setPosition($position); // $position est déjà récupéré plus haut 
                    // $entityManager->persist($userPosition);

                    // Un seul flush pour tout enregistrer en même temps
                    $entityManager->flush();


                    // Envoyer un e-mail de confirmation
                    try {
                        $emailService->sendRegistrationEmail($user, $plainPassword);
                    } catch (TransportExceptionInterface|Exception $e) {
                        $this->addFlash("error", "Une erreur est survenue lors de l'envoi du mail");
                    }

                    $this->addFlash("success", "Inscription réussie. Votre mot de passe est envoyé par mail. Veuillez vous connecter.");

                    return $this->redirectToRoute('app_login');

                } catch (\Exception $e) {
                    $this->addFlash("error", "Une erreur est survenue lors de l'enregistrement. Veuillez réessayer plus tard.");
                }
            }
        }

        // Nom du poste
        $positionName = $position->getName();

        return $this->render('security/register.html.twig', [
            'form' => $form->createView(),
            'refPosition' => $ref,
            'positionName' => $positionName,
        ]);
    }
   
    /**
     * Redirige l'utilisateur en fonction de son rôle après la connexion.
     *
     * @param Security $security : Service Symfony pour gérer la sécurité.
     * @return Response
     */
    #[Route('/dispatch', name: 'app_dispatch')]
    public function dispatch(
        Security $security, 
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $user = $this->getUser();

        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_dashboard', [], Response::HTTP_SEE_OTHER);

        } elseif ($this->isGranted('ROLE_USER') && ($user->getRoles() === ["ROLE_USER"])) {

            // 1. Récupérer et nettoyer IMMÉDIATEMENT la session
            $ref = $request->getSession()->get('_target_ref');
            $request->getSession()->remove('_target_ref'); 

            if ($ref) {
                // 2. Revalider la ref en base
                $position = $entityManager->getRepository(Position::class)->findOneBy(['reference' => $ref]);

                // 3. Vérifier que la position ET la campagne ne sont PAS supprimées
                if ($position && !$position->isDeleted() && !$position->getCampaign()->isDeleted()) {
                    return $this->redirectToRoute('app_submission', ['ref' => $ref]);
                }
            }

            // Pas de ref, ref invalide, ou position/campagne supprimée → app_home
            return $this->redirectToRoute('app_home');

        } else {
            $this->addFlash("error", "Accès non autorisé");
            return $security->logout(false);
        }
    }

    /**
     * Traite la demande de réinitialisation de mot de passe.
     *
     * @param Request $request : Requête Symfony contenant les données du formulaire.
     * @param UserRepository $userRepository : Repository pour accéder aux utilisateurs.
     * @param TokenGeneratorInterface $tokenGenerator : Générateur de token pour créer des token de réinitialisation.
     * @param EntityManagerInterface $entityManager : Gestionnaire d'entités Doctrine pour la persistance.
     * @param EmailService $emailService : Service d'envoi d'e-mails.
     * @return Response
     */
    #[Route('/mot-de-passe-oublie', name: 'app_forgot_password_request', methods: ['GET', 'POST'])]
    public function forgotPasswordRequest(
        Request $request, 
        UserRepository $userRepository, 
        TokenGeneratorInterface $tokenGenerator, 
        EntityManagerInterface $entityManager, 
        EmailService $emailService,
        PositionRepository $positionRepository
    ): Response
    {
        // get All Positions
        $query = $entityManager->createQuery(
            'SELECT u
            FROM App\Entity\Position u
            WHERE u.is_deleted = false OR u.is_deleted IS NULL'
        );

        $positions = $query->getResult();

        $form = $this->createForm(ForgotPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->getData()['email'];
            $user = $userRepository->findOneBy(['email' => $email]);

            if ($user) {
                $token = $tokenGenerator->generateToken();
                $user->setResetToken($token);
                $entityManager->flush();

                $emailService->sendPasswordResetEmail($user, $token);

                $this->addFlash('success', "Un email a été envoyé pour réinitialiser votre mot de passe.");

                return $this->redirectToRoute('app_login');
            }

            $this->addFlash('error', "Cette adresse email n'est pas enregistrée.");
        }

        return $this->render('security/forgot_password.html.twig', [
            'form' => $form->createView(),
            'positions' => $positions
        ]);
    }

    /**
     * Traite la réinitialisation du mot de passe à l'aide d'un jeton de réinitialisation.
     *
     * @param Request $request : Requête Symfony contenant les données du formulaire.
     * @param string $token : Token de réinitialisation pour identifier l'utilisateur.
     * @param UserRepository $userRepository : Repository pour accéder aux utilisateurs.
     * @param UserPasswordHasherInterface $hasher : Interface pour hasher le nouveau mot de passe utilisateur.
     * @param EntityManagerInterface $entityManager : Gestionnaire d'entités Doctrine pour la persistance.
     * @return Response
     */
    #[Route('/reinitialiser-mot-de-passe/{token}', name: 'app_reset_password', methods: ['GET', 'POST'])]
    public function resetPassword(
        string $token, 
        Request $request, 
        UserRepository $userRepository, 
        UserPasswordHasherInterface $hasher, 
        EntityManagerInterface $entityManager,
        PositionRepository $positionRepository
    ): Response
    {
        // get All Positions
        $query = $entityManager->createQuery(
            'SELECT u
            FROM App\Entity\Position u
            WHERE u.is_deleted = false OR u.is_deleted IS NULL'
        );

        $positions = $query->getResult();

        $user = $userRepository->findOneBy(['resetToken' => $token]);

        if (!$user) {
            $this->addFlash(
                'error', 
                'Accès non autorisé.'
            );
            return $this->redirectToRoute('app_login', [
                'positions' => $positions,
            ]);
        }

        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $hasher->hashPassword(
                    $user,
                    $form->getData()['plainPassword']
                )
            );
            $user->setResetToken(null);
            $entityManager->flush();

            $this->addFlash(
                'success', 
                "Mot de passe réinitialisé avec succès."
            );

            return $this->redirectToRoute('app_login', [
                'positions' => $positions
            ]);
        }

        return $this->render('security/reset_password.html.twig', [
            'form' => $form->createView(),
            'positions' => $positions
        ]);
    }
}
