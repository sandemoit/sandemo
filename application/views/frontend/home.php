<main>
    <!--slider-area start-->
    <div id="slider-one" class="main-slider-area">
        <div class="slider-bg">
            <div class="sliders-active owl-carousel owl-theme">
                <div class="item">
                    <div class="container custom-container-slider">
                        <div class="dodlle-one"></div>
                        <div class="dodlle-one two"></div>
                        <div class="dodlle-one three"></div>
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="slider-right">
                                    <img class="img-fluid" src="<?= base_url('assets/frontend/') ?>img/slider/image-slide.webp" alt="Hero Img">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 order-last order-lg-first">
                                <div class="slider__content">
                                    <h1 class="main-title-one">
                                        #1 Layanan Website
                                        <span class="bottom-shape">Terbaik</span>
                                    </h1>
                                    <p><?= $setting['about_website'] ?></p>
                                    <ul class="btn-list d-md-flex align-items-center mt-25">
                                        <li><a class="theme_btn mr-30" href="tel:<?= $setting['nohp'] ?>"><i class="fas fa-phone-alt mr-10"></i> Hubungi Kami</a></li>
                                        <li><a target="_blank" class="theme_btn border_btn" href="https://wa.me/<?= $setting['nohp'] ?>?text=Halo%20admin,%20bisa%20bantu%20untuk%20menjelaskan%20terkait%20layanan."><i class="fab fa-whatsapp mr-10"></i> Chat WhatsApp</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- next slider -->
            </div>
        </div>
    </div>
    <!--slider-area end-->

    <!--feature-area start-->
    <section class="feature-area pb-30">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <img class="f-icon" src="<?= base_url('assets/frontend/') ?>img/feature/icon-1.png" alt="Feature Iocn">
                        <h2>Komunikasi Fast Respons</h2>
                        <h6><span>01.</span> Kami memiliki tim dukungan pelanggan yang siap memberikan respons cepat kepada Anda.</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature feat-2">
                        <img class="f-icon" src="<?= base_url('assets/frontend/') ?>img/feature/icon-2.png" alt="Feature Iocn">
                        <h2>Harga Terjangkau</h2>
                        <h6><span>02.</span> Harga kami relative lebih terjangkau dengan layanan dan kualitas yang kami berikan.</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature feat-3">
                        <img class="f-icon" src="<?= base_url('assets/frontend/') ?>img/feature/icon-3.png" alt="Feature Iocn">
                        <h2>Tim Expert Dibidangnya</h2>
                        <h6><span>03.</span> Anda tidak perlu khawatir akan hasil yang kami berikan, dengan tim expert kami, anda akan mendapatkan hasil terbaik.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature-area end-->
    <!--portfolio-area start-->
    <section class="portfolio-area pt-95 pb-90 pt-md-40 pb-md-30 pt-xs-40 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <h6 class="semi-title mb-10">Our Project</h6>
                        <h2 class="sect-title">Project Sandemo IT</h2>
                    </div>
                </div>
            </div>
            <div class="grid row align-items-center">
                <?php foreach ($portofolio as $key) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat4">
                        <div class="portfolio-wrapper2 pf-mason mb-30">
                            <img class="img-fluid" src="<?= base_url('assets/frontend/img/portfolio/') . $key['image'] ?>" alt="Portfolio Img">
                            <div class="single-portfolio">
                                <h4 class="portfolio-title text-white"><?= $key['title'] ?></h4>
                                <p><?= $key['client'] ?></p>
                            </div>
                            <a class="pf-btn img-popup" href="<?= base_url('assets/frontend/img/portfolio/') . $key['image'] ?>"><i class="far fa-eye"></i></i></a>
                        </div>
                    </div>
                <?php endforeach ?>
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
    <!--brand-area end-->
    <!--faq-area start-->
    <section class="grey-bg2 pt-145 pb-80 pt-md-60 pb-md-60 pt-xs-60 pb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="core-wrapper mb-30">
                        <div class="section-title pr-70">
                            <h6 class="semi-title mb-10">ADVANTAGES</h6>
                            <h2 class="sect-title mb-20">Apa yang Anda dapatkan di <span class="bottom-shape">Sandemo IT?</span></h2>
                            <p class="paragraph-title mb-30">Jasa development website responsive di semua device dengan kualitas terbaik di Sandemo IT!
                            </p>
                        </div>
                        <ul class="text-list list-none">
                            <li>Free Hosting & Domain</li>
                            <li>Free Email Profesional</li>
                            <li>Free SSL Certificate</li>
                            <li>Dan masih banyak lagi</li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-md">
                    <div class="video-wrapper">
                        <a href="https://www.youtube.com/watch?v=yeZpJ6lJC54" class="popup-video"><i class="fas fa-play"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--faq-area end-->
    <!--cta-area start-->
    <section class="cta-area home-4">
        <div class="cta-bg2 heding-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 mb-20">
                        <h4 class="text-white">Kembangkan Bisnis Anda ke Era Digital Sekarang!
                        </h4>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-10 text-center text-lg-end">
                        <a href="https://wa.me/<?= $setting['nohp'] ?>" class="theme_btn">Chat Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-area end-->
    <!--blog-area start-->
    <section class="blog-area pt-120 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">News</h6>
                        <h2 class="sect-title">Blog & Artikel Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($blog as $key) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blogs mb-30">
                            <div class="blogs__thumb mb-35">
                                <a href="<?= site_url('blog/' . $key['kategori'] . '/' . $key['slug']) ?>">
                                    <img src="<?= base_url('assets/frontend/img/blog/thumbnail/') . $key['gambar'] ?>" alt="Blog Img" class="blog-image">
                                </a>
                            </div>
                            <span class="tag"><?= $key['kategori'] ?></span>
                            <div class="blogs__meta mb-1">
                                <span><?= format_indo(date('Y-m-d', $key['date_created'])) ?> / By </span>
                                <span class="author"><?= $key['author'] ?></span>
                            </div>
                            <h5><a class="blog-title" href="<?= site_url('blog/' . $key['kategori'] . '/' . $key['slug']) ?>"><?= character_limiter($key['title'], 70) ?></a></h5>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!--blog-area end-->
</main>