
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"></h1> -->

          <div class="row">
            <div class="col-lg-12">
               <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
                </div>
                <div class="card-body col-lg-12">

                  <!-- pesan error -->
        <?php form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <!-- pesan berhasil tambah data -->
           <div id="notif"> <?php $this->session->flashdata('message');?></div>
           
           <?php
            if($this->session->flashdata('message')){
               echo '<div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Pesan Peringatan</h4>
                    <p>Setelah di cek di Sistem ternyata data yang diinput telah menerima dana bantuan pada tahun anggaran yang sama. Klik Lanjutkan untuk tetap menginput</p>
                    <hr>
                    <a href="tambah" class="text-danger">Lanjutkan</a>
                    </div>';
            }
           
           ?>
    <style>
        table tr th{
            font-size: 10pt;
            background-color: rgb(0, 99, 99);
            color: aliceblue;
        }
        table tr td{
            background-color: rgb(255, 136, 136);
            font-size: 10pt;
            color: black;
            font-weight: bold;
        }
    </style>

        <!-- pesan berhasil tambah data -->
        <?= $this->session->flashdata('message');?>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Penerima</th>
                            <th scope="col">Nik Penerima</th>
                            <th scope="col">Nama Usaha</th>
                            <th scope="col">Nama Bantuan</th>
                            <th scope="col">Jenis Bantuan</th>
                            <th scope="col">Total Anggaran</th>
                            <th scope="col">Tanggal Terimah Bantuan</th>
                            <th scope="col">Tahun Anggaran</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($cek as $sm): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sm['nama'] ?></td>
                          <td><?= $sm['nik'] ?></td>
                          <td><?= $sm['nm_usaha'] ?></td>
                          <td><?= $sm['nm_bantuan'] ?></td>
                          <td><?= $sm['jenis_bantuan'] ?></td>
                          <td><?= $sm['total'] ?></td>
                          <td><?= $sm['tgl'] ?></td>
                          <td><?= $sm['thn_anggaran'] ?></td>
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