<html>

<head>
    <title>WonderLand</title>
    <link href="../style.css" rel="stylesheet">
    <meta charset="utf-8">
</head>

<body>
    <?php
    session_start();

    ?>
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
            <a href="en_direct.php">En Direct</a>
        </nav>
    </header>
    <table>
        <thead>
            <tr>
                <th>Attraction</th>
                <th>Attente</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <th>

            </th>
        </tbody>
    </table>