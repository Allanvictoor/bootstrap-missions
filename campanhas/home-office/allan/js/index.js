$(window).scroll(function() { 
    var scroll = $(window).scrollTop();

    if (scroll > 30) {
        $('.menuFixo').css( 'background-color','#fcfcfc');
        
        
    } 

    if (scroll > 1) {
        $('.menuFixo').css( 'padding', '1px');
        
        
    } 

    if (scroll < 1) {
        $('.menuFixo').css( 'padding', '20px');
        
        
    } 

   
    
    


});