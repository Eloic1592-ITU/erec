<?php

namespace App\Controller\Back;

use App\Entity\Position;
use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use App\Service\EmailService;
use App\Service\OracleService;
use App\Utilities\PasswordGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/admin/utilisateurs')]
class UserController extends AbstractController 
{
    private OracleService $oracleService;

    public function __construct(OracleService $oracleService)
    {
        $this->oracleService = $oracleService;
    }

    #[Route('/', name:'admin_user', methods:['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(UserRepository $userRepository, EntityManagerInterface $entityManager) : Response 
    {   
        // Header Data
        $title = "Utilisateurs";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $users = $userRepository->findAll();

        // Compter le nombre d'utilisateurs avec le rôle ROLE_ADMIN
        $adminCount = $entityManager->createQuery(
            'SELECT COUNT(u.id)
            FROM App\Entity\User u
            WHERE u.roles LIKE :role'
        )->setParameter('role', '%"ROLE_ADMIN"%')
        ->getSingleScalarResult();

        // Compter le nombre d'utilisateurs avec le rôle ROLE_USER
        $userCount = $entityManager->createQuery(
            'SELECT COUNT(u.id)
            FROM App\Entity\User u
            WHERE u.roles LIKE :role'
        )->setParameter('role', '%"ROLE_USER"%')
        ->getSingleScalarResult();

        // Compter le nombre d'utilisateurs avec le rôle ROLE_USER et hasSubmittedApplication = true
        $submittedUserCount = $entityManager->createQuery(
            'SELECT COUNT(u.id)
            FROM App\Entity\User u
            WHERE u.roles LIKE :role AND u.hasSubmittedApplication = true'
        )->setParameter('role', '%"ROLE_USER"%')
        ->getSingleScalarResult();

        // Calculer le nombre d'utilisateurs hors candidats
        $usersOnlyCount = $userCount - $submittedUserCount;

        // get All Positions
        $query = $entityManager->createQuery(
            'SELECT u
            FROM App\Entity\Position u
            WHERE u.is_deleted = false OR u.is_deleted IS NULL'
        );

        $positions = $query->getResult();

        return $this->render('back/user/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'users' => $users,
            'positions' => $positions,
            'adminCount' => $adminCount,
            'userCount' => $userCount,
            'submittedUserCount' => $submittedUserCount,
            'usersOnlyCount' => $usersOnlyCount,
        ]);
    }

    #[Route('/nouveau/{ref}', name: 'admin_user_new', methods:['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(string $ref, Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator, EmailService $emailService): Response
    {
        $this->oracleService->setOracleSessionParams();

        // Page Title
        $title = "Ajouter un nouvel utilisateur";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => 'Utilisateurs', 'url' => $this->generateUrl('admin_user')],
            ['name' => $title, 'url' => null]
        ];

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
                return $this->redirectToRoute('admin_user_new', ['ref' => $ref]);
            }
            $user->setReferencePosition($position);

            // Vérifier si le CIN existe déjà
            $existingUserByCin = $entityManager->getRepository(User::class)->findOneBy(['cin' => $user->getCin()]);
            if ($existingUserByCin) {
                $this->addFlash('error', 'Ce numéro de CIN est déjà utilisé.');
                return $this->redirectToRoute('admin_user_new', ['ref' => $ref]);
            }

            // Vérifier si l'email existe déjà
            $existingUserByEmail = $entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
            if ($existingUserByEmail) {
                $this->addFlash('error', 'Cet email est déjà utilisé.');
                return $this->redirectToRoute('admin_user_new', ['ref' => $ref]);
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
                    $entityManager->flush();

                    // Envoyer un e-mail de confirmation
                    try {
                        $emailService->sendRegistrationEmail($user, $plainPassword);
                    } catch (TransportExceptionInterface|Exception $e) {
                        $this->addFlash("error", "Une erreur est survenue lors de l'envoi du mail");
                    }

                    $this->addFlash("success", "L'utilisateur a bien été créé.");

                    return $this->redirectToRoute('admin_user');

                } catch (\Exception $e) {
                    $this->addFlash("error", "Une erreur est survenue lors de l'enregistrement. Veuillez réessayer plus tard.");
                }
            }
        }

        return $this->render('back/user/new.html.twig', [
            'form' => $form->createView(),
            'refPosition' => $ref,
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }

    #[Route('/desactiver/{id}', name: 'admin_user_disable', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function disable(int $id, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            $this->addFlash("error", "Utilisateur non trouvée.");
            return $this->redirectToRoute('admin_user');
        }

        $user->setDeleted(true);

        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash("success", "L'utilisateur' a été désactivée.");
        return $this->redirectToRoute('admin_user');
    }

    #[Route('/activer/{id}', name: 'admin_user_activate', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function activate(int $id, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            $this->addFlash("error", "Utilisateur non trouvée.");
            return $this->redirectToRoute('admin_user');
        }

        $user->setDeleted(false);

        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash("success", "L'utilisateur a été réactivée.");
        return $this->redirectToRoute('admin_user');
    }
}