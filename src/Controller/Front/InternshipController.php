<?php

namespace App\Controller\Front;

use App\Entity\Internship;
use App\Form\InternshipType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class InternshipController extends AbstractController
{

    #[Route('/stage/nouveau', name:'app_internship_new', methods:['POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $internship = new Internship();

        $form = $this->createForm(InternshipType::class, $internship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $internship->setUser($this->getUser());

            $entityManager->persist($internship);
            $entityManager->flush();
            
            // Générer les URL pour le formulaire de modification et la suppression
            $internshipEditUrl = $this->generateUrl('app_internship_edit', ['id' => $internship->getId()]);
            $internshipDeleteUrl = $this->generateUrl('app_internship_delete', ['id' => $internship->getId()]);

            // Réponse JSON de succès avec les données mises à jour du formulaire
            return new JsonResponse([
                'status' => 'success',
                'message' => 'Stage ajouté avec succès.',
                'data' => [
                    'id' => $internship->getId(),
                    'html' => $this->renderView('front/partials/forms/internship/_form.html.twig', [
                        'form' => $form->createView(),
                        'internship' => $internship,
                        'internship_edit_url' => $internshipEditUrl,
                        'internship_delete_url' => $internshipDeleteUrl,
                    ]),
                    'internship_edit_url' => $internshipEditUrl,
                    'internship_delete_url' => $internshipDeleteUrl,
                ],
            ]);
        }

        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }

        return new JsonResponse([
            'status' => 'error',
            'message' => implode("\n", $errors),
        ]);
    }

    #[Route('/stage/editer/{id}', name:'app_internship_edit', methods:['POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $internship = $entityManager->getRepository(Internship::class)->find($id);

        if (!$internship) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Stage non trouvée.'
            ]);
        }

        $form = $this->createForm(InternshipType::class, $internship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($internship);
            $entityManager->flush();

            // Réponse JSON de succès
            return new JsonResponse([
                'status' => 'success',
                'message' => 'Modification enregistrée avec succès.',
            ]);
        }

        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }

        return new JsonResponse([
            'status' => 'error',
            'message' => implode("\n", $errors),
        ]);
    }

    #[Route('/stage/supprimer/{id}', name:'app_internship_delete', methods:['DELETE'])]
    #[IsGranted('ROLE_USER')]
    public function delete(int $id, EntityManagerInterface $entityManager): Response
    {
        $internship = $entityManager->getRepository(Internship::class)->find($id);

        if (!$internship) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Stage non trouvée.'
            ]);
        }

        $entityManager->remove($internship);
        $entityManager->flush();

        return new JsonResponse([
            'status' => 'success',
            'message' => 'Stage supprimé avec succès.',
        ]);
    }

    #[Route('/stages/supprimer-tous', name: 'app_internships_delete_all', methods: ['DELETE'])]
    #[IsGranted('ROLE_USER')]
    public function deleteAll(EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();

        $internships = $entityManager->getRepository(Internship::class)->findBy(['user' => $user]);

        foreach ($internships as $internship) {
            $entityManager->remove($internship);
        }

        $entityManager->flush();

        return new JsonResponse(['status' => 'success', 'message' => 'Tous les stages ont été supprimés avec succès']);

    }
}
