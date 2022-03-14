
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"></h1> -->

          <div class="row">
            <div class="col-lg-12">

               <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

                  <!-- pesan error -->
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

        <!-- pesan berhasil tambah data -->
        <?= $this->session->flashdata('message');?>
          <div class="btn-group btn-sm mb-3" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              Cetak Biasa
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a href="<?= base_url('layanan/cet_semua');?>" target="_blank" class="dropdown-item">Cetak Semua</a>
              <a href="<?= base_url('layanan/cet_item');?>" target="_blank" class="dropdown-item">Cetak Per-Item</a>
            </div>
          </div>

          <div class="btn-group btn-sm mb-3" role="group">
            <button id="btnGroupDrop2" type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              Cetak Excel
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a href="<?= base_url('layanan/cet_excel');?>" class="dropdown-item">Cetak Semua</a>
              <a href="<?= base_url('layanan/excel_item');?>" target="_blank" class="dropdown-item">Cetak Per-Item</a>
            </div>
          </div>

   

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kecamatan</th>
                            <th scope="col">Nama Kelurahan</th>
                            <th scope="col">Nama Sentra</th>
                            <!-- <th scope="col">Bentuk Sentra</th> -->
                            <th scope="col">Nama Usaha</th>
                            <th scope="col">Pemilik Usaha</th>
                            <!-- <th scope="col">Nama KLBI</th> -->
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($tampil as $sm): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sm['nm_kec'] ?></td>
                          <td><?= $sm['nm_kel'] ?></td>
                          <td><?= $sm['nm_sentra'] ?></td>
                          <td><?= $sm['nm_usaha'] ?></td>
                          <td><?= $sm['pemilik'] ?></td>
                          <td>
                              <a href="<?= base_url();?>layanan/detail/<?= $sm['id'] ?>" class="btn btn-warning btn-sm">Detail</a>
                              <a href="<?= base_url();?>layanan/edit/<?= $sm['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                              <a href="<?= base_url();?>layanan/hapus/<?= $sm['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus');">Hapus</a>
                          </td>
                      </tr>
                  <?php $no++ ?>
                  <?php endforeach ?>

                    </tbody>
                </table>
               
                </div>
              </div>

            </div>

        
            </div>
          </div>

</div>