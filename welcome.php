<?php
    $pagina = "input";
    $title = "Form test"
?>
<!DOCTYPE html>
<html>
    <?php include ("head.php")?>

    <body>
        <header>
            <?php include ("header.php")?>
        </header>

        <div class="inhoud">
            <h1>Input</h1>

            Welcome <?php echo $_POST["name"]; ?><br>
            Your email address is: <?php echo $_POST["email"]; ?>
        </div>

        <footer>
            <?php include ("footer.php")?>
        </footer>
</html>