<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApplyRecruitementController extends AbstractController
{
    #[Route('/apply/recruitement', name: 'app_apply_recruitement')]
    public function index(): Response
    {
        return $this->render('apply_recruitement/index.html.twig', [
            'controller_name' => 'ApplyRecruitementController',
        ]);
    }
}
