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
    </section>
  </div>
