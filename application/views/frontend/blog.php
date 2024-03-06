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

    <section class="news-feed-area pt-105 pb-75 pt-md-60 pb-md-25 pt-xs-50 pb-xs-20">
        <div class="container">
            <div class="row">
                <?php foreach ($blog as $key) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blogs mb-30">
                            <div class="blogs__thumb mb-35">
                                <a href="<?= site_url('blog/' . $key['slug_kategori'] . '/' . $key['slug']) ?>">
                                    <img src="<?= base_url('assets/frontend/img/blog/thumbnail/') . $key['gambar'] ?>" alt="Blog Img" class="blog-image">
                                </a>
                            </div>
                            <span class="tag"><a href="<?= site_url('blog/kategori?filter=') . $key['kategori'] ?>"><?= $key['kategori'] ?></a></span>
                            <div class="blogs__meta mb-1">
                                <span><?= format_indo(date('Y-m-d', $key['date_created'])) ?> / By </span>
                                <span class="author"><?= $key['author'] ?></span>
                            </div>
                            <h5><a class="blog-title" href="<?= site_url('blog/' . $key['slug_kategori'] . '/' . $key['slug']) ?>"><?= character_limiter($key['title'], 70) ?></a></h5>
                        </div>
                    </div>
                <?php endforeach ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blogs mb-30">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794" crossorigin="anonymous"></script>
                        <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-3971040661867794" data-ad-slot="9577430246"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30 mt-20">
                <div class="col-lg-6">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </section>
</main>