<?php

$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');

$stmt = $bdd->prepare("insert into billet (date_,email,id_tarif,status,code) values (:date,:email,:id_tarif,:status,:code);");


$date = $_POST['date'];
$id_tarif = $_POST['type'];
$nmb = $_POST['nombre'];
$email = $_POST['email'];
$status = "utilisable";
date_default_timezone_set("Europe/Paris");

$heureActuelle = (int) date("H");

$stmt->bindParam(":date", $date);
$stmt->bindParam(":id_tarif", $id_tarif);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":status", $status);

if ($heureActuelle >= 8 && $heureActuelle <= 19) {
    while ($nmb > 0) {
        $req = $bdd->prepare("select max(id) from billet");

        $req->execute();
        
        $id = $req->fetchColumn();
        $code = password_hash($id, PASSWORD_DEFAULT);
        
        $stmt->bindParam(":code", $code);
        $stmt->execute();

        $nmb--;
        header("Location: ../front/espaceclient.php");
    }
}else{
    echo("billeterie fermée");
    ?>
    <form action="../front/espaceclient.php">
        <input type="submit" value="retourner dane l'espace client">
    </form>

    <?php
}
