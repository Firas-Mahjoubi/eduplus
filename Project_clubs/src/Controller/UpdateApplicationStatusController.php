<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UpdateApplicationStatusController extends AbstractController
{
    #[Route('/update/application/status', name: 'app_update_application_status')]
    public function index(): Response
    {
        return $this->render('update_application_status/index.html.twig', [
            'controller_name' => 'UpdateApplicationStatusController',
        ]);
    }
}
