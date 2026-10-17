<?php
$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
$stmt = $bdd->prepare("update attraction SET univers = :univers, description = :desc, image = :image, taille_min_visiteur = :taille, status = :status WHERE id = :id");

$univers = $_POST['univers'];
$desc = $_POST['description'];
$image = $_POST['image'];
$taille = $_POST['taille_min_visiteur'];
$status = $_POST['status'];
$id = $_POST['id'];

$stmt->bindParam(":univers", $univers);
$stmt->bindParam(":desc", $desc);
$stmt->bindParam(":image", $image);
$stmt->bindParam(":taille", $taille);
$stmt->bindParam(":status", $status);
$stmt->bindParam(":id", $id);

$stmt->execute();

$result = $stmt->execute();
if ($result) {
    header("Location: ../front/espaceadmin.php");
}
