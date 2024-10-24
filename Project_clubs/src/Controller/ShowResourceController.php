<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShowResourceController extends AbstractController
{
    #[Route('/show/resource', name: 'app_show_resource')]
    public function index(): Response
    {
        return $this->render('show_resource/index.html.twig', [
            'controller_name' => 'ShowResourceController',
        ]);
    }
}
