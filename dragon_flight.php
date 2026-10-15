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
                        <a href="knight_tournament.php">Le tournoi des chevaliers</a>
                    </div> 
                </div>
            </nav>
        </header>
        <section class="parallax_dragon_flight">
        <div class="content">
            <h1>BIENVENUE À WONDERLAND</h1>
            <p>Découvrez un parc remplis d'imagination et de joie</p>
        </div>
    </section>
    <div class="classique">
        <p>
            Le Vol du Dragon Céleste — Envolez-vous vers l'impossible !<br>

            Depuis la nuit des temps, une ancienne légende raconte qu'au-delà des nuages se cache le Royaume des Dragons
            Célestes, un monde oublié où les îles flottent dans les airs, où les cascades se déversent dans le vide et
            où la magie coule dans les veines de la terre.<br>

            Aujourd'hui, cette légende devient réalité.<br>

            Au cœur de WonderLand, les visiteurs sont invités à embarquer à bord d'un majestueux dragon mécanique pour
            entreprendre un voyage extraordinaire à travers des contrées mystérieuses. Mais attention : le réveil d'une
            créature légendaire pourrait bien transformer cette expédition en une aventure inoubliable !<br>

            Entre envolées vertigineuses, paysages fantastiques et rencontres inattendues, préparez-vous à vivre une
            expérience où l'imagination n'a plus de limites.<br>
        </p>
    </div>
    <h2>
        Informations concernant l'attraction
    </h2>
    <p>
        <?php
            $bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8','olympiade','olympiade');
            $req = $bdd -> prepare('select * from attraction where id = 1');
            $req->execute();
            $result = $req->fetchAll();

            extract($result);

        ?>
    </p>
    </body>
</html>