<?php

//Classe

    class Vehicule{
        private $nom;
        private $nbrRoues;
        private $vitesse;

//Constructeur

        public function __construct($name, $roues, $vts){
            $this->nom = $name;
            $this->nbrRoues = $roues;
            $this->vitesse = $vts;
        }

//Getter et setter

        public function getNom(){
            return $this->nom;
        }
        public function getNbrRoues(){
            return $this->nbrRoues;
        }
        public function getVitesse(){
            return $this->vitesse;
        }

        public function setNom($name){
            $this->nom = $name;
        }
        public function setNbrRoues($roues){
            $this->nbrRoues = $roues;
        }
        public function setVitesse($vts){
            $this->vitesse = $vts;
        }

//Méthodes

        public function detect(){
            if($this->nbrRoues == 4){
                return "Voiture";
            }else if($this->nbrRoues == 2){
                return "Moto";
            }else{
                return "Autre véhicule";
            }
        }

        public function boost(){
            $this->vitesse += 50;
        }

        public function plusRapide($compare){
            if($this->vitesse > $compare->getVitesse()){
                return "La ".$this->nom." est plus rapide.";
            }else if($compare->getVitesse() > $this->vitesse){
                return "La ".$compare->getNom()." est plus rapide.";
            }else {
                return "Les deux véhicules roulent à la même vitesse.";
            }
        }

        public static function plusRapide2($obj1, $obj2){
            if($obj1->vitesse > $obj2->vitesse){
                return "La ".$obj1->nom." est plus rapide.";
            }else if($obj2->vitesse > $obj1->vitesse){
                return "La ".$obj2->nom." est plus rapide.";
            }else{
                return "Les deux véhicules roulent à la même vitesse.";
            }
        }
    }
?>