	<?php
	$a = Doctrine_Query::create()
  	->select('aa.*')
  	->from('AssetAnswer aa, RelatedAsset ra, Asset a')  
  	->where('aa.asset_id = a.id')
  	->andWhere('a.id = ra.asset_id')
  	->andWhere('ra.parent_asset_id = ?', 123494)
  	->orderBy('ra.display_order')
  	->execute();
	?>
	
    <link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

      <div class="topo-programa">
      
      <h2><a href="<?php echo $site->retriveUrl() ?>"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="/portal/multicultura/images/logo-multicultura.png" /></a></h2>
      
      <?php if(isset($program) && $program->id > 0): ?>
                <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
                <?php endif; ?>
                
                <?php if(isset($program) && $program->id > 0): ?>
                <!-- horario -->
                <div id="horario">
                  <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
                </div>
                <!-- /horario -->
                <?php endif; ?>
      
        </div>
            

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $asset->retriveUrl()?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>

      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
      
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">
                <h3><?php echo $asset->getTitle() ?></h3>
                <p><?php echo $asset->getDescription() ?></p>
                <div class="assinatura grid2">
                  <p class="sup"><?php echo $asset->AssetContent->getAuthor() ?> <span><?php echo $asset->retriveLabel() ?></span></p>
                  <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>
                  <!--
                  <div class="acessibilidade">
                    <a href="#" class="zoom">+A</a>
                    <a href="#" class="zoom">-A</a>
                  </div>
                  -->

                  <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>

                </div>
                
                <div class="texto">
		                <!--VOTACAO Video-->
		            <div id="votacao-video" class="enquete-mascote" >
		              
		               <!--LISTA-Videos-->
              <form method="post" id="e<?php echo $a[0]->Asset->getId()?>" class="form-votacao">

                <ul id="lista-videos">
                  <?php 
                  for($i=0; $i<count($a); $i++):
                    $v = $a[$i]->Asset->retriveRelatedAssetsByAssetTypeId(6);
                    $opcao = $a[$i]->Asset->AssetAnswer->getAnswer();
                  ?>
                  <li style="float:<?php if(($i%2 == 0) == 0): echo "right;"; else: echo "left;"; endif;?>">
                    <input type="radio" name="opcao" id="opcao-<?php echo $i; ?>" class="form-contato" value="<?php echo $a[$i]->Asset->AssetAnswer->id; ?>"  />
                    <label for="opcao-<?php echo $i; ?>">
                      <?php echo ($i+1)." - ". $opcao?>
                    </label>
                    <iframe title="<?php echo $opcao ?>" width="310" height="210" src="http://www.youtube.com/embed/<?php echo $v[0]->AssetVideo->getYoutubeId(); ?>?wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>                    
                  </li>
                  <?php endfor;?>
                </ul>

                <div class="btn-barra votacao">
                  
                    <input id="votar" type="submit" value="votar" />
                   
                    <div id="enviando-voto" align="center"style="display:none">
                      <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none;" width="16px" height="16px" id="ajax-loader-b">
                      Registrando voto, aguarde um momentinho...
                    </div>
                </div>
                
              </form>
              <!--/LISTA-Videos-->
		                
		              <!--RESULTADO PARCIAL-->
		              <div id="resultado-video" style="display:none;">
		               
		                <h2>Resultado Parcial: </h2>
		                <div class="lista-resultado">
		                  <!--LISTA-RESULTADO--> 
		                  <?php
		                  for($i=0; $i<count($a); $i++):
		  					$v = $a[$i]->Asset->retriveRelatedAssetsByAssetTypeId(6);
		                  ?>
		                  
		                  <p><img src="http://i1.ytimg.com/vi/<?php echo $v[0]->AssetVideo->getYoutubeId(); ?>/mqdefault.jpg"></p> 
		                  <ul class="parcial-<?php echo $i?> classificacao <?php if($i%2==0):?> right <?php else:?> left<?php endif;?>">
		                    <li>
		                      <p><?php $a[$i]->Asset->AssetAnswer->getAnswer(); ?> <img src="http://i1.ytimg.com/vi/<?php echo $v[0]->AssetVideo->getYoutubeId(); ?>/mqdefault.jpg"></p> 
		                       
		                      <span>00%</span>
		                      <div class="progress progress-success">
		                         <div class="bar" style="width: 40%"></div>
		                      </div>
		                    </li> 
		                  </ul>
		                  <?php
		                  endfor;
		                  ?>
		                  <!--/LISTA-RESULTADO-->  
		                  
		                  <h2>Agradecemos seu voto! ;) </h2>
		                
		                </div>
		   
		              </div>  
		              <!--/RESULTADO PARCIAL-->
		  
		              <span class="picote"></span>
		            
		            </div>  
		            <!--/VOTACAO Video-->
	            
                </div>
                
                <?php $relacionados = $asset->retriveRelatedAssetsByRelationType('Asset Relacionado'); ?>
                <?php if(count($relacionados) > 0): ?>
                	
                	
                  <!-- SAIBA MAIS -->
                  <div class="box-padrao grid2" style="margin-bottom: 20px;">
                  	<div id="saibamais">                                                            
                  	<h4>saiba +</h4>                                                            
                    <ul class="conteudo">
                      <?php foreach($relacionados as $k=>$d): ?>
                        <li style="width: auto;">
                          <a class="titulos" href="<?php echo $d->retriveUrl()?>" style="width: auto;"><?php echo $d->getTitle()?></a>
                          <!--
                          <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
                            <a href="<?php echo $d->retriveUrl()?>" class="img-90x54" style="width: auto">
                              <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" style="width: auto" />
                            </a>
                          <?php endif; ?>
                          -->
                          <!--p><?php echo $d->getDescription()?></p-->
                        </li>
                      <?php endforeach; ?>
                    </ul>
                   </div>
                  </div>
                  <!-- SAIBA MAIS -->
                <?php endif; ?>
                
                <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>

              </div>
              <!-- /NOTICIA INTERNA -->
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <!-- BOX PADRAO -->
              <?php if(isset($displays["destaque-apresentadores"])) include_partial_from_folder('blocks','global/display-1c-hosts', array('displays' => $displays["destaque-apresentadores"])) ?>
              <!-- /BOX PADRAO -->
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- multicultura-300x250 -->
				<script type='text/javascript'>
				GA_googleFillSlot("multicultura-300x250");
				</script>
              </div>
              <!-- / BOX PUBLICIDADE -->

              <?php $relacionados = array(); if($asset) $relacionados = $asset->retriveRelatedAssets2(); ?>
              <?php if(count($relacionados) > 0): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>relacionadas</h4>
                    <a href="#" class="rss" title="rss"></a>
                  </div>
                </div>
                <?php if(count($relacionados) > 0) include_partial_from_folder('blocks','global/recent-news', array('displays' => $relacionados)) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              <?php endif; ?>

              <?php if(isset($displays["destaque-noticias-recentes"])): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>+ recentes</h4>
                    <a href="<?php echo $site->getSlug() ?>/feed" class="rss" title="rss" style="display: block"></a>
                  </div>
                </div>
                <?php if(isset($displays["destaque-noticias-recentes"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias-recentes"])) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              <?php endif; ?>

              <?php if(isset($displays["destaque-categorias"])): ?>
              <!-- BORDA 02 -->
              <div class="box-padrao box-borda grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4><?php if(isset($displays["destaque-categorias"])) echo $displays["destaque-categorias"][0]->Block->getTitle() ?></h4>
                  </div>
                </div>
                <div class="conteudo top tipo2">
                  <?php if(isset($displays["destaque-categorias"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-categorias"])) ?>
                </div>
                <div class="detalhe-borda grid1"></div>
              </div>
              <!-- /BORDA 02 -->
              <?php endif; ?>
              
              <?php if(isset($displays["destaque-links"])): ?>
              <!-- BOX PADRAO + Visitados -->
              <div class="box-padrao mais-visitados grid1">
                <div class="topo">
                  <span></span>
                  <div class="capa-titulo">
                    <h4><?php if(isset($displays["destaque-links"])) echo $displays["destaque-links"][0]->Block->getTitle() ?></h4>
                  </div>
                </div>
                <?php if(isset($displays["destaque-links"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-links"])) ?>
              </div>
              <!-- /BOX PADRAO + Visitados -->
              <?php endif; ?>

              <?php include_partial_from_folder('blocks','global/facebook-1c-2', array('site' => $site, 'url' => $url)) ?>

            </div>
            <!-- /DIREITA -->

            </div>
            <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->
<script>
//valida form votacao
$(document).ready(function(){
    var validator = $('.form-votacao').validate({
    submitHandler: function(form){
      sendAnswer()
    },
    rules:{
        opcao:{
          required: true
        }
      },
      messages:{
        opcao: "Escolha uma opção para votar."
      }
    });
});
<?php
              
echo "var nome = new Array();\n";
foreach($a as $key=>$value){
  $c = $value->Asset->AssetAnswer->getAnswer();
  echo "nome[".$key."]= '".$c."';\n";
}
 
?>
function sendAnswer(){
  $.ajax({
    type: "POST",
    dataType: "json",
    data: $('.form-votacao').serialize(),
    url: "<?php echo url_for('homepage')?>ajax/enquetes",
    beforeSend: function(){
      $('.btn-barra.votacao').hide();
      $('#ajax-loader-b').show();
    },
    
    success: function(data){
      $(".form-votacao, #ajax-loader-b").hide();
      $("#resultado-video").fadeIn("fast");
      var i=0;
      $.each(data, function(key, val) {
        $('.parcial-'+i).html("<li><p>"+(i+1)+" - "+nome[i]+"</p><span>"+val.votes+"</span><div class='progress progress-success'><div class='bar' style='width:"+val.votes+"'></div></div></li>")
        i++;
      });      
    }
  });
  
}
</script>