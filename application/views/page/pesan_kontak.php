<div class="card">
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="d-lg-flex">
            <h4 class="card-title">Table <?= $title; ?></h4>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto">
                    <a href="<?= site_url('admin/page/sendmessage') ?>" class="btn waves-effect waves-light btn-primary">+&nbsp; Send Message</a>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Whatsapp</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        <!-- end row -->
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pesan as $key) : ?>
                            <tr>
                                <td><?= $no++; ?></a></td>
                                <td><?= $key['name'] ?></td>
                                <td><?= $key['email'] ?></td>
                                <td><?= $key['whatsapp'] ?></td>
                                <td><?= $key['subject'] ?></td>
                                <td>
                                    <?php if ($key['aksi'] == 1) : ?>
                                        <span class="label label-success">Sudah Dibalas</span>
                                    <?php else : ?>
                                        <span class="label label-danger">Belum Dibalas</span>
                                    <?php endif ?>
                                </td>
                                <td>
                                    <?php if ($key['aksi'] == 0) : ?>
                                        <a href="javascript:;" class="btn btn-success btn-icon-split" data-bs-toggle="modal" data-bs-target="#editmmodal<?= $key['id'] ?>">
                                            <span class=" icon text-white-50">
                                                <i class="ti-pencil"></i>
                                            </span>
                                            <span class="text">Balas</span>
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
</div>


<!-- Modal edit -->
<?php foreach ($pesan as $key) : ?>
    <div class="modal fade" id="editmmodal<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editmmodal<?= $key['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmmodal<?= $key['id'] ?>">Balas Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url('admin/page/dobalas') ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="idPesan" value="<?= $key['id'] ?>">
                            <input class="form-control" readonly type="text" id="whatsapp" name="whatsapp" value="<?= $key['whatsapp']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Pesan User</label>
                            <textarea class="form-control" disabled><?= $key['pesan'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Balas Pesan</label>
                            <textarea class="form-control" name="pesan" id="pesan" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn waves-effect waves-light btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn waves-effect waves-light btn-info">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>