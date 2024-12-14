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
                        <div class="about-img-wrapper pos-rel mb-30">
                            <img class="shape-square" src="<?= base_url('assets/frontend/img/shape/square-1.png') ?>" alt="Shape">
                            <img class="img-fluid" src="<?= base_url('assets/frontend/img/services/web.webp') ?>" alt="About Sandemo Indo Teknologi">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-input-wrapper mb-30">
                            <div class="section-title mb-25">
                                <h6 class="semi-title mb-10">Download</h6>
                                <h2 class="sect-title mb-35">Isi form untuk mendownload</h2>
                            </div>
                            <form class="row contact-form download-form" action="<?= base_url('subscriber/do_download') ?>" method="POST">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mb-20">
                                        <input type="text" id="name" name="name" value="Sandi" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mail-input mb-20">
                                        <input type="text" name="email" value="infosandemo@gmail.com" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box number-input mb-20">
                                        <input type="text" name="whatsapp" value="085380945896" placeholder="WhatsApp">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <div class="input-box sub-input">
                                        <select name="subject" class="job-select">
                                            <option disabled>Kebutuhan</option>
                                            <option selected value="Development">Referensi</option>
                                            <option value="Konsultasi">Kerja</option>
                                            <option value="Redesign Web">Dikembangkan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="form-btn" id="submitBtn">Get File</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>