          <?php if(count($siteSections) > 0): ?>
          <div class="menu-vitrine">
            <ul>
              <?php foreach($siteSections as $s): ?>
              <li><a href="<?php if($s->getSlug() == "home") echo $site->retriveUrl(); else echo $site->retriveUrl() . "/" . $s->getSlug() ?>" title="<?php echo $s->getTitle() ?>"<?php if($section->getSlug() == $s->getSlug()): ?> class="ativo"<?php endif; ?>><?php echo $s->getTitle() ?></a><span></span></li>
              <?php endforeach; ?>
              <li><a href="javascript:;" title="Sobre a Revista" class="btn-sobre">Sobre a Revista<i class="icon-chevron-down icon-white"></i></a>
                <p class="sobre" style="display:none"><?php echo $site->getDescription() ?></p>
              </li>
            </ul>
          </div>
          <?php endif; ?>