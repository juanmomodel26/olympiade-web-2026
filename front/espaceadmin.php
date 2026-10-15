<html>
    <head>
         <title>WonderLand</title>
    <meta charset="utf-8">
    <link href="../style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar">
                <a href="../index.html" method="POST">WonderLand</a>
            </nav>
            <form action="../back/ajoutattraction.php" method="POST">
                <input type="text" name="univers" required placeholder="fantasy">
                <input type="text" name="description" required placeholder="dragon_flight">
                <input type="text" name="image" required placeholder="ex: /images/dragon_flight">
                <input type="text" name="taille_min_visiteur" placeholder="ex: 120">
                <input type="text" name="status" placeholder="ouvert/fermé/panne" required>
                <input type="submit" value="ajouter attraction">
            </form>


            <form action="../back/modifattraction.php" method="POST">
                <input type="text" name="univers" required placeholder="fantasy">
                <input type="text" name="description" required placeholder="dragon_flight">
                <input type="text" name="image" required placeholder="ex: /images/dragon_flight">
                <input type="text" name="taille_min_visiteur" placeholder="ex: 120">
                <input type="text" name="status" placeholder="ouvert/fermé/panne" required>
                <input type="text" name="id" required placeholder="id attraction">
                <input type="submit" value="modifier attraction">
            </form>


            <form action="../back/supprimerattraction.php" method="POST">
                <input type="text" name="id" required placeholder="id attraction">
                <input type="submit" value="supprimer attraction">
            </form>

            <div class="billeterie"><a href="../index.html">Se deconnecter</a></div>
            

        </header>
    </body>
</html>