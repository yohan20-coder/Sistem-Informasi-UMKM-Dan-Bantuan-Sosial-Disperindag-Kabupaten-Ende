<?php

class Klbi_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('kode', 'DESC');
        $query = $this->db->get('tbl_klbi');
        return $query->result_array();
    }

    public function ubah($id)
    {
    	$query =  $this->db->get_where('tbl_klbi',['kode'=>$id]);
        return $query->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('kode', $id);
        $this->db->delete('tbl_klbi');
    }

}