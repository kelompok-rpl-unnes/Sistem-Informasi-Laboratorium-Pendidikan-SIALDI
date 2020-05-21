<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends CI_Model {

    public function getData($value='')
    {
        $this->db->from('peminjaman pj');
        $this->db->order_by('pj.id', 'desc');
        return $this->db->get();
    }

    public function insertData($data='')
    {
        
        $this->db->insert('peminjaman',$data);
       
    }

    public function updateData($data='')
    {
         $this->db->where('id',$data['id']);
            $this->db->update('peminjaman',$data);
    }

    public function deleteData($id='')
    {
        $this->db->where('id', $id);
        $this->db->delete('peminjaman');
    }

}

/* End of file m_peminjaman.php */
/* Location: ./application/models/master/m_peminjaman.php */