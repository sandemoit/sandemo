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

    <section class="about-us-area about-us-2 pt-120 pb-90 pt-md-60 pb-md-10 pb-xs-10 pt-xs-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-wrapper pos-rel mb-30">
                        <img class="shape-square" src="<?= base_url('assets/frontend/img/shape/square-1.png') ?>" alt="Shape">
                        <img class="img-fluid" src="<?= base_url('assets/frontend/img/about/about.webp') ?>" alt="About Img">
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="about-content-wrapper3 pt-20 pl-60">
                        <div class="section-title">
                            <h6 class="semi-title mb-10">About Us</h6>
                            <h2 class="sect-title">Jam terbang Sandemo IT dimulai tahun 2019 hingga saat ini.</h2>
                            <p class="paragraph-title"><strong>Sandemo IT</strong> adalah perusahaan yang bergerak pada bidang Digital Agency. Saat ini telah dipercayai memegang berbagai project dari Perusahaan, UMKM, serta Kolaborasi dengan berbagai Partner.
                            </p>
                        </div>
                        <ul class="btn-list about-btn d-md-flex align-items-center">
                            <li><a href="javascript:;" class="theme_btn2">
                                    <i class="fas fa-check-circle"></i> Web Design</a></li>
                            <li><a href="javascript:;" class="theme_btn2 ml-10">
                                    <i class="fas fa-check-circle"></i> Redesign Web</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">Visi dan Misi</h6>
                        <h2 class="sect-title">Visi dan Misi Sandemo IT</h2>
                    </div>
                </div>
                <div class="visimisi">
                    <p><strong>Visi dan Misi Sandemo IT</strong> adalah menjadi perusahaan teknologi informasi dan multimedia terkemuka yang berkontribusi secara signifikan dalam memajukan Indonesia. Prioritas utama kami adalah memberikan solusi kepada pelanggan terhadap layanan yang kami sediakan, serta membangun hubungan jangka panjang yang kuat dengan mereka.</p>
                </div>
            </div>
        </div>
    </section>

    <!--team-area start-->
    <section class="grey-bg3 team-area pt-120 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">Leader</h6>
                        <h2 class="sect-title">Pimpinan Perusahaan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($pimpinan as $key) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb">
                                <a href="#"><img class="img-fluid teamimage" src="<?= base_url('assets/img/profile/') . $key['image'] ?>" alt="Team Img"></a>
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
    <!--team-area end-->
    <!--cta-area start-->
    <section class="cta-area cta-full cta-full2">
        <img class="shape-one" src="<?= base_url('assets/frontend/') ?>img/cta/dot-shape-1.png" alt="Shape">
        <div class="cta-bg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-12">
                        <div class="cta-wrapper">
                            <h6 class="semi-title text-white">Chat Us</h6>
                            <p class="paragrap-text text-white">Lebih dari 300+ klien merasa puas dengan hasil layanan yang telah kami berikan. Sekarang, waktunya bagi kami untuk mengoptimalkan bisnis Anda. <strong>Gratis Konsultasi!</strong></p>
                            <ul class="btn-list d-md-flex align-items-center justify-content-center">
                                <li><a class="theme_btn mr-30 mr-xs-0" href="https://wa.me/<?= $setting['nohp'] ?>?text=Halo%20min,%20saya%20ingin%20bekerja%20sama%20dengan%20sandemo%20IT.%20Boleh%20berikan%20informasi%20lebih%20lanjut?"><i class="fab fa-whatsapp"></i> Chat Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-area end-->

</main>