<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //user akses
      $this->load->model('Menu_model');
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      // $data[total] = $this->Arsip_model->jmlmasuk();

      $this->load->model('Kec_model','jm');
      $this->load->model('Kel_model','jl');
      $this->load->model('Sentra_model','sn');
      $this->load->model('Usaha_model','ush');
      $data['jm'] = $this->jm->jml();
      $data['jl'] = $this->jl->jml();
      $data['sn'] = $this->sn->jml();
      $data['ush'] = $this->ush->jml();
      
      // var_dump($data['jml']);die;
      $data['judul'] = 'Halaman Admin';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('admin/index',$data);
      $this->load->view('template/footer');
    }

    public function role()
    {
       //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['role'] = $this->db->get('user_role')->result_array();
      
       //   var_dump($data['user']);die;
         $data['judul'] = 'Halaman Role';
         $this->load->view('template/header',$data);
         $this->load->view('template/sidebar',$data);
         $this->load->view('template/topbar',$data);
         $this->load->view('admin/role',$data);
         $this->load->view('template/footer');
    }

    public function ubahrole($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['ubah'] = $this->db->get_where('user_role',['id'=>$id])->row_array();

      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      

    if($this->form_validation->run()==false){
        $data['judul'] = 'Menu Edit';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('admin/ubahrole',$data);
        $this->load->view('template/footer');
      }else{
         $level = $this->input->post('nama');
         $this->Menu_model->role($id);
          $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
        redirect('admin/role');
      }

    } 



    public function roleaccess($role_id)
    {
       //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['role'] = $this->db->get_where('user_role',['id' => $role_id])->row_array();

       //ngakalin agar menu admin gak tampil pada role administrator krna itu hak penuh dari admin
       $this->db->where('id !=' , 1);
       $data['menu'] = $this->db->get('user_menu')->result_array();
      
       //   var_dump($data['user']);die;
         $data['judul'] = 'Halaman Role';
         $this->load->view('template/header',$data);
         $this->load->view('template/sidebar',$data);
         $this->load->view('template/topbar',$data);
         $this->load->view('admin/role-access',$data);
         $this->load->view('template/footer');
    }

    public function ubahaccess()
    {
      $menu_id = $this->input->post('menuid');
      $role_id = $this->input->post('roleid');

      $data = [
        'role_id' => $role_id,
        'menu_id' => $menu_id
      ];

      $result = $this->db->get_where('user_access_menu', $data);

      if($result->num_rows() < 1 ){           //kalau data gak ada
        $this->db->insert('user_access_menu', $data);
      }else{
        $this->db->delete('user_access_menu', $data);
      }

      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Access telah diubah</div>');
    }
}