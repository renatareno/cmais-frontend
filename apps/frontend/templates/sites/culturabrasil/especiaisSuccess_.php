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

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'site'=>$site)) ?>

<!-- section miolo -->
<section class="miolo<?php if($section->Site->Program->Channel->getSlug() == "culturabrasil"): ?> programa<?php endif; ?>">
  
  <!--container-->
  <div class="container">
  
    <?php // include_partial_from_folder('sites/culturabrasil', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
    
    <!--breadcrumb-->
    <div class="row-fluid pontilhada">
      <ul class="breadcrumb">
        <li><a href="/">Cultura Brasil</a> <span class="divider">»</span></li>
      <?php if($section->getSlug() != "home"): ?>
        <li>Especiais <span class="divider">»</span></li>
        <li><?php echo $section->getTitle() ?> </li>
      <?php else: ?>
        <li>Especiais </li>
      <?php endif; ?>
      </ul>
    </div>
    <!--/breadcrumb-->

    <div class="row-fluid subSection">
      
      <div class="destaque-cultura subsection">
        <div class="programa subsection">
          <span class="interna">
            Especiais
          </span>
          <i class="borda-titulo subsection"></i>
        </div>
      </div>
      
      <!--clounaprincipal-->
      <div class="row-fluid">
        
        <!--lista assets-->
        <div class="lista-assets span8">
         
          <?php if(isset($pager) > 0): ?>
            <?php foreach($pager->getResults() as $d): ?>
              <?php if( ($section->Site->Program->Channel->getSlug() == "culturabrasil") && ($section->getSlug() == "arquivo") ): ?>
              <a href="<?php echo $uri . '/arquivo/' . $d->getSlug(); ?>" title=" <?php echo $d->getTitle(); ?>">
              <?php elseif($section->getSlug() == "entrevistas"): ?>
              <a href="<?php echo $d->retriveUrl(); ?>" title=" <?php echo $d->getTitle(); ?>">
              <?php else: ?>
              <a href="<?php echo $uri . '/' . $d->getSlug(); ?>" title=" <?php echo $d->getTitle(); ?>">
              <?php endif; ?>
                  <?php $related = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
                  <?php if ($related[0]->retriveImageUrlByImageUsage("culturabrasil-thumb1")): ?>
                  <div class="row-fluid titulo">
                    
                  </div>
                  <?php endif;?>
              <div class="row-fluid" style="margin-left:10px">
                <div class="span3" style="margin-left:0px">
                  <h6><?php if ($d->AssetContent->getHeadlineShort()): ?><?php echo $d->AssetContent->getHeadlineShort(); ?><?php endif; ?>&nbsp;</h6>
                  <?php $related = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
                  <?php if ($related[0]->retriveImageUrlByImageUsage("culturabrasil-thumb1")): ?>
                  <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("culturabrasil-thumb1") ?>" alt=" <?php echo $d->getTitle(); ?>" class="thumb">
                  <?php else: ?>
                  <img src="/portal/images/capaPrograma/culturabrasil/defaultThumbnail<?php echo rand(1,8) ?>.jpg" alt="<?php echo $d->getTitle(); ?>" class="thumb">
                  <?php endif; ?>
                </div>
                <div class="span9">
                  <h2><?php echo $d->getTitle(); ?></h2>
                  <p>
                    <?php echo $d->getDescription(); ?>
                  </p>  
                </div>
              </div>    
             </a>
              
            <?php endforeach; ?>
          <?php endif; ?>
          <!--paginador-->
          <?php include_partial_from_folder('sites/culturabrasil', 'global/paginator', array('page' => $page, 'pager' => $pager)) ?>
          <!--paginador-->
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
    
    </div>
  </div>
  <!--/container--> 
</section>
<!-- /section miolo --> 