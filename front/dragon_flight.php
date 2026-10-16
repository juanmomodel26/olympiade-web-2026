<html>

<head>
    <title>WonderLand</title>
    <link href="../style.css" rel="stylesheet">
    <meta charset="utf-8">
</head>

<body>
    <?php
    session_start();

    ?>
    <header>
        <nav class="navbar">
            <a href="../index.html">WonderLand</a>

            <div class="dropdown">
                <button class="dropbutton">Attractions</button>
                <div class="dropdown-content">
                    <a href="dragon_flight.php">L'envol des Dragons</a>
                    <a href="crystal_cave.php">La grotte de cristal</a>
                    <a href="knight_tournament.php">Le tournoi des chevaliers</a>
                    <a href="forgotten_fortress.php">La forteresse oubliée</a>
                </div>
            </div>
            <a href="en_direct.php">En Direct</a>
        </nav>
    </header>
    <section class="parallax_dragon_flight">
        <div class="content">
            <h1> Le Vol du Dragon Céleste</h1>
            <p>Une attraction vous fait voltiger dans tous les sens</p>
        </div>
    </section>
    <div class="classique">
        <p>

            Le Vol du Dragon Céleste — Envolez-vous vers l'impossible !<br><br>

            Depuis la nuit des temps, une ancienne légende raconte qu'au-delà des nuages se cache le Royaume des Dragons
            Célestes, un monde oublié où les îles flottent dans les airs, où les cascades se déversent dans le vide et
            où la magie coule dans les veines de la terre.<br><br>

            Aujourd'hui, cette légende devient réalité.<br><br>

            Au cœur de WonderLand, les visiteurs sont invités à embarquer à bord d'un majestueux dragon mécanique pour
            entreprendre un voyage extraordinaire à travers des contrées mystérieuses. Mais attention : le réveil d'une
            créature légendaire pourrait bien transformer cette expédition en une aventure inoubliable !<br><br>

            Entre envolées vertigineuses, paysages fantastiques et rencontres inattendues, préparez-vous à vivre une
            expérience où l'imagination n'a plus de limites.
        </p>
    </div>

    <?php

    use LDAP\Result;

    $bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
    $req = $bdd->prepare('select * from attraction where id = 1');
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);

    $id =  $result['ID'];
    $univers = $result['univers'];
    $taille = $result['taille_min_visiteur'];
    $status = $result['status'];

    $req = $bdd->prepare('select max(id_time) from attente where id_attraction = 1;');
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);
    $id_time = $result['max(id_time)'];

    $stmt = $bdd->prepare('select time_ from attente where id_attraction = 1 and id_time= :id_time');
    $stmt->bindParam(":id_time", $id_time);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $time = $result['time_'];
    ?>
    <h1>Informations concernant l'attraction</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">Univers</th>
                <th scope="col">Taille minimale visiteur</th>
                <th scope="col">Status</th>
                <th scope="col">Temps d'attente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $univers; ?></th>
                <th><?php echo $taille; ?> cm</th>
                <th><?php echo $status; ?></th>
                <th><?php echo $time; ?> heure(s) d'attente</th>
            </tr>
        </tbody>
    </table>

    <div class="billeterie">
        <a href="<?php
                    if (isset($_SESSION['email']) && $_SESSION['email'] !== '') {
                        echo 'espaceclient.php';
                    } else {
                        echo 'connexion.php';
                    }
                    ?>"> Reserver une place </a>
    </div>

</body>

</html>