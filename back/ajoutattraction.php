<?php
$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
$stmt = $bdd->prepare("insert into attraction (univers,description,image,taille_min_visiteur,status) values (:univers,:desc,:image,:taille,:status);");

$univers = $_POST['univers'];
$desc = $_POST['description'];
$image = $_POST['image'];
$taille = $_POST['taille_min_visiteur'];
$status = $_POST['status'];



$stmt->bindParam(":univers", $univers);
$stmt->bindParam(":desc", $desc);
$stmt->bindParam(":image", $image);
$stmt->bindParam(":taille", $taille);
$stmt->bindParam(":status", $status);

$stmt->execute();
$result = $stmt->execute();

if ($result) {
    header("Location: ../front/espaceadmin.php");
}
