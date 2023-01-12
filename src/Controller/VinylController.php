<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
       return new Response('ok');
    }

    // #[Route('/browse')]
    // public function browse(): Response
    // {
    //    return new Response('browse - main ');
    // }

    #[Route('/browse/{slug}')]
    public function browse($slug = null): Response
    {
       return new Response('browse: ' . $slug);
    }
}
