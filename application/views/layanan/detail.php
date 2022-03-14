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


          <table class="table"  width="100%" cellspacing="0">

                      <tr>
                          <td>Nama Kecamatan</td>
                          <td>: <?= $sm['nm_kec'] ?></td>
                      </tr>
                      <tr>
                          <td>Kode Kecamatan</td>
                          <td>: <?= $sm['kd_kec'] ?></td>
                      </tr>
                      <tr>
                          <td>Nama Kelurahan</td>
                          <td>: <?= $sm['nm_kel'] ?></td>
                      </tr>
                      <tr>
                          <td>Kode Kelurahan</td>
                          <td>: <?= $sm['kd_kel'] ?></td>
                      </tr>
                      <tr>
                          <td>Nama Sentra</td>
                          <td>: <?= $sm['nm_sentra'] ?></td>
                      </tr>
                      <tr>
                          <td>Bentuk Sentra</td>
                          <td>: <?= $sm['bn_sentra'] ?></td>
                      </tr>
                      <tr>
                          <td>Nama Usaha</td>
                          <td>: <?= $sm['nm_usaha'] ?></td>
                      </tr>
                      <tr>
                          <td>Pemilik Usaha</td>
                          <td>: <?= $sm['pemilik'] ?></td>
                      </tr>
                      <tr>
                          <td>Alamat Usaha</td>
                          <td>: <?= $sm['alamat_usaha'] ?></td>
                      </tr>
                      <tr>
                          <td>No.Hp</td>
                          <td>: <?= $sm['hp'] ?></td>
                      </tr>
                      <tr>
                          <td>Nama KLBI</td>
                          <td>: <?= $sm['nm_klbi'] ?></td>
                      </tr>
                      <tr>
                          <td>Kode KLBI</td>
                          <td>: <?= $sm['kd_klbi'] ?></td>
                      </tr>
                      <tr>
                          <td>NPWP</td>
                          <td>: <?= $sm['npwp'] ?></td>
                      </tr>
                      <tr>
                          <td>No.IUT</td>
                          <td>: <?= $sm['no_iut'] ?></td>
                      </tr>
                      <tr>
                          <td>Tahun IUT</td>
                          <td>: <?= $sm['thn_iut'] ?></td>
                      </tr>
                      <tr>
                          <td>No.AMDAL</td>
                          <td>: <?= $sm['no_amdal'] ?></td>
                      </tr>
                      <tr>
                          <td>Tahun AMDAL</td>
                          <td>: <?= $sm['thn_amdal'] ?></td>
                      </tr>
                      <tr>
                        
                      </tr>
                  
                </table>
               
                </div>
              </div>

            </div>

        
            </div>
          </div>

</div>



