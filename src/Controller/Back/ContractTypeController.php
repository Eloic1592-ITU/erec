<?php

namespace App\Controller\Back;

use App\Entity\ContractType;
use App\Form\ContractTypeType;
use App\Repository\ContractTypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/contract/type')]
final class ContractTypeController extends AbstractController
{
    #[Route(name: 'admin_contract_type', methods: ['GET', 'POST', 'DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(ContractTypeRepository $contractTypeRepository): Response
    {
        // Header data
        $title = "Types de contrat";

        // Breadcrumb data
        $breadcrumbs = [
            ['name' => 'Tableau de bord', 'url' => $this->generateUrl('admin_dashboard')],
            ['name' => $title, 'url' => null]
        ];

        $contractTypes = $contractTypeRepository->findAll();

        $contractTypeForms = [];

        foreach ($contractTypes as $contractType) {
            $contractTypeForms[] = $this->createForm(ContractTypeType::class, $contractType, [
                'action' => $this->generateUrl('admin_contract_type_edit', [
                    'id' => $contractType->getId()
                ]),
                'method' => 'POST',
            ])->createView();
        }

        $newContractTypeForm = $this->createForm(ContractTypeType::class, new ContractType(), [
            'action' => $this->generateUrl('admin_contract_type_new'),
            'method' => 'POST',
        ])->createView();


        return $this->render('back/contract-type/index.html.twig', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
            'contractTypes' => $contractTypes,
            'contractTypeForms' => $contractTypeForms,
            'newContractTypeForm' => $newContractTypeForm,
        ]);
    }

    #[Route('/nouveau', name: 'admin_contract_type_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contractType = new ContractType();
        $form = $this->createForm(ContractTypeType::class, $contractType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contractType);
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_contract_type', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/contract-type/new.html.twig', [
            'contract_type' => $contractType,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_contract_type_show', methods: ['GET'])]
    public function show(ContractType $contractType): Response
    {
        return $this->render('contract-type/show.html.twig', [
            'contract_type' => $contractType,
        ]);
    }

    #[Route('/editer/{id}', name: 'admin_contract_type_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ContractType $contractType, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContractTypeType::class, $contractType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash("success", "Données enregistrées.");
            return $this->redirectToRoute('admin_contract_type', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/contract-type/edit.html.twig', [
            'contract_type' => $contractType,
            'form' => $form,
        ]);
    }

    #[Route('/desactiver/{id}', name: 'admin_contract_type_disable', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function disable(int $id, EntityManagerInterface $entityManager): Response
    {
        $contractType = $entityManager->getRepository(ContractType::class)->find($id);
    
        if (!$contractType) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_contract_type');
        }
    
        $contractType->setDeleted(true);
    
        $entityManager->persist($contractType);
        $entityManager->flush();
    
        $this->addFlash("success", "Le type de contrat a été désactivé.");
        return $this->redirectToRoute('admin_contract_type');
    }
    
    
    #[Route('/activer/{id}', name: 'admin_contract_type_activate', methods:['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function activate(int $id, EntityManagerInterface $entityManager): Response
    {
        $contractType = $entityManager->getRepository(ContractType::class)->find($id);
    
        if (!$contractType) {
            $this->addFlash("error", "Données non trouvée.");
            return $this->redirectToRoute('admin_contract_type');
        }
    
        $contractType->setDeleted(false);
    
        $entityManager->persist($contractType);
        $entityManager->flush();
    
        $this->addFlash("success", "Le type de contrat a été réactivé.");
        return $this->redirectToRoute('admin_contract_type');
    }
}
