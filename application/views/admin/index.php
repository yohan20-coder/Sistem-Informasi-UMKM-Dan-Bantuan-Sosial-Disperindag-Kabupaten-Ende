
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1> -->

          <h5 class="text-center text-success mb-3"><b>Informasi Jumlah Data Secara Realtime</b></h5>
   <!-- Content Row -->
   <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Kecamatan</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">Total : <?= $jm?></div>
        </div>
        <div class="col-auto">
          <!-- <i class="fas fa-book fa-2x text-gray-300"></i> -->
          <img class="img-thumbnail" src="<?= base_url('assets/');?>img/home.PNG" width="80" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Kelurahan</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">Total : <?= $jl?></div>
        </div>
        <div class="col-auto">
          <!-- <i class="fas fa-book fa-2x text-gray-300"></i> -->
          <img class="img-thumbnail" src="<?= base_url('assets/');?>img/home.PNG" width="80" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Sentra IKM</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">Total : <?=$sn?></div>
        </div>
        <div class="col-auto">
          <img class="img-thumbnail" src="<?= base_url('assets/');?>img/sentra.PNG" width="80" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Usaha Kecil Menengah</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">Total : <?=$ush?> </div>
        </div>
        <div class="col-auto">
          <img class="img-thumbnail" src="<?= base_url('assets/');?>img/usaha.PNG" width="80" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
</div> 

         
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

</div>