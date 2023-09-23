<div class="col-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-lg-flex">
                <div>
                    <h5 class="mb-0">Kategori Blog</h5>
                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto">
                        <a href="" class="btn waves-effect waves-light btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">+&nbsp; New Kategori</a>
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
                <table id="myTable" class="table table-striped border">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-center">Kategori Name</th>
                            <th class="text-center">Slug</th>
                            <th class="text-center">Description</th>
                            <th class="text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($kategori_blog as $kb) : ?>
                            <tr>
                                <td width="12%" class="text-center"><?= $no++; ?></td>
                                <td class="text-center"><?= $kb['kategori']; ?></td>
                                <td class="text-center"><?= $kb['slug']; ?></td>
                                <td class="text-center"><?= $kb['description']; ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-warning btn-icon-split" data-bs-toggle="modal" data-bs-target="#edit<?= $kb['id'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-pencil"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $kb['id'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal add -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambah">Add New Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <?php echo form_open_multipart('admin/setting/kategori_blog'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" type="text" id="kategori" name="kategori" placeholder="Kategori Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" id="description" name="description" placeholder="Description">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn waves-effect waves-light btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn waves-effect waves-light btn-info">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit -->
<?php foreach ($kategori_blog as $kb) : ?>
    <div class="modal fade" id="edit<?= $kb['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit<?= $kb['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit<?= $kb['id'] ?>">Edit Kategori Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="<?php echo base_url('admin/setting/editkategoriBlog') ?>" method="POST">
                    <div class="modal-body">
                        <input class="form-control" type="hidden" id="id" name="id" value="<?= $kb['id']; ?>">
                        <div class="form-group">
                            <input class="form-control" type="text" id="kategori" name="kategori" value="<?= $kb['kategori']; ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" id="description" name="description" value="<?= $kb['description']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn waves-effect waves-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn waves-effect waves-light btn-info">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- modal hapus -->
<?php foreach ($kategori_blog as $kb) : ?>
    <div class="modal fade" id="hapusmodal<?= $kb['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $kb['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $kb['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data Kategori : <b><?= $kb['kategori']; ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <a class="btn bg-gradient-danger" href="<?= base_url('admin/setting/deleteKategoriBlog/') . $kb['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>