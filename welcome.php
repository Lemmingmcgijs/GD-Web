<?php
    session_start();

    $name = $_SESSION['name'] ?? 'Onbekend';
    $email = $_SESSION['email'] ?? 'Onbekend';
    $comment = $_SESSION['comment'] ?? 'Geen commentaar';
    $bla = $_SESSION['bla'] ?? 'Geen extra info';
    $blaa = $_SESSION['blaa'] ?? 'Geen extra extra info';

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

            Welcome <?php echo $name; ?><br>
            Your email address is: <?php echo $email; ?><br>
            <?php echo $comment?><br>
            <?php echo $bla?>
            <?php echo $blaa?>
        </div>

        <footer>
            <?php include ("footer.php")?>
        </footer>
</html>