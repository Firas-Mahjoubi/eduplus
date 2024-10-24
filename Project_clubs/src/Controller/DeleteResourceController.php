<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DeleteResourceController extends AbstractController
{
    #[Route('/delete/resource', name: 'app_delete_resource')]
    public function index(): Response
    {
        return $this->render('delete_resource/index.html.twig', [
            'controller_name' => 'DeleteResourceController',
        ]);
    }
}
