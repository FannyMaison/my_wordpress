  <header class="header_realisation">
    <h1 class="entry-title"><?php echo e($realisation->name); ?></h1>
    <p><?php echo e($realisation->subtitle); ?></p>
  </header>
  <div class="entry-content leading-normal">
    <section>
      <div class="realisation_content">
        <div>
          <h5>Présentation du projet</h5>
          <p><?php echo e($realisation->description); ?></p>
          <a href="<?php echo e($realisation->link); ?>">Voir le Git</a>
          <div class="technologies">
            <h5>Technologies utilisées</h5>
            <p><?php echo e($realisation->technologies); ?></p>
          </div>
        </div>
        <img src="<?php echo e($realisation->img->url); ?>" alt="<?php echo e($realisation->alt); ?>">
      </div>
        <div class="link">
          <?php if(isset(Single::previousLink()->ID)): ?>
          <a data-anim-cursor="click" data-swup-transition="realisation" href="<?php echo e(get_permalink(Single::previousLink()->ID)); ?>">
          <div class="link-realisation-overlay"></div>
            <span>Projet précédent</span>
            <span><?php echo e(Single::previousLink()->name); ?></span>
          </a>
          <?php endif; ?>
          <?php if(isset(Single::nextLink()->ID)): ?>
          <a data-anim-cursor="click" data-swup-transition="realisation" href="<?php echo e(get_permalink(Single::nextLink()->ID)); ?>">
          <div class="link-realisation-overlay"></div>
            <span>Projet suivant</span>
            <span><?php echo e(Single::nextLink()->name); ?></span>
          </a>
          <?php endif; ?>
        </div>      
    </section>
  </div>
