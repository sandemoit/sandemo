<div class="col-sm-12">
    <div class="card card-body">
        <h4 class="card-title">Form <?= $title; ?></h4>
        <hr>
        <form class="form-horizontal mt-4" method="post" enctype="multipart/form-data" action="doAddkarir">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">Name Job</span></label>
                        <input type="text" class="form-control" id="name_job" name="name_job">
                        <?= form_error('name_job', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Location Job</span></label>
                        <input type="text" class="form-control" id="location_job" name="location_job">
                        <?= form_error('location_job', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail111" class="form-label">Jenis Pekerjaan</label>
                        <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan">
                        <?= form_error('jenis_pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date Job</span></label>
                        <input type="date" class="form-control" id="limit_job" name="limit_job">
                        <?= form_error('limit_job', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Description</span></label>
                <div class="card-body">
                    <textarea id="editor" name="description" id="description" rows="5"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success text-white"><i class="fa fa-check"></i> Submit</button>
            <a href="javascript:void(0);" onclick="goBack();" class="btn btn-dark text-white">Cancel</a>
        </form>
    </div>
</div>