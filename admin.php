<?php
    class Admin extends User{
        private $age;
        private $ban = [];

        public function test(){
            return $this->getNom();
        }

        public function __construct($name, $firstname, $mail, $pass, $age){
            
            parent::__construct($name, $firstname, $mail, $pass);
            $this->age = $age;
        }

        public function showUser(){
            return strtoupper(parent::showUser());
        }

        public function banUser($user){
            $this->ban[] = $user;
        }

        public function showBanUser(){
            foreach ($this->ban as $value){
                echo "<p>L'utilisateur : ".$value->getPrenom()." est ban.</p>";
            }
        }
    }

?>