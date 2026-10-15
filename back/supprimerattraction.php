<?php
$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
$stmt = $bdd->prepare("delete from attraction WHERE id = :id");

$id = $_POST['id'];

$stmt->bindParam(":id", $id);

$stmt->execute();

$result = $stmt->execute();
if ($result) {
    header("Location: ../front/espaceadmin.php");
}