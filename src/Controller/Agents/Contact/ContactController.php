<?php

namespace App\Controller\Agents\Contact;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'agents_contact_index')]
    public function index(): Response
    {
        return $this->render('pages/agent/contact/index.html.twig');
    }
}
