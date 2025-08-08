<?php
$naam = 'Nisaru San';
$achternaam = 'Abak';

$vandaag = date_create('now');
$datum = $vandaag->format('D-F-Y');

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Hallo <?= "{$naam} {$achternaam}"?>.<br>
    Het is vandaag <?= $datum ?>.
</body>
</html>
