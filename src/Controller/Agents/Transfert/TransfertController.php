<?php

namespace App\Controller\Agents\Transfert;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransfertController extends AbstractController
{
    #[Route('/transfert', name: 'agents_transfert_index')]
    public function index(): Response
    {
        return $this->render('pages/agent/transfert/index.html.twig');
    }
}
