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

            <form action="<?= base_url();?>layanan/edit/<?= $edit['id'] ?>" method="post">

            <input type="hidden" class="form-control" name="id"  value="<?= $edit['id'];?>">

              <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Nama Kecamatan</label>
                    <div class="col-sm-10">
                        <select name="kec" id="kec" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($kec as $tm): ?>
                                <option value="<?= $tm['kode'] ?>"
                                <?php if($tm['kecamatan'] == $edit['nm_kec']){
                                    echo 'selected';
                                    }?>
                                ><?= $tm['kecamatan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kec','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode Kecamatan</label>
                    <div class="col-md-10">
                    <select name="kode2" id="kode2" class="form-control" readonly>
                            <option value="<?= $edit['kd_kec'] ?>"><?= $edit['kd_kec'] ?></option>                     
                        </select>
                        <?= form_error('kode2','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <!-- <label class="col-sm-2 col-form-label">Kecamatan</label> -->
                    <div class="col-md-10">
                    <select hidden name="nm_kec" id="kecamatan" class="form-control" readonly>
                            <option value="<?= $edit['nm_kec'] ?>"><?= $edit['nm_kec'] ?></option>                     
                        </select>
                        <?= form_error('nm_kec','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Nama Kelurahan</label>
                    <div class="col-sm-10">
                        <select name="kel" id="kel" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($kel as $tm): ?>
                                <option value="<?= $tm['kode'] ?>"
                                <?php if($tm['kelurahan'] == $edit['nm_kel']){
                                    echo 'selected';
                                    }?>
                                ><?= $tm['kelurahan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kel','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode Kelurahan</label>
                    <div class="col-md-10">
                    <select name="kode3" id="kode3" class="form-control" readonly>
                            <option value="<?= $edit['kd_kel'] ?>"><?= $edit['kd_kel'] ?></option>                     
                        </select>
                        <?= form_error('kode3','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <!-- <label class="col-sm-2 col-form-label">Kelurahan</label> -->
                    <div class="col-md-10">
                    <select hidden name="nm_kel" id="kelurahan" class="form-control" readonly>
                            <option value="<?= $edit['nm_kel'] ?>"><?= $edit['nm_kel'] ?></option>                     
                        </select>
                        <?= form_error('nm_kel','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Nama Sentra</label>
                    <div class="col-sm-10">
                        <select name="sen" id="sen" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($sen as $tm): ?>
                                <option value="<?= $tm['kode'] ?>"
                                <?php if($tm['nm_sentra'] == $edit['nm_sentra']){
                                    echo 'selected';
                                    }?>
                                ><?= $tm['nm_sentra'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('sen','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bentuk Usaha</label>
                    <div class="col-md-10">
                    <select name="bentuk" id="bentuk" class="form-control" readonly>
                            <option value="<?= $edit['bn_sentra'] ?>"><?= $edit['bn_sentra'] ?></option>                     
                        </select>
                        <?= form_error('bentuk','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <!-- <label class="col-sm-2 col-form-label">Sentra</label> -->
                    <div class="col-md-10">
                    <select hidden name="nm_sentra" id="nm_sentra" class="form-control" readonly>
                            <option value="<?= $edit['nm_sentra'] ?>"><?= $edit['nm_sentra'] ?></option>                     
                        </select>
                        <?= form_error('nm_sentra','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Nama Usaha</label>
                    <div class="col-sm-10">
                        <select name="ush" id="ush" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($ush as $tm): ?>
                                <option value="<?= $tm['id'] ?>"
                                <?php if($tm['nm_usaha'] == $edit['nm_usaha']){
                                    echo 'selected';
                                    }?>
                                ><?= $tm['nm_usaha'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('ush','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Pemilik Usaha</label>
                    <div class="col-md-10">
                    <select name="pemilik" id="pemilik" class="form-control" readonly>
                            <option value="<?= $edit['pemilik'] ?>"><?= $edit['pemilik'] ?></option>                     
                        </select>
                        <?= form_error('pemilik','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat Usaha</label>
                    <div class="col-md-10">
                    <select name="alamat" id="alamat" class="form-control" readonly>
                            <option value="<?= $edit['alamat_usaha'] ?>"><?= $edit['alamat_usaha'] ?></option>                     
                        </select>
                        <?= form_error('alamat','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No.Hp</label>
                    <div class="col-md-10">
                    <select name="hp" id="hp" class="form-control" readonly>
                            <option value="<?= $edit['hp'] ?>"><?= $edit['hp'] ?></option>                     
                        </select>
                        <?= form_error('hp','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <!-- <label class="col-sm-2 col-form-label">Usaha</label> -->
                    <div class="col-md-10">
                    <select hidden name="usaha" id="usaha" class="form-control" readonly>
                            <option value="<?= $edit['nm_usaha'] ?>"><?= $edit['nm_usaha'] ?></option>                     
                        </select>
                        <?= form_error('usaha','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Nama KBLI</label>
                    <div class="col-sm-10">
                        <select name="klbi" id="klbi" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($kl as $tm): ?>
                                <option value="<?= $tm['kode'] ?>"
                                <?php if($tm['nama'] == $edit['nm_klbi']){
                                    echo 'selected';
                                    }?>
                                ><?= $tm['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('klbi','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode KBLI</label>
                    <div class="col-md-10">
                    <select name="kode4" id="kode4" class="form-control" readonly>
                            <option value="<?= $edit['kd_klbi'] ?>"><?= $edit['kd_klbi'] ?></option>                     
                        </select>
                        <?= form_error('kode4','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <!-- <label class="col-sm-2 col-form-label">KBLI</label> -->
                    <div class="col-md-10">
                    <select hidden name="nm_klbi" id="nm_klbi" class="form-control" readonly>
                            <option value="<?= $edit['nm_klbi'] ?>"><?= $edit['nm_klbi'] ?></option>                     
                        </select>
                        <?= form_error('nm_klbi','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                <label for="npwp" class="col-sm-2 col-form-label">NPWP</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="npwp" value="<?= $edit['npwp'] ?>">
                  <?= form_error('npwp','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="npwp" class="col-sm-2 col-form-label">No.IUT</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="noiut" value="<?= $edit['no_iut']?>">
                  <?= form_error('noiut','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="npwp" class="col-sm-2 col-form-label">Tahun IUT</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="thniut" value="<?= $edit['thn_iut']?>">
                  <?= form_error('thniut','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="npwp" class="col-sm-2 col-form-label">No. AMDAL</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="noamdal" value="<?= $edit['no_amdal'] ?>">
                  <?= form_error('noamdal','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="npwp" class="col-sm-2 col-form-label">Tahun AMDAL</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="thnamdal" value="<?= $edit['thn_amdal'] ?>">
                  <?= form_error('thnamdal','<small class="text-danger pl-3">', '</small>'); ?>
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