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

    <!--job-board-area start-->
    <section class="job-board-area pb-120 pt-120 pb-md-60 pb-xs-60 ">
        <div class="container">
            <div class="row align-items-center mb-25">
                <div class="col-lg-9">
                    <div class="section-title mb-30">
                        <h6 class="semi-title mb-10">Open Recruitment</h6>
                        <h2 class="sect-title">Jadilah bagian kami</h2>
                    </div>
                </div>
                <!-- <div class="col-lg-3 text-lg-end">
                    <div class="select-job-area mb-30">
                        <select name="job" id="job-select" class="job-select">
                            <option selected disabled>Opening Jobs</option>
                            <?php foreach ($karir as $key) : ?>
                                <option><?= format_indo($key['date_job']) ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div> -->
            </div>
            <?= $this->session->flashdata('message'); ?>
            <?php foreach ($karir as $key) : ?>
                <div class="row align-items-center board-border">
                    <div class="col-xl-3 col-lg-4 mb-35">
                        <div class="job-position">
                            <h6 class="fs-14 mb-10"><?= format_indo($key['date_job']) . ' - ' . format_indo($key['limit_job']) ?></h6>
                            <h4><?= $key['name_job'] ?></h4>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 mb-35">
                        <p class="fs-14 lh-base"><?= $key['location_job'] ?></p>
                    </div>
                    <div class="col-xl-4 col-lg-3 text-lg-end mb-35">
                        <?php if (date('Y-m-d') > $key['limit_job']) : ?>
                            <span class="close-btn">Closed <i class="fas fa-times"></i></i></p>
                            <?php else : ?>
                                <a class="preview-more" href="<?= base_url('karir/apply/' . urlencode($key['name_job'])); ?>">Lamar Sekarang <i class="fal fa-long-arrow-right"></i></a>
                            <?php endif; ?>
                    </div>
                </div>
            <?php endforeach ?>
            <!-- <div class="row">
                <div class="col-12 mt-25">
                    <a href="#" class="preview-more">More Opportunity</a>
                </div>
            </div> -->
        </div>
    </section>
    <!--job-board-area end-->
</main>