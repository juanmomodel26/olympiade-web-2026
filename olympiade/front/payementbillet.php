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
    <h1>reservation de billets</h1>
    <div class=container>
        <!-- <form action="../back/achatbillet.php" method="POST"> -->
        <form id="formconfirm" action="../back/achatbillet.php" method="POST">
            <?php
            session_start();
            $type = $_POST['type'];
            $nombre = $_POST['nombre'];
            if ($type == 1) {
                $prix = 12;
            } else if ($type == 2) {
                $prix = 9;
            } else if ($type == 3) {
                $prix = 0;
            } else {
                $prix = 2000;
            }
            ?>

            <label>le montant s'élève a <?php echo($prix*$nombre); ?> € pour <?php echo($nombre) ?> billet(s)</label>
            <br><br>
            <input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" pattern="[^[0-9]{4}( [0-9]{4}){3}$]">
            <input type="text" placeholder="xxx" pattern="[^[0-9]{3}$]">
            <input type="hidden" name="email" value="<?= $email = $_SESSION['email']; ?>">
            <input type="hidden" name="type" value="<?= $type;?>">
            <input type="hidden" name="nombre" value="<?= $nombre; ?>">
            <input type="hidden" name="date" value="<?= $date = $_POST['date']; ?>">
            <input type="submit" value="confirmer le payement">
        </form>

        <form id="formannuler" action="../front/espaceclient.php">
            <input type="submit" value="annuler le payement">
        </form>
    </div>
</body>

</html>