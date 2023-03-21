<?php 
    class User {
        private $nom;
        private $prenom;
        private $mail;
        private $password;

        public function __construct($name, $firstname, $mail, $pass){
            $this->nom = $name;
            $this->prenom = $firstname;
            $this->mail = $mail;
            $this->password = $pass;
        }

        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }        
        public function getMail(){
            return $this->mail;
        }         
        public function getPassword(){
            return $this->password;
        }


        public function setNom($name){
            $this->nom = $name;
        }
        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }                
        public function setMail($mail){
            $this->mail = $mail;
        }                
        public function setPassword($pwd){
            $this->password = $pwd;
        }


        public function showUser(){
            return $this->nom;
        }


    }

?>
