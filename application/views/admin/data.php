<div class="col-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-lg-flex">
                <div>
                    <h5 class="mb-0">Data Developer</h5>
                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto">
                        <a href="<?= site_url('admin/admin/tambah') ?>" class="btn waves-effect waves-light btn-primary">+&nbsp; New Developer</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger " role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 10px;">#</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">No Handphone</th>
                            <th class="text-center">Email</th>
                            <th class="text-center" style="width: 15%;">Role</th>
                            <th class="text-center">Status</th>
                            <th class="text-center" style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data as $key) : ?>
                            <?php if ($key['role']) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <img width="60px" height="60px" class="avatar avatar-sm me-3 img-circle" src="<?= base_url('assets/img/profile/') . $key['image']; ?>" alt="user"> <?= $key['name']; ?>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="https://wa.me/62<?= $key['nohp']; ?>">0<?= $key['nohp']; ?></a>
                                    </td>
                                    <td class="text-center">
                                        <?= $key['email']; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $role[$key['role_id']]; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($key['is_active'] == 1) : ?>
                                            <span class="label label-success">Active</span>
                                        <?php else : ?>
                                            <span class="label label-danger">Isactive</span>
                                        <?php endif ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $key['id'] ?>">
                                            <span class="icon text-white-50">
                                                <i class="ti-trash"></i>
                                            </span>
                                            <span class="text">Delete</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- modal hapus -->
<?php foreach ($data as $key) : ?>
    <div class="modal fade" id="hapusmodal<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $key['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $key['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data Akun : <b><?= $key['name']; ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('admin/admin/userdelete/') . $key['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>