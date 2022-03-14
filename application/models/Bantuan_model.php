<?php

class Bantuan_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tbl_bantu');
        return $query->result_array();
    }

    public function cek($nik, $tahun)
     {
         $query = $this->db->get_where('tbl_bantu',['nik'=>$nik, 'thn_anggaran'=>$tahun]);
         if($query->num_rows() > 0)
         {
            return $query->result_array();
         }else {
            return 0;
         }
     }

    public function ubah($id)
    {
    	$query =  $this->db->get_where('tbl_bantu',['id'=>$id]);
        return $query->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_bantu');
    }

    //  //jumlah kecamatan
    //  public function jml()
    //  {
    //      $query = $this->db->get('tbl_kec');
    //      if($query->num_rows() > 0)
    //      {
    //          return $query->num_rows();
    //      }else {
    //         return 0;
    //      }
    //  }

}