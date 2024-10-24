<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListApplicationController extends AbstractController
{
    #[Route('/list/application', name: 'app_list_application')]
    public function index(): Response
    {
        return $this->render('list_application/index.html.twig', [
            'controller_name' => 'ListApplicationController',
        ]);
    }
}
