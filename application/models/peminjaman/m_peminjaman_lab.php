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
    public function getMax($table, $field, $kode = null)
    {
        $this->db->select_max($field);
        if ($kode != null) {
            $this->db->like($field, $kode, 'after');
        }
        return $this->db->get($table)->row_array()[$field];
    }

    public function count($table)
    {
        return $this->db->count_all($table);
    }

    public function sum($table, $field)
    {
        $this->db->select_sum($field);
        return $this->db->get($table)->row_array()[$field];
    }

    public function min($table, $field, $min)
    {
        $field = $field . ' <=';
        $this->db->where($field, $min);
        return $this->db->get($table)->result_array();
    }

}

/* End of file m_peminjaman.php */
/* Location: ./application/models/master/m_peminjaman.php */