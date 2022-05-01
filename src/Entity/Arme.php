<?php

namespace App\Entity;

class Arme {

    public $nom;
    public $carac = [];

    public static $armes = [];

    public function __construct($nom, $carac) {
        $this->nom = $nom;
        $this->carac = $carac;
        self::$armes[] = $this;
    }

    public static function creerArmes() {
        $a1 = new Arme('épée', [
            'desc' => 'Une superbe épée tranchante',
            'degat' => 10
        ]);
        $a2 = new Arme('arc', [
            'desc' => 'Une arme à distance',
            'degat' => 7
        ]);
        $a3 = new Arme('hache', [
            'desc' => 'Une arme ou un outil',
            'degat' => 15
        ]);
    }

    public static function getArmeParNom($nom) {
        foreach(self::$armes as $arme) {
            if ($arme->nom === $nom) {
                return $arme;
            }
        }
    }
}