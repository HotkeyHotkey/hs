<?php
require_once "functions/main.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $myAcc = '0';
    $id = $_GET['id'];
    $level = getUserLevel($id);
    $login = getUserLogin($id);
    $xp = getUserXp($id);
    $maxXp = getUserMaxXp($id);
    $bonus = getUserBonus($id);
    $money = getUserMoney($id);
    $email = getUserEmail($id);
    $verify = getUserVerify($id);
    $title = $login . ' - Профиль' ;
    require_once "blocks/head.php";
    if($id == $_SESSION['authId']){
      $myAcc = '1';
    }
  ?>
</head>
<body>
  <?php require_once 'blocks/navbar.php';?>
  <?php require_once 'blocks/modal.php'; ?>
  <div class="container" style="margin-top: 100px;">
    <div class="centered">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="nick-in-profile" style="font-size: 400%;">
              <?php
                echo getUserLogin($_GET['id']);
              ?>
            </p>
            <?php
            $value1 = 30;
            $value2 = 30;
            $value3 = 30;
            if($level <= 10){
                $value1 = round(150 + ($level * 1.3125));
            }else if($level <= 30) {
                $value2 = round(50 + ($level * 2.5625));
            }else if($level <= 60){
                $value3 = round(50 + ($level * 2.5625));
            }else if ($level > 60) {
                $value1 = round(150 + ($level * 1.3125));
                $value2 = round(50 + ($level * 2.5625));
                $value3 = round(50 + ($level * 2.5625));
            }
            $color = "rgba(" . $value1 . "," . $value2 . "," . $value3 . ",1)";
            if($level <= 60){
              $colorText = 'FFF';
            }else{
              $colorText = '000';
            }
            if ($xp <= 0)
              $xp = 1;
            $progress = $xp / $maxXp * 100;
            ?>
            <div style="width:200px;height:200px;background-color: <?php echo $color; ?>; margin:auto; border-radius: 50%;">
              <p style="font-size: 400%; color: #<?php echo $colorText?> !important; z-index: 2; padding: 27% 25%; text-shadow: 0px 0px 1px #FFF; font-weight:bold;"><?php echo $level?></p>
            </div>
            <p style="font-size: 200%; margin-top: 10px;">Уровень</p>
          </div>
          <div class="col-md-5">
            <p style="font-size: 300%">Опыт</p>
            <div class="progress">
              <div id="xp" class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="45"
              aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress?>%">
            </div>
            </div>
            <p style="font-size: 200%;"><?php echo $xp?>/<?php echo $maxXp ?></p>
            <p style="font-size: 250%; margin-top: 50px; margin-bottom: 0;">Бонусов: <?php echo $bonus; ?></p>
            <br>
            <p style="font-size: 250%;">Рублей: <?php echo $money; ?></p>
          </div>
          </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top: 30px;">
              <label style="font-size: 160%;"><i class="fa fa-tag" aria-hidden="true"></i>Ваш BattleTag</label>
              <input type="text" placeholder="(Например TopDeckMan#1234)" style="" id="battleTag">
              <label style="font-size: 130%;" ><a href="javascript:return false;" onclick="updateBattleTag();">Сохранить<i class="fa fa-floppy-o" aria-hidden="true"></i></a></label>
            </div>
          </div>
          <?php if($verify == 0 || $verify != 1) require_once "blocks/verifyEmail.php";?>

        </div>
      </div>
    </div>
  </div>
  <div id="footer" style="margin-top: 100px;">

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/load.js"></script>
  <script type="text/javascript">
  var id = <?php echo $id?>;
  $('#battleTag').val('<?php echo getUserBattleTag($id); ?>');
  function updateBattleTag(){
    var battleTag = $('#battleTag').val();
    updateDB(id, battleTag, 'battleTag');
  }
  function updateDB(id, value, valueName) {
    $.ajax({
      type: 'GET',
      url: '/functions/update.php',
      dataType: 'html',
      data: {id:id, value:value, valueName:valueName},
      success: function(result){

      }

    });
  }
  function mail(mail) {
    $.ajax({
      type: 'POST',
      url: '/functions/email.php',
      dataType: 'html',
      data: {mail: mail},
      success: function(result){
        stopLoad(1);
      },
      beforeSend: function(){
        load(1);
      }
    });
  }
  </script>
  <script src="js/logReg.js"></script>
  <script src="js/input-toggle.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
