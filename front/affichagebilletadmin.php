<html>

<head>
    <title>WonderLand</title>
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet">
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
    <?php


    $bdd = new PDO('mysql:host=localhost;dbname=olympiade;charset=utf8', 'olympiade', 'olympiade');
    $stmt = $bdd->prepare("select * from billet where status = 'utilisable';");
    
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="affichagebillet">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>date</th>
                    <th>email</th>
                    <th>status</th>
                    <th>type</th>
                    <th>code</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $ligne) { ?>
                    <tr>
                        <td><?= $ligne['id'] ?></td>
                        <td><?= $ligne['date_'] ?></td>
                        <td><?= $ligne['email'] ?></td>
                        <td><?= $ligne['status'] ?></td>
                        <td><?= $ligne['id_tarif'] ?></td>
                        <td><?= $ligne['code'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <form class="formretour" action="espaceadmin.php">
            <input type="submit" value="retourner sur la page administrateur">
        </form>
    </div>
</body>

</html>