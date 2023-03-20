<?php

    class Animal {
        /* --------------Attributs----------- */
        
        private $nom;
        private $taille;
        private $poids;
        private $sexe;

        /* ------------ Constructeur ------------ */

        public function __construct($name, $size, $weight, $gender){
            $this->nom = $name;
            $this->taille = $size;
            $this->poids = $weight;
            $this->sexe = $gender;
        }

        /* ------------ Getter et setter ------------ */

        public function getNom(){
            return $this->nom;
        }
        public function getTaille(){
            return $this->taille;
        }
        public function getPoids(){
            return $this->poids;
        }
        public function getSexe(){
            return $this->sexe;
        }

        public function setNom($name){
            $this->nom = $name;
        }
        public function setTaille($size){
            $this->taille = $size;
        }
        public function setPoids($weight){
            $this->poids = $weight;
        }
        public function setSexe($gender){
            $this->sexe = $gender;
        }

        /* ------------------- Méthodes ----------*/

        public function crier(){
            if($this->nom == 'chien'){
                echo "<br>Waouff !!";
            }else if($this->nom == 'chat'){
                echo "<br>Miaou ~";
            }else{
                echo "<br> Grrrr...";
            }
        }

    }

?>