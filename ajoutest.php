<?php
$e = "";
// try{

$bdd = new PDO("mysql:host=localhost;dbname=olympiade;'root'");
$name = $_POST["name"];
$stmt = $bdd->prepare("INSERT INTO test (name) VALUES ('aha');");
$stmt->bindParam(':name', $name);
$result = exec($stmt);

if ($stmt->execute()) {
    echo 'Insertion réussie !';
} else {
    echo "Echec de l'insertion.";
}