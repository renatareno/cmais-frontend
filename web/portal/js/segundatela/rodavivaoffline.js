

$(document).ready(function() {
  //arrays para players multiplos
  var cont = 0;
  var player = new Array();
  var players_ids = new Array();
  var playing;
  var playing_id = false;

  
  $('#status').fadeIn('slow');

  var log, serverUrl, socket;

  var interval = 0;
  var fakeInterval = 0;
  var timeout = 0;
  var tryin   = 3;
  var mult    = 0;
  
  serverUrl = 'ws://200.136.27.32:80/secondscreen';
  
  startClock = function(){
    tryin = (tryin+mult)*3;
    interval = setInterval(function(){
      if(tryin>1){
        tryin--;
        $('#tryin-v').html(tryin);
      }else{
        clearInterval(interval);
        if(mult<3){
          mult++;
          $('#tryin-v').html("0");
          tryToConnect();
        }else{
          fakeService();
          $('#tryin-p').hide();
        }
      }
    }, 1000);
  }

  tryToConnect = function() {
    if (window.MozWebSocket) {
      socket = new MozWebSocket(serverUrl);
    } else if (window.WebSocket) {
      socket = new WebSocket(serverUrl);
    }else{
      $('.offline').html("Erro");
      $('.tryin-p').html("Seu browser não suporta websockets e também não tem o plugin Flash Player instalado.");
      return;
    }

    socket.onclose = function(msg) {
      $('.offline').show();
      $('#tryin-p').show();
      $('.online').css('display', 'none');
      startClock();
      return;
    };

    socket.onopen = function(msg) {
      clearInterval(fakeInterval);
      $('#tryin-p').hide();
      $('.offline').hide();
      $('.online').show();
    };
    
    socket.onmessage = function(msg) {
      if(msg){
        //console.log(msg);
        response = JSON.parse(msg.data);
        switch (response.action) {
          case "contentInfo":
            return contentInfo(response.data);
          case "clientDisconnected":
            return clientDisconnected(response.data);
          case "clientConnected":
            return clientConnected(response.data);
          case "contentBan":
            return contentBan(response.data);
          case "onAir":
            return onAir(response.data);
          case "offAir":
            return offAir(response.data);
        }
      }
      return;
    };

  };
  tryToConnect(serverUrl);

  clientConnected = function(data) {
    $('.numero').html(data.clientCount);
    $('.online').fadeTo('fast', 0.1, function() {
      $('.online').fadeTo('fast', 1, function() {
        $('.online').fadeTo('fast', 0.1, function() {
          $('.online').fadeTo('fast', 1);
        });
      });
    });
    return;
  };

  clientDisconnected = function(data) {
    $('.numero').html(data.clientCount);
    $('.online').fadeTo('fast', 0.1, function() {
      $('.online').fadeTo('fast', 1, function() {
        $('.online').fadeTo('fast', 0.1, function() {
          $('.online').fadeTo('fast', 1);
        });
      });
    });
    return;
  };

  contentBan = function(data) {
    if(data){
      $('#id'+data).parent().remove();
    }
    return;
  };

  onAir = function(data) {
    if(data){
      if(data.script){
        eval(data.script); 
      }
      else {
        $('#box-clock').show();
      }
    }
  }

  offAir = function(data) {
    if(data){
      if(data.script){
        eval(data.script);
      }
      else {
        $('#box-clock').hide(); 
      }
    }
  }

  contentInfo = function(data) {
    if(data.type == 'script'){
      console.log(data);
      eval(data.script);
      //console.log(data.type);
    }else{
      var c = 'icon-align-left';
      if(data.type == 'people')
        c = 'icon-user';
      if(data.type == 'place')
        c = 'icon-map-marker';
      if(data.type == 'poll')
        c = 'icon-enquete';
      var html = '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#id'+data.handler+'" rel1="'+data.id+'" rel2="'+data.source+'"><i class="'+c+' icon-white"></i>'+data.tag+'</a></div>';
      html += '<div id="id'+data.handler+'" class="accordion-body collapse"><div class="accordion-inner">';
      html += "";
      html += '</div></div></div>';
      $('#accordion2').prepend(html);
      //console.log(data.url);
      $('#id'+data.handler).load(data.url, function(){
        $('#id'+data.handler+'.accordion-body iframe').each(function(i){
          if($(this).attr('src').indexOf("youtube") != -1){
            cont++;
            //console.log(cont);
            $(this).attr("id","player"+cont);
            onYouTubeIframeAPIReadyPlayer("player"+cont , cont)
          }
        });      
      });
    }
    $("a[href^='http']").attr('target','_blank');
    return;
  };
  
  onYouTubeIframeAPIReadyPlayer = function(obj, cont) {
    console.log("start"+cont);
    console.log("obj:"+obj);
    console.log("contador:"+cont);
    player[cont] = new YT.Player(obj);
    console.log("player:"+player[cont]);
    player[cont].addEventListener("onStateChange", function(res){
      if(res.data == 1){
        playing = res.target;
        console.log('playing:'+playing);
      }
    });
  }
  
  // retrive sent contents by ajax
  $.ajax({
    url:"http://cmais.com.br/ajax/fetchurl",
    data: {url: "http://200.136.27.32:8080/log/contents.json"},
    dataType: 'jsonp',
    success:function(json){
      if(json!=null){
        $.each(json, function( key, value ) {
          if(!value.banned)
            contentInfo(value);
        });
      }
    }
  });
  
  window.fakeService = function(){
    clearInterval(interval);
    $('.offline').hide();
    $('.online').show();
    fakeInterval = setInterval(function(){
      // 30 em 30
      $.ajax({
        url:"http://cmais.com.br/ajax/fetchurl",
        data: {url: "http://200.136.27.32:8080/log/last-content.json"},
        dataType: 'jsonp',
        success:function(json){
          //console.log(json);
          //console.log('1:');
          //console.log($('#accordion2 .accordion-group:first').find('.collapse').attr("id"))
          //console.log('2:');
          //console.log(json.handler);
          add = false;
          if(json.handler){
            if($('#accordion2 .accordion-group:first').find('.collapse').attr("id")!="id"+json.handler){
              add = true;
            }
          }
          if(add)
            contentInfo(json);
        }
      });
    }, 30000);
  }
    
  $('#myTab a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
  });
  
  // colocando e tirando ativo
  $('.accordion-body').live('hidden', function() {
    //remove barra ativa
    $(this).prev().find('a').removeClass('ativo');
    if(playing)
      playing.pauseVideo();
  });
  
  $('.accordion-body').live('shown', function() { 
    //remove barra ativa
    $(this).prev().find('a').addClass('ativo');
    //scroll
    var el = $(this).parent();
    $('html, body').animate({
      scrollTop: el.offset().top
    }, "fast");
  });
  
  // padding ultimo conteudo
  $('.accordion-body').each(function() {
    $(this).find('p:last').css('padding-bottom', '15px');
  });

});