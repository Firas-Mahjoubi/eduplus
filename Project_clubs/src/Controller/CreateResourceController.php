<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CreateResourceController extends AbstractController
{
    #[Route('/create/resource', name: 'app_create_resource')]
    public function index(): Response
    {
        return $this->render('create_resource/index.html.twig', [
            'controller_name' => 'CreateResourceController',
        ]);
    }
}
