<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman_lab extends CI_Model {

    public function getData($value='')
    {
        $this->db->from('peminjaman_lab pl');
        $this->db->order_by('pl.id', 'desc');
        return $this->db->get();
    }

    public function insertData($data='')
    {
        
        $this->db->insert('peminjaman_lab',$data);
       
    }

    public function updateData($data='')
    {
         $this->db->where('id',$data['id']);
            $this->db->update('peminjaman_lab',$data);
    }

    public function deleteData($id='')
    {
        $this->db->where('id', $id);
        $this->db->delete('peminjaman_lab');
    }

}

/* End of file m_peminjaman.php */
/* Location: ./application/models/master/m_peminjaman.php */