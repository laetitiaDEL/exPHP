<?php

    include './user.php';
    include './admin.php';
    $util = new User('Deloirs', 'Laetitia', 'azerty@gmail.com', md5('1234'));
    /*
    $util->setNom('Deloirs');
    $util->setPrenom('Laetitia');
    $util->setMail('');
    $util->setPAssword(md5('1234'));
    */
    var_dump($util);

    echo "<br><br>";

    $admin = new Admin('Admin', 'root', 'admin@gmail.com', md5('root'), 30);
    var_dump($admin);   
    echo "<br>".$admin->test();

    echo "<br><br>";
    echo "Compte : ".$util->showUser()."<br>";
    echo "Compte : ".$admin->showUser()."<br>";

    echo "<br>";
    $admin->banUser($util);
    $admin->showBanUser();

?>