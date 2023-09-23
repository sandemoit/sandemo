<section class="blog-grid">
    <div class="container">
        <div class="row high-gutters">
            <?php foreach ($blog as $b) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img class="crop-artikel" src="<?= site_url('assets/frontend/images/blog/thumbnail/') . $b['gambar'] ?>" alt="">
                            <a href="<?= site_url('blog/' . $b['kategori'] . '/' . $b['slug']) ?>"><i class="fal fa-plus"></i></a>
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <div class="blog-one__meta">
                                <a><?= $b['author'] ?></a>
                                <span>-</span>
                                <a><?= date('d M Y ', $b['date_created']) ?></a>
                            </div><!-- /.blog-one__meta -->
                            <h3><a href="<?= site_url('blog/' . $b['kategori'] . '/' . $b['slug']) ?>"><?= character_limiter($b['title'], 60); ?></a></h3>
                            <a href="<?= site_url('blog/' . $b['kategori'] . '/' . $b['slug']) ?>" class="thm-btn blog-one__btn"><span>Read More</span></a>
                            <!-- /.thm-btn blog-one__btn -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
            <?php endforeach; ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-one__single">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794" crossorigin="anonymous"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-3971040661867794" data-ad-slot="9577430246"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div><!-- /.blog-one__single -->
            </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
        </div><!-- /.row -->

        <div class="post-pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><i class="far fa-angle-right"></i></a>
        </div><!-- /.post-pagination -->

    </div><!-- /.container -->
</section><!-- /.blog-grid -->

<?php $this->load->view('template/newsletter'); ?>