<?php


//database verbinden
include_once("./includes/db_connectie.php");
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Sole Machina</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php require("./header.php"); ?>
    <main>
        <section class="intro">
            <div class="left-section">
                <h2>Welkom bij ambachtelijke Pizzeria Sole Machina</h2>
                <p>Bestel gemakkelijk en snel online! Al onze producten bevatten GEEN varkens- of paardenvlees, 100% halal</p>
            </div>
            <div class="right-side">
                <img src="./images/pizza.jpg" />
            </div>
        </section>
    </main>
</body>

</html>