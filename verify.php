<?php
require_once "functions/main.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $title = "Hearthstone";
      require_once "blocks/head.php";
    ?>
  </head>
  <body>
    <?php
      if( isset($_SESSION['authId'])  && isset($_GET['code']) && hasOb('verifyEmail', $_GET['code'], 'users')) {
        echo "<div class='container' style='margin-top:150px;'>";
        echo "<div class='row centered'>";
        echo "<h1>Вы подтвердили email!</h1>";
        echo "<h2>Поздравляем!</h2>";
        echo "</div>";
        echo "</div>";
        updateUsers($_SESSION['authId'], 1, "verifyEmail");  
      }else{
        echo "<div class='container' style='margin-top:150px;'>";
        echo "<div class='row centered'>";
        echo "<h1>Ошибка!</h1>";
        echo "<h2>Либо ссылка уже истекла, либо вы не вошли в акаунт</h2>";
        echo "</div>";
        echo "</div>";
      }
    ?>
    <?php require_once 'blocks/navbar.php';?>

    <?php require_once 'blocks/modal.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/logReg.js"></script>
    <script src="js/input-toggle.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
