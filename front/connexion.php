<html>

<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link href="../style.css" rel="stylesheet">
</head>

<body>
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
    <div class="container">
        <div class="formconn">
            <form action="../back/verifconnexion.php" method="POST">
                <input type="text" name="username" placeholder="email" required>
                <input type="password" name="password" placeholder="mot de passe" required>
                <input type="submit" value="Se connecter">
            </form>
        </div>

        <!-- création d'un user -->
        <div class="forminscr">
            <form action="../back/inscription.php" method="POST">
                <input type="email" name="name" placeholder="email" required>
                <input type="password" name="mdp" placeholder="mot de passe" required>
                <input type="submit" value="creer un compte">
            </form>
        </div>
    </div>
</body>

</html>