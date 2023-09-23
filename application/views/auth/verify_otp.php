<section id="wrapper">
    <div class="login-register" style="background-image:url(<?php echo base_url('assets'); ?>/img/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <?php echo $this->session->flashdata('message') ?>
                <form class="form-horizontal form-material" id="loginform" method="POST" action="<?php echo site_url('admin/auth/verify_otp') ?>">
                    <h3 class="text-center m-b-20"><?= $title; ?></h3>
                    <p class="mb-3 text-center"><em class="text-primary">Please enter the OTP that was sent to your WhatsApp number.</em></p>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input type="text" class="form-control form-control-lg" id="otp_code" name="otp_code">
                            <?= form_error('otp_code', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-xs-12 p-b-20">
                            <button class="btn w-100 btn-lg btn-info btn-rounded text-white" type="submit">Verify OTP</button>
                        </div>
                    </div>
                </form>
                <a href="<?= site_url('admin/auth/resend_otp') ?>" class="mb-3 text-center">Resend Code OTP</a>
            </div>
        </div>
    </div>
</section>