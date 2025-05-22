<?php

   session_start();

  $valid_username = "MohamadSami";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;
  $password = $_REQUEST['password'];

  if ($valid_username == $username && $valid_password == $password) {
    $_SESSION['authenticated'] = true;
    header('Location: /');
    } else {
  
    if (!isset($_SESSION['failed_attempts'])){
      $_SESSION['failed_attempts'] = 1;
    } else {
      $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
    }
    $_SESSION['error message'] = "Unsuccessful login attempt number: ". $_SESSION['failed_attempts'];
    header('Location: /login.php');

    
  }
  
  
  ?>