<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mata_kuliah extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('master_mata_kuliah mk');
		$this->db->order_by('mk.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('master_mata_kuliah',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('master_mata_kuliah',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('master_mata_kuliah');
	}

}

/* End of file m_mata_kuliah.php */
/* Location: ./application/models/master/m_mata_kuliah.php */