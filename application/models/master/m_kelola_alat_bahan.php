<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kelola_alat_bahan extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('master_kelola_alat_bahan');
		
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('master_kelola_alat_bahan',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('master_kelola_alat_bahan',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('master_kelola_alat_bahan');
	}

}

/* End of file m_kelola_alat_bahan.php */
/* Location: ./application/models/master/m_kelola_alat_bahan.php */