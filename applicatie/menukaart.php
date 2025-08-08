<?php
//associatieve array

$eten = ["shoarma" => 6.95, "Appels" => 10.95, "Tabouleh" => 8.95, "Hamburger" => 5.50];
$drinken = ["Cola" => 2.00, "Ayran" => 2.30, "Fernandes" => 2.50, "Bier" => 5.50];
$toetjes = ["Chocola" => 3.50, "Vanille" => 3.00];

//Renderen van data
$etenlijst = '';
    foreach($eten as $voedsel => $prijzen) {
    $etenlijst .= "<tr><td>{$voedsel}</td><td>&euro; {$prijzen}</td></tr>";
    }

$drinkmenu = '';
    foreach($drinken as $drinken => $prijzen) {
        $drinkmenu .= "<tr><td>{$drinken}</td><td>&euro; {$prijzen}</td></tr>";
    }

    $toetjeslijst = '';
    foreach($toetjes as $toetje => $prijzen) {
        $toetjeslijst .= "<tr><td>{$toetje}</td><td>&euro; {$prijzen}</td></tr>";
    }

    if(isset($_GET["toetjeslijst"])) {
            foreach($toetjes as $toetje => $prijzen) {
        $toetjeslijst .= "<tr><td>{$toetje}</td><td>&euro; {$prijzen}</td></tr>";
    }
    }

?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <title>Restaurantmenu</title>
    <style>
      td:first-child {
        width: 8em;
      }
      td:nth-child(2) {
        font-style: italic;
        text-align: right;
        width: 4em;
      }
    </style>
  </head>
  <body>
    <h1>Menu</h1>

    <h2>Eten</h2>
    <table>
        <?= $etenlijst ?>
    </table>

    <h2>Drinken</h2>
    <table>
       <?= $drinkmenu ?>
    </table>
      <h2>Toetjes</h2>
      <table>
        <?= $toetjeslijst ?>
    </table>
  </body>
</html>

