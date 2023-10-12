<div class="col-sm-12">
    <?= $this->session->flashdata('message'); ?>
    <div class="card card-body">
        <h4 class="card-title">Form <?= $title; ?></h4>
        <hr>
        <form class="form-horizontal mt-4" method="post" enctype="multipart/form-data" action="doSendMessage">
            <div class="form-group">
                <label for="exampleInputEmail111" class="form-label">WhatsApp</label>
                <select class="form-select col-12" id="whatsapp" name="whatsapp">
                    <option selected disabled>Choose Number</option>
                    <option value="all">Semua Kontak</option>
                    <?php foreach ($kontak as $key) : ?>
                        <option value="<?= $key['whatsapp'] ?>"><?= $key['name'] . ' | ' . $key['whatsapp'] ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('whatsapp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail111" class="form-label">Type Message</label>
                <select class="form-select col-12" id="" name="">
                    <option value="text">Text</option>
                    <option value="image">Image</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Message</label>
                <textarea class="form-control" name="pesan" id="pesan" rows="5"></textarea>
            </div>
            <div class="form-group col-md-6 md-6">
                <div class="card-body">
                    <h4 class="card-title">Upload Thumbnail</h4>
                    <label for="input-file-now" class="form-label">Your so fresh input file</label>
                    <input type="file" id="gambar" name="gambar" class="dropify" />
                </div>
            </div>
            <button type="submit" class="btn btn-success text-white"><i class="fa fa-check"></i> Submit</button>
            <a href="<?= site_url('admin/page/pesan') ?>" class="btn btn-dark text-white">Back</a>
        </form>
    </div>
</div>