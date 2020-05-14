<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Kategori_alat_bahan extends CI_Controller{
        public function_construct()
        {
            parent::_construct();
            $this->fungsi->restrict();
            $this->load->model('master/m_kategori_alat_bahan');
        }
        public function index()
        {
            $this->fungsi->check_previleges('Kategori_alat_bahan');
            $data['Kategori_alat_bahan']=$this->m_kategori_alat_bahan->getData();
            $this->load->view('master/kategori_alat_bahan/v_list_kategori_alat_bahan',$data);
        }
        public function form($param='')
        {
            $content = "<div
            id='divsubcontent'></div>";
            $header = "Form Master Nama Kategori Alat dan Bahan";
            $subheader = "Kategori_alat_bahan";
            $buttons[]= button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
            echo 
            $this->fugsi->parse_modal($header,$subheader,$content,$buttons,"");
            if($param=='base')
            {
                $this->fungsi->run_js('load_silent("master/kategori_alat_bahan/show_addForm/","#divsubcontent")');
            }else
            {
                $base_kom=$this->uri->segment(5);
                $this->fungsi->run_js('load_silent("master/kategori_alat_bahan/show_editForm/'.$base_kom.'","#divsubcontent")');
            }
        }
        public function show_addForm()
        {
            $this->fungsi->check_previleges('kategori_alat_bahan');
            $this->load->library('form_validation');
            $config = array(array('field'=>'kategori_alat_bahan','label'=>'kategori_alat_bahan','rules'=>'required'));
            $this->form_validation->set_rules($config);
            $this->form_validation->set_error_delimiters('<span class="error-span">','</span>');
            if($this->form_validation->run()==FALSE)
            {
                $data['status']='';
                $this->load->view('master/kategori_alat_bahan/v_kategori_alat_bahan_add',$data);
            }
            else
            {
                $datapost=get_post_data(array('kode','kategori_alat_bahan','id_status'));
                $this->m_nama_alat->insertData($datapost);
                $this->fungsi->run_js('load_silent("master/kategori_alat_bahan","#content")');
                $this->fungsi->message_box("Data Master Nama Alat Berhasil Disimpan","success");
                $this->fungsi->catat($datapost,"Menambah Master kategori_alat_bahan dengan data sbb:",true);
            }
        }
    }