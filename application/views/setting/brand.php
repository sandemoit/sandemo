<div class="col-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-lg-flex">
                <div>
                    <h5 class="mb-0">Data Brand</h5>
                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto">
                        <a href="" class="btn waves-effect waves-light btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">+&nbsp; New Brand</a>
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
                            <th class="text-center">Brand Name</th>
                            <th class="text-center">Brand Logo</th>
                            <th class="text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($brand as $b) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td class="text-center"><?= $b['brand_name']; ?></td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <img width="250" class="avatar avatar-sm me-3" src="<?= base_url('assets/frontend/img/brand/') . $b['image'] ?>" alt="<?= $b['brand_name']; ?>">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $b['id'] ?>">
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
                <h5 class="modal-title" id="tambah">Add New Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <?php echo form_open_multipart('admin/setting/brand'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" type="text" id="brand_name" name="brand_name" placeholder="Brand Name">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Brand Logo</label>
                    <input class="form-control" type="file" id="image" name="image">
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

<!-- modal hapus -->
<?php foreach ($brand as $b) : ?>
    <div class="modal fade" id="hapusmodal<?= $b['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $b['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $b['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data Brand : <b><?= $b['brand_name']; ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <a class="btn bg-gradient-danger" href="<?= base_url('admin/setting/deletebrand/') . $b['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>