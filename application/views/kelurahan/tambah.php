<!-- Begin Page Content -->
<div class="container-fluid">
              <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1> -->

         <div class="row">
         	<div class="col-lg-12">
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('kelurahan/tambah') ?>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Kode Kecamatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="kode">
                  <?= form_error('kode','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Nama Kecamatan</label>
                    <div class="col-sm-10">
                        <select name="kec" id="kec"  class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($tam as $tm): ?>
                                <option value="<?= $tm['kecamatan'] ?>"><?= $tm['kecamatan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kec','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Nama Kelurahan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="kel">
                  <?= form_error('kel','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

                

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">Tambah Data</button>
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