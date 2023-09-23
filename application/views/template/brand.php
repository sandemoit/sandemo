<section class="brand-one">
    <div class="container">
        <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme" data-options='{ "items": 5, "margin": 95, "smartSpeed": 700, "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": false, "nav": false, "dots": false, "responsive": {"0": { "margin": 20, "items": 2 }, "575": { "margin": 30, "items": 3 },"767": { "margin": 40, "items": 4 },   "991": { "margin": 70, "items": 4 }, "1199": { "margin": 95, "items": 5 } } }'>
            <?php $i = 1;
            foreach ($brand as $b) { ?>
                <div class="item">
                    <img src="<?= base_url('assets/frontend/images/brand/') . $b['image'] ?>" alt="brand">
                </div><!-- /.item -->
            <?php $i++;
            } ?>
        </div><!-- /.brand-one__carousel owl-carousel thm__owl-carousel owl-theme -->
    </div>
</section>