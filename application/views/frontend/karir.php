<section class="portfolio-grid">
    <div class="container">
        <div class="block-title text-center">
            <h3>Open job positions</h3>
            <p>Find your dream job in Sandemo Indo Teknologi.</p>
        </div><!-- /.block-title text-center -->
    </div>
    <div class="row justify-content-center job">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <?php foreach ($careers as $career) : ?>
                <div class="single-job-list media ">
                    <div class="media-body">
                        <h6><?= $career['name_job'] ?></h6>
                        <span class="job-street"><?= format_indo(date('Y-m-d', strtotime($career['date_job']))) . ' - ' . format_indo(date('Y-m-d', strtotime($career['limit_job']))) ?></span>
                    </div>
                    <?php if (date('Y-m-d') > $career['limit_job']) : ?>
                        <span><em>Closed</em></span>
                    <?php else : ?>
                        <a href="<?php echo base_url('karir/apply/' . urlencode($career['name_job'])); ?>" class="thm-btn">Apply Now</a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>