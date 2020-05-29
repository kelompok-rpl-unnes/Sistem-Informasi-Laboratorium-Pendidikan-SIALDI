<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nama_bahan extends CI_Model {

    //select->read
	public function getData($value='')
	{
		$this->db->from('nama_bahan nb');
		$this->db->order_by('nb.id', 'desc');
		return $this->db->get();
	}

    //insert->create
	public function insertData($data='')
	{
		
        $this->db->insert('nama_bahan',$data);
       
	}
    //update
	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('nama_bahan',$data);
	}
    //delete
	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('nama_bahan');
	}

}

/* End of file m_nama_bahan.php */
/* Location: ./application/models/master/m_nama_bahan.php */
