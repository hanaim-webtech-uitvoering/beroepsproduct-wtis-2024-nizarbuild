<?php

$originalTime = new DateTimeImmutable("{$_GET['datum']}");
$targetTime = new DateTimeImmutable("2025-12-14 08:30:00 Europe/London");
$interval = $originalTime->diff($targetTime);

$hoelang = "Het duurt nog: " . $interval->format("%a dagen, %H:%I:%S");

echo $hoelang;

?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <title>Event formulier</title>
</head>
<body>
  <h1>Event invoeren</h1>
  <form method="GET" action="">
    <label for="event">Welk event wacht je op?</label><br />
    <input type="text" id="event" name="event" placeholder="Bijv. Sinterklaas" required /><br /><br />

    <label for="datum">Wanneer vindt het plaats?</label><br />
    <input type="date" id="datum" name="datum" required /><br /><br />

    <button type="submit">Verzenden</button>
  </form>
</body>
</html>