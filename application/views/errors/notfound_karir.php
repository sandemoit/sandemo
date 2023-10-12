<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= $title ?> - <?= $setting['slogan_website'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="canonical" href="https://sandemoindoteknologi.co.id/">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/frontend/img/favicons/favicon.ico') ?>" />

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/animate.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/gt-font.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/metisMenu.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/nice-select.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/spacing.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/main.css" />

</head>

<body>
    <main>
        <!--slider-area end-->
        <section class="erroe-area pt-105 pb-80 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="error-wrapper text-center mb-30">
                            <img class="mb-40" src="<?= base_url('assets/frontend/img/icon/404.png') ?>" alt="icon">
                            <h2 class="error-title mb-25">Karir Tidak ditemukan</h2>
                            <p class="h6 fw-normal">Maaf, kami tidak bisa menemukan halaman yang Anda cari. Kami menyarankan agar Anda kembali ke halaman karir.</p>
                            <a href="<?= site_url('karir') ?>" class="theme_btn"><i class="fal fa-long-arrow-left"></i> Go To Karir</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>