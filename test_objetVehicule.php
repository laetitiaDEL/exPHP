<?php

    include './vehicule.php';

    $voiture = new Vehicule("Mercedes CLK", 4, 250);
    var_dump($voiture);
    echo"<br>";
    $moto = new Vehicule("Honda CBR", 2, 280);
    var_dump($moto);
    echo "<p>Le véhicule ".$voiture->getNom()." est une ".$voiture->detect().".</p>";
    echo "<p>Le véhicule ".$moto->getNom()." est une ".$moto->detect().".</p>";

    $voiture->boost();

    echo "<p>La ".$voiture->getNom()." roule maintenant à ".$voiture->getVitesse()."km/h.</p>";

    echo $voiture->plusRapide($moto);
    echo "<br>";
    echo Vehicule::plusRapide2($voiture, $moto);
?>

