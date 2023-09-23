<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?> - <?= $home['judul_website'] ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $seo['meta'] ?>">

    <meta name="keywords" content="PT. Sandemo Indo Teknologi, Sandemo Indo Teknologi, Sandemo Indo, Sandemo Jasa Pembuatan Website Profesional Palembang, Digital Marketing, Layanan Digital Marketing, Jasa Pembuatan Website Profesional Palembang, Jasa Website Palembang, Jasa Web Murah, Web Promotion, Jasa Maintenance Website,jasa perbaikan website,jasa desain website, Jasa Pembuatan Logo, Jasa Company Profile, Brand Identity Design, Web Portal Berita, Web Sekolah, Web Personal, Jasa Web Professional, Creative Digital, Startup, Jasa Sosial Media Management, Facebook Ads,jasa seo palembang, jasa pembuatan website, perbaikan web, Jasa Pembuatan Website Profesional Palembang, jasa web palembang, desain website palembang">

    <!-- meta -->
    <!-- <meta name="Googlebot" content="noindex"> -->
    <meta name="author" content="<?= $seo['author'] ?>">
    <meta name="copyright" content="<?= $home['judul_website'] ?>">
    <meta property="og:title" content="<?= $title . ' | ' . $home['judul_website']; ?>">
    <meta property="og:type" content="blog">
    <meta property="og:locale" content="id_ID">
    <meta property="og:description" content="<?= character_limiter($seo['meta']) ?>">
    <meta property="og:image" content="<?= base_url('assets/frontend/images/blog/') . $seo['gambar'] ?>">
    <meta property="og:image:secure_url" content="<?= base_url('assets/frontend/images/blog/') . $seo['gambar'] ?>">
    <meta property="og:url" content="<?= current_url(); ?>">
    <meta property="og:description" content="<?= $seo['meta'] ?>">

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
                "url" => base_url('assets/frontend/images/blog/') . $seo['gambar']
            )
        ),
        "headline" => $home['judul_website'],
        "image" => base_url('assets/frontend/images/blog/') . $seo['gambar'],
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

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/frontend') ?>/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/frontend') ?>/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/frontend') ?>/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url('assets/frontend') ?>/images/favicons/site.webmanifest">

    <!-- font & animasi -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/animate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/hover-min.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/owl.theme.default.min.css">

    <!-- Template Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/frontend') ?>/css/responsive.css">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H7DNKN" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div> -->

    <div class="page-wrapper">