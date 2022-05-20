<?php

namespace App\Controller;

use App\Entity\Voiture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    #[Route('/', name: 'app_voiture')]
    public function index(): Response
    {
      

    }

}
