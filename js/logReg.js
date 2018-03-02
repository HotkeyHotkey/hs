$(document).ready(function(){
});
function hideReg(){
    $('.reg').css({'display' : 'block'});
    $('.login').css({'display' : 'none'});
}
function hideLogin(){
    $('.login').css({'display' : 'block'});
    $('.reg').css({'display' : 'none'});
}
function signOut(){
  $.ajax({
    type: 'GET',
    url: '/functions/signOut.php',
    dataType: 'html',
    success: function(result){
      location.reload();
    }
  });
}
$('#login-form').submit(function(e){
  e.preventDefault();
  var data = $(this).serialize();
  $.ajax({
    type: 'GET',
    url: '/functions/login.php',
    data: data,
    dataType: 'html',
    success: function(result){
      if(result == 'login'){
        location.reload();
      }else{
        $('#login-error').html('Неправильный логин, email или пароль.');
      }
    }
  });
});
$('#reg-form').submit(function(e){
  e.preventDefault();
  var data = $(this).serialize();
  var login = false;
  $.ajax({
    type: 'GET',
    url: '/functions/reg.php',
    data: data,
    dataType: 'html',
    success: function(result){
      if(result == 'noData'){
        $('#reg-error').html('Вы заполнили не все поля.');
      }
      if(result == 'hasLogin'){
        $('#reg-error').html('Такой логин уже существует.');
      }
      if(result == 'errorEmail'){
        $('#reg-error').html('Не правильно введен email.');
      }
      if(result == 'hasEmail'){
        $('#reg-error').html('Такой email уже существует.');
      }
      if(result == 'errorRPass'){
        $('#reg-error').html('Пароли не совпадают.');
      }
      if(result == 'reg'){
        $.ajax({
          type: 'GET',
          url: '/functions/login.php',
          data: data,
          dataType: 'html',
          success: function(result){
            if(result == 'login'){
              location.reload();
            }
          }
        });
      }

    }
  });
  if(login){

  }

});
$('#signOut').on('click',function(){
  signOut();
});
