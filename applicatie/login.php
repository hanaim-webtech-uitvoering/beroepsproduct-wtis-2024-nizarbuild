<?php
session_start();

$logged_in = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {    //lees formulierwaarde uit
    $username = $_POST['username'];
    $password = $_POST['pass'];

    if(!empty($username) && !empty($password)) {
        $_SESSION['username'] = htmlspecialchars($username); //Voorkomen van cross-site XSS scripting
        $logged_in = true;
        $html = "<h1>Welcome {$_SESSION['username']}</h1>";

    } else {
        $html = "<p style='color:red;'>Vul zowel gebruikersnaam als wachtwoord in.</p>";
    } 

    
if (isset($_SESSION['username'])) {
  $html = "<h1>Welcome {$_SESSION['username']}</h1>";
  $logged_in = true;
  $html = "<h1>Welcome {$_SESSION['username']}</h1>";
}
}

?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testsessie</title>
  </head>
  <body>
    <?php
    if ($logged_in) {
    echo $html;
      header("index.php");
      echo '<p><a href="logout.php">Log uit</a></p>';
  } else {

    ?>
    <!-- TODO: ongeldige waarde voor `action`. -->
    <form action="" method="post">
      <input type="text" name="username">
      <input type="password" name="pass">
      <input type="submit" value="login">
    </form>
    <?php
      if (!empty($html)) {
          echo $html; // foutmelding als username of wachtwoord leeg is
      }
  }
  ?>
  </body>
</html>
