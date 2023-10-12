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

    <section class="contact-area pt-105 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="contact-border pb-90 pb-md-30 pb-xs-30">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-img-wrapper pr-30 pr-md-0 pr-xs-0 mb-30">
                            <div class="row pb-90 pb-md-30 pb-xs-30">
                                <div class="col">
                                    <div class="contact-box mb-30">
                                        <h5 class="fs-20 mb-20">Muara Enim, Gelumbang</h5>
                                        <p>Kampung 2 No 15, Sumatera Selatan 31171
                                            <?= $setting['gmail'] ?>
                                            +<?= $setting['nohp'] ?>
                                        </p>
                                        <a href="https://maps.app.goo.gl/rk9pHxsqfpaXAWFW9" class="theme_btn mt-35">Lihat di Google Maps <i class="fas fa-map-marked-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-input-wrapper mb-30">
                            <div class="section-title mb-25">
                                <h6 class="semi-title mb-10">Kontak kami</h6>
                                <h2 class="sect-title mb-35">Bicarakan tentang proyek Anda</h2>
                            </div>
                            <form class="row contact-form" action="<?= base_url('kontak/send') ?>" method="POST">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mb-20">
                                        <input type="text" id="name" name="name" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mail-input mb-20">
                                        <input type="text" name="email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box number-input mb-20">
                                        <input type="text" name="whatsapp" placeholder="WhatsApp">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <div class="input-box sub-input">
                                        <select name="subject" class="job-select">
                                            <option selected disabled>Subject</option>
                                            <option value="Development">Development</option>
                                            <option value="Konsultasi">Konsultasi</option>
                                            <option value="Redesign Web">Redesign Web</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box text-input mb-30">
                                        <textarea name="pesan" cols="30" rows="10" placeholder="Enter massge"></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="form-btn">Get A Quote</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-area end-->
    <!--map-area start-->
    <section class="contact-map-area">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-12">
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15933.683044306295!2d104.4392273!3d-3.2450865!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bb7b27496d469%3A0xe9a6ddc39fcbcb98!2sPT.%20Sandemo%20Indo%20Teknologi%20%7C%20Jasa%20Pembuatan%20Website%20Profesional%20Palembang!5e0!3m2!1sid!2sid!4v1697103970888!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--map-area end-->
</main>