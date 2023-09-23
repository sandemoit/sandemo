<div class="col-lg-6">
    <div class="card card-body">
        <?= $this->session->flashdata('message'); ?>
        <h4 class="card-title"><?= $title; ?></h4>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <form action="tambah" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail111" class="form-label">User Name</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Username" value="<?= set_value('name') ?>">
                        </div>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail12" class="form-label">Email address</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class="ti-email"></i></span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?= set_value('email') ?>">
                        </div>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" form-group">
                        <label for="exampleInputEmail12" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon11"><i class="ti-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail111" class="form-label">Level</label>
                        <select class="form-control" id="role_id" name="role_id">
                            <option value="">-- Pilih Role --</option>
                            <?php foreach ($role as $r) : ?>
                                <option value="<?= $r['id'] ?>"><?= $r['role'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-success me-2 text-white">Submit</button>
                    <a href="javascript:void(0);" onclick="goBack();" class="btn btn-dark text-white">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>