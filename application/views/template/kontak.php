<section class="contact-one">
    <div class="container wow fadeInUp" data-wow-duration="1500ms">
        <div class="inner-container">
            <img src="<?= base_url('assets/frontend') ?>/images/shapes/contact-form-shape-1-1.png" class="contact-one__shape-1" alt="">
            <img src="<?= base_url('assets/frontend') ?>/images/mocups/contact-1-moc-1.webp" class="contact-one__shape-2" alt="">
            <img src="<?= base_url('assets/frontend') ?>/images/mocups/contact-1-moc-2.webp" class="contact-one__shape-3" alt="">
            <div class="block-title text-center">
                <p><span>Konsultasi</span></p>
                <h3>Get Free Konsultasi</h3>
            </div><!-- /.block-title text-center -->
            <form action="<?= base_url('contact/sendwa') ?>" method="POST" class="contact-one__form" target="_blank">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Your Name*" required>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <input type="text" name="email" placeholder="Email Active*" required>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <input type="text" name="subject" value="Subject: Consultation" readonly required>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <input type="text" name="pesan" placeholder="Message*" required>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-12 text-center">
                        <button type="submit" class="thm-btn contact-one__btn">Send Now</button>
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </form><!-- /.contact-one__form -->

        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->