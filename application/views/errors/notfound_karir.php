<section class="error-404">
    <img src="<?= base_url('assets/frontend') ?>images/shapes/bg-shape-1-1.png" class="error-404__bg-shape-1" alt="">
    <img src="<?= base_url('assets/frontend') ?>images/shapes/bg-shape-1-2.png" class="error-404__bg-shape-2" alt="">
    <img src="<?= base_url('assets/frontend') ?>images/shapes/bg-shape-1-3.png" class="error-404__bg-shape-3" alt="">

    <div class="error-404__bubble-1"></div><!-- /.error-404__bubble-1 -->
    <div class="error-404__bubble-2"></div><!-- /.error-404__bubble-2 -->
    <div class="error-404__bubble-3"></div><!-- /.error-404__bubble-3 -->
    <div class="error-404__bubble-4"></div><!-- /.error-404__bubble-4 -->
    <div class="error-404__bubble-5"></div><!-- /.error-404__bubble-5 -->
    <div class="error-404__bubble-6"></div><!-- /.error-404__bubble-6 -->
    <div class="error-404__bubble-7"></div><!-- /.error-404__bubble-7 -->
    <div class="error-404__bubble-8"></div><!-- /.error-404__bubble-8 -->
    <div class="container text-center">
        <h3>405</h3>
        <h4>Oops, <?= $title; ?> !</h4>
        <a href="<?= site_url('karir') ?>" class="thm-btn error-404__btn">Take Me Karir</a><!-- /.thm-btn error-404__btn -->
</section><!-- /.error-404 -->

<?php $this->load->view('template/brand'); ?>
<?php $this->load->view('template/kontak'); ?>