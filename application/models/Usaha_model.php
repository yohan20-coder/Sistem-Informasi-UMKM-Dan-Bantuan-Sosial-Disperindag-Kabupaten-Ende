<?php

class Usaha_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tbl_usaha');
        return $query->result_array();
    }

    public function ubah($id)
    {
    	$query =  $this->db->get_where('tbl_usaha',['id'=>$id]);
        return $query->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_usaha');
    }

     //jumlah kecamatan
     public function jml()
     {
         $query = $this->db->get('tbl_usaha');
         if($query->num_rows() > 0)
         {
             return $query->num_rows();
         }else {
            return 0;
         }
     }

}