<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cocoric&oacute; 3D - TV Cultura</title>
		<link href="/cocorico/3d/css/geral.css" type="text/css" rel="stylesheet">
		<script src="/cocorico/3d/js/jquery.js" type="text/javascript"></script>
		<script src="/cocorico/3d/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>

    </head>
    {literal}
    <script type="text/javascript">
    
    
	$(document).ready(function(){
		$('input[type="button"]').bind('click', function(){
			if ($(this).is('.btnLigar'))
			{
				$(this).removeClass().addClass('btnDesligar');
				$('body, h1').removeClass().addClass('bg3d');
			}
			else
			{
				$(this).removeClass().addClass('btnLigar');
				$('body, h1').removeClass().addClass('bgnormal');
			}
		});
	});
	</script>
	{/literal}
    <body class="bg3d">
    	<div class="allWrapper">
        	<!--
	    	<div class="topoTvCultura">
	    		<div id="topo-portal" class="topo-geral capa-topo" style="background:#000; color:#fff; font-weight:bold; height:48px; line-height:50px;">
					<p>TOPO PORTAL</p>
				</div>
	    	</div>
            -->
            <iframe id="barracmais" src="http://www.tvcultura.com.br/cmais/barra-topo/topo.php" width="100%" height="1" style="display:none">
              <p>Sim, acredite! Seu browser não suporta iFrames.</p>
            </iframe>
            
			<div class="conteudoWrapper" align="center">
				<div class="conteudo">
					<div class="cabecalho">
						<h1 class="bg3d">Cocoric&oacute; 3D</h1>
						<div class="menu">
							<ul>
								<li><a class="turma" href="http://www.tvcultura.com.br/cocorico/turma/">Turma</a></li>
								<li><a class="jogos" href="http://www.tvcultura.com.br/cocorico/jogos/">Jogos</a></li>
								<li><a class="videos" href="http://www.tvcultura.com.br/cocorico/videos/">V&iacute;deos</a></li>
								<li><a class="imagens" href="http://www.tvcultura.com.br/cocorico/imagens/">Imagens</a></li>
								<li><a class="radio" href="http://www.tvcultura.com.br/cocorico/radio/">R&aacute;dio</a></li>
								<li><a class="extras" href="http://www.tvcultura.com.br/cocorico/extras/">Extras</a></li>
								<li><a class="especias" href="http://www.tvcultura.com.br/cocorico/especiais/">Especias</a></li>
							</ul>
						</div>
						<div class="btn">
							<a class="glasses" href="http://cmais.com.br/quintaldacultura/oculos-3d" target="_blank">Aprenda a fazer seus oculos 3D!</a>
							<!--<input type="button" id="normal" title="bgnormal" value="Normal" />-->
							<input type="button" id="3d" class="btnDesligar" title="bg3d" />
						</div>
					</div>
					<hr />
					<div class="box-video">
						<hr />
						<div class="video">
							<object width="964" height="582" type="application/x-shockwave-flash" id="video-0001" data="http://www.youtube.com/v/Vig05K8Ta3s?version=3&amp;enablejsapi=1&amp;playerapiid=video-0001"><param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque"></object>
						</div>
					</div>
				</div>
			</div>	
			<hr />
			
            <!-- RODAPE -->
            <div id="rodape-portal">
                <div class="capa-voltar-topo">
    
                    <a class="voltar-topo" href="#"><span></span>voltar ao topo</a>
                </div>
                <div class="capa-rodape">
                    <div class="box-rodape">
                        <div class="col-esq">
                            <ul>
                                <li class="tit">Portal</li>
                                <li><a href="http://www.cmais.com.br" title="Home">Home</a></li>
    
                                <li><a href="http://www.cmais.com.br/videos" title="V&iacute;deos">V&iacute;deos</a></li>
                                <li><a href="http://www.cmais.com.br/aovivo" title="Home">Ao Vivo</a></li>
                                <li><a href="http://www2.tvcultura.com.br/faleconosco/" title="Fale Conosco">Fale Conosco</a></li>
                                <!--li><a href="http://www.cmais.com.br/expediente" title="Expediente">Expediente</a></li-->
                            </ul>
                            <ul>
                                <li class="tit">Editorias</li>
    
                                <li><a href="http://www.cmais.com.br/arte-e-cultura" title="Arte &amp; Cultura">Arte &amp; Cultura</a></li>
                                <li><a href="http://www.cmais.com.br/educacao" title="Educa&ccedil;&atilde;o">Educa&ccedil;&atilde;o</a></li>
                                <li><a href="http://www.cmais.com.br/infantil" title="+ Crian&ccedil;a">+ Crian&ccedil;a</a></li>
                                <li><a href="http://www.cmais.com.br/jornalismo" title="Jornalismo">Jornalismo</a></li>
                                <li><a href="http://www.cmais.com.br/juvenil" title="Juvenil">Juvenil</a></li>
    
                                <li><a href="http://www.cmais.com.br/musica" title="M&uacute;sica">M&uacute;sica</a></li>
                            </ul>
                        </div>
                        <div class="col-central">
                            <div class="posicao">
                                <p class="tit">+Populares</p>
                                <ul>
    
                                    <li><a href="http://tvcultura.cmais.com.br" class="tit">TV Cultura</a></li>
                                    <li><a href="http://tvcultura.cmais.com.br/jornaldacultura" title="Jornal da Cultura">Jornal da Cultura</a></li>
                                    <li><a href="http://tvcultura.cmais.com.br/metropolis" title="Metropolis">Metropolis</a></li>
                                    <li><a href="http://tvcultura.cmais.com.br/provocacoes" title="Provoca&ccedil;&otilde;es">Provoca&ccedil;&otilde;es</a></li>
                    <li><a href="http://tvcultura.cmais.com.br/quintaldacultura" title="Quintal da Cultura">Quintal da Cultura</a></li>
                                    <li><a href="http://tvcultura.cmais.com.br/rodaviva" title="Roda Viva">Roda Viva</a></li>
    
                                    <li><a href="http://tvcultura.cmais.com.br/vitrine" title="Vitrine">Vitrine</a></li>
                                </ul>
                                <ul>
                                    <li><a href="http://www.culturabrasil.com.br/" class="tit" title="R&aacute;dio Cultura Brasil">R&aacute;dio Cultura Brasil</a></li>
                                    <li><a href="http://www.culturabrasil.com.br/especiais" title="Especiais">Especiais</a></li>
                                    <li><a href="http://www.culturabrasil.com.br/entrevistas" title="Entrevistas">Entrevistas</a></li>
    
                                    <li><a href="http://www.culturabrasil.com.br/radarcultura" title="RadarCultura">RadarCultura</a></li>
                                    <li><a href="http://www.culturabrasil.com.br/playlist" title="Playlists">Playlists</a></li>
                                    <li><a href="http://www.culturabrasil.com.br/podcasts" title="Podcasts">Podcasts</a></li>
                                </ul>
                                <ul>
                                    <li><a href="http://www2.tvcultura.com.br/radiofm" class="tit" title="R&aacute;dio Cultura FM">R&aacute;dio Cultura FM</a></li>
    
                                    <li><a href="http://www2.tvcultura.com.br/radiofm/selecaodoouvinte.htm" title="Sele&ccedil;&atilde;o do Ouvinte">Sele&ccedil;&atilde;o do Ouvinte</a></li>
                                    <li><a href="http://www2.tvcultura.com.br/radiofm/grade/grade.htm" title="Grade de Programa&ccedil;&atilde;o">Grade de Programa&ccedil;&atilde;o</a></li>
                                    <li><a href="http://www.tvcultura.com.br/radiofm/podcasts" title="Podcasts">Podcasts</a></li>
                                </ul>
                            </div>
                            <div class="posicao">
    
                                <ul>
                                    <li><a href="http://univesp.tv.br/" class="tit">Univesp TV</a></li>
                                    <li><a href="http://www.univesp.tv.br/programas/ingles-com-musica" title="Ingl&ecirc;s Com M&Uacute;sica">Ingl&ecirc;s Com M&Uacute;sica</a></li>
                                    <li><a href="http://univesp.tv.br/programas/pedagogia-unesp" title="Pedagogia Unesp">Pedagogia Unesp</a></li>
    
                                    <li><a href="http://univesp.tv.br/programas/noticias-univesp" title="Not&iacute;cias Univesp">Not&iacute;cias Univesp</a></li>
    
                                    <li><a href="http://univesp.tv.br/programas/nascimento-das-universidades" title="Nascimento das Universidades">Nascimento das Universidades</a></li>
                                    <li><a href="http://univesp.tv.br/programas/em-busca-da-arte" title="Em Busca da Arte">Em Busca da Arte</a></li>
                                </ul>
                                <ul>
                                    <li><a href="http://www.multicultura.com.br/" class="tit">multiCULTURA</a></li>
                                    <li><a href="http://www.multicultura.com.br/o-que-e" title="O que &eacute;">O que &eacute;</a></li>
                                    <li><a href="http://www.multicultura.com.br/como-assistir" title="Como Assistir">Como Assistir</a></li>
    
                                    <li><a href="http://www.multicultura.com.br/programacao" title="Programa&ccedil;&atilde;o">Programa&ccedil;&atilde;o</a></li>
                                </ul>
                                <ul>
                                    <li><a href="http://www.tvratimbum.com.br/" class="tit">TV R&aacute; Tim Bum</a></li>
                    <li><a href="http://www.tvcultura.com.br/x-tudo/index.htm" title="X-Tudo ">X-Tudo </a></li>
                                    <li><a href="http://www.tvcultura.com.br/cocorico" title="Cocoric&oacute;">Cocoric&oacute;</a></li>
    
                                    <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=20" title="Ba&uacute; de Hist&oacute;rias">Ba&uacute; de Hist&oacute;rias</a></li>
                                    <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=9" title="Mundo da Lua">Mundo da Lua</a></li>
                                    <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=25" title="Ilha R&aacute; Tim Bum">Ilha R&aacute; Tim Bum</a></li>
                                </ul>
                            </div>
    
                            <div class="posicao">
                                <ul>
                                    <li class="tit">Pela Web</li>
                                    <li><a href="http://www.facebook.com/tvcultura" title="Facebook">Facebook</a></li>
                                    <li><a href="http://www.flickr.com/photos/televisaocultura" title="Flickr">Flickr</a></li>
                                    <li><a href="http://twitter.com/#!/tvcultura" title="Twitter">Twitter</a></li>
                                    <li><a href="http://www.youtube.com/radarcultura" title="Youtube">Youtube</a></li>
    
                                </ul>
                                <ul>
                                    <li><a href="http://www2.tvcultura.com.br/fpa/" class="tit">FPA</a></li>
                                    <li><a href="http://www2.tvcultura.com.br/captacao/" title="Captacao">Capta&ccedil;&atilde;o</a></li>
                                    <li><a href="http://culturamarcas.submarino.com.br/culturamarcas/" title="Cultura Marcas">Cultura Marcas</a></li>
                                    <li><a href="http://www2.tvcultura.com.br/imprensa/" title="Imprensa">Imprensa</a></li>
    
                                    <li><a href="http://www2.tvcultura.com.br/selecao/" title="Trabalhe Conosco">Trabalhe Conosco</a></li>
                                </ul>
                                
                                <!--a href="#" class="tit todos">Pol&iacute;tica de Privacidade</a-->
                               
                  <a href="http://cmais.com.br/programas-de-a-z" class="tit todos">Todos os sites</a>
                            </div>
                        </div>
                        <div class="col-dir">
                            <a class="fpa" href="http://www2.tvcultura.com.br/fpa/" title="Funda&ccedil;&atilde;o Padre Anchieta">Funda&ccedil;&atilde;o Padre Anchieta</a>
    
                            <a class="cultura" href="http://tvcultura.cmais.com.br/" title="TV Cultura">TV Cultura</a>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>Copyright &copy; 1996-2011 Funda&ccedil;&atilde;o Padre Anchieta</p>
                    </div>
    
                </div>
            </div>
            <!-- /RODAPE -->
		</div>
		<script src="http://www.tvcultura.com.br/cocorico/3d/js/google-analytics.js" type="text/javascript"></script>        
    </body>
</html>