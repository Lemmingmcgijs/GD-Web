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

        <?php
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>

        <div class="inhoud">
            <h1>Input</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            Bla: 
            <input type="radio" name="bla" value="1">1
            <input type="radio" name="bla" value="2">2
            <br>

            <input type="submit">
            </form>
        </div>

        <footer>
            <?php include ("footer.php")?>
        </footer>
</html>