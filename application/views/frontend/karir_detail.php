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
                            <li><a href="<?= site_url('/karir') ?>">Karir </a>
                                <i class="breadpanah fas fa-chevron-right"></i>
                            <li class="active" aria-current="page"> <?= $title ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider-area end-->

    <section class="portfolio-details-area pt-105 pb-100 pt-md-60 pt-xs-60 pb-md-30 pb-xs-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="portfolio-details-content">
                        <h3 class="s-sub-title mb-30">Kami sedang membutuhkan <?= $title; ?></h3>
                        <div class="row client-values">
                            <div class="col-lg-10 col-md-8">
                                <ul>
                                    <li><b>Date:</b> <?= format_indo($karir['date_job']) ?></li>
                                    <li><b>Deadline:</b> <?= format_indo($karir['limit_job']) ?></li>
                                    <li><b>Penempatan:</b> <?= $karir['location_job'] ?></li>
                                    <li><b>Kategori Pekerjaan:</b> <?= $karir['jenis_pekerjaan'] ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="deskripsi-karir">
                            <?= $karir['description'] ?>
                        </div>

                        <div class="row align-items-center mt-55" id="lamar-pekerjaan">
                            <div class="col-lg-6">
                                <div class="career-img-wrapper">
                                    <img class="w-100" src="<?= base_url('assets/frontend/') ?>img/career/image.webp" alt="Img">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-input-wrapper mb-30">
                                    <div class="section-title mb-25">
                                        <h2 class="sect-title mb-35">Lamar Pekerjaan</h2>
                                    </div>
                                    <form class="row contact-form" action="<?= site_url('karir/submit_form') ?>" enctype="multipart/form-data" method="POST">
                                        <input type="hidden" name="id" value="<?= $karir['id']; ?>">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box mb-20">
                                                <input type="text" name="full_name" placeholder="Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box mail-input mb-20">
                                                <input type="text" name="email" placeholder="Email address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box education-input mb-20">
                                                <input type="text" name="university" placeholder="Universitas">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box sub-input mb-20">
                                                <input type="text" name="education_stage" placeholder="Jenjang Pendidikan - Jurusan">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box birth-input mb-20">
                                                <input type="text" name="date_birth" placeholder="Tanggal Lahir">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box mb-20">
                                                <input type="text" name="place_birth" placeholder="Tempat Lahir">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box mb-20">
                                                <input type="text" name="religion" placeholder="Agama">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box number-input mb-20">
                                                <input type="text" name="whatsapp" placeholder="Whatsapp">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box home-input mb-20">
                                                <input type="text" name="address" placeholder="Alamat Lengkap">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box file-input mb-20">
                                                <input class="form-control" type="file" name="cv_file" placeholder="Curriculum Vitae (PDF)">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="form-btn form-btn2" id="submitBtn">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>