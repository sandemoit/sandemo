<section class="blog-standard blog-details">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/bg-shape-1-1.png" class="section__bg-shape-1" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/bg-shape-1-2.png" class="section__bg-shape-2" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/bg-shape-1-3.png" class="section__bg-shape-3" alt="">
    <div class="section__bubble-1"></div><!-- /.section__bubble-1 -->
    <div class="section__bubble-2"></div><!-- /.section__bubble-2 -->
    <div class="section__bubble-3"></div><!-- /.section__bubble-3 -->
    <div class="section__bubble-4"></div><!-- /.section__bubble-4 -->
    <div class="section__bubble-5"></div><!-- /.section__bubble-5 -->
    <div class="section__bubble-6"></div><!-- /.section__bubble-6 -->
    <div class="section__bubble-7"></div><!-- /.section__bubble-7 -->
    <div class="section__bubble-8"></div><!-- /.section__bubble-8 -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details__main">
                    <h3><?= $seo['title'] ?></h3>
                    <div class="blog-two__meta">
                        <p><?= $seo['author'] ?></p>
                        <span>-</span>
                        <p><?= date('d/m/Y H:i', $seo['date_created']) ?> WIB</p>
                    </div><!-- /.blog-two__meta -->

                    <img src="<?= base_url('assets/frontend') ?>/images/blog/<?= $seo['gambar'] ?>" class="img-fluid" alt="<?= $seo['title'] ?>">

                    <?= $seo['isi'] ?>

                    <!-- google adsense -->
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794" crossorigin="anonymous"></script>
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-3971040661867794" data-ad-slot="9577430246"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <!-- end google adsense -->

                </div><!-- /.blog-details__main -->

                <div class="blog-details__meta">
                    <div class="blog-details__tags">
                        <span>Tags</span>
                        <a href="#">Marketing</a>
                        <a href="#">Business</a>
                        <a href="#">App Design</a>
                    </div><!-- /.blog-details__tags -->
                    <div class="blog-details__social">
                        <a href="https://www.facebook.com/dialog/share?app_id=769512741585393&display=popup&href=<?= urlencode(current_url()); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url=<?= urlencode(current_url()); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                        <a href="whatsapp://send?text=<?= $seo['title'], '%20|%20', urlencode(current_url()); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                        <a href="javascript:void(0);" onclick="copyToClipboard('<?= $seo['title']; ?>', '<?= current_url(); ?>');"><i class="fas fa-link"></i></a> <!-- Tombol Salin Link -->
                        <a href="javascript:void(0);" onclick="shareToInstagram('<?= current_url(); ?>');"><i class="fab fa-instagram"></i></a> <!-- Tombol Instagram -->
                    </div><!-- /.blog-details__social -->
                </div><!-- /.blog-details__meta -->
                <div class="blog-post__navigations">
                    <a class="blog-post__navigations-left" href="<?= $previus_post == null ? '' : site_url('blog/' . $previus_post['kategori'] . '/' . $previus_post['slug']) ?>">Previous Post <i class="far fa-angle-left"></i></a>
                    <a class="blog-post__navigations-right" href="<?= $next_post == null ? '' : site_url('blog/' . $next_post['kategori'] . '/' . $next_post['slug']) ?>">Next Post <i class="far fa-angle-right"></i></a>
                </div><!-- /.blog-post__navigations -->

            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar sidebar__right">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="text" placeholder="Search">
                            <button type="submit" class="sidebar__search-btn"><i class="fa fa-search"></i></button><!-- /.sidebar__search-btn -->
                        </form><!-- /.sidebar__search-form -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="list-unstyled sidebar__category-list">
                            <?php foreach ($category as $key) : ?>
                                <li>
                                    <a href="#"><?= $key['kategori'] ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul><!-- /.list-unstyled sidebar__category-list -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Recent Posts</h3>
                        <div class="sidebar__post-wrap">
                            <?php foreach ($recent as $key) : ?>
                                <div class="sidebar__post-single">
                                    <div class="sidebar__post-image">
                                        <img src="<?= site_url('assets/frontend/images/blog/') . $key['gambar'] ?>" alt="">
                                    </div><!-- /.sidebar__post-image -->
                                    <div class="sidebar__post-content">
                                        <h3><a href="<?= site_url('blog/' . $key['kategori'] . '/' . $key['slug']) ?>"><?= character_limiter($key['title'], 20) ?></a></h3>
                                        <span><?= date('d M Y ', $key['date_created']) ?></span>
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post-single -->
                            <?php endforeach ?>
                        </div><!-- /.sidebar__post-wrap -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__tags">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794" crossorigin="anonymous"></script>
                        <!-- sidebar blog -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3971040661867794" data-ad-slot="6287780287" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div><!-- /.sidebar__single -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-standard -->


<?php $this->load->view('template/newsletter'); ?>