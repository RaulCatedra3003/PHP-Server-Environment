<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP loging</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <form action="validate.php" method="post" class="log-form">
    <label for="uemail" class="log-form__label">E-mail:</label>
    <input type="email" class="log-form__input" id="uemail" name="uemail" minlength="3">
    <label for="upassword" class="log-form__label">Pasword:</label>
    <input type="password" class="log-form__input" id="upassword" name="upassword" minlength="3">
    <input type="submit" class="log-form__submit" value="Login">
  </form>
</body>
</html>

<?php
  session_start();
  if(isset($_SESSION['uemail']) && isset($_SESSION['upassword'])) {
    $url = 'panel.php';
    header('Location: ' . $url);
    exit();
  }
?>