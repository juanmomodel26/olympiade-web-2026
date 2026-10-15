<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
        <link href="../style.css" rel="stylesheet">
    </head>
    <body>
        <form action="../back/verifconnexion.php" method="POST">
            <input type="text" name="username" placeholder="user" required>
            <input type="password" name="password" placeholder="mot de passe" required>
            <input type="submit" value="Se connecter">
        </form>

        
        <!-- création d'un admin -->

        <!-- <form action="../back/inscription.php" method="POST">
            <input type="text" name="name" placeholder="user" required>
            <input type="password" name="mdp" placeholder="mot de passe" required>
            <input type="submit" value="creer un compte">
        </form> -->
        
    </body>
</html>