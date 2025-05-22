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
      
  </body>

  <footer>
    <p><a href="/logout.php"> Click to logout</a></p>
</html>