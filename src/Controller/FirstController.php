<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // Chercher au niveau de la base de données les users
        return $this->render('first/index.html.twig', [
            'name' => 'Thireau',
            'firstname' => 'Liam',
        ]);
    }

    #[Route('/secondPage/{name}/{firstname}', name: 'second.Page')]
    public function secondPage(Request $request, $name, $firstname): Response
    {
        return $this->render( 'first/second.html.twig', [

            'nom' => $name,
            'prenom' => $firstname,

        ]);
    }
}
