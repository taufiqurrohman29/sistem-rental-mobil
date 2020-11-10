<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="alert alert-info" role="alert">
        <i class="fas fa-fw fa-file"></i><b> LAPORAN</b>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
                        <div class="form-group">
                            <label>Dari Tanggal</label>
                            <input type="date" name="dari" class="form-control">
                            <?php echo form_error('dari', '<div class="text-small text-danger">', '</div>') ?>

                        </div>
                        <div class="form-group">
                            <label>Sampai Tanggal</label>
                            <input type="date" name="sampai" class="form-control">
                            <?php echo form_error('sampai', '<div class="text-small text-danger">', '</div>') ?>
                            
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>
                    </form>


                    
                </div>
            </div>
        </div>
    </div>
</div>