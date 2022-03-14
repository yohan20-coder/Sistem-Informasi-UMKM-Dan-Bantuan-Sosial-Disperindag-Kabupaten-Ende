<!-- Begin Page Content -->
<div class="container-fluid">
              <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Cetak Data FKM Per-Kecamatan</h6>
                </div>
                <div class="card-body col-lg-12">
         <div class="row">
         	<div class="col-lg-12">
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('layanan/excel_kec') ?>
              <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Nama Kecamatan</label>
                    <div class="col-sm-10">
                        <select name="kec" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($kec as $tm): ?>
                                <option value="<?= $tm['kecamatan'] ?>"><?= $tm['kecamatan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kec','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">Download Excel</button>
                            </div>
                         </div>
         		
             <?php echo form_close() ?>
             
         	</div>
         </div>       
      </div>
</div><br>

      <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Cetak Data FKM Per-Kelurahan</h6>
                </div>
                <div class="card-body col-lg-12">
         <div class="row">
         	<div class="col-lg-12">
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('layanan/excel_kel') ?>

              <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Nama Kelurahan</label>
                    <div class="col-sm-10">
                        <select name="kel" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($kel as $tm): ?>
                                <option value="<?= $tm['kelurahan'] ?>"><?= $tm['kelurahan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kel','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">Download Excel</button>
                            </div>
                         </div>
         		
             <?php echo form_close() ?>
             
         	</div>
         </div>       
      </div>
      </div><br>

      <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Cetak Data FKM Per-Sentra</h6>
                </div>
                <div class="card-body col-lg-12">
         <div class="row">
         	<div class="col-lg-12">
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('layanan/excel_sen') ?>

              <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Nama Sentra</label>
                    <div class="col-sm-10">
                        <select name="sen" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($sen as $tm): ?>
                                <option value="<?= $tm['nm_sentra'] ?>"><?= $tm['nm_sentra'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('sen','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">Download Excel</button>
                            </div>
                         </div>
         		
             <?php echo form_close() ?>
             
         	</div>
         </div>       
      </div>

       </div>       
      </div>  

      <!-- End of Main Content -->

</div>