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
    <?php session_start();
    $email = $_SESSION['email']; ?>
    <div class=container>
        <form class="formachat" action="../back/payementbillet.php" method="POST">
            <input type="number" name="type" required placeholder="1  +12ans, 2  3-12ans, 3  -3ans" step="1" min="1" max="3">
            <input type="number" name="nombre" required value="1" step="1" min="1">
            <input type="hidden" name="email" value="<?= $email; ?>">
            <input type="date" name="date" min="<?= date('Y-m-d') ?>" required>
            <button type="submit">valider la commande</button>
        </form>
        <form action="affichagebilletvisiteur.php">
            <input type="submit" value="voir liste des billets achetés">
        </form>
        <form class="formdeco" action="../back/deconnexion.php">
            <input type="submit" value="se deconnecter">
        </form>
    </div>


</body>

</html>