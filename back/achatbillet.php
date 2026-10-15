<?php
$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
$stmt = $bdd->prepare("insert into billet (univers,description,image,taille_min_visiteur,status) values (:univers,:desc,:image,:taille,:status);");

$result['email']= $_SESSION['email']; 

print($result['email']);