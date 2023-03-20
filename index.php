<?php
//import des ressources
    include './class.php';

//créer une instance de l'objet Animal
    $cat = new Animal("chat", 40, 4, true);

//modifer avec les setter
    $cat->setNom("chat");
    $cat->setTaille(40);
    $cat->setPoids(4);
    $cat->setSexe(true);
    var_dump($cat);
    echo"<br><br>";
    $dog = new Animal("chien", 60, 7, false);
    $dog->setNom("chien");
    $dog->setTaille(60);
    $dog->setPoids(7);
    $dog->setSexe(false);
    var_dump($dog);
    echo"<br><br>";


//afficher avec le getter
    echo"Le nom de l'objet est : ".$dog->getNom().".<br>";

//utiliser une méthode de la classe Animal
    $dog->crier();
    $cat->crier();
?>