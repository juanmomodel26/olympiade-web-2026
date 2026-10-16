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

        <h1>reservation de billets</h1>
        <div class=container>
            <div class=formachat>
                <form action="../back/achatbillet.php" method="POST">
                    <input type="text" name="type" required placeholder="1  +12ans, 2  3-12ans, 3  -3ans">
                    <input type="number" name="nombre" required value="1" step="1" min="1">
                    <input type="email" name="email" required placeholder="email">
                    <input type="date" name="date" min="<?= date('Y-m-d') ?>" required>
                    <input type="submit" value="valider la commande">
                </form>
            </div>
        </div>
    </header>