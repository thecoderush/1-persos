<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArmeController extends AbstractController
{
    /**
     * @Route("/arme", name="app_arme")
     */
    public function index(): Response
    {
        return $this->render('arme/index.html.twig', [
            'controller_name' => 'ArmeController',
            'arme' => 'test'
        ]);
    }
    
    /**
     * @Route("/armes", name="armes")
     */
    public function armes(): Response
    {
        $a1 = [
            'nom' => 'épée',
            'carac' => [
                'desc' => 'Une superbe épée tranchante',
                'degat' => 10
            ]
        ];
        $a2 = [
            'nom' => 'arc',
            'carac' => [
                'desc' => 'Une arme à distance',
                'degat' => 7
            ]
        ];
        $a3 = [
            'nom' => 'hache',
            'carac' => [
                'desc' => 'Une arme ou un outil',
                'degat' => 15
            ]
        ];
        $weapons = [
            'w1' => $a1,
            'w2' => $a2,
            'w3' => $a3 
       ];
        return $this->render('arme/armes.html.twig', [
            'controller_name' => 'ArmeController',
            'weapons' => $weapons 
         ]);
    }
}
