<?php
$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
$mdp = $_POST["mdp"];
$name = $_POST["name"];
if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $mdp)) {
    echo 'the password does not meet the requirements!';
} else {
    $mdp = password_hash($mdp, PASSWORD_DEFAULT);

    $stmt = $bdd->prepare("insert into utilisateur (name,mdp) values (:name, :mdp);");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":mdp", $mdp);
    $result = $stmt->execute();
    if ($result) {
        header("Location: connexion.php");
    }
}
