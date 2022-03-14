<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model kecamatan
      $this->load->model('Kec_model');
      $this->load->model('Kec_model','kec');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model kecamatan
      $data['tampil'] = $this->kec->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Kecamatan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('kecamatan/index',$data);
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

      

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Tambah Data Kecamatan';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('kecamatan/tambah',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'kode' => $this->input->post('kode'),
          'kecamatan' => $this->input->post('nama')
        ];

        $this->db->insert('tbl_kec',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect('kecamatan');
      }   
    } 

    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['edit'] = $this->Kec_model->ubah($id);

      $this->form_validation->set_rules('kode', 'Kode', 'required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Tambah Data Kecamatan';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('kecamatan/edit',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'kode' => $this->input->post('kode'),
          'kecamatan' => $this->input->post('nama')
        ];

        $this->db->where('kode', $this->input->post('kodee'));
        $this->db->update('tbl_kec', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
        redirect('kecamatan');
      }   
    } 

    public function hapus($id)
    {
      $this->Kec_model->hapus($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('kecamatan');
    }

    public function excel()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model kecamatan
      $data['tampil'] = $this->kec->tampil();
     
      $this->load->view('kecamatan/cet_excel',$data);

    }

}
