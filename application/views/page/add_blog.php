<div class="row">
    <div class="col-sm-12">
        <?= $this->session->flashdata('message'); ?>
        <div class="card card-body">
            <h4 class="card-title">Form <?= $title; ?></h4>
            <hr>
            <form class="form-horizontal mt-4" method="post" enctype="multipart/form-data" action="doAddBlog">
                <div class="row">
                    <div class="col-6">
                        <input type="hidden" class="form-control" name="author" value="<?= $user['name'] ?>">
                        <div class="form-group">
                            <label class="form-label">Title</span></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Insert title" value="">
                            <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Isi Berita</span></label>
                            <div class="card-body">
                                <textarea id="editor" name="isi" id="isi" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="card-body">
                                <h4 class="card-title">Upload Thumbnail</h4>
                                <label for="input-file-now" class="form-label">Your so fresh input file</label>
                                <input type="file" id="gambar" name="gambar" class="dropify" />
                            </div>
                            <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="example-email">Slug</span></label>
                            <input type="slug" id="slug" name="slug" class="form-control" placeholder="example-slug">
                            <?= form_error('slug', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Meta</label>
                            <textarea class="form-control" name="meta" id="meta" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail111" class="form-label">Category</label>
                            <select class="form-select col-12" id="kategori" name="kategori">
                                <option selected="">Choose Category</option>
                                <?php foreach ($kblog as $kb) : ?>
                                    <option value="<?= $kb['id'] ?>"><?= $kb['kategori'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success text-white"><i class="fa fa-check"></i> Submit</button>
                <a href="<?= site_url('admin/page/blog') ?>" class="btn btn-dark text-white">Cancel</a>
            </form>
        </div>
    </div>
</div>