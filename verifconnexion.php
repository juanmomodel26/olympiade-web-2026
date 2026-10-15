<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
    $req = $bdd -> prepare("select * from utilisateur where id = 1;");
    $result = exec($req);

    $user = $_POST['username'];
    $mdp = $_POST['password'];


?>