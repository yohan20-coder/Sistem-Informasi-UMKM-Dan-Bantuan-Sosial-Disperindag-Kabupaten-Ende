<?php

class Kec_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('kode', 'DESC');
        $query = $this->db->get('tbl_kec');
        return $query->result_array();
    }

    public function ubah($id)
    {
    	$query =  $this->db->get_where('tbl_kec',['kode'=>$id]);
        return $query->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('kode', $id);
        $this->db->delete('tbl_kec');
    }

     //jumlah kecamatan
     public function jml()
     {
         $query = $this->db->get('tbl_kec');
         if($query->num_rows() > 0)
         {
             return $query->num_rows();
         }else {
            return 0;
         }
     }

}