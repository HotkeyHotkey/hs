<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container ">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="brand">
        <a href="index.php"><img src="/img/logo.png" alt="" class="logo"></a>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="menu-navbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right log-reg">
        <?php
          if(isset($_SESSION['authId'])){
            echo '<li class="login-menu"><a href="profile.php?id='.$_SESSION['authId'].'"> <i class="fa fa-user" aria-hidden="true"></i>';
            echo getUserLogin($_SESSION['authId']) . ' (Профиль)';
            echo '</a></li><li class="divider"><a href="#">/</a></li>';
            echo '<li class="login-menu" id="signOut"><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Выход</a></li>';
          }else {
            echo '<li class="login-menu"><a href="#" data-toggle="modal" data-target="#login-modal" onclick="hideLogin();">Войти</a></li>
            <li class="divider"><a href="#">/</a></li>
            <li class="login-menu"><a href="#" data-toggle="modal" data-target="#login-modal" onclick="hideReg();">Зарегистрироваться</a></li>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
