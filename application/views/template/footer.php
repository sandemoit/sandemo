<footer class="site-footer">
    <div class="particles-snow" id="footer-snow"></div><!-- /#footer-snow.particles-snow -->

    <img src="<?= base_url('assets/frontend') ?>/images/shapes/footer-shape-1-1.png" class="site-footer__bg-shape-1" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/footer-shape-1-2.png" class="site-footer__bg-shape-2" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/footer-shape-1-3.png" class="site-footer__bg-shape-3" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/footer-shape-1-4.png" class="site-footer__bg-shape-4" alt="">
    <div class="site-footer__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget footer-widget__about">
                        <h3 class="footer-widget__title">About</h3>
                        <p><?= $home['about_hf'] ?></p>
                        <div class="footer-widget__social">
                            <!-- <a href="https://<?= $home['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://<?= $home['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                            <a href="https://<?= $home['linkedin'] ?>"><i class="fab fa-linkedin-in"></i></a> -->
                        </div><!-- /.footer-widget__social -->
                    </div><!-- /.footer-widget footer-widget__about -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget footer-widget__contact">
                        <h3 class="footer-widget__title">Contact</h3>
                        <ul class="list-unstyled footer-widget__links-list">
                            <li><a href="https://goo.gl/maps/8XxS7emrooK7qmTh6"><?= $home['alamat'] ?></a></li>
                            <li><a href="tel:<?= $home['nohp'] ?>"><?= $home['nohp'] ?></a></li>
                            <li><a href="mailto:<?= $home['gmail'] ?>"><?= $home['gmail'] ?></a></li>
                            <li><a href="">Jam Kerja: 09.00 - 17.00 WIB</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links-list -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget footer-widget__links__2">
                        <h3 class="footer-widget__title">Product</h3>
                        <ul class="list-unstyled footer-widget__links-list">
                            <li><a href="https://facebook.com/sandemoindoteknologi">Facebook Page</a></li>
                            <li><a href="https://shopee.co.id/sandemo.id">Shopee</a></li>
                            <li><a href="https://members.phpmu.com/sandi">PHPMU</a></li>
                            <li><a href="https://trakteer.id/sandemo">Trakteer</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links-list -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget footer-widget__links__1">
                        <h3 class="footer-widget__title">Services</h3>
                        <ul class="list-unstyled footer-widget__links-list">
                            <p>To request a quote, preferably via email. We can only be contacted on working days and hours, other than that please email us.</p>
                        </ul><!-- /.list-unstyled footer-widget__links-list -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

    </div><!-- /.site-footer__upper -->
    <div class="site-footer__bottom">
        <div class="container">
            <p>copyright © 2019 - <?= date('Y') ?> <?= $home['judul_website'] ?></p>
            <a aria-label="PT. Sandemo Indo Teknologi" href="<?= site_url('') ?>"><img src="<?= base_url('assets/frontend') ?>/images/sandemoid-light.png" alt="PT. Sandemo Indo Teknologi" width="100%"></a>
            <ul class="list-unstyled site-footer__bottom-menu">
                <li><a aria-label="Facebook" href="https://facebook.com/<?= $home['facebook'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                <li><a aria-label="Instagram" href="https://instagram.com/<?= $home['instagram'] ?>"><i class="fab fa-instagram"></i></a></li>
                <li><a aria-label="Linkedin" href="https://linkedin.com/<?= $home['linkedin'] ?>"><i class="fab fa-linkedin-in"></i></a></li>
            </ul><!-- /.list-unstyled site-footer__bottom-menu -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__bottom -->
</footer><!-- /.site-footer -->
</div><!-- /.page-wrapper -->

<a aria-label="Scroll Top" href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<div class="side-menu__block">
    <a aria-label="times" href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
        <!-- /.fa fa-close --></a>
    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">
        <a aria-label="PT. Sandemo Indo Teknologi" href="<?= site_url('') ?>" class="side-menu__logo"><img src="<?= base_url('assets/frontend') ?>/images/sandemoid-light.png" alt="PT. Sandemo Indo Teknologi" width="100%"></a>
        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>
        <p class="side-menu__block__copy">copyright © 2019 - <?= date('Y') ?> <?= $home['judul_website'] ?></p>
        <div class="side-menu__social">
            <a aria-label="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
            <a aria-label="Google plus" href="#"><i class="fab fa-google-plus"></i></a>
            <a aria-label="Twitter" href="#"><i class="fab fa-twitter"></i></a>
            <a aria-label="Instagram" href="#"><i class="fab fa-instagram"></i></a>
            <a aria-label="Pinterest" href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->

<script>
    $(document).ready(function() {
        $('#submit-form').click(function() {
            // Mengirim data form menggunakan AJAX
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('contact/sendwa'); ?>',
                data: $('form').serialize(),
                success: function() {
                    // Membuka WhatsApp Web setelah data form terkirim
                    window.open('<?php echo base_url('contact/sendwa'); ?>', '_blank');
                }
            });
            return false;
        });
    });
</script>

<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- load more -->
<script>
    <?php if ($this->session->flashdata('success')) { ?>
        var text = <?php echo json_encode($this->session->flashdata('success')) ?>;
        Swal.fire({
            title: 'Success!',
            text: text,
            icon: 'success',
        })
    <?php } ?>

    <?php if ($this->session->flashdata('error')) { ?>
        var text = <?php echo json_encode($this->session->flashdata('error')) ?>;
        Swal.fire({
            title: 'Error!',
            text: text,
            icon: 'error',
        })
    <?php } ?>

    <?php if ($this->session->flashdata('warning')) { ?>
        var text = <?php echo json_encode($this->session->flashdata('warning')) ?>;
        Swal.fire({
            title: 'Warning!',
            text: text,
            icon: 'warning',
        })
    <?php } ?>
</script>

<!-- share instagram -->
<script>
    function copyToClipboard(title, url) {
        // Buat elemen textarea sementara untuk menyalin teks ke clipboard
        var tempTextArea = document.createElement('textarea');
        tempTextArea.value = title + ' - ' + url;
        document.body.appendChild(tempTextArea);
        tempTextArea.select();
        document.execCommand('copy');
        document.body.removeChild(tempTextArea);

        // Tampilkan pemberitahuan atau efek lain jika diperlukan
        alert('Tautan berita berhasil disalin ke clipboard!');
    }

    function shareToInstagram(url) {
        // Jika pengguna membuka dari perangkat mobile
        if (/Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
            // Ubah URL ini menjadi URL dari aplikasi Instagram
            var instagramUrl = 'instagram://share?url=' + encodeURIComponent(url);
            window.location.href = instagramUrl;
        } else {
            // Jika bukan dari perangkat mobile, buka URL di tab baru
            window.open('https://www.instagram.com/', '_blank');
        }
    }
</script>


<!-- template scripts -->
<script defer src="https://widget.tochat.be/bundle.js?key=5e6f9606-1277-46a8-bf2e-0a9b065e66f8"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/frontend') ?>/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/bootstrap-select.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/isotope.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.circleType.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/waypoints.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.counterup.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.lettering.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.validate.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/TweenMax.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/wow.min.js"></script>
<!-- <script src="<?= base_url('assets/frontend') ?>/js/swiper.min.js"></script> -->
<script src="<?= base_url('assets/frontend') ?>/js/particles.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/particel-config.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/theme.js"></script>

</body>

</html>
