<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= $title ?> - <?= $setting['slogan_website'] ?></title>

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
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/frontend/') ?>img/favicons/favicon.ico" />

    <!-- meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="PT Sandemo Indo Teknologi is a leading and experienced company in Palembang in software engineering development.">
    <meta name="keywords" content="PT. Sandemo Indo Teknologi, Sandemo Indo Teknologi, Sandemo Indo, Sandemo Jasa Pembuatan Website Profesional Palembang, Digital Marketing, Layanan Digital Marketing, Jasa Pembuatan Website Profesional Palembang, Jasa Website Palembang, Jasa Web Murah, Web Promotion, Jasa Maintenance Website,jasa perbaikan website,jasa desain website, Jasa Pembuatan Logo, Jasa Company Profile, Brand Identity Design, Web Portal Berita, Web Sekolah, Web Personal, Jasa Web Professional, Creative Digital, Startup, Jasa Sosial Media Management, Facebook Ads,jasa seo palembang, jasa pembuatan website, perbaikan web, Jasa Pembuatan Website Profesional Palembang, jasa web palembang, desain website palembang">

    <!-- <meta name="Googlebot" content="noindex"> -->
    <meta name="google-site-verification" content="60PhvPIn1NQaQGJnkEPjulzNIhr5ik7R37hC3HjoNug" />
    <meta name="author" content="Sandi Maulidika">
    <meta name="copyright" content="<?= $setting['judul_website'] ?>">
    <meta property="og:title" content="<?= $setting['judul_website'] . " - " . $setting['slogan_website'] ?>">
    <meta property="og:type" content="blog">
    <meta property="og:locale" content="id_ID">
    <meta property="og:description" content="<?= character_limiter($seo['meta']) ?>">
    <meta property="og:url" content="<?= current_url(); ?>">
    <meta property="og:image" content="<?= base_url('assets/frontend/img/favicons/logo.png') ?>">
    <meta property="og:image:secure_url" content="<?= base_url('assets/frontend/img/favicons/logo.png') ?>">
    <meta property="article:author" content="<?= $seo['author'] ?>">
    <meta property="article:published_time" content="<?= date('d/m/Y H:i', $seo['date_created']) ?>">
    <meta property="article:modified_time" content="<?= date('d/m/Y H:i', $seo['date_created']) ?>">
    <meta property="article:section" content="Technology">
    <meta property="article:tag" content="Web Development">
    <link rel="canonical" href="https://sandemoindoteknologi.co.id/">

    <?php
    // Mendapatkan total segmen URI

    // Mendapatkan nama link terakhir
    $pertama = $this->uri->segment(1, 0);
    $kedua = $this->uri->segment(2, 0);
    $ketiga = $this->uri->segment(3, 0);

    // Membuat data JSON-LD
    $jsonLDData = array(
        "@context" => "http://schema.org/",
        "@type" => "BreadcrumbList",
        "itemListElement" => array(
            array(
                "@type" => "ListItem",
                "position" => 2, // Ganti dengan posisi yang sesuai
                "name" => $pertama,
                "item" => "https://sandemoindoteknologi.co.id/" . $pertama . '/' . $kedua . '/' . $ketiga // Ganti dengan URL yang sesuai
            )
        )
    );
    // Konversi data JSON-LD menjadi format JSON
    $breadcrum = json_encode($jsonLDData, JSON_PRETTY_PRINT);
    ?>

    <?php
    // Mendapatkan total segmen URI
    $pertama = $this->uri->segment(1, 0);
    $kedua = $this->uri->segment(2, 0);
    $ketiga = $this->uri->segment(3, 0);

    $seluruhURL = $pertama . '/' . $kedua . '/' . $ketiga;

    // Membuat URL dari segmen terakhir
    $lastSegmentURL = base_url() . $seluruhURL;

    // Membuat data JSON-LD
    $jsonLDData = array(
        "@context" => "http://schema.org/",
        "@type" => "Article",
        "mainEntityOfPage" => array(
            "@type" => "WebPage",
            "@id" => $lastSegmentURL // Menggunakan URL segmen terakhir
        ),
        "author" => array(
            "@type" => "Organization",
            "name" => $seo['author']
        ),
        "publisher" => array(
            "@type" => "Organization",
            "name" => $seo['author'],
            "logo" => array(
                "@type" => "ImageObject",
                "url" => base_url('assets/frontend/img/blog/thumbnail/') . $seo['gambar']
            )
        ),
        "headline" => $setting['judul_website'],
        "image" => base_url('assets/frontend/img/blog/thumbnail/') . $seo['gambar'],
        "datePublished" => date('d/m/Y H:i', $seo['date_created']),
        "dateModified" => date('d/m/Y H:i', $seo['date_created'])
    );

    // Konversi data JSON-LD menjadi format JSON
    $Article = json_encode($jsonLDData, JSON_PRETTY_PRINT);
    ?>

    <script type="application/ld+json">
        <?php echo $breadcrum; ?>
    </script>

    <script type="application/ld+json">
        <?php echo $Article; ?>
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5H7DNKN');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H7DNKN" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

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

                                            <li class="nav-item dropdown <?= ($this->uri->segment(1) == 'web-design') ? 'active' : '' ?>">
                                                <a class="nav-link dropdown-toggle" id="navbarDropdow2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan <i class="fal fa-chevron-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item <?= ($this->uri->segment(1) == 'web-design') ? 'active' : '' ?>" href="<?= site_url('web-development') ?>">Web Development</a>
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
    <!-- header-area end -->

    <!-- slide-bar start -->
    <aside class="slide-bar">
        <!-- side-mobile-menu start -->
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
        </div>
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
    <!-- slide-bar end -->
    <main>
        <!--slider-area start-->
        <section class="page-title-area">
            <img class="right-shape" src="<?= base_url('assets/frontend/') ?>img/cta/dot-shape-1.png" alt="Dot Pattern">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-wrapper pt-lg-100 pt-md-90 pt-xs-80" style="text-align: center;">
                            <ul class="breadcrumb">
                                <li><a href="<?= site_url('/') ?>">Home </a></li> <i class="breadpanah fas fa-chevron-right"></i>
                                <li><a href="<?= site_url('blog') ?>">Blog </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--slider-area end-->
        <section class="news-details-area pt-105 pb-90 pt-md-60 pb-md-25 pt-xs-50 pb-xs-20">
            <div class="container">
                <div class="row mb-15">
                    <div class="col-lg-8">
                        <div class="news-details-left mb-30">
                            <h2 class="artikel-title"><?= $title; ?></h2>
                            <div class="blogs__meta">
                                <span><i class="fal fa-pen"></i> <?= $seo['author'] ?></span>
                                <span class="border-line2"><i class="fal fa-calendar-alt"></i> </i> <?= date('d/m/Y H:i', $seo['date_created']) ?></span>
                                <span><i class="fal fa-comments"></i> <a href="#disqus_thread"></a></span>
                            </div>
                            <img class="img-fluid" src="<?= base_url('assets/frontend') ?>/img/blog/<?= $seo['gambar'] ?>" alt="<?= $seo['title'] ?>">
                            <!-- google adsense -->
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794" crossorigin="anonymous"></script>
                            <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-3971040661867794" data-ad-slot="9577430246"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                            <!-- end google adsense -->

                            <div class="artikel-isi mb-55">
                                <?= $seo['isi'] ?>
                            </div>

                            <!-- google adsense -->
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794" crossorigin="anonymous"></script>
                            <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-3971040661867794" data-ad-slot="9577430246"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                            <!-- end google adsense -->
                            <div class="row share-social px-0 mt-55 pb-15">
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <h5 class="fs-20 mb-20">Releted Tags</h5>
                                    <div class="tag-list">
                                        <a href="#">#Popular</a>
                                        <a href="#">#Design</a>
                                        <a href="#">#UX</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 text-start text-md-end mb-30">
                                    <h5 class="fs-20 mb-20">Social Share</h5>
                                    <div class="author__social">
                                        <a href="https://www.facebook.com/dialog/share?app_id=769512741585393&display=popup&href=<?= urlencode(current_url()); ?>"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=<?= urlencode(current_url()); ?>"><i class="fab fa-twitter"></i></a>
                                        <a href="whatsapp://send?text=<?= $seo['title'], '%20|%20', urlencode(current_url()); ?>"><i class="fab fa-whatsapp"></i></a>
                                        <a href="javascript:void(0);" onclick="copyToClipboard('<?= $seo['title']; ?>', '<?= current_url(); ?>');"><i class="fas fa-link"></i></a>
                                        <a href="javascript:void(0);" onclick="shareToInstagram('<?= current_url(); ?>');"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row more-post align-items-center px-0 pb-30 mt-40">
                                <div class="col-lg-5 col-md-5 mb-20">
                                    <div class="prev-box">
                                        <div class="prev-content">
                                            <p class="fs-14">Prev Post</p>
                                            <h3>Tips On Minimalist</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 mb-20 text-start text-md-center">
                                    <a href="<?= site_url('blog') ?>"><img src="<?= base_url('assets/frontend/img/icon/eclips-3.png') ?>" alt="Icon"></a>
                                </div>
                                <div class="col-lg-5 col-md-5 mb-20">
                                    <div class="prev-box">
                                        <div class="prev-content text-start text-md-end">
                                            <p class="fs-14">Next Post</p>
                                            <h3>Less Is More</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-wrapper mt-10">
                                <div id="disqus_thread"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-right-widget mb-30">
                            <div class="widget widget-search mb-40">
                                <div class="widget-title-box pb-25 mb-30">
                                    <h4 class="widget-sub-title2 fs-20">Cari Artikel</h4>
                                </div>
                                <form class="subscribe-form mb-10" action="#">
                                    <input type="text" placeholder="Search your keyword...">
                                    <button class="subscribe-btn"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget widget-categories-list mb-40">
                                <div class="widget-title-box pb-25 mb-30">
                                    <h4 class="widget-sub-title2 fs-20">Category</h4>
                                </div>
                                <ul class="list-none">
                                    <?php foreach ($count as $key) : ?>
                                        <li><a href="<?= site_url('blog/kategori?filter=') . $key['kategori'] ?>"><?= $key['kategori'] ?> <span class="f-right"><?= $key['total_blog'] ?></span></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                            <div class="widget widget-post mb-40">
                                <div class="widget-title-box pb-25 mb-30">
                                    <h4 class="widget-sub-title2 fs-20">Last Post</h4>
                                </div>
                                <ul class="post-list">
                                    <li>
                                        <?php foreach ($recent as $key) : ?>
                                            <div class="blog-post mb-30">
                                                <!-- <a href="blog-details.html"><img src="assets/img/blog/post-1.jpg" alt="Post Img"></a> -->
                                                <div class="post-content">
                                                    <h6 class="mb-10"><a href="<?= site_url('blog/' . $key['kategori'] . '/' . $key['slug']) ?>"><?= $key['title'] ?></a></h6>
                                                    <span class="fs-14"><i class="fal fa-calendar-alt"></i> <?= date('d M Y', $key['date_created']) ?></span>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-categories-list mb-40">
                                <div class="widget-title-box pb-25 mb-30">
                                    <h4 class="widget-sub-title2 fs-20">Tags</h4>
                                </div>
                                <div class="tag-list">
                                    <a href="#">#Popular</a>
                                    <a href="#">#Design</a>
                                    <a href="#">#UX</a>
                                </div>
                            </div>
                            <div class="widget widget-add">
                                <!-- <h4 class="widget-sub-title2 fs-20 mb-30">Sponsor Adds</h4> -->
                                <div class="banner-content mb-10">
                                    <div class="img-fluid">
                                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794" crossorigin="anonymous"></script>
                                        <!-- Display BLog -->
                                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3971040661867794" data-ad-slot="2634432157" data-ad-format="auto" data-full-width-responsive="true"></ins>
                                        <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--footer-area start-->
    <footer class="heding-bg footer-area pt-100">
        <div class="container">
            <div class="row mb-15">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay=".1s">
                    <div class="footer__widget mb-30">
                        <h6 class="widget-title text-white pb-20 mb-35">PT. Sandemo Indo Teknologi</h6>
                        <p><?= $setting['about_website'] ?>
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

    <!-- disqus -->
    <script>
        var disqus_config = function() {
            this.page.url = 'https://sandemoindoteknologi.co.id/';
            this.page.identifier = 'https://sandemoindoteknologi.co.id/';
        };

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://sandemoit.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <script id="dsq-count-scr" src="//sandemoit.disqus.com/count.js" async></script>
</body>

</html>