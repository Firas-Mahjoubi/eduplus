<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListResourceController extends AbstractController
{
    #[Route('/list/resource', name: 'app_list_resource')]
    public function index(): Response
    {
        return $this->render('list_resource/index.html.twig', [
            'controller_name' => 'ListResourceController',
        ]);
    }
}
