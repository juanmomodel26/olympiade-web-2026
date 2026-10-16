<html>

<head>
    <title>WonderLand</title>
    <link href="../style.css" rel="stylesheet">
    <meta charset="utf-8">
</head>

<body>
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
    <section class="parallax_forgotten_fortress">
        <div class="content">
            <h1>BIENVENUE À WONDERLAND</h1>
            <p>Découvrez un parc remplis d'imagination et de joie</p>
        </div>
    </section>
    <div class="classique">
        <p>
            La Forteresse Oubliée — Une aventure au cœur du royaume.<br><br>

            Au-delà des remparts des Terres Médiévales, dissimulée entre les montagnes et les cascades, 
            se dresse une forteresse que le temps semble avoir oubliée.<br><br>

            Autrefois, elle était le siège d'un puissant seigneur dont le royaume s'étendait sur toutes les terres environnantes. 
            Mais une nuit, dans des circonstances que nul ne parvint jamais à expliquer, 
            ses portes furent scellées et ses habitants disparurent sans laisser de traces.<br><br>

            Depuis, les voyageurs racontent que des lumières vacillent derrière ses meurtrières, 
            que des bruits étranges résonnent dans ses souterrains et que les anciennes cloches sonnent parfois au milieu de la nuit.<br><br>

            Aujourd'hui, une voie oubliée vient d'être rouverte. À bord d'embarcations inspirées des bateaux médiévaux, 
            les visiteurs sont invités à pénétrer dans les douves et les passages secrets de la forteresse pour découvrir ce qui s'y cache.<br><br>

            Des anciennes salles du trône aux oubliettes, en passant par les armureries et les souterrains inondés, 
            chaque étape révèle un fragment de l'histoire du royaume.<br><br>

            Mais prenez garde : certaines portes n'auraient jamais dû être rouvertes…<br><br>

            Préparez-vous à une aventure immersive où mystère, histoire et frissons se mêlent au cœur d'un décor médiéval spectaculaire.
        </p>
    </div>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
    $req = $bdd->prepare('select * from attraction where id = 4');
    $req->execute();
    $result= $req->fetch(PDO::FETCH_ASSOC);

    $id =  $result['ID'];
    $univers = $result['univers'];
    $taille = $result['taille_min_visiteur'];
    $status = $result['status'];

    $req = $bdd->prepare('select max(id_time) from attente where id_attraction = 4;');
    $req->execute();
    $result= $req->fetch(PDO::FETCH_ASSOC);
    $id_time = $result['max(id_time)'];

    $stmt = $bdd->prepare('select time_ from attente where id_attraction = 4 and id_time= :id_time');
    $stmt -> bindParam(":id_time",$id_time);
    $stmt->execute();
    $result= $stmt->fetch(PDO::FETCH_ASSOC);
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
        <a href="connexion.php"> Reserver une place </a>
    </div>
</body>

</html>