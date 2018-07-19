<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 12:07
 */
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

    <style>

        header {
            background: grey;
            padding: 2em;
            text-align: center;
        }

        /*Homework*/
        footer {
            background: beige;
            color: blue;
            padding 1.5em;
            text-align: right;
        }

    </style>

</head>

<body>

    <header>

        <h1>
            <?php
                $name = $_GET['name'];

                echo "Hello, $name !";

            ?>
        </h1>

<!--        alternative mode-->
        <h1>
            <?= "Hello, " . $_GET['name'] . "!"; ?>
        </h1>

<!--        security - sanitizing input-->
        <h1>
            <?= "Hello, " . htmlspecialchars($_GET['name']) . "!"; ?>
        </h1>


    </header>


<!--Homework-->
    <footer>

        <h2>
            <?= "End of chapter, congrats " . htmlspecialchars($_GET['name']) ; ?>
        </h2>

    </footer>

</body>

</html>