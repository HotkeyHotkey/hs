<?php
    require_once 'main.php';
    $email = $_GET['email'];
    $login = $_GET['login'];
    $password = $_GET['password'];
    $r_password = $_GET['r-password'];
    $errors = array();
    
      if(trim($login) == '' || trim($email) == '' || trim($password) == '' || trim($r_password) == ''){
        echo "noData";
        array_push($errors, 'error');
        return false;
      }
      if(hasOb('login', $login, 'users')){
        echo "hasLogin";
        array_push($errors, 'error');
        return false;
      }
      if(!filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_FLAG_PATH_REQUIRED)){
        echo 'errorEmail';
        array_push($errors, 'error');
        return false;
      }
      if(hasOb('email', $email, 'users')){
        echo 'hasEmail';
        array_push($errors, 'error');
        return false;
      }
      if($r_password != $password){
        echo 'errorRPass';
        array_push($errors, 'error');
        return false;
      }
      if(empty($errors)){
        echo "reg";
        newUser($login, $email, $password);
      }
    
?>
