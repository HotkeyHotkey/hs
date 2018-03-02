$('[data-input-toggle]').on('click', function(){
  if($(this).hasClass('fa-eye-slash')){
    $('[data-input="'+$(this).attr('data-input-toggle')+'"]').attr('type', 'text');
    $(this).removeClass('fa-eye-slash');
    $(this).addClass('fa-eye');
    return false;
  }
  if($(this).hasClass('fa-eye')){
    $('[data-input="'+$(this).attr('data-input-toggle')+'"]').attr('type', 'password');
    $(this).removeClass('fa-eye');
    $(this).addClass('fa-eye-slash');
    return false;
  }
});
