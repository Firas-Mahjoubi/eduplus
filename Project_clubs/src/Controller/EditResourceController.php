<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EditResourceController extends AbstractController
{
    #[Route('/edit/resource', name: 'app_edit_resource')]
    public function index(): Response
    {
        return $this->render('edit_resource/index.html.twig', [
            'controller_name' => 'EditResourceController',
        ]);
    }
}
