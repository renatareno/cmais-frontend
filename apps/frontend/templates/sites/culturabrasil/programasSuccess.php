<?php
if(isset($pager)){
  if($pager->count() == 1){
    header("Location: ".$pager->getCurrent()->retriveUrl());
    die();
  }  
}  
?>

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

<!-- section miolo -->
<section class="miolo">
  
  <!--container-->
  <div class="container">
  
    <?php // include_partial_from_folder('sites/culturabrasil', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
    
    <!--breadcrumb-->
    <div class="row-fluid pontilhada">
      <div class="borda-pontilhada"></div> 
      <ul class="breadcrumb">
        <?php if($section->Site->getSlug() == "culturabrasil"): ?>
        <li><a href="<?php echo url_for('homepage')?>"><?php echo $site->getTitle() ?></a> <span class="divider">»</span></li>
        <li><?php echo $section->getTitle(); ?> </li>
        <?php else: ?>
        <li><a href="<?php echo url_for('homepage')?>programas">Programas</a> <span class="divider">»</span></li>
        <li><?php echo $site->getTitle(); ?> </li>
        <?php endif; ?>         
      </ul>
    </div>
    <!--/breadcrumb-->

    <div class="row-fluid subSection">
      <div class="destaque-cultura subsection">
        <div class="programa subsection">
          <span class="interna">
            <?php
              if($section->Site->getSlug() == "culturabrasil")
                echo $section->getTitle();
              else
                echo $site->getTitle();
            ?>
          </span>
          <i class="borda-titulo subsection"></i>
        </div>
      </div>

    
    <!--clounaprincipal-->
    <div class="row-fluid">
      
      <!--lista assets-->
      <div class="lista-programas span8">
        <a href="#" title="">
          <p>78RPM</p>
        </a>
        <a href="#" title="">
          <p>Bossamoderna</p>
        </a>
        <a href="#" title="">
          <p>Cultura Livre</p>
        </a>
        <a href="#" title="">
          <p>Estúdio Cultura</p>
        </a>
        <a href="#" title="">
          <p>Estúdio F</p>
        </a>
        <a href="#" title="">
          <p>Galeria</p>
        </a>
        <a href="#" title="">
          <p>Música Regional</p>
        </a>
        <a href="#" title="">
          <p>Programa do Estudante</p>
        </a>
        <a href="#" title="">
          <p>RadarCultura</p>
        </a>
        <a href="" title="">
          <p>Reggae de Bamba</p>
        </a>
        <a href="#" title="">
          <p>Seleção do Ouvinte</p>
        </a>
        <a href="#" title="">
          <p>Solano Ribeiro</p>
        </a>
        <a href="#" title="">
          <p>Supertônica</p>
        </a>
        <a href="#" title="">
          <p>Todos os Sons</p>
        </a>
        <a href="#" title="">
          <p>Veredas</p>
        </a>  
      </div>
      <!--listaAssets>
        
      <!--coluna direita-->
      <div class="lista-assets redes span4">
        <div class="row-fluid">      
          <div class="span12 direita">
            <div class="banner-radio">
              <script type='text/javascript'>
                GA_googleFillSlot("home-geral300x250");
              </script>
            </div>
          </div>
        </div>
      </div>
      <!--/coluna-direita-->
      
    </div>
    <!--/coluna principal-->
    
    <!--paginador-->
    <?php include_partial_from_folder('sites/culturabrasil', 'global/paginator', array('page' => $page, 'pager' => $pager)) ?>
    <!--paginador-->
    </div>
    
  </div>
  <!--/container--> 
</section>
<!-- /section miolo --> 