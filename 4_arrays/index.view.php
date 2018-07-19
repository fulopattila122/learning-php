<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 13:21
 */

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

    <style>

        ul {
            background: grey;
            padding: 2em;
            text-align: center;
        }

        ol {
            background: lightblue;
            color: orangered;
            text-align: left;
        }

    </style>

</head>

<body>

    <ul>

        <?php
            foreach ($names as $name) {
                echo "<li>$name</li>";
            }
        ?>
        <br>

<!--        2nd form - more useful -->
        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>

    </ul>


<!--    Homework-->

    <ul>
        <?php foreach ($animals as $animal) : ?>
            <li><?= $animal ?></li>
        <?php endforeach; ?>
    </ul>

<!--    Let's try an ordered one-->
    <ol>
        <?php foreach ($animals as $animal) : ?>
            <li><?= $animal ?></li>
        <?php endforeach; ?>
    </ol>
</body>

</html>