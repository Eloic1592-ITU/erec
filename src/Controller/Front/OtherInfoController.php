<?php

namespace App\Controller\Front;

use App\Entity\OtherInfo;
use App\Form\OtherInfoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class OtherInfoController extends AbstractController
{
    #[Route('/autres/nouveau', name: 'app_other_info_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $otherInfo = new OtherInfo();

        // 1. Intercepter les champs optionnels AVANT handleRequest
        if ($request->isMethod('POST')) {
            $data = $request->request->all('other_info');

            $optionalFields = [
                'microsoft_oneNote_level',
                'microsoft_outlook_level',
                'microsoft_publisher_level',
                'microsoft_access_level',
                'microsoft_visio_level',
                'microsoft_project_level',
            ];

            foreach ($optionalFields as $field) {
                if (empty($data[$field])) {
                    $data[$field] = 'Non défini';
                }
            }

            $request->request->set('other_info', $data);
        }

        // 2. Créer le formulaire et handleRequest
        $form = $this->createForm(OtherInfoType::class, $otherInfo);
        $form->handleRequest($request);

        // 3. Vérifier si soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            $otherInfo->setUser($this->getUser());
            $entityManager->persist($otherInfo);
            $entityManager->flush();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'status' => 'success',
                    'message' => "Vos données ont bien été enregistrées.",
                    'redirectUrl' => $this->generateUrl('app_other_info_edit', ['id' => $otherInfo->getId()]),
                ]);
            }

            //Cas non-AJAX après succès
            return $this->redirectToRoute('app_submission');
        }

        // 4. Erreurs de validation
        if ($request->isXmlHttpRequest()) {
            $formErrors = [];
            foreach ($form->getErrors(true) as $error) {
                $formErrors[] = $error->getMessage();
            }
            return new JsonResponse([
                'status' => 'error',
                'message' => $formErrors
            ]);
        }

        //Cas non-AJAX, formulaire non soumis
        return new JsonResponse([
            'status' => 'error',
            'message' => 'Invalid request'
        ]);
    }

    #[Route('/autres/editer/{id}', name: 'app_other_info_edit', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $otherInfo = $entityManager->getRepository(OtherInfo::class)->find($id);

        if (!$otherInfo) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Données non trouvées.'
            ]);
        }

        $form = $this->createForm(OtherInfoType::class, $otherInfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($otherInfo);
            $entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'message' => "Modification enregistrées.",
                'isEdit' => true
            ]);
        }

        if ($form->isSubmitted() && !$form->isValid() && $request->isXmlHttpRequest()) {
            $formErrors = [];
            foreach ($form->getErrors(true) as $error) {
                $formErrors[] = $error->getMessage();
            }
            return new JsonResponse([
                'status' => 'error',
                'message' => $formErrors
            ]);
        }

        return new JsonResponse([
            'status' => 'error',
            'message' => 'Invalid request'
        ]);
    }
}
