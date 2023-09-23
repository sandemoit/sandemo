<div class="card">
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="d-lg-flex">
            <h5 class="mb-0"><?php echo $title; ?></h5>
        </div>
    </div>
    <div class="table-responsive">
        <table id="myTable" class="table table-striped border">
            <div class="card">
                <thead>
                    <tr>
                        <th style="width: 10px;">#</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Job Apply</th>
                        <th class="text-center">Religion</th>
                        <th class="text-center">University</th>
                        <th class="text-center">Edukasi Stage</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($kandidat as $key) : ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td class="text-center">
                                <?= $key['full_name']; ?>
                            </td>
                            <td class="text-center">
                                <span class="label label-warning"><?= $key['name_job']; ?></span>
                            </td>
                            <td class="text-center">
                                <?= $key['religion']; ?>
                            </td>
                            <td class="text-center">
                                <?= $key['university']; ?>
                            </td>
                            <td class="text-center">
                                <?= $key['education_stage']; ?>
                            </td>
                            <td class="text-center">
                                <?php if ($key['status'] == 'Sudah Verifikasi') : ?>
                                    <span class="label label-success">Sudah Verifikasi</span>
                                <?php else : ?>
                                    <span class="label label-danger">Belum Verifikasi</span>
                                <?php endif ?>
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-icon-split" data-bs-toggle="modal" data-bs-target="#info<?= $key['id'] ?>">
                                    <span class="icon text-white-50">
                                        <i class="ti-eye"></i>
                                    </span>
                                    <span class="text">Info Detail</span>
                                </a>
                                <?php if ($key['status'] == 'Belum Verifikasi') : ?>
                                    <a href="<?= base_url('admin/admin/verifikasi_kandidat/' . $key['id']) ?>" class="btn btn-success btn-icon-split"">
                                        <span class=" icon text-white-50">
                                        <i class="ti-check"></i>
                                        </span>
                                        <span class="text">Verifikasi</span>
                                    </a>
                                <?php else : ?>
                                    <!-- kosong -->
                                <?php endif ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </div>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

<!-- modal hapus -->
<?php foreach ($kandidat as $key) : ?>
    <div class="modal fade" id="info<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="info<?= $key['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="info<?= $key['id'] ?>">Detail Kandidat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value="<?= $key['full_name'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" value="<?= $key['date_birth'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" value="<?= $key['place_birth'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" value="<?= $key['email'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" value="<?= $key['whatsapp'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control" type="text" value="<?= $key['religion'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" value="<?= $key['university'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" value="<?= $key['education_stage'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" value="<?= $key['address'] ?>" disabled>
                            </div>
                            <div class="form-group">
                                <p><a href="<?= base_url('assets/files/cv/' . $key['cv']) ?>" class="text-danger">Download CV PDF</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light" data-bs-dismiss="modal">Close</button>
                    <?php if ($key['status'] == 'Belum Verifikasi') : ?>
                        <a class="btn waves-effect waves-light btn-success" href="<?= base_url('admin/admin/verifikasi_kandidat/') . $key['id']; ?>">Verifikasi</a>
                    <?php else : ?>
                        <!-- kosong -->
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>