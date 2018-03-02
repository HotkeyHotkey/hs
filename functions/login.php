<?php
  session_start();
  require_once "main.php";
  $login = $_GET['login'];
  $pass = $_GET['password'];
  $error = false;
  $pass = sha1($pass);

  if(isUser($login, $pass) == true){
    echo 'login';
    $_SESSION['authId'] = idUser($login);
  }else{
    echo 'error';
  }
?>
