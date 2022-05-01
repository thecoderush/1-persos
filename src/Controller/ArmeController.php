<?php

namespace App\Controller;

use App\Entity\Arme;
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
        Arme::creerArmes();
        return $this->render('arme/armes.html.twig', [
            'controller_name' => 'ArmeController',
            'weapons' => Arme::$armes 
        ]);
    }

    /**
     * @Route("/armes/{nom}", name="afficher_arme")
     */
    public function afficherArme($nom): Response
    {
        Arme::creerArmes();
        $arme = Arme::getArmeParNom($nom);
        return $this->render('arme/arme.html.twig', [
            'controller_name' => 'ArmeController',
            'arme' => $arme             
        ]);
    }
}
