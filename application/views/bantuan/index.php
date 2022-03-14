
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

          <!-- <a href="<?= base_url('kecamatan/tambah'); ?>" class="btn btn-primary btn-sm mb-3">Tambah Data</a> -->
          <!-- <a href="<?= base_url('arsip/pdfm');?>" class="btn btn-success btn-sm mb-3">Print Pdf</a> -->
          <a href="<?= base_url('bantuan/excel');?>" class="btn btn-success btn-sm mb-3">Export Excel</a>

    <style>
        table tr th{
            font-size: 10pt;
            color: black;
            font-weight: bold;
            /* background-color: rgb(0, 99, 99);
            color: aliceblue; */
        }
        table tr td{
            /* background-color: rgb(255, 136, 136); */
            font-size: 10pt;
            color: black;
            font-weight: bold;
        }
    </style>

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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($tampil as $sm): ?>
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
                          <td>
                              <a href="<?= base_url();?>bantuan/edit/<?= $sm['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                              <a href="<?= base_url();?>bantuan/hapus/<?= $sm['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus');">Hapus</a>
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