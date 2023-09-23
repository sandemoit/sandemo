<section class="portfolio-grid">
    <div class="container">
        <div class="block-title text-center">
            <p class="color-2"><span>Portfolio</span></p>
            <h3>View Some of Our Latest Works <br> <span>& Case Studies for Clients</span></h3>
        </div><!-- /.block-title text-center -->
        <ul class="portfolio-filter list-unstyled post-filter ">
            <li data-filter=".filter-item" class="active"><span>All</span></li>
            <?php foreach ($kportfolio as $kh) : ?>
                <li data-filter=".<?= $kh['kategori'] ?>"><span><?= $kh['kategori'] ?></span></li>
            <?php endforeach; ?>
        </ul>
        <div class="row high-gutters masonary-layout filter-layout">
            <?php foreach ($portfolio as $p) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 filter-item masonary-item  <?= $p['kategori'] ?>">
                    <div class="portfolio-one__single">
                        <div class="portfolio-one__image">
                            <img class="crop-portfolio" src="<?= base_url('assets/frontend/images/portfolio/') . $p['image'] ?>" alt="">
                            <a class="img-popup" href="<?= base_url('assets/frontend/images/portfolio/') . $p['image'] ?>"><i class="fal fa-plus"></i></a>
                        </div><!-- /.portfolio-one__image -->
                        <div class="portfolio-one__content">
                            <h3><?= $p['title'] ?></h3>
                            <p><?= $p['client'] ?></p>
                        </div><!-- /.portfolio-one__content -->
                    </div><!-- /.portfolio-one__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
            <?php endforeach; ?>
            <div class="col-lg-4 col-md-6 col-sm-12 filter-item masonary-item  <?= $p['kategori'] ?>">
                <div class="portfolio-one__single">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794" crossorigin="anonymous"></script>
                    <!-- service -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3971040661867794" data-ad-slot="6388160121" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div><!-- /.portfolio-one__single -->
            </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
        </div><!-- /.row -->
        <div class="text-center">
            <a href="#" class="thm-btn portfolio-grid__more-btn"><span>Load More</span></a><!-- /.thm-btn portfolio-grid__more-btn -->
        </div><!-- /.text-center -->
    </div><!-- /.container -->
</section><!-- /.portfolio-grid -->

<section class="brand-one">
    <div class="container">
        <?php $this->load->view('template/brand') ?>
    </div><!-- /.container -->
</section><!-- /.brand-one -->

<?php $this->load->view('template/kontak') ?>