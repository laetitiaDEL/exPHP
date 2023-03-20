<?php

    class Maison {
        private $nom;
        private $longueur;
        private $largeur;
        private $nbrEtages;

        public function __construct($name, $long, $large, $etages){
            $this->nom = $name;
            $this->longueur = $long;
            $this->largeur = $large;
            $this->nbrEtages = $etages;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getLongueur(){
            return $this->longueur;
        }

        public function getlargeur(){
            return $this->largeur;
        }

        public function getNbrEtages(){
            return $this->nbrEtages;
        }

        public function surface(){
            return ($this->longueur)*($this->largeur)*($this->nbrEtages);
        }
    }

?>