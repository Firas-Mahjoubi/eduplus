<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CreateRecruitementController extends AbstractController
{
    #[Route('/create/recruitement', name: 'app_create_recruitement')]
    public function index(): Response
    {
        return $this->render('create_recruitement/index.html.twig', [
            'controller_name' => 'CreateRecruitementController',
        ]);
    }
}
