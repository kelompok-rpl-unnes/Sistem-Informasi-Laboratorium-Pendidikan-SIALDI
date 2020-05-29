<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kategori_alat_bahan extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('master_kategori_alat_bahan');
		
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('master_kategori_alat_bahan',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('master_kategori_alat_bahan',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('master_kategori_alat_bahan');
	}

}

/* End of file m_kategori_alat_bahan.php */
/* Location: ./application/models/master/m_kategori_alat_bahan.php */
