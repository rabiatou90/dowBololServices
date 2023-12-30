<?php

namespace App\Controller\Agents\Bienvenue;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BienvenueController extends AbstractController
{
    #[Route('/', name: 'agents_bienvenue_index', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('pages/agent/bienvenue/index.html.twig');
    }
}
