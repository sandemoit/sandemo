<section class="contact-two">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/bg-shape-1-1.png" class="contact-two__bg-shape-1" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/bg-shape-1-2.png" class="contact-two__bg-shape-2" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/bg-shape-1-3.png" class="contact-two__bg-shape-3" alt="">


    <div class="contact-two__bubble-1"></div><!-- /.contact-two__bubble-1 -->
    <div class="contact-two__bubble-2"></div><!-- /.contact-two__bubble-2 -->
    <div class="contact-two__bubble-3"></div><!-- /.contact-two__bubble-3 -->
    <div class="contact-two__bubble-4"></div><!-- /.contact-two__bubble-4 -->
    <div class="contact-two__bubble-5"></div><!-- /.contact-two__bubble-5 -->
    <div class="contact-two__bubble-6"></div><!-- /.contact-two__bubble-6 -->
    <div class="contact-two__bubble-7"></div><!-- /.contact-two__bubble-7 -->
    <div class="contact-two__bubble-8"></div><!-- /.contact-two__bubble-8 -->

    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="contact-two__info">
                    <h3>Contact Details</h3>
                    <div class="contact-two__info-single">
                        <div class="contact-two__info-icon">
                            <i class="fa fa-map-marker"></i>
                        </div><!-- /.contact-two__info-icon -->
                        <div class="contact-two__info-content">
                            <h4>Location</h4>
                            <p><?= $home['alamat'] ?></p>
                        </div><!-- /.contact-two__info-content -->
                    </div><!-- /.contact-two__info-single -->
                    <div class="contact-two__info-single">
                        <div class="contact-two__info-icon">
                            <i class="fa fa-phone"></i>
                        </div><!-- /.contact-two__info-icon -->
                        <div class="contact-two__info-content">
                            <h4>Phone</h4>
                            <p><a href="tel:<?= $home['nohp'] ?>"><?= $home['nohp'] ?></a></p>
                        </div><!-- /.contact-two__info-content -->
                    </div><!-- /.contact-two__info-single -->
                    <div class="contact-two__info-single">
                        <div class="contact-two__info-icon">
                            <i class="fa fa-envelope"></i>
                        </div><!-- /.contact-two__info-icon -->
                        <div class="contact-two__info-content">
                            <h4>Email Infomation</h4>
                            <p><a href="mailto:<?= $home['gmail'] ?>"><?= $home['gmail'] ?></a>
                            </p>
                        </div><!-- /.contact-two__info-content -->
                    </div><!-- /.contact-two__info-single -->
                </div><!-- /.contact-two__info -->
            </div><!-- /.col-xl-5 -->
            <div class="col-xl-7">
                <?= $this->session->flashdata('message'); ?>
                <div class="contact-two__form-wrap">
                    <h3>Ready to Get Started?</h3>

                    <form action="<?= base_url('contact/send') ?>" method="POST" class="contact-one__form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="name" name="name" placeholder="Your Name*" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" id="email" name="email" placeholder="Email*" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" id="whatsapp" name="whatsapp" placeholder="WhatsApp*" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" id="subject" name="subject" placeholder="Subject*" required>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-12">
                                <textarea name="pesan" id="pesan" placeholder="Massage*" required></textarea><!-- /# -->
                            </div><!-- /.col-md-12 -->
                            <!-- <input type="hidden" name="nowa" value="087801751656"> -->
                            <div class="col-md-12 text-left">
                                <button type="submit" id="submit-form" class="thm-btn contact-one__btn">Send Now</button>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </form><!-- /.contact-one__form -->

                </div><!-- /.contact-two__form-wrap -->
            </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-two -->


<section class="contact-map__block">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13302.192458223664!2d104.4342039539751!3d-3.244439148779488!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bb7b27496d469%3A0xe9a6ddc39fcbcb98!2sPT.%20Sandemo%20Indo%20Teknologi%20%7C%20Jasa%20Pembuatan%20Website%20Profesional%20Palembang!5e0!3m2!1sid!2sid!4v1684510358287!5m2!1sid!2sid" class="google-map__contact-page" allowfullscreen></iframe>
    </div><!-- /.container -->
</section><!-- /.contact-map__block -->


<?php $this->load->view('template/newsletter'); ?>