<?php

  $email = 'raulcabe3003@gmail.com';
  $password = 'raulrexulon';

  session_start();

  if(isset($_POST['uemail']) && isset($_POST['upassword'])) {
    $uemail = $_POST['uemail'];
    $upassword = $_POST['upassword'];

    if($uemail == $email && $upassword == $password) {
      $_SESSION['uemail'] = $uemail;
      $_SESSION['upassword'] = $upassword;
      $url = 'panel.php';
      header('Location: ' . $url);
    } else {
      $message = 'Incorrect user or password';
      $url = 'index.php';
      echo "<script>alert('$message')</script>";
      header("Refresh: 0; URL= $url");
    }
    exit();
  }
?>