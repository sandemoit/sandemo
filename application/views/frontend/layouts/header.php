<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Primary Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <?php
    if ($this->uri->segment(1) == '') {
        echo '<title>' . $title . ' - ' . $setting['slogan_website'] . '</title>';
    } else {
        echo '<title>' . $title . ' - ' . $setting['judul_website'] . '</title>';
    }
    ?>

    <?php
    if ($this->uri->segment(1) == '') {
        echo '<meta name="title" content="Jasa Pembuatan Website - ' . $setting['slogan_website'] . '" />';
    } else {
        echo '<meta name="title" content="' . $title . ' - ' . $setting['judul_website'] . '" />';
    }
    ?>

    <link rel="canonical" href="<?= base_url(uri_string()) ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?= $setting['meta_desc'] . ' - ' . $title ?>">
    <meta name="keywords" content="<?= $setting['meta_key'] ?>">

    <!-- Open Graph / Facebook -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Sandi Maulidika">
    <meta name="google-site-verification" content="60PhvPIn1NQaQGJnkEPjulzNIhr5ik7R37hC3HjoNug" />
    <meta name="copyright" content="<?= $setting['judul_website'] ?>">
    <meta property="og:title" content="<?= $title . " - " . $setting['judul_website'] ?>">
    <meta property="og:description" content="<?= $setting['meta_desc'] . ' - ' . $title  ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:url" content="<?= base_url(uri_string()); ?>">
    <meta property="og:image" content="<?= base_url('assets/frontend/img/service/metaweb.webp') ?>">
    <meta property="og:image:secure_url" content="<?= base_url('assets/frontend/img/service/metaweb.webp') ?>">

    <!-- breadcrumb -->
    <?php

    // Membuat data JSON-LD
    $jsonLDData = array(
        "@context" => "http://schema.org/",
        "@type" => "BreadcrumbList",
        "itemListElement" => array(
            array(
                "@type" => "ListItem",
                "position" => 1,
                "name" => $title,
                "item" => base_url(uri_string()),
            )
        )
    );
    // Konversi data JSON-LD menjadi format JSON
    $jsonLD = json_encode($jsonLDData, JSON_PRETTY_PRINT);

    if ($this->uri->segment(1) == '') {
        echo '';
    } else {
        echo '<script type="application/ld+json">' . $jsonLD . '</script>';
    }
    ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L69D835ME0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-L69D835ME0');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '934988681568266');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=934988681568266&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- CSS here -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/frontend/') ?>img/favicons/favicon.ico" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-nice-select@1.1.0/css/nice-select.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/animate.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/gt-font.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/spacing.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/main.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/custom.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H7DNKN" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- header-area start -->
    <!-- Mengecek apakah halaman saat ini adalah halaman home -->
    <?php
    if ($this->uri->segment(1) == '') : ?>
        <header>
            <div class="header-top-3 theme-bg2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-6">
                            <div class="left-cta left-cta-3">
                                <span><i class="fal fa-envelope"></i> <?= $setting['gmail'] ?></span>
                                <span><i class="fal fa-phone"></i> <?= $setting['nohp'] ?></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 text-end">
                            <div class="right-language">
                                <div class="dropdown">
                                    <a class="language-btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        Indonesia <i class="fal fa-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">English</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hideshow-sticky-menu">
                <div class="main-header-area menu-style-3">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2 col-6">
                                <div class="logo-area pt-30 mb-30">
                                    <a class="main-logo" href="<?= site_url('') ?>"><img src="<?= base_url('assets/frontend/') ?>img/logo/sandemo.webp" alt="Logo Sandemo IT - <?= $title ?>"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-6 text-center d-none d-lg-block">
                                <nav id="topheader" class="navbar navbar-expand-lg justify-content-center py-0">
                                    <div class="nav-container">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav list-style-none">
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="<?= site_url('') ?>">Home</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= site_url('tentang-kami') ?>>Tentang Kami</a>
                                                </li>

                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" id="navbarDropdow2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan <i class="fal fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="<?= site_url('web-development') ?>">Web Development</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="<?= site_url('web-design') ?>">Web Design</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= site_url('portfolio') ?>">Portfolio</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= site_url('karir') ?>">Karir</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= site_url('team') ?>">Team</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= site_url('blog') ?>">Blog</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= site_url('kontak') ?>">Kontak</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-6">
                                <ul class="right-nav d-flex align-items-center justify-content-end">
                                    <li>
                                        <div class="hamburger-menu d-lg-none d-block">
                                            <a href="javascript:void(0);">
                                                <i class="far fa-bars"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.theme-main-menu -->
            </div>
        </header>

        <aside class="slide-bar">
            <div class="close-mobile-menu">
                <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
            </div>
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu">
                <ul id="mobile-menu-active">
                    <li><a href="<?= site_url('') ?>">Home</a></li>
                    <li><a href="<?= site_url('tentang-kami') ?>">Tentang Kami</a></li>
                    <li class="has-dropdown">
                        <a href="#" aria-expanded="false">Layanan</a>
                        <ul class="sub-menu mm-collapse" style="height: 0px;">
                            <li><a href="<?= site_url('web-development') ?>">Web Development</a></li>
                            <li><a href="<?= site_url('redesign-web') ?>">Redesign Web</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= site_url('portfolio') ?>">Portofolio</a></li>
                    <li><a href="<?= site_url('karir') ?>">Karir</a></li>
                    <li><a href="<?= site_url('team') ?>">Team</a></li>
                    <li><a href="<?= site_url('blog') ?>">Blog</a></li>
                    <li><a href="<?= site_url('kontak') ?>">Kontak</a></li>
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
        </aside>
        <div class="body-overlay"></div>
    <?php else : ?>
        <header class="transparent-header">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-6">
                            <div class="left-cta left-cta-2">
                                <span><i class="fal fa-envelope"></i> <?= $setting['gmail'] ?></span>
                                <span><i class="fal fa-phone"></i> <?= $setting['nohp'] ?></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 text-end">
                            <div class="right-language">
                                <div class="dropdown">
                                    <a class="language-btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        Indonesia <i class="fal fa-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">English</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-border-line"></div>
            </div>
            <div id="hideshow-sticky-menu">
                <div class="main-header-area menu-style-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2 col-6">
                                <div class="logo-area pt-20 mb-30">
                                    <a class="sticky-logo" href="<?= site_url('') ?>"><img src="<?= base_url('assets/frontend/') ?>img/logo/sandemo2.png" alt="Header-logo"></a>
                                    <a class="main-logo" href="<?= site_url('') ?>"><img src="<?= base_url('assets/frontend/') ?>img/logo/sandemo2.png" alt="Header-logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-6 text-center d-none d-lg-block">
                                <nav id="topheader" class="navbar navbar-expand-lg justify-content-center py-0">
                                    <div class="nav-container">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav list-style-none">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?= site_url('') ?>">Home</a>
                                                </li>

                                                <li class="nav-item <?= ($this->uri->segment(1) == 'tentang-kami') ? 'active' : '' ?>">
                                                    <a class="nav-link" href="<?= site_url('tentang-kami') ?>">Tentang Kami</a>
                                                </li>

                                                <li class="nav-item dropdown <?= ($this->uri->segment(1) == 'web-development') ? 'active' : '' ?>">
                                                    <a class="nav-link dropdown-toggle" id="navbarDropdow2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan <i class="fal fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item <?= ($this->uri->segment(1) == 'web-development') ? 'active' : '' ?>" href="<?= site_url('web-development') ?>">Web Development</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item <?= ($this->uri->segment(1) == 'redesign-web') ? 'active' : '' ?>" href="<?= site_url('redesign-web') ?>">Redesign-Web</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-item <?= ($this->uri->segment(1) == 'portfolio') ? 'active' : '' ?>">
                                                    <a class="nav-link" href="<?= site_url('portfolio') ?>">Portfolio</a>
                                                </li>

                                                <li class="nav-item <?= ($this->uri->segment(1) == 'karir') ? 'active' : '' ?>">
                                                    <a class="nav-link" href="<?= site_url('karir') ?>">Karir</a>
                                                </li>

                                                <li class="nav-item <?= ($this->uri->segment(1) == 'team') ? 'active' : '' ?>">
                                                    <a class="nav-link" href="<?= site_url('team') ?>">Team</a>
                                                </li>

                                                <li class="nav-item <?= ($this->uri->segment(1) == 'blog') ? 'active' : '' ?>">
                                                    <a class="nav-link" href="<?= site_url('blog') ?>">Blog</a>
                                                </li>

                                                <li class="nav-item <?= ($this->uri->segment(1) == 'kontak') ? 'active' : '' ?>">
                                                    <a class="nav-link" href="<?= site_url('kontak') ?>">Kontak</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-6">
                                <ul class="right-nav list-none mb-0 d-flex align-items-center justify-content-end">
                                    <li>
                                        <div class="ham-menu-2 hamburger-menu d-lg-none d-block">
                                            <a href="javascript:void(0);">
                                                <i class="far fa-bars"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.theme-main-menu -->
            </div>
        </header>

        <aside class="slide-bar">
            <div class="close-mobile-menu">
                <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
            </div>
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu">
                <ul id="mobile-menu-active">
                    <li><a href="<?= site_url('') ?>">Home</a></li>
                    <li><a href="<?= site_url('tentang-kami') ?>">Tentang Kami</a></li>
                    <li class="has-dropdown">
                        <a href="#" aria-expanded="false">Layanan</a>
                        <ul class="sub-menu mm-collapse" style="height: 0px;">
                            <li><a href="<?= site_url('web-development') ?>">Web Development</a></li>
                            <li><a href="<?= site_url('redesign-web') ?>">Redesign Web</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= site_url('portfolio') ?>">Portofolio</a></li>
                    <li><a href="<?= site_url('karir') ?>">Karir</a></li>
                    <li><a href="<?= site_url('team') ?>">Team</a></li>
                    <li><a href="<?= site_url('blog') ?>">Blog</a></li>
                    <li><a href="<?= site_url('kontak') ?>">Kontak</a></li>
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
        </aside>
        <div class="body-overlay"></div>
    <?php endif; ?>
    <!-- header-area end -->