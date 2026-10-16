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
        <h1>Espace Administrateur</h1>
        <div class="espaceadmin">
            <h1>Ajout attraction</h1>
            <form action="../back/ajoutattraction.php" method="POST">
                <input type="text" name="univers" required placeholder="type, ex : fantasy">
                <input type="text" name="description" required placeholder="desc, ex : dragon_flight">
                <input type="text" name="image" required placeholder="image, ex: /images/dragon_flight">
                <input type="text" name="taille_min_visiteur" placeholder="taille visiteur, ex: 120">
                <input type="text" name="status" placeholder="status : ouvert/fermé/panne" required>
                <input type="submit" value="ajouter attraction">
            </form>

            <h1>Modification attraction</h1>
            <form action="../back/modifattraction.php" method="POST">
                <input type="text" name="univers" required placeholder="type, ex : fantasy">
                <input type="text" name="description" required placeholder="desc, ex : dragon_flight">
                <input type="text" name="image" required placeholder="image, ex: /images/dragon_flight">
                <input type="text" name="taille_min_visiteur" placeholder="taille visiteur,ex: 120">
                <input type="text" name="status" placeholder="status : ouvert/fermé/panne" required>
                <input type="text" name="id" required placeholder="id attraction">
                <input type="submit" value="modifier attraction">
            </form>

            <h1>suppression attraction</h1>
            <form action="../back/supprimerattraction.php" method="POST">
                <input type="text" name="id" required placeholder="id attraction">
                <input type="submit" value="supprimer attraction">
            </form>

            <h1>Modification temps d'attente attraction</h1>
            <form action="../back/modifattenteattraction.php" method="POST">
                <input type="text" name="id" required placeholder="id attraction">
                <input type="text" name="time" required placeholder="temps d'attente attraction">
                <input type="submit" value="modifier temps d'attente d'attraction">

            </form>
            <h1>Liste des billets</h1>
            <form action="affichagebilletadmin.php">
                <input type="submit" value="voir la liste des billets achetés">
            </form>
            <div class="billeterie"><a href="../index.html">Se deconnecter</a></div>


        </div>

    </header>
</body>

</html>