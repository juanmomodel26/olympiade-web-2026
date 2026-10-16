<?php
date_default_timezone_set("Europe/Paris");

$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
$stmt = $bdd->prepare("insert into attente (id_attraction,time_,heure) values (:id_attraction,:time,:heure);");

$time = $_POST['time'];
$id_attraction = $_POST['id'];
$heure = date("Y-m-d H:i:s", time());
$stmt->bindParam(":id_attraction", $id_attraction);
$stmt->bindParam(":time", $time);
$stmt->bindParam(":heure", $heure);
$result = $stmt->execute();

if ($result) {
    header("Location: ../front/espaceadmin.php");
}
