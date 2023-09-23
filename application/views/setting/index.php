<div class="col">
    <?= $this->session->flashdata('message'); ?>
    <div class="card">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs profile-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#general" role="tab" aria-selected="true">General</a> </li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#integrasi" role="tab" aria-selected="false">Integrasi</a> </li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#ahu" role="tab" aria-selected="false">AHU</a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="general" role="tabpanel">
                <div class="card-body">
                    <form action="setting" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" id="id" name="id" type="hidden" value="<?= $setting['id']; ?>">
                                <div class="form-group">
                                    <label for="judul" class="form-label">Judul Website</label>
                                    <input type="text" class="form-control" id="judul_website" name="judul_website" value="<?= $setting['judul_website'] ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="slogan" class="form-label">Slogan Website</label>
                                    <input type="text" class="form-control" id="slogan_website" name="slogan_website" value="<?= $setting['slogan_website'] ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="judul" class="form-label">About Footer & Header</label>
                                    <textarea type="text" class="form-control" rows="2" id="about_hf" name="about_hf"><?= htmlentities($setting['about_hf']); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <tex for="judul" class="form-label">About Website</tex>
                                    <textarea type="text" class="form-control" rows="4" id="about_website" name="about_website"><?= htmlentities($setting['about_website']); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <tex for="judul" class="form-label">Alamat</tex>
                                    <textarea type="text" class="form-control" rows="2" id="alamat" name="alamat"><?= htmlentities($setting['alamat']); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul" class="form-label">Facebook</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11"><i class="ti-facebook"></i></span>
                                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" value="<?= $setting['facebook'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="judul" class="form-label">Gmail</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11"><i class="ti-google"></i></span>
                                        <input type="text" class="form-control" id="gmail" name="gmail" placeholder="Gmail" value="<?= $setting['gmail'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="judul" class="form-label">Instagram</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11"><i class="ti-instagram"></i></span>
                                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" value="<?= $setting['instagram'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="judul" class="form-label">LinkedIn</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11"><i class="ti-linkedin"></i></span>
                                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="LinkedIn" value="<?= $setting['linkedin'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="judul" class="form-label">No HP/WhatsApp</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11"><i class="ti-mobile"></i></span>
                                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No HP/WhatsApp" value="<?= $setting['nohp'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="judul" class="form-label">Logo Perusahaan</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11"><i class="ti-image"></i></span>
                                        <input type="file" name="logo" id="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary text-white">Save</button>
                    </form>
                </div>
            </div>

            <!-- integrasi -->
            <div class="tab-pane" id="integrasi" role="tabpanel">
                <div class="card-body">
                    <form action="<?php echo base_url('admin/setting/doIntegrasi') ?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" id="id" name="id" type="hidden" value="<?= $integrasi['id']; ?>">
                                <div class="form-group">
                                    <label for="judul" class="form-label">API WhatsApp</label>
                                    <input type="text" class="form-control" id="wagw" name="wagw" value="<?= $integrasi['wagw'] ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="judul" class="form-label">URL API WhatsApp</label>
                                    <input type="text" class="form-control" id="url_api" name="url_api" value="<?= $integrasi['url_api'] ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul" class="form-label">AHU Username</label>
                                    <input type="text" class="form-control" id="ahu_username" name="ahu_username" value="<?= $integrasi['ahu_username'] ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="judul" class="form-label">AHU Password</label>
                                    <input type="text" class="form-control" id="ahu_password" name="ahu_password" value="<?= $integrasi['ahu_password'] ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary text-white">Save</button>
                    </form>
                </div>
            </div>

            <!-- ahu -->
            <div class="tab-pane" id="ahu" role="tabpanel">
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" id="id" name="id" type="hidden" value="<?= $setting['id']; ?>">
                                <div class="form-group">
                                    <label for="judul" class="form-label">Get Token</label>
                                    <div class="row">
                                        <div class="col-9">
                                            <input type="text" disabled class="form-control" id="getToken" name="getToken">
                                        </div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary text-white">Generate</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul" class="form-label">Input Token</label>
                                    <div class="row">
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="getToken" name="getToken">
                                        </div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary text-white">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary text-white">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>