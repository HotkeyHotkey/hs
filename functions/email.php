<?php
  require_once "../functions/main.php";
  $email = $_POST['mail'];
  $subject = "Manapoint - Email";
  $headers = "Content-Type: text/html; charset=utf-8;";
  $id = rand(1, 9999) . sha1($email);
  $idu = idUser($email);
  $nick = getUserLogin($idu);
  updateUsers(idUser($email), $id, 'verifyEmail');
  $message = "
    <div style='width: 500px; height: 250px; background-color:#26273f;'>
      <p style='font-size: 18px; color: #fff; padding: 10px 30px;'>Здравствуйте!</p>
      <p style='font-size: 18px; color: #fff; padding: 10px 30px;'>Спасибо за регестрацию на нашем сайте!</p>
      <p style='font-size: 18px; color: #fff; padding: 10px 30px;'>Подтвердить e-mail вы сможете <a href='https://hearthstone.org/verify.php?code=".$id."'>тут.</a></p>
      <p style='font-size: 18px; color: #fff; padding: 10px 30px;'>Удачи в дальнейшей игре!</p>
    </div>
  ";

  mail($email, $subject, $message, $headers);
?>
