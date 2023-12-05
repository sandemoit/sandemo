<div class="col-lg-4 col-xlg-3 col-md-5">
    <div class="card">
        <div class="card-body">
            <center class="m-t-30"> <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle" width="150">
                <h4 class="card-title m-t-10"><?= $user['name']; ?></h4>
                <h6 class="card-subtitle">Active Since <?= date('d F Y', $user['date_created']); ?></h6>
                <!-- <div class="row text-center justify-content-md-center">
                    <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                            <font class="font-medium">254</font>
                        </a></div>
                    <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                            <font class="font-medium">54</font>
                        </a></div>
                </div> tes-->
            </center>
        </div>
        <div>
            <hr>
        </div>
        <div class="card-body"> <small class="text-muted">Email address </small>
            <h6><?= $user['email']; ?></h6> <small class="text-muted p-t-30 db">Phone</small>
            <h6>+62<?= $user['nohp']; ?></h6> <small class="text-muted p-t-30 db">Address</small>
            <h6>Indonesia</h6>
            <div class="map-box">
                <iframe src="<?= $user['maps']; ?>" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
            <small class="text-muted p-t-30 db">Social Profile</small>
            <br>
            <a href="https://facebook.com/<?= $user['facebook'] ?>" class="btn btn-circle btn-secondary"><i class="icons-Facebook-2"></i></a>
            <a href="https://instagram.com/<?= $user['instagram'] ?>" class="btn btn-circle btn-secondary"><i class="icons-Instagram"></i></a>
            <a href="https://youtube.com/<?= $user['youtube'] ?>" class="btn btn-circle btn-secondary"><i class="icons-Youtube"></i></a>
        </div>
    </div>
</div>
<div class="col-lg-8 col-xlg-9 col-md-7">
    <?= $this->session->flashdata('message'); ?>
    <div class="card">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs profile-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="true">Settings</a> </li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#changepassword" role="tab" aria-selected="false">Change Password</a> </li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#socialmedia" role="tab" aria-selected="false">Social Media</a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="settings" role="tabpanel">
                <div class="card-body">
                    <?php echo form_open_multipart('admin/user'); ?>
                    <input class="form-control" id="id" name="id" type="hidden" value="<?= $user['id']; ?>">
                    <div class="form-group">
                        <label class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                            <input class="form-control" name="name" id="name" type="text" value="<?= $user['name']; ?>">
                            <?= form_error('name', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input class="form-control" name="email" id="email" type="text" value="<?= $user['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Phone No</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                            <input type="text" class="form-control" name="nohp" id="nohp" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1" value="<?= $user['nohp']; ?>">
                            <?= form_error('nohp', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Link GMaps</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="ti-location-arrow"></i></span>
                            <input class="form-control" name="maps" id="maps" type="text" value="<?= $user['maps']; ?>">
                            <?= form_error('maps', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group row">
                            <label class="custom-file-label col-sm-2">Picture</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success text-white">Update Profile</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <!-- change password -->
            <div class="tab-pane" id="changepassword" role="tabpanel">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="<?= base_url('admin/user/changepassword'); ?>" method="post">
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input class="form-control" id="current_password" name="current_password" type="password" placeholder="Current Password">
                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input class="form-control" id="new_password1" name="new_password1" type="password" placeholder="New Password">
                                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input class="form-control" name="new_password2" name="new_password2" type="password" placeholder="Konfirmasi Password">
                                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">Update Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- social media -->
            <div class="tab-pane" id="socialmedia" role="tabpanel">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="<?= base_url('admin/user/socialmedia'); ?>" method="post">
                        <input class="form-control" id="id" name="id" type="hidden" value="<?= $user['id']; ?>">
                        <div class="form-group">
                            <label class="col-md-12">Facebook</label>
                            <div class="col-md-12">
                                <input class="form-control" id="facebook" name="facebook" type="text" value="<?= $user['facebook']; ?>" placeholder="sandimaulidika">
                                <?= form_error('facebook', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Youtube</label>
                            <div class="col-md-12">
                                <input class="form-control" id="youtube" name="youtube" type="text" value="<?= $user['youtube']; ?>" placeholder="sandimaulidika">
                                <?= form_error('youtube', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Instagram</label>
                            <div class="col-md-12">
                                <input class="form-control" id="instagram" name="instagram" type="text" value="<?= $user['instagram']; ?>" placeholder="sandimaulidika">
                                <?= form_error('instagram', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">Update Socmed</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>