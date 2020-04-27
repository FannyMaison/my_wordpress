<?php $__env->startSection('content'); ?>
<section data-page="about" id="about" class="portfolio-content portfolio-wrapper">
    <div class="about">
    	<p>Je me nomme Fanny, j'ai 20 ans et je suis étudiante en DUT MMI, la fillière que j'ai pu y découvrir la programmation. <br>Pour moi, la programmation, c’est aussi de la création ! A côté de ça, j’aime beaucoup dessiner et coudre, mais ça ne fait pas de moi une graphiste doublée d’une couturière pour autant.</p>
    	<a class="cv_link" href="<?= App\asset_path('docs/cv_fanny_maison.pdf'); ?>">Mon CV</a>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>