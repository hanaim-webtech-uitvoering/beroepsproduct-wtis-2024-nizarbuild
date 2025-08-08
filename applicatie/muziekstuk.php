<?php
require_once("./db_connectie.php");

// Basisquery
$query = "
    SELECT s.stuknr, s.titel, g.genrenaam
    FROM stuk s
    LEFT OUTER JOIN genre g ON s.genrenaam = g.genrenaam
";

// Filter op genrenaam als deze in de URL staat
if (isset($_GET['genrenaam']) && $_GET['genrenaam'] !== '') {
    $query .= " WHERE s.genrenaam = :genrenaam";
    $stmt = $verbinding->prepare($query);
    $stmt->bindParam(':genrenaam', $_GET['genrenaam'], PDO::PARAM_STR);
    $stmt->execute();
} else {
    $stmt = $verbinding->query($query);
}

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['titel'] . "<br>";
    echo $row['stuknr'] . "<br>";
    echo $row['genrenaam'] . "<br>";
    echo "-------------------<br>"; // Scheiding tussen stukken
}


?>


