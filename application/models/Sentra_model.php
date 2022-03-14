<?php

class Sentra_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('kode', 'DESC');
        $query = $this->db->get('tbl_sentra');
        return $query->result_array();
    }

    public function ubah($id)
    {
    	$query =  $this->db->get_where('tbl_sentra',['kode'=>$id]);
        return $query->row_array();
    }

      //jumlah Sentra
      public function jml()
      {
          $query = $this->db->get('tbl_sentra');
          if($query->num_rows() > 0)
          {
              return $query->num_rows();
          }else {
             return 0;
          }
      }

      public function hapus($id)
      {
          $this->db->where('kode', $id);
          $this->db->delete('tbl_sentra');
      }
}