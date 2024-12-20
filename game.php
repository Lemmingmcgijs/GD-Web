<?php
    $pagina = "game";
    $title = "Game";
?>
<!DOCTYPE html>
<html>
    <?php include ("head.php")?>

    <body>
        <header>
            <?php include ("header.php")?>
        </header>

        <div class="inhoud">
            <h1>Game</h1>
            <br>
            <py-script>
                print("Hallo, PyScript!")
            </py-script>

            <button onclick="game('Joooooo')">Game</button>
            <button onclick="input('blaaaaa')">Game 2</button>

            <h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1><h1>Geometry dash</h1>
        </div>

        <footer>
            <?php include ("footer.php")?>
        </footer>

        <script src="Geometry_dash_game.js"></script>
</html>