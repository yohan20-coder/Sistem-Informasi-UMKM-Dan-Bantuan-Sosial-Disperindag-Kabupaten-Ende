<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usaha extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model kecamatan
      $this->load->model('Usaha_model');
      $this->load->model('Usaha_model','ush');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model usaha
      $data['tampil'] = $this->ush->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Usaha';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('usaha/index',$data);
      $this->load->view('template/footer');
    }

    public function tambah()
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('usaha','Usaha','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('alamat','Alamat','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('hp','Hp','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Tambah Data Usaha';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('usaha/tambah',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'nm_usaha' => $this->input->post('usaha'),
          'pemilik' => $this->input->post('nama'),
          'alamat' => $this->input->post('alamat'),
          'hp' => $this->input->post('hp')
        ];

        $this->db->insert('tbl_usaha',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect('usaha');
      }   
    } 

    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['edit'] = $this->Usaha_model->ubah($id);

      $this->form_validation->set_rules('usaha','Usaha','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('alamat','Alamat','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('hp','Hp','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Tambah Data Usaha';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('usaha/edit',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'nm_usaha' => $this->input->post('usaha'),
          'pemilik' => $this->input->post('nama'),
          'alamat' => $this->input->post('alamat'),
          'hp' => $this->input->post('hp')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_usaha',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
        redirect('usaha');
      }   
    } 

    public function hapus($id)
    {
      $this->Usaha_model->hapus($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('usaha');
    }

    public function excel()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model usaha
      $data['tampil'] = $this->ush->tampil();
    
      $this->load->view('usaha/cet_excel',$data);
    }


}