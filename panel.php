<?php
  session_start();

  if(!isset($_SESSION['uemail']) || !isset($_SESSION['upassword'])) {
    $url = 'index.php';
    header('Location: '.$url);
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles.css">
  <title>Panel</title>
</head>
<body>
  <?php
    $uemail = $_SESSION['uemail'];
    echo "<h2 class='panel-title'>Wellcome $uemail</h2>";
  ?>
  <form action="close-session.php" method="post">
    <input type="submit" value="Logout" class="log-form__submit">
  </form>
</body>
</html>