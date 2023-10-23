<!--footer-area start-->
<footer class="heding-bg footer-area pt-100">
    <div class="container">
        <div class="row mb-15">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay=".1s">
                <div class="footer__widget mb-30">
                    <h6 class="widget-title text-white pb-20 mb-35">PT. Sandemo Indo Teknologi</h6>
                    <p><?= $setting['about_hf'] ?>
                    </p>
                    <div class="footer__social mt-30">
                        <a href="https://www.facebook.com/<?= $setting['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/<?= $setting['linkedin'] ?>"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/<?= $setting['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay=".3s">
                <div class="border-theme footer__widget mb-30 pl-135 pl-md-0 pl-xs-0">
                    <h6 class="widget-title text-white pb-20 mb-35">Halaman</h6>
                    <ul class="fot-list">
                        <li><a href="https://shopee.co.id/sandemo.id">Shopee</a></li>
                        <li><a href="https://members.phpmu.com/sandi">PHPMu</a></li>
                        <li><a href="https://www.fiverr.com/sandemoit">Fiverr</a></li>
                        <li><a href="https://www.freelancer.co.id/u/sandimaulidika">Freelancer ID</a></li>
                        <li><a href="https://fastwork.id/user/sandemo">Fastwork</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay=".5s">
                <div class="footer__widget mb-25 pl-25 pl-md-0 pl-xs-0">
                    <h6 class="widget-title text-white pb-20 mb-35">Informasi Kontak</h6>
                    <ul class="fot-list fot-list-1">
                        <li><a href="tel:<?= $setting['nohp'] ?>"><?= $setting['nohp'] ?></a></li>
                        <li><a href="mailto:<?= $setting['gmail'] ?>"><?= $setting['gmail'] ?></a></li>
                        <li><a href="#">Jam Kerja: <span>8AM - 9PM</span></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://maps.app.goo.gl/rk9pHxsqfpaXAWFW9"><?= $setting['alamat'] ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay=".7s">
                <div class="footer__widget mb-30">
                    <h6 class="widget-title text-white pb-20 mb-35">Subscribe Now</h6>
                    <form class="subscribe-form" action="<?= site_url('subscriber') ?>" method="post">
                        <div class="input-box mb-10">
                            <input type="text" name="nama" placeholder="Nama Kamu">
                        </div>
                        <div class="input-box mail-input mb-10">
                            <input type="text" name="email" placeholder="Masukan Alamat email">
                        </div>
                        <button type="submit" class="theme_btn subscribe-btn">Subscribe Now <i class="fal fa-long-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right-area border-bot pt-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="copyright mb-30 text-center">
                        <h6>Copyright © 2019 – <?= date('Y') ?> PT. Sandemo Indo Teknologi | Hak cipta dilindungi undang-undang</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer-area end-->
<!-- JS here -->
<!-- <script defer src="https://widget.tochat.be/bundle.js?key=5e6f9606-1277-46a8-bf2e-0a9b065e66f8"></script> -->

<script src="<?= base_url('assets/frontend/') ?>js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/metisMenu.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/jquery.nice-select.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/wow.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/jquery.counterup.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/waypoints.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/jquery.scrollUp.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/plugins.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/main.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/custom.js"></script>

<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if ($this->session->flashdata('success')) { ?>
        var text = <?php echo json_encode($this->session->flashdata('success')) ?>;
        Swal.fire(
            'Good job!',
            text,
            'success'
        )
    <?php } ?>

    <?php if ($this->session->flashdata('error')) { ?>
        var text = <?php echo json_encode($this->session->flashdata('error')) ?>;
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            html: text,
        })
    <?php } ?>

    <?php if ($this->session->flashdata('warning')) { ?>
        var text = <?php echo json_encode($this->session->flashdata('warning')) ?>;
        Swal.fire({
            icon: 'warning',
            title: 'Warning!',
            html: text,
        })
    <?php } ?>
</script>


</body>

</html>