<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloworldController extends AbstractController
{
    #[Route('/helloworld', name: 'app_public_helloworld')]
    public function index(): Response
    {
        return $this->render('helloworld/index.html.twig', [
            'controller_name' => 'HelloworldController',
            'pseudo' => 'hugo',
        ]);
    }


}
