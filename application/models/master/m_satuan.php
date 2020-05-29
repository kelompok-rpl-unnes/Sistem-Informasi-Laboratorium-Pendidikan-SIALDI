<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_satuan extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('satuan ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('satuan',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('satuan',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('satuan');
	}

}

/* End of file m_nama_alat.php */
/* Location: ./application/models/master/m_nama_alat.php */