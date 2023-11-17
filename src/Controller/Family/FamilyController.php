<?php

namespace App\Controller\Family;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/famille', name: 'family_')]
class FamilyController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('family/index.html.twig', [
            'controller_name' => 'FamilyController',
        ]);
    }
}
