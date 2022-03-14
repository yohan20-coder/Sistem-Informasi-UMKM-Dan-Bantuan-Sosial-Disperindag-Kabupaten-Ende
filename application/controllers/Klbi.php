<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klbi extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model kecamatan
      $this->load->model('Klbi_model');
      $this->load->model('Klbi_model','kl');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model kecamatan
      $data['tampil'] = $this->kl->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data KLBI';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('klbi/index',$data);
      $this->load->view('template/footer');
    }

    public function tambah()
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('kode', 'Kode', 'required|trim|is_unique[tbl_klbi.kode]',[
        'required' => 'Data Tidak Boleh Kosong !',
        'is_unique' => 'Maaf No. Kode Kecamatan Sudah Ada'
      ]);
      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Tambah Data KLBI';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('klbi/tambah',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'kode' => $this->input->post('kode'),
          'nama' => $this->input->post('nama')
        ];

        $this->db->insert('tbl_klbi',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect('klbi');
      }   
    } 

    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['edit'] = $this->Klbi_model->ubah($id);

      $this->form_validation->set_rules('kode', 'Kode', 'required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Tambah Data KLBI';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('klbi/edit',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'kode' => $this->input->post('kode'),
          'nama' => $this->input->post('nama')
        ];

        $this->db->where('kode', $this->input->post('kodee'));
        $this->db->update('tbl_klbi', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
        redirect('klbi');
      }   
    } 

    public function hapus($id)
    {
      $this->Klbi_model->hapus($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('klbi');
    }

    public function excel()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model kecamatan
      $data['tampil'] = $this->kl->tampil();
      
      $this->load->view('klbi/cet_excel',$data);
    }

}