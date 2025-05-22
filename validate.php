<?php

  $valid_username = "MohamadSami";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($username == $valid_username && $password == $valid_password) {
    echo "Login successful!";
  } else {
    echo "Invalid username or password.";
  }
  ?>