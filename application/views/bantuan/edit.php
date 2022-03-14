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

        <form action="<?= base_url();?>bantuan/edit/<?= $edit['id'] ?>" method="post">

              <input type="hidden" class="form-control" name="id" value="<?= $edit['id'];?>">
              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">NIK Penerima Bantuan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nik" value="<?= $edit['nik'];?>">
                  <?= form_error('nik','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Nama Penerima Bantuan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" value="<?= $edit['nama'];?>">
                  <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Nama Usaha</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nm_usaha" value="<?= $edit['nm_usaha'];?>">
                  <?= form_error('nm_usaha','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Nama Bantuan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nm_bantuan" value="<?= $edit['nm_bantuan'];?>">
                  <?= form_error('nm_bantuan','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Jenis Bantuan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="jenis" placeholder="Deskripsi Bantuan" value="<?= $edit['jenis_bantuan'];?>">
                  <?= form_error('jenis','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Total Bantuan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="total" value="<?= $edit['total'];?>">
                  <?= form_error('total','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Tanggal Terimah Bantuan</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tgl">
                  <?= form_error('tgl','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Tahun Anggaran</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="tahun" value="<?= $edit['thn_anggaran'];?>">
                  <?= form_error('tahun','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
                

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">Edit Data</button>
                            </div>
                         </div>
         		
            </form>
             
         	</div>
         </div>       
      </div>

       </div>       
      </div>  

      <!-- End of Main Content -->

</div>