<?php
require_once "functions/main.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $title = "Hearthstone - Турниры";
      require_once "blocks/head.php";
    ?>
  </head>
  <body>
    <?php require_once 'blocks/navbar.php';?>

    <?php require_once 'blocks/modal.php'; ?>
        <div class="container">
          <div class="row centered">
              <div class="main-category col-xs-offset-1 col-xs-2">
                <a href="index.php">НОВОСТИ<i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
              </div>
              <div class="main-category col-xs-offset-2 col-xs-2">
                <a href="tour.php">ТУРНИРЫ<i class="fa fa-trophy" aria-hidden="true"></i></a>
              </div>
              <div class="main-category col-xs-offset-2 col-xs-2">
              <a href="deck.php">КОЛОДЫ<i class="fa fa-info" aria-hidden="true"></i></a>
              </div>
          </div>
        </div>
    <div class="container">
      <div class="row centered">
        <div class="col-md-8">
          <div class="tour">
            <p class="tour-name">Название</p>
            <p class="tour-cost">200 баллов</p>
            <p class="tour-place">2/4</p>
            <p class="tour-in">Войти</p>
          </div>
        </div>
        <div class="col-md-4">
          
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/logReg.js"></script>
    <script src="js/input-toggle.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
