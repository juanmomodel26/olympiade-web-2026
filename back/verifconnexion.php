<?php
$bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
$stmt = $bdd->prepare("select * from utilisateur where name = :name;");

$user = $_POST['username'];
$mdp = $_POST['password'];

$stmt->bindParam(":name", $user);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$name = $result['name'];
$mdpverif = $result['mdp'];

if ($user == "admin" and password_verify($mdp, $mdpverif)) {
    header("Location: ../front/espaceadmin.php");
    
} else if ($user == $name and password_verify($mdp, $mdpverif)) {
    header("Location: ../front/espaceclient.php");
    
} else {
    header("Location: ../front/connexion.php");
}
