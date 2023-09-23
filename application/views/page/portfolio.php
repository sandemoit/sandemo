<div class="card">
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="d-lg-flex">
            <h4 class="card-title">Table <?= $title; ?></h4>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto">
                    <a href="<?= site_url('admin/page/addportfolio') ?>" class="btn waves-effect waves-light btn-primary">+&nbsp; New Portfolio</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="myTable" class="table table-striped border">
                <div class="card">
                    <thead>
                        <!-- start row -->
                        <tr>
                            <th>#</th>
                            <th width="12%">Gambar</th>
                            <th>Title</th>
                            <th>Clients</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr> <!-- end row -->
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($portfolio as $p) : ?>
                            <tr>
                                <td><?= $no++; ?></a></td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <img class="crop" width="100%" class="avatar avatar-sm me-3" src="<?= base_url('assets/frontend/images/portfolio/') . $p['image']; ?>" alt="user">
                                    </div>
                                </td>
                                <td><?= $p['title'] ?></td>
                                <td><?= $p['client'] ?></td>
                                <td><?= $p['kategori'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-icon-split" data-bs-toggle="modal" data-bs-target="#edit<?= $p['id'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-pencil"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $p['id'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </div>
            </table>
        </div>
    </div>
</div>

<!-- Modal edit -->
<?php foreach ($portfolio as $p) : ?>
    <div class="modal fade" id="edit<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit<?= $p['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit<?= $p['id'] ?>">Edit Menu Name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url('admin/page/editportfolio') ?>" method="POST">
                    <input class="form-control" type="hidden" id="id" name="id" value="<?= $p['id']; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" id="title" name="title" value="<?= $p['title']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="client">Nama Client</label>
                            <input class="form-control" type="text" id="client" name="client" value="<?= $p['client']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_kategori">Categori</label>
                            <select class="form-select col-12" name="id_kategori" id="id_kategori">
                                <?php foreach ($kportfolio as $kp) : ?>
                                    <option <?= $p['id_kategori'] == $kp['id'] ? 'selected' : '' ?> value="<?= $kp['id']; ?>"><?= $kp['kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn waves-effect waves-light btn-info">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- modal hapus -->
<?php foreach ($portfolio as $p) : ?>
    <div class="modal fade" id="hapusmodal<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $p['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $p['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data Porfolio</b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('admin/page/deleteportfolio/') . $p['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>