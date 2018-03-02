$('.load').append('<i class="fa fa-cog fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
$('.load').css('opacity', '0');
$('.load').addClass('dont-active-load');
function load(id){
  $('#load'+id).removeClass('dont-active-load');
  $('#load'+id).addClass('active-load');
  $('#load'+id).animate({opacity: 1}, 250);
}
function stopLoad(id){
  $('#load'+id).removeClass('active-load');
  $('#load'+id).addClass('dont-active-load');
  $('#load'+id).animate({opacity: 0}, 250);
}
