<?php
class Kelurahan extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model kecamatan
      $this->load->model('Kel_model');
      $this->load->model('Kel_model','kel');
      $this->load->model('Kec_model','kec');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model kecamatan
      $data['tampil'] = $this->kel->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Kelurahan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('kelurahan/index',$data);
      $this->load->view('template/footer');
    }

    public function tambah()
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('kode', 'Kode', 'required|trim|is_unique[tbl_kec.kode]',[
        'required' => 'Data Tidak Boleh Kosong !',
        'is_unique' => 'Maaf No. Kode Kecamatan Sudah Ada'
      ]);
      $this->form_validation->set_rules('kec','Kec','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kel','Kel','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

        //memanggil model kecamatan
        $data['tam'] = $this->kec->tampil();
      

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Tambah Data Kelurahan';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('kelurahan/tambah',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'kode' => $this->input->post('kode'),
          'kecamatan' => $this->input->post('kec'),
          'kelurahan' => $this->input->post('kel')
        ];

        $this->db->insert('tbl_kel',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect('kelurahan');
      }   
    } 

    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('kode', 'Kode', 'required|trim|is_unique[tbl_kec.kode]',[
        'required' => 'Data Tidak Boleh Kosong !',
        'is_unique' => 'Maaf No. Kode Kecamatan Sudah Ada'
      ]);
      $this->form_validation->set_rules('kec','Kec','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kel','Kel','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

        //memanggil model kecamatan
        $data['tam'] = $this->kec->tampil();
        $data['edit'] = $this->Kel_model->ubah($id);

      if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Tambah Data Kelurahan';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('kelurahan/edit',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'kode' => $this->input->post('kode'),
          'kecamatan' => $this->input->post('kec'),
          'kelurahan' => $this->input->post('kel')
        ];

        $this->db->where('kode', $this->input->post('kodee'));
        $this->db->update('tbl_kel', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
        redirect('kelurahan');
      }   
    } 

    public function hapus($id)
    {
      $this->Kel_model->hapus($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('kelurahan');
    }

    public function excel()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model kecamatan
      $data['tampil'] = $this->kel->tampil();
      
      $this->load->view('kelurahan/cet_excel',$data);
    }

}