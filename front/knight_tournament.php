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
        </nav>
    </header>
    <section class="parallax_knight_tournament">
        <div class="content">
            <h1>BIENVENUE À WONDERLAND</h1>
            <p>Découvrez un parc remplis d'imagination et de joie</p>
        </div>
    </section>
    <div class="classique">
        <p>
            Le Tournoi des Chevaliers — Honneur, courage et gloire !<br><br>

            Franchissez les portes de la forteresse et plongez au cœur d'un royaume médiéval où les chevaliers défendent
            leurs couleurs, où les bannières flottent au vent et où les exploits des plus grands héros se transmettent
            de génération en génération.<br><br>

            Dans la cour du château, un événement exceptionnel se prépare : le grand Tournoi des Chevaliers de
            WonderLand.<br><br>

            Les visiteurs sont invités à rejoindre les tribunes et à embarquer dans une aventure au fil des douves pour
            assister aux épreuves des plus valeureux combattants du royaume. Joutes, démonstrations d'adresse et
            rivalités entre maisons se succèdent dans une ambiance festive.<br><br>

            Ici, pas de magie ni de dragons : seuls comptent la bravoure, l'habileté et l'honneur. Chaque chevalier rêve
            de remporter le tournoi et d'inscrire son nom dans la légende du royaume.

        </p>
    </div>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
    $req = $bdd->prepare('select * from attraction where id = 3');
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);

    $id =  $result['ID'];
    $univers = $result['univers'];
    $taille = $result['taille_min_visiteur'];
    $status = $result['status'];

    $req = $bdd->prepare('select max(id_time) from attente where id_attraction = 3;');
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);
    $id_time = $result['max(id_time)'];

    $stmt = $bdd->prepare('select time_ from attente where id_attraction = 3 and id_time= :id_time');
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