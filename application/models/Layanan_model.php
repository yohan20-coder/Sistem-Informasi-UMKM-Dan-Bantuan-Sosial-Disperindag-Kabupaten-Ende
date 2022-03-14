<?php 

class Layanan_model extends CI_Model
{

 public function get_kec($id)
    {
        $this->db->from('tbl_kec');
        $this->db->where('kode', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_kel($id)
    {
        $this->db->from('tbl_kel');
        $this->db->where('kode', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_sen($id)
    {
        $this->db->from('tbl_sentra');
        $this->db->where('kode', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_ush($id)
    {
        $this->db->from('tbl_usaha');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_klbi($id)
    {
        $this->db->from('tbl_klbi');
        $this->db->where('kode', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tbl_fkm');
        return $query->result_array();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_fkm');
    }

    public function detail($id)
    {
    	$query =  $this->db->get_where('tbl_fkm',['id'=>$id]);
        return $query->row_array();
    }

}