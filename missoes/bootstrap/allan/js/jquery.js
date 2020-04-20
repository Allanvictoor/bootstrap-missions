$(document).ready(function(){




  $('#imgLogin').hide()

  $('#btnLogar').click(function(){
    $('#formLogin').hide();
    $('#imgLogin').fadeIn();
  })
  

  
  $('#bemvindo').hide()
  $('#btnLogar').click(function(){
    $('#containerHead').fadeOut();
    $('#facaLogin').fadeIn();
  })



  $('#modalTextoDois').hide()
  $('#imgEmailModal').hide()
  $('#btnModal').click(function(){
    $('#modalTextoUm').hide()
    $('#modalTextoDois').fadeIn()
    $('#formModal').hide()
    $('#imgEmailModal').fadeIn()
    $('#btnbtnmodal').hide()
  });
  

  });
  