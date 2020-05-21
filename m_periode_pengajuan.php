<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_periode_pengajuan extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('periode_pengajuan pp');
		$this->db->order_by('pp.id','desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('periode_pengajuan',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('periode_pengajuan',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('periode_pengajuan');
	}

}

/* End of file m_periode_pengajuan.php */
/* Location: ./application/models/master/m_periode_pengajuan.php */