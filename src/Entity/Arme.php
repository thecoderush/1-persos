<?php

namespace App\Entity;

class Arme {

    private $nom;
	private $description;
	private $degat;

	public static $armes = [];

	public function __construct($nom, $description, $degat) {
		$this->nom = $nom;
		$this->description = $description;
		$this->degat = $degat;
		self::$armes[] = $this;
	}

    public static function creerArmes() {
        new Arme("Épée", "Une superbe épée tranchante", 10);
		new Arme("Arc", "Une arme à distance", 7);
		new Arme("Hache", "Une arme ou un outil", 15);
	}
    
    public static function getArmeParNom($nom) {
        $searchChar = array("É", "é");
        foreach(self::$armes as $arme) {
            if (strtolower(str_replace($searchChar, 'e', $arme->nom)) === $nom) {
                return $arme;
            }
        }
    }

    /**
     * Getters
     */
    public function getNom() {
        return $this->nom;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function getDegat() {
        return $this->degat;
    }
    
    /**
     * Setters
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }
    
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }
    
    public function setDegat($degat) {
        $this->degat = $degat;
        return $this;
    }
}