<?php

$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
$stmt = $bdd->prepare("insert into billet (date_,email,id_tarif,status) values (:date,:email,:id_tarif,:status);");

$date = $_POST['date'];
$id_tarif = $_POST['type'];
$nmb = $_POST['nombre'];
$email = $_POST['email'];
$status="utilisable";

$stmt->bindParam(":date", $date);
$stmt->bindParam(":id_tarif", $id_tarif);
$stmt->bindParam("email", $email);
$stmt->bindParam("status", $status);

while ($nmb > 0){
    $stmt-> execute();
    $nmb--;
    header("Location: ../front/espaceclient.php");
}
if ($nmb == 0){
    echo("fail");
}
if ($nmb >0){
    echo($nmb);
}
?>