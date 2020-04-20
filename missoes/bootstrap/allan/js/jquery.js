$(document).ready(function () {



//Efeito no Dropdown apos Login
  $('#imgLogin').hide()
  $('#btnLogar').click(function () {
    $('#formLogin').hide();
    $('#imgLogin').fadeIn();
  })


//Evento do No body apos Logar
  $('#bemvindo').hide()
  $('#avatar').hide()
  $('#btnLogar').click(function () {
    $('#containerHead').fadeOut();
    $('#facaLogin').fadeIn();
    $('#btnLogin').hide();
    $('#btnCadastro').hide();
    $('#avatar').fadeIn()

  })


//Evento do Modal de Cadastro
  $('#modalTextoDois').hide()
  $('#imgEmailModal').hide()
  $('#btnModal').click(function () {
    $('#modalTextoUm').hide()
    $('#modalTextoDois').fadeIn()
    $('#formModal').hide()
    $('#imgEmailModal').fadeIn()
    $('#btnbtnmodal').hide()
  });


});
