<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>

 


<!--section miolo--> 
<section class="miolo selecao" >
  <!-- container miolo -->
  <div class="container row-fluid">
    <!--breadcrumb-->
    <div class="row-fluid pontilhada">
      <ul class="breadcrumb">
        <li><a href="/">Cultura Brasil</a><span class="divider">»</span></li>
        <li>Entrevistas </li>
      </ul>
    </div>
    <!--/breadcrumb-->
    <!-- coluna esquerda -->
    <div class="span8" style="margin:0; padding:0 10px;">
      
      <!-- titulo -->
      <h1>Seleção do ouvinte</h1>
      <p class="horario">Preencha e envie o formulário abaixo com até seis músicas adequadas à programação da rádio.</p>
      <!--titulo-->
      
      <!-- row form -->
      <div class="row-fluid">
        
        <!--form-->
        <form id="form-selecao" action="" method="post" >
          <div class="box msg">
            <div class="msgErro" style="display:none">
              <p class="aviso">Sua mensagem não pode ser enviada.</p>
            </div>
            <div class="msgAcerto" style="display:none">
              <p class="aviso">Mensagem enviada com sucesso.</p>
            </div>
          </div>
          <!-- form principal -->
          <fieldset>
            <div class="span10">
              <label>Nome</label>
              <input id="nome" name="nome" class="required span12" type="text" >
            </div>
            <div class="span2">
              <label>Idade</label>
              <input id="idade" name="idade" class="required span12" type="text" >
            </div>
            
          </fieldset>
          <fieldset>
            <div class="span12">
              <label>E-mail</label>
              <input id="email" name="email" class="span12" type="text" >
            </div>
          </fieldset>
          <fieldset>  
            <div class="span9">
              <label>Cidade</label>
              <input id="cidade" name="ciadade" class="required span12" type="text" >
            </div>
            <div class="span3">
              <label>UF</label>
              <select class="span12" id="estado-contato" name="estado">
                <option value="" selected="selected">--</option>
                <option value="Acre">AC</option>
                <option value="Alagoas">AL</option>
                <option value="Amazonas">AM</option>
                <option value="Amapá">AP</option>
                <option value="Bahia">BA</option>
                <option value="Ceará">CE</option>
                <option value="Distrito Federal">DF</option>
                <option value="Espirito Santo">ES</option>
                <option value="Goiás">GO</option>
                <option value="Maranhão">MA</option>
                <option value="Minas Gerais">MG</option>
                <option value="Mato Grosso do Sul">MS</option>
                <option value="Mato Grosso">MT</option>
                <option value="Pará">PA</option>
                <option value="Paraíba">PB</option>
                <option value="Pernambuco">PE</option>
                <option value="Piauí">PI</option>
                <option value="Paraná">PR</option>
                <option value="Rio de Janeiro">RJ</option>
                <option value="Rio Grande do Norte">RN</option>
                <option value="Rondônia">RO</option>
                <option value="Roraima">RR</option>
                <option value="Rio Grande do Sul">RS</option>
                <option value="Santa Catarina">SC</option>
                <option value="Sergipe">SE</option>
                <option value="São Paulo">SP</option>
                <option value="Tocantins">TO</option>
              </select>
            </div>
          </fieldset>
          
          <fieldset>
            <div class="span4">
              <label>Programa</label>
              <select class="span12 required" id="programa" name="programa">
                <option value="" selected="selected">--</option>
                <option value="Bamba Jam">Bamba Jam</option>
                <option value="Cultura Livre">Cultura Livre</option>
                <option value="Galeria">Galeria</option>
                <option value="Música Regional Brasileira">Música Regional Brasileira</option>
                <option value="RadarCultura">RadarCultura</option>
                <option value="Reggae de Bamba">Reggae de Bamba</option>
                <option value="Seleção do Ouvinte">Seleção do Ouvinte</option>
                <option value="Solano Ribeiro">Solano Ribeiro</option>
                <option value="Supertônica">Supertônica</option>
              </select>
            </div>
          </fieldset>
          
          <fieldset>
            <label>Mensagem</label>
            <textarea name="mensagem" rows="6" id="mensagem" class="span12" onkeydown="limitText(this,1000,'#textCounter');"></textarea>
            <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>
          </fieldset> 
          
          <fieldset>
            <div class="codigo span3" id="captchaimage">
              <label for="captcha">Confirmação</label>
              <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', '/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código"> <img src="/portal/js/validate/demo/captcha/images/image.php?1375217158" width="132" height="46" alt="Captcha image" id="captcha_image"> </a>
            </div>
            <div class="span9" id="captchaimage">  
              <label class="msg" for="captcha">Digite no campo abaixo os caracteres que você vê na imagem:</label>
              <input class="caracteres span9" type="text" maxlength="6" name="captcha" id="captcha">
            </div>
          </fieldset> 
          <!-- form principal -->
          
         
          <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" id="ajax-loader" />
          <input type="submit" class="enviar pull-right" id="enviar" value="enviar"/>
          
        </form>
        <!--/form-->
        <!-- /row form -->
      </div>
      
              
    </div>  
    <!-- /coluna esquerda -->
    
    <!--coluna direita -->
    <div class="span4 box-direita">
      
      <!--banner -->
      <div class="banner-culturabrasil">
        <script type='text/javascript'>
          GA_googleFillSlot("home-geral300x250");
        </script>
      </div>
      <!-- /banner -->  
      
    </div>
    <!--/coluna direita -->
    
  </div>  
  <!-- /container miolo -->  

</section>
<!--/section miolo-->

<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    
    $('input#cancelar').click(function(){
      $('#form-selecao').clearForm();
    })
    var validator = $('#form-selecao').validate({
      submitHandler : function(form) {
        $.ajax({
          type : "POST",
          dataType : "text",
          data : $("#form-selecao").serialize(),
          beforeSend : function() {
            $('input#enviar').hide();
            $('img#ajax-loader').show();
          },
          success : function(data) {
            $('input#enviar').show();
            $('img#ajax-loader').hide();
            window.location.href = "javascript:;";
            if(data == "1") {
              $('.box.msg, .msgAcerto').show();
              $('html, body').animate({
                scrollTop: $('.navbar-inner').offset().top
              }, "slow");
            } else {
              $(".box.msg, .msgErro").show();
              $('html, body').animate({
                scrollTop: $('.navbar-inner').offset().top
              }, "slow");
            }
          }
        });
      },
      rules : {
        nome : {
          required : true,
          minlength : 2
        },
        idade : {
          required : true
        },
        email : {
          required : true,
          email : true
        },
        cidade : {
          required : true,
          minlength : 2
        },
        estado : {
          required : true
        },
        programa: {
          required : true
        },
        mensagem : {
          required : true,
          minlength : 2
        },
        captcha : {
          required : true,
          remote : "/portal/js/validate/demo/captcha/process.php"
        }
      },
      messages : {
        nome : "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
        idade : "Este campo &eacute; obrigat&oacute;rio.",
        email : "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
        cidade : "Este campo &eacute; obrigat&oacute;rio.",
        estado : "Este campo &eacute; obrigat&oacute;rio.",
        programa : "Este campo &eacute; obrigat&oacute;rio.",
        mensagem : "Este campo &eacute; obrigat&oacute;rio.",
        captcha : "Digite corretamente o código que está ao lado."
      },
      success : function(label) {
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
      }
    });
  });
  // Contador de Caracters
  function limitText(limitField, limitNum, textCounter) {
    if(limitField.value.length > limitNum)
      limitField.value = limitField.value.substring(0, limitNum);
    else
      $(textCounter).html(limitNum - limitField.value.length);
  }
</script> 
