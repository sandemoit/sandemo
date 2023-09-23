<div class="col-sm-12">
    <div class="card card-body">
        <h4 class="card-title">Form <?= $title; ?></h4>
        <hr>
        <form class="form-horizontal mt-4" method="post" enctype="multipart/form-data" action="<?= site_url('admin/page/doEditBlog') ?>">
            <div class="form-group">
                <label class="form-label">Title</span></label>
                <input type="text" name="id" hidden value="<?= $id ?>">
                <input type="text" class="form-control" id="title" name="title" placeholder="Insert title" value="<?= $blog->title ?>">
                <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label class="form-label">Isi Berita</span></label>
                <div class="card-body">
                    <textarea id="editor" name="content"><?= $blog->isi ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="example-email">Slug</span></label>
                <input type="slug" id="slug" name="slug" value="<?= $blog->slug ?>" class="form-control" placeholder="example-slug">
                <?= form_error('slug', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label class="form-label">Meta</label>
                <textarea class="form-control" name="meta" id="meta" rows="5"><?= $blog->meta ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail111" class="form-label">Level</label>
                <select class="form-select col-12" id="kategori" name="kategori">
                    <option selected="">Choose Category</option>
                    <?php foreach ($kategori as $k) : ?>
                        <option <?= $blog->id_kategori == $k['id'] ? 'selected' : '' ?> value="<?= $k['id'] ?>"><?= $k['kategori'] ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-6 md-6">
                <div class="card-body">
                    <h4 class="card-title">Upload Thumbnail</h4>
                    <label for="input-file-now" class="form-label">Your so fresh input file</label>
                    <input type="file" id="gambar" name="gambar" class="dropify" value="<?= $blog->gambar ?>" />
                </div>
                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button type="submit" class="btn btn-success text-white"><i class="fa fa-check"></i> Submit</button>
            <a href="javascript:void(0);" onclick="goBack();" class="btn btn-dark text-white">Cancel</a>
        </form>
    </div>
</div>