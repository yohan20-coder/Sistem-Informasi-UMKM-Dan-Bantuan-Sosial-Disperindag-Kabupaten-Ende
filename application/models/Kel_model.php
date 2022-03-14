<?php

class Kel_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('kode', 'DESC');
        $query = $this->db->get('tbl_kel');
        return $query->result_array();
    }

    public function ubah($id)
    {
    	$query =  $this->db->get_where('tbl_kel',['kode'=>$id]);
        return $query->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('kode', $id);
        $this->db->delete('tbl_kel');
    }

     //jumlah kelurahan
     public function jml()
     {
         $query = $this->db->get('tbl_kel');
         if($query->num_rows() > 0)
         {
             return $query->num_rows();
         }else {
            return 0;
         }
     }

}