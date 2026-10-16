<?php
$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
$stmt = $bdd->prepare("insert into attente (id_attraction,time_) values (:id_attraction,:time);");

$time = $_POST['time'];
$id_attraction = $_POST['id'];



$stmt->bindParam(":id_attraction", $id_attraction);
$stmt->bindParam(":time", $time);

$result = $stmt->execute();

if ($result) {
    header("Location: ../front/espaceadmin.php");
}
