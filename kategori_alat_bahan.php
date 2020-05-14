<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_kategori_alat_bahan extends CI_Model{
    //select->read
    public function getData($value='')
    {
        $this->db->from('master_kategori_alat_bahan');
        $this->db->order_by('ma_id','desc');
        return $this->db->get();

        //insert->create
        public function insertData($data='')
        {
            $this->db->insert('master_kategori_alat_bahan',$data);
        }
        //update
        public function
        updateData($data='')
        {
            $this->db->where('id',$data['id']);
            $this->db->update('master_kategori_alat_bahan',$data);
        }
        //delete
        public function deleteData($id='')
        {
            $this->db->where('id',$id);
            $this->db->delete('master_kategori_alat_bahan');
        }

        }
    }