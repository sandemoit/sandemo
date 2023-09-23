<div class="card">
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <div class="d-lg-flex">
            <h4 class="card-title">Table <?= $title; ?></h4>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto">
                    <a href="<?= site_url('admin/page/addblog') ?>" class="btn waves-effect waves-light btn-primary">+&nbsp; New Blog</a>
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
                            <th>Atuhor</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                        <!-- end row -->
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($blog as $b) : ?>
                            <tr>
                                <td><?= $no++; ?></a></td>
                                <td><?= $b['author'] ?></td>
                                <td><a target="_blank" href="<?= site_url('blog/' . $b['kategori'] . '/' . $b['slug']) ?>"><?= $b['title'] ?></a></td>
                                <td><?= date('Y-m-d H:i:s', $b['date_created']) ?></td>
                                <td><?= $b['kategori'] ?></td>
                                <td>
                                    <a href="<?= site_url('admin/page/editBlog/') . $b['id'] ?>" class="btn btn-warning btn-icon-split">
                                        <span class=" icon text-white-50">
                                            <i class="ti-pencil"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
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
                </div>
            </table>
        </div>
    </div>
</div>

<!-- modal hapus -->
<?php foreach ($blog as $b) : ?>
    <div class="modal fade" id="hapusmodal<?= $b['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $b['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $b['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data Akun : </b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('admin/page/deleteblog/') . $b['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>