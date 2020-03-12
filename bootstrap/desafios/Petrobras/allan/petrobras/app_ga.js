var PGA = {
  _maxTentativas: 100,
  _intervaloMS: 500,
  _init: false,

  /**
   * Executa um callback apenas depois de carregar o ga
   */
  init: function(callback, tentativa) {
    if(!tentativa) tentativa = 0;

    // Se o ga ainda não existe
    if(!ga) {
      if(tentativa < PGA._maxTentativas) {
        setTimeout(function() { PGA.init(tentativa+1); }, PGA._intervaloMS);
      } else {
        console.error('PGA excedeu a quantidade de tentativas');
      }
      return;
    }

    // Agora existe
    PGA._init = true;
    console.log('PGA iniciado com sucesso');
    callback();
  },

  /**
   * Envia um evento pro ga e depois redireciona pro url
   */
  event: function(lugar, acao, valor, url) {
    ga('send', 'event', lugar, acao, valor, url);
    setTimeout(function() {
      window.location.href = url;
    }, 1);
    return false;
  }
}



$(document).ready(function() {

    var scDelay = 75;
    var scLocked = false;

        var s25 = false;
        var s50 = false;
        var s75 = false;
        var s100 = false;

        var docHeight = $(document).height();
        var winHeight = $(window).height();

    $(window).scroll(function(e){
      if(scLocked) return;

      var scrollTop = $(window).scrollTop();
      var scrollPercent = (scrollTop) / (docHeight - winHeight);
      var scrollPercentRounded = Math.round(scrollPercent*100);

        // console.log(scrollPercentRounded);

        if(scrollPercentRounded >= 25){
          if(s25 === false){
            gtag('event', 'scroll', { 'event_category' : 'pagina', 'event_label' : '25' });
            s25 = true;
          }
        }
        
        if(scrollPercentRounded >= 50){
          if(s50 === false){
            gtag('event', 'scroll', { 'event_category' : 'pagina', 'event_label' : '50' });
            s50 = true;
          }
        }
        
        if(scrollPercentRounded >= 75){
          if(s75 === false){
            gtag('event', 'scroll', { 'event_category' : 'pagina', 'event_label' : '75' });
            s75 = true;
          }
        }
        
        if(scrollPercentRounded >= 90){
          if(s100 === false){
            gtag('event', 'scroll', { 'event_category' : 'pagina', 'event_label' : '100' });
            s100 = true;
          }
        }

      scLocked = true;
      setTimeout(function() {
        scLocked = false;
      }, scDelay);

    });
  });


