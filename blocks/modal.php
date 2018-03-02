<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="logreg-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><a href="#" onclick="hideLogin();">Вход </a>/<a href="#" onclick="hideReg();"> Регистрация</a></h4>
          </div>
          <div class="modal-body">
            <div class="login">
              <form id="login-form">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input type="text" placeholder="Логин или e-mail" class="logreg-input" id="log-login" name="login" style="display:none;">
                <input type="text" placeholder="Логин или e-mail" class="logreg-input" id="log-login" name="login">
                <br>
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input type="password" placeholder="Пароль" class="logreg-input" id="log-password" name="password" style="display:none;">
                <input type="password" placeholder="Пароль" class="logreg-input" id="log-password" name="password">
                <br>
                <div class="logreg-error" id="login-error">
                </div>
                <br>
                <button type="submit" class="btn btn-log">Войти</button>
              </form>
            </div>
            <div class="reg">
              <form id="reg-form" >
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input type="text" placeholder="Логин" class="logreg-input" style="display: none;" name="login">
                <input type="text" placeholder="Логин" class="logreg-input" name="login">
                <br>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="text" placeholder="Email" class="logreg-input" style="display: none;" name="email">
                <input type="text" placeholder="Email" class="logreg-input" name="email">
                <br>
                <i class="fa fa-eye-slash" aria-hidden="true" data-input-toggle="1"></i>
                <input type="password" placeholder="Пароль" class="logreg-input" data-input="1" style="display: none;" name="password">
                <input type="password" placeholder="Пароль" class="logreg-input" data-input="1" name="password">
                <br>
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input type="password" placeholder="Повтор пароля" class="logreg-input" style="display: none;" name="r-password">
                <input type="password" placeholder="Повтор пароля" class="logreg-input" name="r-password">
                <br>
                <div class="logreg-error" id="reg-error">
                </div>
                <div class="logreg-error" id="reg-complete" style="color: #32CD32;">
                </div>
                <br>
                <button type="submit" class="btn btn-log">Зарегистрироваться</button>
              </form>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-close-log" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>
