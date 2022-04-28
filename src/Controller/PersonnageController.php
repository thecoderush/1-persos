<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }

    /**
     * @Route("/persos", name="personnages")
     */
    public function persos(): Response
    {
        $j1 = [
            'pseudo' => 'Marc',
            'age' => 25,
            'sexe' => true,
            'carac' => [
                'force' => 3,
                'agi' => 2,
                'intel' => 3
            ]
        ];
        $j2 = [
            'pseudo' => 'Milo',
            'age' => 30,
            'sexe' => true,
            'carac' => [
                'force' => 5,
                'agi' => 1,
                'intel' => 2
            ]
        ];
        $j3 = [
            'pseudo' => 'Tya',
            'age' => 22,
            'sexe' => false,
            'carac' => [
                'force' => 1,
                'agi' => 2,
                'intel' => 5
            ]
        ];
        $players = [
            'j1' => $j1,
            'j2' => $j2,
            'j3' => $j3
        ];
        return $this->render('personnage/persos.html.twig', [
            'controller_name' => 'PersonnageController',
            'players' => $players
        ]);
    }
}
