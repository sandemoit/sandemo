<main>
    <!--slider-area start-->
    <section class="page-title-area">
        <img class="right-shape" src="<?= base_url('assets/frontend/') ?>img/cta/dot-shape-1.png" alt="Dot Pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-wrapper pt-lg-100 pt-md-90 pt-xs-80" style="text-align: center;">
                        <h2 class="page-title"><?= $title; ?></h2>
                        <ul class="breadcrumb">
                            <li><a href="<?= site_url('/') ?>">Home </a></li> <i class="breadpanah fas fa-chevron-right"></i>
                            <li class="active" aria-current="page"> <?= $title ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider-area end-->

    <!--team-masonry-area start-->
    <section class="team-masonry-area pt-95 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 text-center">
                    <div class="portfolio-menu mb-40">
                        <button class="gf_btn active" data-filter="*">All Team</button>
                        <?php foreach ($tim as $key) : ?>
                            <button class="gf_btn" data-filter=".<?= $key['role_id'] ?>"><?= $key['role'] ?></button>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="grid row align-items-center">
                <?php foreach ($tim as $key) : ?>
                    <div class="col-lg-4 col-md-6 grid-item <?= $key['role_id'] ?>">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <a href="team-details.html"><img class="img-fluid teamimage" src="<?= site_url('assets/img/profile/') . $key['image'] ?>" alt="Team Img"></a>
                            </div>
                            <div class="team-content">
                                <h6><?= $key['role'] ?></h6>
                                <h3><a><?= $key['name'] ?></a></h3>
                                <div class="footer__social mt-30">
                                    <a href="https://www.facebook.com/<?= $key['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.facebook.com/<?= $key['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.facebook.com/<?= $key['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!--team-masonry-area end-->

    <!--portfolio-area start-->
    <section class="grey-bg3 portfolio-area portfoilo-section pf-sec-3 pos-rel pt-120 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title text-md-start">
                        <h6 class="semi-title mb-10">Portfolio</h6>
                        <h2 class="sect-title">Company Case Study</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-container portfolio-nav">
            <div class="portfolio-slide2 owl-carousel">
                <?php foreach ($portfolio as $key) : ?>
                    <div class="item">
                        <div class="portfolio-wrapper2 mb-30">
                            <img class="img-fluid" src="<?= base_url('assets/frontend/img/portfolio/') . $key['image'] ?>" alt="Portfolio Img">
                            <div class="single-portfolio">
                                <p><?= $key['client'] ?></p>
                                <h4 class="portfolio-title text-white"><?= $key['title'] ?></h4>
                            </div>
                            <a class="pf-btn img-popup" href="<?= base_url('assets/frontend/img/portfolio/') . $key['image'] ?>"><i class="far fa-eye"></i></i></a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!--portfolio-area end-->
</main>