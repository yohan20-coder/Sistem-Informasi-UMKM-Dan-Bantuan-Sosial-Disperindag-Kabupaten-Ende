<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sentra extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model kecamatan
      $this->load->model('Sentra_model');
      $this->load->model('Sentra_model','sen');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Sentra
      $data['tampil'] = $this->sen->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Sentra';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('sentra/index',$data);
      $this->load->view('template/footer');
    }

    public function tambah()
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('kode', 'Kode', 'required|trim|is_unique[tbl_kec.kode]',[
        'required' => 'Data Tidak Boleh Kosong !',
        'is_unique' => 'Maaf No. Kode Kecamatan Sudah Ada'
      ]);
      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('bentuk','Bentuk','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Tambah Data Sentra IKM';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('sentra/tambah',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'kode' => $this->input->post('kode'),
          'nm_sentra' => $this->input->post('nama'),
          'bentuk' => $this->input->post('bentuk')
        ];

        $this->db->insert('tbl_sentra',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect('sentra');
      }   
    } 

    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['edit'] = $this->Sentra_model->ubah($id);

      $this->form_validation->set_rules('kode','Kode','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('bentuk','Bentuk','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Edit Data Sentra IKM';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('sentra/edit',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'kode' => $this->input->post('kode'),
          'nm_sentra' => $this->input->post('nama'),
          'bentuk' => $this->input->post('bentuk')
        ];

        $this->db->where('kode', $this->input->post('kodee'));
        $this->db->update('tbl_sentra', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
        redirect('sentra');
      }   
    } 


    public function hapus($id)
    {
      $this->Sentra_model->hapus($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('sentra');
    }

    public function excel()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Sentra
      $data['tampil'] = $this->sen->tampil();
    
      $this->load->view('sentra/cet_excel',$data);
    }


}