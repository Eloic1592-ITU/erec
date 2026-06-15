<?php

namespace App\Controller\Front;

use App\Entity\Document;
use App\Form\DocumentType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\Packages;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DocumentController extends AbstractController
{
    #[Route('/document/nouveau', name: 'app_document_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader, Packages $assetsManager): Response
    {
        $document = new Document();
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Upload CV
            $cvFile = $form->get('cv')->getData();
            if ($cvFile) {
                try {
                    $newFilename = $fileUploader->upload($cvFile, $this->getParameter('cv_directory'));
                    $document->setCvFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            // Upload LM
            $lmFile = $form->get('lm')->getData();
            if ($lmFile) {
                try {
                    $newFilename = $fileUploader->upload($lmFile, $this->getParameter('lm_directory'));
                    $document->setLmFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            $document->setUser($this->getUser());

            $entityManager->persist($document);
            $entityManager->flush();

            $downloadUrl = $assetsManager->getUrl('uploads/cv/'.$document->getCvFilename());

            return new JsonResponse([
                'status' => 'success',
                'message' => 'Document enregistré avec succès.',
                'isEdit' => false,
                'redirectUrl' => $this->generateUrl('app_document_edit', ['id' => $document->getId()]),
                'downloadUrl' => $downloadUrl,
            ]);
        }

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
    }

    #[Route('/document/editer/{id}', name: 'app_document_edit', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader, Packages $assetsManager): Response
    {
        $document = $entityManager->getRepository(Document::class)->find($id);

        if (!$document) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Document non trouvé.'
            ]);
        }

        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // Upload CV
            $cvFile = $form->get('cv')->getData();
            if ($cvFile) {
                try {
                    $newFilename = $fileUploader->upload($cvFile, $this->getParameter('cv_directory'));
                    $document->setCvFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            // Upload LM
            $lmFile = $form->get('lm')->getData();
            if ($lmFile) {
                try {
                    $newFilename = $fileUploader->upload($lmFile, $this->getParameter('lm_directory'));
                    $document->setLmFilename($newFilename);
                } catch (\Exception $e) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => $e->getMessage()
                    ]);
                }
            }

            $entityManager->persist($document);
            $entityManager->flush();

            $downloadUrl = $assetsManager->getUrl('uploads/cv/'.$document->getCvFilename());

            return new JsonResponse([
                'status' => 'success',
                'message' => 'Modification enregistrée.',
                'isEdit' => true,
                'redirectUrl' => $this->generateUrl('app_document_edit', ['id' => $document->getId()]),
                'downloadUrl' => $downloadUrl,
            ]);
        }

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
    }
}
