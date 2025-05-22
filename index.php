<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] == false){
  header('Location: /login.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>MohamadSami</title>
  </head>
  
  <body>
      <h1>Assignment 1</h1>
      <p>Welcome <?php echo $_SESSION['username'] ?></p>
      <p><a href="/login.php"> Click to login</a></p>
    
  </body>
</html>