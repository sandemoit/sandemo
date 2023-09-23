<div class="col-sm-12">
    <?= $this->session->flashdata('message'); ?>
    <div class="card card-body">
        <h4 class="card-title">Form <?= $title; ?></h4>
        <hr>
        <form class="form-horizontal mt-4" enctype="multipart/form-data" method="post" action="<?= site_url('admin/page/doAddPortfolio') ?>">
            <div class="form-group">
                <label class="form-label">Title</span></label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label class="form-label">Client Name</label>
                <input type="text" name="client" class="form-control" placeholder="Client">
            </div>
            <div class="form-group">
                <label for="example-email">Tanggal</span></label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label">Input Category</label>
                <select class="form-select col-12" name="kategori" id="inlineFormCustomSelect">
                    <option selected="">Choose Category</option>
                    <?php foreach ($kategori_portfolio as $p) : ?>
                        <option value="<?= $p['id'] ?>"><?= $p['kategori'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-md-6 md-6">
                <div class="card-body">
                    <h4 class="card-title">Upload Thumbnail</h4>
                    <label for="input-file-now" class="form-label">Your so fresh input file</label>
                    <input type="file" id="input-file-now" name="gambar" class="dropify" />
                </div>
            </div>
            <button type="submit" class="btn btn-success text-white"><i class="fa fa-check"></i> Submit</button>
            <a href="<?= site_url('admin/page/portfolio') ?>" class="btn btn-dark text-white">Cancel</a>
        </form>
    </div>
</div>