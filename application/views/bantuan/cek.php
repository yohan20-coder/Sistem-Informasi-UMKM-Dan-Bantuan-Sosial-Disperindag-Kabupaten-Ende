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

             <div class="jumbotron jumbotron-fluid" style="background : rgb(240, 240, 236) !important">
            <div class="container">
                <h4 class="display-5 text-danger">Peringatan Penginputan Data Penerimaan Bantuan</h4>
                <p class="display-6 text-danger">Fitur ini merupakan fitur penegecekan Data Penerima Bantuan sebelum dilakukan penginputan Data Ke Sistem. Silakan Input Data Penerima Bantuan Agar Di Lakukan Pengecekan Di Sistem. </p>
            </div>
            </div>
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('bantuan/cek') ?>

            
               <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <!-- pesan berhasil tambah data -->
           <!-- <div id="notif"> <?php $this->session->flashdata('message');?></div> -->
           
           <!-- <?php
            // if($this->session->flashdata('message')){
            //    echo '<div class="alert alert-success" role="alert">
            //         <h4 class="alert-heading">Pesan Peringatan</h4>
            //         <p>Setelah di cek di Sistem ternyata data yang diinput telah menerima dana bantuan pada tahun anggaran yang sama. Klik Lanjutkan untuk tetap menginput</p>
            //         <hr>
            //         <a href="tambah" class="text-danger">Lanjutkan</a>
            //         </div>';
            // }
           
           ?> -->
           
              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">NIK Penerima Bantuan</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nik" id="nik" value="<?= set_value('nama') ?>">
                  <?= form_error('nik','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Nama Penerima Bantuan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama') ?>">
                  <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

            
              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Tahun Anggaran</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="tahun" id="tahun" value="<?= set_value('tahun') ?>">
                  <?= form_error('tahun','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
                

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">Cek Data</button>
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