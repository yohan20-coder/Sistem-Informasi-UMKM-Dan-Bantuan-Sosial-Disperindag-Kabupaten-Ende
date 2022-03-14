<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model bantuan
      $this->load->model('Bantuan_model');
      $this->load->model('Bantuan_model','bantu');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Bantuan
      $data['tampil'] = $this->bantu->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Bantuan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('bantuan/index',$data);
      $this->load->view('template/footer');
    }


    public function cek()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Bantuan
      $data['tampil'] = $this->bantu->tampil();
    
      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      $this->form_validation->set_rules('nik','Nik','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      $this->form_validation->set_rules('tahun','Tahun','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      
    //  var_dump($data['tampil']);die;
    if($this->form_validation->run()==false){
      $data['judul'] = 'Halaman Data Pengecekan Data Penerima Bantuan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('bantuan/cek',$data);
      $this->load->view('template/footer');
    }else{

        $nik = $this->input->post('nik');
        $tahun = $this->input->post('tahun');

       $query =  $this->db->get_where('tbl_bantu',['nik'=>$nik, 'thn_anggaran'=>$tahun]);

            if($query->num_rows() > 0)
            {
                $this->session->set_flashdata('message','<div class="alert alert-light" role="alert"></div>');
                $this->verify();
            }else {
              $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Pengecekan Data Berhasil Silakan Input Data Penerima Bantuan</div>');
                redirect('bantuan/tambah');
            }
    
        }
    }

    public function verify()
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $nik = $this->input->post('nik');
      $tahun = $this->input->post('tahun');

      $data['cek'] = $this->db->get_where('tbl_bantu',['nik'=>$nik, 'thn_anggaran'=>$tahun])->result_array();

      $data['judul'] = 'Halaman Hasil Cek Data Penerima Bantuan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('bantuan/verify',$data);
      $this->load->view('template/footer');

    }

    public function tambah()
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //   $this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[tbl_bantuan.nik]',[
    //     'required' => 'Data Tidak Boleh Kosong !',
    //     'is_unique' => 'Maaf No. Kode Kecamatan Sudah Ada'
    //   ]);
    $this->form_validation->set_rules('nik','Nik','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nm_usaha','Nm_usaha','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nm_bantuan','Nm_bantuan','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('jenis','Jenis','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('total','Total','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tahun','Tahun','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tgl','Tgl','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Tambah Data Penerima Bantuan';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('bantuan/tambah',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'nik' => $this->input->post('nik'),
          'nama' => $this->input->post('nama'),
          'nm_usaha' => $this->input->post('nm_usaha'),
          'nm_bantuan' => $this->input->post('nm_bantuan'),
          'jenis_bantuan' => $this->input->post('jenis'),
          'total' => $this->input->post('total'),
          'tgl' => $this->input->post('tgl'),
          'thn_anggaran' => $this->input->post('tahun')
        ];

        $this->db->insert('tbl_bantu',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect('bantuan');
      }   
    } 


    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['edit'] = $this->Bantuan_model->ubah($id);

    $this->form_validation->set_rules('nik','Nik','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nm_usaha','Nm_usaha','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nm_bantuan','Nm_bantuan','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('jenis','Jenis','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('total','Total','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tahun','Tahun','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tgl','Tgl','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Edit Data Penerima Bantuan';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('bantuan/edit',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'nik' => $this->input->post('nik'),
          'nama' => $this->input->post('nama'),
          'nm_usaha' => $this->input->post('nm_usaha'),
          'nm_bantuan' => $this->input->post('nm_bantuan'),
          'jenis_bantuan' => $this->input->post('jenis'),
          'total' => $this->input->post('total'),
          'tgl' => $this->input->post('tgl'),
          'thn_anggaran' => $this->input->post('tahun')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_bantu',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diedit</div>');
        redirect('bantuan');
      }   
    } 

    
    public function hapus($id)
    {
      $this->Bantuan_model->hapus($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('bantuan');
    }

    public function excel()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Bantuan
      $data['tampil'] = $this->bantu->tampil();
      
    //  var_dump($data['tampil']);die;
  
      $this->load->view('bantuan/cet_excel',$data);
    }


}