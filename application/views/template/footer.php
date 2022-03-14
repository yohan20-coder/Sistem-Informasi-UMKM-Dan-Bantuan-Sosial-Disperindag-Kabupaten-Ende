<!-- Footer -->
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Web Andi <?= date('Y');?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda Yakin Ingin Logout...!</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>

<!-- <script>   
    $('#notif').slideDown('slow').delay(3000).slideUp('slow');
</script> -->

<!-- js sweet alert -->
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script> -->


  <script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/');?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- fancybox -->
  <script src="<?= base_url('assets/');?>fancybox/js/jquery.fancybox.js"></script>
  <script>
    $(document).ready(function(){
      $('.fancybox').fancybox();
    });
  </script>




<script src="<?= base_url('assets/');?>select/dist/js/select2.min.js"></script>
      <script>
          $(document).ready(function(){
            $('.js-example-basic-single').select2({
              width: '100%',
              placeholder : 'Pilih'
            });
          });
      </script>


  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets/');?>js/demo/datatables-demo.js"></script>

  <!-- membuat fungsi jquery ajax untuk nangkap dan simpan data dari checked -->
  <script>

     $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });

    $('.form-check-input').on('click', function(){
      const menuid = $(this).data('menu');      //variabel utk nankap data id menu dan role_id
      const roleid = $(this).data('role');

      $.ajax({
        url : "<?= base_url('admin/ubahaccess') ?>",
        type :'post',
        data :{
          menuid:menuid,        //fungsi ajax ini bertugas mngirim parameter menuid dan role id ke function ubah access
          roleid:roleid
        },
        success:function(){
          document.location.href="<?= base_url('admin/roleaccess/') ?>" + roleid;
        }
      })
    })
  </script>

  <!-- chain dropdown kecamatan -->
<script>
    $(document).ready(function(){
      $('#kec').change(function(){
        var kode = $(this).val();
        $.ajax({
          url : "<?= base_url();?>/layanan/get_kec",
          method : "POST",
          dataType : "JSON",
          data : {
               kode : kode
          },
          success: function(array){
            var kode2 ='';
            var kecamatan ='';
            for(let index = 0; index < array.length; index++){
              kode2 += "<option>" + array[index].kode + "</option>"
              kecamatan += "<option>" + array[index].kecamatan + "</option>"
            }
            $('#kode2').html(kode2);
            $('#kecamatan').html(kecamatan);
          }

        })
      })
    })
</script>

<!-- chain dropdown kelurahan -->
<script>
    $(document).ready(function(){
      $('#kel').change(function(){
        var kode = $(this).val();
        $.ajax({
          url : "<?= base_url();?>/layanan/get_kel",
          method : "POST",
          dataType : "JSON",
          data : {
               kode : kode
          },
          success: function(array){
            var kode3 ='';
            // var kecamatan ='';
            for(let index = 0; index < array.length; index++){
              kode3 += "<option>" + array[index].kode + "</option>"
              kelurahan += "<option>" + array[index].kelurahan + "</option>"
            }
            $('#kode3').html(kode3);
            $('#kelurahan').html(kelurahan);
          }

        })
      })
    })
</script>

<!-- chain dropdown sentra -->
<script>
    $(document).ready(function(){
      $('#sen').change(function(){
        var kode = $(this).val();
        $.ajax({
          url : "<?= base_url();?>/layanan/get_sen",
          method : "POST",
          dataType : "JSON",
          data : {
               kode : kode
          },
          success: function(array){
            var bentuk ='';
            // var kecamatan ='';
            for(let index = 0; index < array.length; index++){
              bentuk += "<option>" + array[index].bentuk + "</option>"
              nm_sentra += "<option>" + array[index].nm_sentra + "</option>"
            }
            $('#bentuk').html(bentuk);
            $('#nm_sentra').html(nm_sentra);
          }

        })
      })
    })
</script>

<!-- chain dropdown usaha -->
<script>
    $(document).ready(function(){
      $('#ush').change(function(){
        var id = $(this).val();
        $.ajax({
          url : "<?= base_url();?>/layanan/get_ush",
          method : "POST",
          dataType : "JSON",
          data : {
               id : id
          },
          success: function(array){
            var pemilik ='';
            var alamat ='';
            var hp ='';
            var nm_usaha ='';
            for(let index = 0; index < array.length; index++){
              nm_usaha += "<option>" + array[index].nm_usaha + "</option>"
              pemilik += "<option>" + array[index].pemilik + "</option>"
              alamat += "<option>" + array[index].alamat + "</option>"
              hp += "<option>" + array[index].hp + "</option>"
            }
            $('#pemilik').html(pemilik);
            $('#alamat').html(alamat);
            $('#hp').html(hp);
            $('#usaha').html(nm_usaha);
          }

        })
      })
    })
</script>

<!-- chain dropdown KLBI -->
<script>
    $(document).ready(function(){
      $('#klbi').change(function(){
        var kode = $(this).val();
        $.ajax({
          url : "<?= base_url();?>/layanan/get_klbi",
          method : "POST",
          dataType : "JSON",
          data : {
               kode : kode
          },
          success: function(array){
            var kode4 ='';
            var nama ='';
            for(let index = 0; index < array.length; index++){
              kode4 += "<option>" + array[index].kode + "</option>"
              nama += "<option>" + array[index].nama + "</option>"
            }
            $('#kode4').html(kode4);
            $('#nm_klbi').html(nama);
          }

        })
      })
    })
</script>


</body>

</html>