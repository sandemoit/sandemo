<section class="job">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="job__content">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <?= $this->session->flashdata('message'); ?>
                    <h3><?= $career['name_job'] ?></h3>
                    <p><?= $career['description'] ?></p>
                </div><!-- /.portfolio-details__content -->
                <div class="contact-two__form-wrap job mt-5">
                    <h3>Apply Job</h3>
                    <form action="<?= base_url('karir/submit_form') ?>" enctype="multipart/form-data" method="POST" class="contact-one__form">
                        <div class="row">
                            <input type="hidden" name="id" value="<?= $career['id']; ?>">
                            <div class="col-md-6">
                                <input type="text" id="full_name" name="full_name" placeholder="Full Name*" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="date" name="date_birth" placeholder="Date Birth*" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" name="place_birth" placeholder="Place Birth" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" name="email" placeholder="Email" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" name="whatsapp" placeholder="WhatsApp" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" name="religion" placeholder="Religion" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" name="university" placeholder="University" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" name="education_stage" placeholder="Education Stage - Major" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" name="address" placeholder="Address" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="file" name="cv_file" placeholder="Curriculum Vitae (PDF)">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-12 text-left">
                                <button type="submit" id="submit-form" class="thm-btn contact-one__btn">Send Now</button>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </form><!-- /.contact-one__form -->
                </div><!-- /.contact-two__form-wrap -->
            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4 wow fadeInRight" data-wow-duration="1500ms">
                <div class="job__info">
                    <h3>Job Informations</h3>
                    <div class="portfolio-details__info-single">
                        <div class="portfolio-details__info-title">
                            <i class="far fa-calendar-alt"></i>
                            <span>Date :</span>
                        </div><!-- /.portfolio-details__info-title -->
                        <div class="portfolio-details__info-text">
                            <p><?= format_indo(date('Y-m-d', strtotime($career['date_job']))) ?></p>
                        </div><!-- /.portfolio-details__info-text -->
                    </div><!-- /.portfolio-details__info-single -->
                    <div class="portfolio-details__info-single">
                        <div class="portfolio-details__info-title">
                            <i class="far fa-calendar-alt"></i>
                            <span>Deadline :</span>
                        </div><!-- /.portfolio-details__info-title -->
                        <div class="portfolio-details__info-text">
                            <p><?= format_indo(date('Y-m-d', strtotime($career['limit_job']))) ?></p>
                        </div><!-- /.portfolio-details__info-text -->
                    </div><!-- /.portfolio-details__info-single -->
                    <div class="portfolio-details__info-single">
                        <div class="portfolio-details__info-title">
                            <i class="far fa-map-marker-alt"></i>
                            <span>Location :</span>
                        </div><!-- /.portfolio-details__info-title -->
                        <div class="portfolio-details__info-text">
                            <p><?= $career['location_job'] ?></p>
                        </div><!-- /.portfolio-details__info-text -->
                    </div><!-- /.portfolio-details__info-single -->
                    <div class="portfolio-details__info-single">
                        <div class="portfolio-details__info-title">
                            <i class="far fa-bookmark"></i>
                            <span>Jenis :</span>
                        </div><!-- /.portfolio-details__info-title -->
                        <div class="portfolio-details__info-text">
                            <p><a href="#"><?= $career['jenis_pekerjaan'] ?></a></p>
                        </div><!-- /.portfolio-details__info-text -->
                    </div><!-- /.portfolio-details__info-single -->
                </div><!-- /.portfolio-details__info -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.portfolio-details -->