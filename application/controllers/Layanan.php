<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model kecamatan
      $this->load->model('Layanan_model');
      $this->load->model('Kec_model','kec');
      $this->load->model('Kel_model','kel');
      $this->load->model('Sentra_model','sen');
      $this->load->model('Usaha_model','ush');
      $this->load->model('Klbi_model','kl');
      $this->load->model('Layanan_model','layanan');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model kecamatan
      $data['kec'] = $this->kec->tampil();
      //memanggil model kelurahan
      $data['kel'] = $this->kel->tampil();
      //memanggil model sentra
      $data['sen'] = $this->sen->tampil();
      //memanggil model usaha
      $data['ush'] = $this->ush->tampil();
      //memanggil model KLBI
      $data['kl'] = $this->kl->tampil();

      $this->form_validation->set_rules('kec','Kec','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kode2','Kode2','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kel','Kel','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kode3','Kode3','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('sen','Sen','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('bentuk','Bentuk','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('ush','Ush','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('pemilik','Pemilik','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('alamat','Alamat','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('hp','Hp','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('klbi','Klbi','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kode4','Kode4','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('npwp','Npwp','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('noiut','Noiut','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('thniut','Thniut','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('noamdal','Noamdal','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('thnamdal','Thnamdal','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      
    //  var_dump($data['tampil']);die;
    if($this->form_validation->run()==false){
      $data['judul'] = 'Halaman Form Data Umum FKM';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('layanan/index',$data);
      $this->load->view('template/footer');
    }else{

      $data = [
        'nm_kec' => $this->input->post('nm_kec'),
        'kd_kec' => $this->input->post('kode2'),
        'nm_kel' => $this->input->post('nm_kel'),
        'kd_kel' => $this->input->post('kode3'),
        'nm_sentra' => $this->input->post('nm_sentra'),
        'bn_sentra' => $this->input->post('bentuk'),
        'nm_usaha' => $this->input->post('usaha'),
        'pemilik' => $this->input->post('pemilik'),
        'alamat_usaha' => $this->input->post('alamat'),
        'hp' => $this->input->post('hp'),
        'nm_klbi' => $this->input->post('nm_klbi'),
        'kd_klbi' => $this->input->post('kode4'),
        'npwp' => $this->input->post('npwp'),
        'no_iut' => $this->input->post('noiut'),
        'thn_iut' => $this->input->post('thniut'),
        'no_amdal' => $this->input->post('noamdal'),
        'thn_amdal' => $this->input->post('thnamdal')
      ];

      $this->db->insert('tbl_fkm',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
      redirect('layanan/master');

    }
  }

    public function get_kec()
    {
      $id = $this->input->post('kode');
      $data = $this->Layanan_model->get_kec($id);
      echo json_encode($data);
    }
    
    public function get_kel()
    {
      $id = $this->input->post('kode');
      $data = $this->Layanan_model->get_kel($id);
      echo json_encode($data);
    }

    public function get_sen()
    {
      $id = $this->input->post('kode');
      $data = $this->Layanan_model->get_sen($id);
      echo json_encode($data);
    }

    public function get_ush()
    {
      $id = $this->input->post('id');
      $data = $this->Layanan_model->get_ush($id);
      echo json_encode($data);
    }

    public function get_klbi()
    {
      $id = $this->input->post('kode');
      $data = $this->Layanan_model->get_klbi($id);
      echo json_encode($data);
    }

    public function master()
    {
       //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       //memanggil model kecamatan
       $data['tampil'] = $this->layanan->tampil();
       
     //  var_dump($data['tampil']);die;
       $data['judul'] = 'Halaman Data FKM';
       $this->load->view('template/header',$data);
       $this->load->view('template/sidebar',$data);
       $this->load->view('template/topbar',$data);
       $this->load->view('layanan/master',$data);
       $this->load->view('template/footer');
    }

    public function hapus($id)
    {
      $this->Layanan_model->hapus($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('layanan/master');
    }

    public function cet_semua()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model kecamatan
      $data['tampil'] = $this->layanan->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data FKM';
      $this->load->view('layanan/cet_semua',$data);
    }

    public function cet_item()
    {
       //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //memanggil model kecamatan
      $data['kec'] = $this->kec->tampil();
      //memanggil model kelurahan
      $data['kel'] = $this->kel->tampil();
      //memanggil model sentra
      $data['sen'] = $this->sen->tampil();
       
     //  var_dump($data['tampil']);die;
       $data['judul'] = 'Halaman Data Per-Item FKM';
       $this->load->view('template/header',$data);
       $this->load->view('template/sidebar',$data);
       $this->load->view('template/topbar',$data);
       $this->load->view('layanan/hal_item',$data);
       $this->load->view('template/footer');
    }

    public function item_kec()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $kec = $this->input->post('kec');

      $data['tampil'] = $this->db->get_where('tbl_fkm',['nm_kec'=>$kec])->result_array();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data FKM';
      $this->load->view('layanan/cet_item',$data);
    }

    public function item_kel()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $kel = $this->input->post('kel');

      $data['tampil'] = $this->db->get_where('tbl_fkm',['nm_kel'=>$kel])->result_array();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data FKM';
      $this->load->view('layanan/cet_item',$data);
    }

    public function item_sen()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $sen = $this->input->post('sen');

      $data['tampil'] = $this->db->get_where('tbl_fkm',['nm_sentra'=>$sen])->result_array();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data FKM';
      $this->load->view('layanan/cet_item',$data);
    }

    public function detail($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['sm'] = $this->Layanan_model->detail($id);

        $data['judul'] = 'Halaman Detail Data FKM';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('layanan/detail',$data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       //memanggil model kecamatan
       $data['kec'] = $this->kec->tampil();
       //memanggil model kelurahan
       $data['kel'] = $this->kel->tampil();
       //memanggil model sentra
       $data['sen'] = $this->sen->tampil();
       //memanggil model usaha
       $data['ush'] = $this->ush->tampil();
       //memanggil model KLBI
       $data['kl'] = $this->kl->tampil();

        $data['edit'] = $this->Layanan_model->detail($id);

        $this->form_validation->set_rules('kec','Kec','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('kode2','Kode2','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('kel','Kel','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('kode3','Kode3','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('sen','Sen','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('bentuk','Bentuk','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('ush','Ush','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('pemilik','Pemilik','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('alamat','Alamat','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('hp','Hp','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('klbi','Klbi','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('kode4','Kode4','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('npwp','Npwp','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('noiut','Noiut','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('thniut','Thniut','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('noamdal','Noamdal','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('thnamdal','Thnamdal','required',[
          'required' => 'Data Tidak Boleh Kosong !'
        ]);
        
      //  var_dump($data['tampil']);die;
      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Edit Data FKM';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('layanan/edit',$data);
        $this->load->view('template/footer');
    }else{
      $data = [
        'nm_kec' => $this->input->post('nm_kec'),
        'kd_kec' => $this->input->post('kode2'),
        'nm_kel' => $this->input->post('nm_kel'),
        'kd_kel' => $this->input->post('kode3'),
        'nm_sentra' => $this->input->post('nm_sentra'),
        'bn_sentra' => $this->input->post('bentuk'),
        'nm_usaha' => $this->input->post('usaha'),
        'pemilik' => $this->input->post('pemilik'),
        'alamat_usaha' => $this->input->post('alamat'),
        'hp' => $this->input->post('hp'),
        'nm_klbi' => $this->input->post('nm_klbi'),
        'kd_klbi' => $this->input->post('kode4'),
        'npwp' => $this->input->post('npwp'),
        'no_iut' => $this->input->post('noiut'),
        'thn_iut' => $this->input->post('thniut'),
        'no_amdal' => $this->input->post('noamdal'),
        'thn_amdal' => $this->input->post('thnamdal')
      ];

      $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_fkm',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
        redirect('layanan/master');
    }
    }

    public function cet_excel(){

       //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       //memanggil model kecamatan
       $data['tampil'] = $this->layanan->tampil();
       
     //  var_dump($data['tampil']);die;
       $data['judul'] = 'Halaman Data FKM';
       $this->load->view('layanan/cet_excel_semua',$data);

    }

    public function excel_item()
    {
       //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //memanggil model kecamatan
      $data['kec'] = $this->kec->tampil();
      //memanggil model kelurahan
      $data['kel'] = $this->kel->tampil();
      //memanggil model sentra
      $data['sen'] = $this->sen->tampil();
       
     //  var_dump($data['tampil']);die;
       $data['judul'] = 'Halaman Data Per-Item FKM';
       $this->load->view('template/header',$data);
       $this->load->view('template/sidebar',$data);
       $this->load->view('template/topbar',$data);
       $this->load->view('layanan/excel_item',$data);
       $this->load->view('template/footer');
    }

    public function excel_kec()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $kec = $this->input->post('kec');

      $data['tampil'] = $this->db->get_where('tbl_fkm',['nm_kec'=>$kec])->result_array();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data FKM';
      $this->load->view('layanan/excel_peritem',$data);
    }

    public function excel_kel()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $kel = $this->input->post('kel');

      $data['tampil'] = $this->db->get_where('tbl_fkm',['nm_kel'=>$kel])->result_array();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data FKM';
      $this->load->view('layanan/excel_peritem',$data);
    }

    public function excel_sen()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $sen = $this->input->post('sen');

      $data['tampil'] = $this->db->get_where('tbl_fkm',['nm_sentra'=>$sen])->result_array();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data FKM';
      $this->load->view('layanan/excel_peritem',$data);
    }

}