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

    <!--portfolio-area start-->
    <section class="portfolio-area pt-95 pb-70 pt-md-40 pb-md-30 pt-xs-40 pb-xs-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 text-center">
                    <div class="portfolio-menu mb-40">
                        <button class="gf_btn active" data-filter="*">All Works</button>
                        <?php foreach ($kportfolio as $key) : ?>
                            <button class="gf_btn" data-filter=".<?= $key['kategori'] ?>"><?= $key['kategori'] ?></button>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="grid row align-items-center">
                <?php foreach ($portfolio as $key) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item <?= $key['kategori'] ?>">
                        <div class="portfolio-wrapper2 pf-mason mb-30">
                            <img class="img-fluid" src="<?= base_url('assets/frontend/img/portfolio/') . $key['image'] ?>" alt="Portfolio Img">
                            <div class="single-portfolio">
                                <p><?= $key['client'] ?></p>
                                <h4 class="portfolio-title text-white"><?= $key['title'] ?></h4>
                            </div>
                            <a class="pf-btn img-popup" href="<?= base_url('assets/frontend/img/portfolio/') . $key['image'] ?>"><i class="far fa-eye"></i></i></a>
                        </div>
                    </div>
                <?php endforeach ?>
                <div class="col-lg-4 mb-10 col-md-6 col-sm-6 grid-item">
                    <div class="iklan pf-mason mb-30">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794" crossorigin="anonymous"></script>
                        <!-- service -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3971040661867794" data-ad-slot="6388160121" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--portfolio-area end-->

    <!--brand-area start-->
    <section class="brand-area pb-60 pb-md-10 pb-xs-10">
        <div class="container border-line pb-60">
            <div class="row">
                <div class="col-12 brand-title mb-60">
                    <h5 class="border-bg">Our Client</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-active owl-carousel">
                        <div class="brand-item">
                            <a class="brand-image" href="#"><img src="<?= base_url('assets/frontend/img/brand/') ?>" alt="Brand Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>