<html>

<head>
    <title>WonderLand</title>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="index.html">WonderLand</a>

            <a href="billeterie.php">Billeterie</a>
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
    <section class="parallax_crystal_cave">
        <div class="content">
            <h1>BIENVENUE À WONDERLAND</h1>
            <p>Découvrez un parc remplis d'imagination et de joie</p>
        </div>
    </section>
    <div class="classique">
        <p>
            La Grotte des Cristaux — Découvrez le pouvoir oublié de la magie.<br><br>

            Au cœur des montagnes de WonderLand se cache un lieu que peu de voyageurs ont eu la chance de découvrir :
            la Grotte des Cristaux.<br><br>

            Selon les légendes du royaume, cette immense caverne serait née il y a des milliers d'années, 
            lorsque les premiers magiciens déposèrent une source de magie pure au plus profond de la terre. 
            Au fil des siècles, cette énergie mystérieuse donna naissance à des cristaux extraordinaires, 
            capables d'illuminer les ténèbres et de révéler les secrets du monde.<br><br>
            
            Aujourd'hui, une ancienne porte de pierre vient d'être découverte, 
            ouvrant l'accès à ce sanctuaire oublié. Les visiteurs sont invités à embarquer pour une expédition souterraine 
            à travers des galeries scintillantes, des lacs aux eaux cristallines et des salles gigantesques où la magie semble encore vivante.<br><br>

            Mais prenez garde : les cristaux ne sont pas de simples pierres précieuses. 
            Ils renferment une énergie mystérieuse qui pourrait bien réveiller les gardiens de la caverne…<br><br>

            Entre émerveillement, mystère et frissons, préparez-vous à vivre un voyage inoubliable dans les profondeurs enchantées de WonderLand.
        </p>
    </div>

    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
    $req = $bdd->prepare('select * from attraction where id = 2');
    $req->execute();
    $result= $req->fetch(PDO::FETCH_ASSOC);

    $id =  $result['ID'];
    $univers = $result['univers'];
    $taille = $result['taille_min_visiteur'];
    $status = $result['status'];
    ?>
    <h1>Informations concernant l'attraction</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">Univers</th>
                <th scope="col">taille minimale visiteur</th>
                <th scope="col">status</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $univers; ?></th>
                <th><?php echo $taille; ?> cm</th>
                <th><?php echo $status; ?></th>
            </tr>
        </tbody>
    </table>
    <div class="billeterie">
        <a href="billeterie.php"> Reserver une place </a>
    </div>
</body>

</html>