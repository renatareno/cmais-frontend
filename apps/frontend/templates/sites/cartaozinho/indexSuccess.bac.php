<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
  ?>
</div>
<div class="bg-site home">
  <!-- CAPA SITE -->
  <div id="capa-site" >
    <!-- BARRA SITE -->
    <div id="barra-site">
      <div class="topo-programa">
        <?php if(isset($program) && $program->id > 0):?>
        <h2><a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;"> <?php if($program->getImageThumb() != ""):?><img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" /> <?php else:?>
        <h3 class="tit-pagina grid1"><?php echo $program->getTitle() ?></h3> <?php endif;?></a>
        </h2>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0): ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0): ?>
        <!-- horario -->
        <div id="horario">
          <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
        </div>
        <!-- /horario -->
        <?php endif;?>
      </div>
      <!-- box-topo -->
      <div class="box-topo grid3">
        <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
      </div>
      <!-- /box-topo -->
    </div>
    <!-- /BARRA SITE -->
    <!-- MIOLO -->
    <div id="miolo">
      <?php include_partial_from_folder('blocks','global/shortcuts') ?>

      <!-- CONTEUDO PAGINA -->
      <div id="conteudo-pagina">
        <!-- CAPA -->
        <div class="capa grid3">
          <div class="destaque-video">
            <!--a href="/cartaozinho/bola-do-paulistao" style="margin:0 140px 100px 0; display: block; float:right;" ><img class="acompanhe" src="/portal/images/capaPrograma/cartaozinho/banner.png" alt="POR QUE EU MEREÇO GANHAR A BOLA DA FINAL DO PAULISTÃO?" /></a-->
            <!-- DESTAQUE 2 COLUNAS -->
      
            <?php $displays = $displays["destaque-principal"]; if(isset($displays)): ?>
            <div class="duas-colunas destaque grid2">
              <img class="acompanhe" src="/portal/images/capaPrograma/cartaozinho/acompanhe.png" alt="Acompanhe o Cartãozinho" />
              <?php if($displays[0]->Asset->AssetType->getSlug() == "video"): ?>
              <iframe title="<?php echo $displays[0]->getTitle() ?>" width="450" height="259" src="http://www.youtube.com/embed/<?php echo $displays[0] -> Asset -> AssetVideo -> getYoutubeId();?>?rel=0&wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
              <?php endif;?>
              <a  id="ancora" href="/cartaozinho/videos" class="mais-videos" title="Mais Vídeos" name="Mais Vídeos"><img src="/portal/images/capaPrograma/cartaozinho/mais-videos.png" alt="Mais Vídeos"/></a>
            </div>
            <?php endif;?>
           
            <!-- /DESTAQUE 2 COLUNAS -->
          </div>
      
          <a href="/cartaozinho/mande-seu-video" title="Mande seu vídeo" class="mande-seu-video">
          <p>entre em campo no cartãozinho:</p>
        
          </a>
          <a class="envie-sua-sugestao" href="http://tvcultura.cmais.com.br/cartaozinho/fale-conosco" title="Participe! Envie sua sugestão pra gente!"></a>
          <div class="juiza"></div>
          <div class="redes-sociais">
            <a href="https://www.facebook.com/Cartaozinho" class="face" name"Facebook" title="Facebook">Facebook</a>
            <a href="https://twitter.com/cartaozinho" class="twt" name"Twitter" title="Twitter">Twitter</a>
            <a href="http://www.youtube.com/cultura" class="ytb" name"Youtube" title="Youtube">Youtube</a>
          </div>
          <script>
            $(document).ready(function() {
              $('.fechar').click(function() {
                $(this).parent().parent().fadeOut('fast');
              })
              $(".personagens li").click(function() {
                $('.box').not('.bio-' + $(this).attr('name')).hide();
                $('.bio-' + $(this).attr('name')).fadeIn('fast');

              });
            });

          </script>
          <div class="personagens">
            <ul>
              <li class="b-joao" name="joao"><a href="#ancora"></a></li>
              <li class="b-eric" name="eric"><a href="#ancora"></a></li>
              <li class="b-pedro" name="pedro"><a href="#ancora"></a></li>
              <li class="b-matheus" name="matheus"><a href="#ancora"></a></li>
            </ul>
            <div class="bio">
              <div class="box bio-joao" style="display: none;" >
                <div class="seta"></div>
                <div class="texto">
                  <div class="fechar" name="Fechar" title="Fechar">
                    Fechar
                  </div>
                  <p class="titulo"><img src="/portal/images/capaPrograma/cartaozinho/tit-joao.png" /></p>
                  <p>Nome: <span>João Braga</span></p>
                  <p>Idade: <span>9 anos</span></p>
                  <p>Que time torce: <span>Corinthians</span></p>
                  <p>Time estrangeiro preferido? <span>Barcelona</span></p>
                  <p>Quem é seu ídolo no futebol: <span>Messi</span></p>
                  <p>Se fosse um jogador, que número seria: <span>4</span></p>
                  <p>Autógrafo preferido: <span>Ronaldo Fenômeno</span></p>
                  <p>Tem coleção: <span>Figurinhas da Copa e do Brasileiro</span></p>
                  <p>Lance inesquecível: <span><a href="http://www.youtube.com/watch?v=anXs9Hk4Wgk" target="_blank" title="Ronaldo X Fabio Costa na Vila">Ronaldo X Fabio Costa na Vila</a></span></p>
                  <p>Comida preferida: <span>Sushi</span></p>
                  <p>Pra quem você daria cartão vermelho: <span>Fabio Cannavaro</span></p>
                  <p>Matéria preferida na escola: <span>Matemática</span></p>
                  <p>O que mais gosta de fazer nas horas livres: <span>Jogar futebol</span></p>
                  <p>O que quer ser quando crescer: <span>Jogador de Futebol</span></p>
                  <p>Game preferido: <span>Pró Evolution Soccer</span></p>
                  <p>Programa / Desenho preferido: <span>Cocoricó</span></p>
                  <p>Banda preferida: <span>AC/DC</span></p>
                </div>
              </div>
              <div class="box bio-eric">
                <div class="seta"></div>
                <div class="texto">
                  <div class="fechar" name="Fechar" title="Fechar">
                    Fechar
                  </div>
                  <p class="titulo"><img src="/portal/images/capaPrograma/cartaozinho/tit-eric.png" /></p>
                  <p>Nome: <span>Eric Lanfredi</span></p>
                  <p>Idade: <span>13 anos</span></p>
                  <p>Que time torce: <span>Palmeiras</span></p>
                  <p>Time estrangeiro preferido? <span>Barcelona</span></p>
                  <p>Quem é seu ídolo no futebol: <span>Marcos</span></p>
                  <p>Se fosse um jogador, que número seria: <span>7</span></p>
                  <p>Autógrafo preferido: <span>Marcos</span></p>
                  <p>Tem coleção: <span>Figurinhas</span></p>
                  <p>Lance inesquecível: <span><a href="http://www.youtube.com/watch?v=wroctLxuNPo" target="_blank" title="Gol Valdivia 2008 Campeão Paulista">Gol Valdivia 2008 Campeão Paulista</a></span></p>
                  <p>Comida preferida: <span>Feijoada</span></p>
                  <p>Pra quem você daria cartão vermelho: <span>Jorge Henrique/Corinthians</span></p>
                  <p>Matéria preferida na escola: <span>Gramática</span></p>
                  <p>O que mais gosta de fazer nas horas livres: <span>Jogar futebol</span></p>
                  <p>O que quer ser quando crescer: <span>Jogador de Futebol</span></p>
                  <p>Game preferido: <span>Call of Duty MW3</span></p>
                  <p>Programa / Desenho preferido: <span>Cocoricó / Cartão Verde</span></p>
                  <p>Banda preferida: <span>Nx Zero</span></p>
                </div>
              </div>
              <div class="box bio-pedro" >
                <div class="seta"></div>
                <div class="texto">
                  <div class="fechar" name="Fechar" title="Fechar">
                    Fechar
                  </div>
                  <p class="titulo"><img src="/portal/images/capaPrograma/cartaozinho/tit-pedro.png" /></p>
                  <p>Nome: <span>Pedro Crema</span></p>
                  <p>Idade: <span>9 anos</span></p>
                  <p>Que time torce: <span>São Paulo</span></p>
                  <p>Time estrangeiro preferido? <span>Barcelona</span></p>
                  <p>Quem é seu ídolo no futebol: <span>Messi</span></p>
                  <p>Se fosse um jogador, que número seria: <span>10</span></p>
                  <p>Autógrafo preferido: <span>Neymar e Messi</span></p>
                  <p>Tem coleção: <span>Álbum de figurinhas dos campeonatos</span></p>
                  <p>Lance inesquecível: <span><a href="http://www.youtube.com/watch?v=Q5r3q2RxpeE" target="_blank" title="Santos x Flamengo 2011 Lance de Neymar ½ lua no jogador Ronaldo Angelim">Santos x Flamengo 2011 Lance de Neymar ½ lua no jogador Ronaldo Angelim</a></span></p>
                  <p>Comida preferida: <span>Churrasco</span></p>
                  <p>Pra quem você daria cartão vermelho: <span>Jorge Henrique/Corinthians</span></p>
                  <p style="margin-top: -20px">Matéria preferida na escola: <span>Matemática</span></p>
                  <p>O que mais gosta de fazer nas horas livres: <span>Jogar futebol</span></p>
                  <p style="margin-top: -20px">O que quer ser quando crescer: <span>Jogador de Futebol</span></p>
                  <p>Game preferido: <span>X-box</span></p>
                  <p style="margin-top: -20px">Programa / Desenho preferido: <span>Cocoricó / Nick I Carly</span></p>
                  <p>Banda preferida: <span>AC/DC – Black in Black</span></p>
                </div>
              </div>
              <div class="box bio-matheus" >
                <div class="seta"></div>
                <div class="texto">
                  <div class="fechar" name="Fechar" title="Fechar">
                    Fechar
                  </div>
                  <p class="titulo"><img src="/portal/images/capaPrograma/cartaozinho/tit-matheus.png" /></p>
                  <p>Nome: <span>Matheus Ribeiro </span></p>
                  <p>Idade: <span>10 anos</span></p>
                  <p>Que time torce: <span>Santos</span></p>
                  <p>Time estrangeiro preferido? <span>Manchester United</span></p>
                  <p>Quem é seu ídolo no futebol: <span>Neymar</span></p>
                  <p>Se fosse um jogador, que número seria: <span>11</span></p>
                  <p>Autógrafo preferido: <span>Neymar</span></p>
                  <p>Tem coleção: <span>Bola de Futebol</span></p>
                  <p>Lance inesquecível: <span><a href="http://www.youtube.com/watch?v=Q5r3q2RxpeE" target="_blank" title="Gol Neymar sobre o Flamengo">Gol Neymar sobre o Flamengo</a></span></p>
                  <p>Comida preferida: <span>Batata-frita</span></p>
                  <p>Pra quem você daria cartão vermelho: <span>Jorge Henrique (Corinthians)</span></p>
                  <p>Matéria preferida na escola: <span>História</span></p>
                  <p>O que mais gosta de fazer nas horas livres: <span>Vídeo Game</span></p>
                  <p>O que quer ser quando crescer: <span>Jogador de Futebol</span></p>
                  <p>Game preferido: <span>Futebol ( Pró Evolution)</span></p>
                  <p>Programa / Desenho preferido: <span>Cartão Verde</span></p>
                  <p>Banda preferida: <span>Deep Purple</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /CAPA -->
      </div>
      <!-- /CONTEUDO PAGINA -->
    </div>
    <!-- /MIOLO -->
  </div>
  <!-- /CAPA SITE -->
</div>