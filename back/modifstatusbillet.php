<?php
$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
$stmt = $bdd->prepare("select status, date_ from billet where id = :id;");

$id = $_POST['id'];

$stmt->bindParam(":id", $id);
$stmt->execute();
$heure = date("Y-m-d", time());
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$status =$result['status'];
$date = $result['date_'];


if ($status == "utilisable" and $date == $heure) {
    $stmt = $bdd->prepare("update billet SET status = 'utilise' WHERE id = :id;");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("Location: ../front/espaceadmin.php");
}
else if ($status == "utilisable" and $date != $heure){

    echo("mauvais jour");
}
else{
    echo("deja utilisé");
}
