<section class="service-two-about">

    <div class="error-404__bubble-1"></div><!-- /.error-404__bubble-1 -->
    <div class="error-404__bubble-2"></div><!-- /.error-404__bubble-2 -->
    <div class="error-404__bubble-3"></div><!-- /.error-404__bubble-3 -->
    <div class="error-404__bubble-4"></div><!-- /.error-404__bubble-4 -->
    <div class="error-404__bubble-5"></div><!-- /.error-404__bubble-5 -->
    <div class="error-404__bubble-6"></div><!-- /.error-404__bubble-6 -->
    <div class="error-404__bubble-7"></div><!-- /.error-404__bubble-7 -->
    <div class="error-404__bubble-8"></div><!-- /.error-404__bubble-8 -->

    <div class="container">
        <div class="row no-gutters">
            <div class="col-xl-6 d-flex">
                <div class="my-auto">
                    <div class="service-two__main ">
                        <div class="block-title text-left">
                            <p><span>About Company</span></p>
                            <h3>We develop digital strategies products and services.</span></h3>
                        </div><!-- /.block-title text-center -->
                        <p><?= $home['about_website'] ?></p>
                    </div><!-- /.service-two__main -->
                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-6 -->
            <div class="col-xl-6">
                <div class="service-two__box-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-two__box  wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="service-two__box-icon">
                                    <div class="service-two__box-circle"></div>
                                    <!-- /.service-two__box-circle -->
                                    <img src="<?= base_url('assets/frontend') ?>/images/shapes/service-2-i-1.png" alt="">
                                </div><!-- /.service-two__box-icon -->
                                <h3><a href="service-d-seo.html">App Development</a></h3>
                                <p>Responsible for the development and maintenance of websites and web applications that we offer to our clients and customers.</p>
                            </div><!-- /.service-two__box -->
                            <div class="service-two__box  wow flipInY" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="service-two__box-icon">
                                    <div class="service-two__box-circle"></div>
                                    <!-- /.service-two__box-circle -->
                                    <img src="<?= base_url('assets/frontend') ?>/images/shapes/service-2-i-2.png" alt="">
                                </div><!-- /.service-two__box-icon -->
                                <h3><a href="service-d-seo.html">IT Consultant</a></h3>
                                <p>Assist a company's planning in the development of Information Technology infrastructure.</p>
                            </div><!-- /.service-two__box -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 d-flex">
                            <div class="my-auto">
                                <div class="service-two__box  wow flipInY" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="service-two__box-icon">
                                        <div class="service-two__box-circle"></div>
                                        <!-- /.service-two__box-circle -->
                                        <img src="<?= base_url('assets/frontend') ?>/images/shapes/service-2-i-3.png" alt="">
                                    </div><!-- /.service-two__box-icon -->
                                    <h3><a href="service-d-seo.html">Service</a></h3>
                                    <p>Responsible for providing quality after-sales service to our clients and customers.</p>
                                </div><!-- /.service-two__box -->
                            </div><!-- /.my-auto -->
                        </div><!-- /.col-md-6 d-flex -->
                    </div><!-- /.row -->
                </div><!-- /.service-two__box-wrap -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row no-gutters -->
    </div><!-- /.container -->
</section><!-- /.service-two -->

<section class="team-one team-one__about-1">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/team-bg-shape-1-1.png" alt="" class="team-one__bg-shape-1">
    <div class="container">
        <div class="block-title text-center">
            <p class="color-2"><span>Our Team</span></p>
            <h3>Work with The Awesome Team <br> <span>of Our Company</span></h3>
        </div><!-- /.block-title text-center -->
        <div class="row high-gutters">
            <?php foreach ($tim as $key) : ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img class="crop" src="<?= base_url('assets/img/profile/') . $key['image'] ?>" alt="<?= $key['name'] ?>">
                            <div class="team-one__social">
                                <div class="team-one__social-normal">
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div><!-- /.team-one__social-normal -->
                                <div class="team-one__social-hover">
                                    <a href="https://facebook.com/<?= $key['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://instagram.com/<?= $key['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="https://youtube.com/<?= $key['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                                </div><!-- /.team-one__social-hover -->
                            </div><!-- /.team-one__social -->
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h3><?= $key['name'] ?></h3>
                            <p><?= $key['role'] ?></p>
                        </div><!-- /.team-one__content -->
                    </div><!-- /.team-one__single -->
                </div><!-- /.col-lg-4 col-md-6 -->
            <?php endforeach; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team-one -->

<section class="brand-one">
    <div class="container">
        <?php $this->load->view('template/brand') ?>
    </div><!-- /.container -->
</section><!-- /.brand-one -->


<?php $this->load->view('template/kontak') ?>