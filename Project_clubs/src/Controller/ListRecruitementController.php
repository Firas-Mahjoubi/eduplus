<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListRecruitementController extends AbstractController
{
    #[Route('/list/recruitement', name: 'app_list_recruitement')]
    public function index(): Response
    {
        return $this->render('list_recruitement/index.html.twig', [
            'controller_name' => 'ListRecruitementController',
        ]);
    }
}
