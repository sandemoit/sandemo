<div class="card">
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="d-lg-flex">
            <h4 class="card-title">Table <?= $title; ?></h4>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto">
                    <a href="<?= site_url('admin/page/addkarir') ?>" class="btn waves-effect waves-light btn-primary">+&nbsp; New karir</a>
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
                            <th>Name Job</th>
                            <th>Location</th>
                            <th>Jenis Pekerjaan</th>
                            <th>Date</th>
                            <th>Limit</th>
                            <th>Aksi</th>
                        </tr>
                        <!-- end row -->
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($karir as $key) : ?>
                            <tr>
                                <td><?= $no++; ?></a></td>
                                <td><?= $key['name_job'] ?></td>
                                <td><?= $key['location_job'] ?></td>
                                <td><?= $key['jenis_pekerjaan'] ?></td>
                                <td><?= $key['date_job'] ?></td>
                                <td><?= $key['limit_job'] ?></td>
                                <td>
                                    <a href="<?= site_url('admin/page/editkarir/') . $key['id'] ?>" class="btn btn-warning btn-icon-split">
                                        <span class=" icon text-white-50">
                                            <i class="ti-pencil"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $key['id'] ?>">
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

<!-- modal hapus -->
<?php foreach ($karir as $key) : ?>
    <div class="modal fade" id="hapusmodal<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $key['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $key['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data Akun : <?= $key['name_job'] ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('admin/page/deletekarir/') . $key['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>