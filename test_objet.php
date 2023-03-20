<?php

    include './maison.php';

    $maMaison = new Maison("Home", 54, 40, 2);

    echo "<p>La surface de ".$maMaison->getNom()." est égale à : ".$maMaison->surface()."m2.</p>";

?>