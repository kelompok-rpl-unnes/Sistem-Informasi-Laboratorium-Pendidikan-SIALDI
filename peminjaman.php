<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peminjaman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('master/m_peminjaman');
	}

	public function index()
	{
		$this->fungsi->check_previleges('peminjaman');
		$data['peminjaman'] = $this->m_peminjaman->getData();
		$this->load->view('master/peminjaman/v_peminjaman_list',$data);
    }
    public function form($param='')
        {
            $content = "<div
            id='divsubcontent'></div>";
            $header = "Form Master Peminjaman";
            $subheader = "Peminjaman";
            $buttons[]= button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
            echo 
            $this->fugsi->parse_modal($header,$subheader,$content,$buttons,"");
            if($param=='base')
            {
                $this->fungsi->run_js('load_silent("master/peminjaman/show_addForm/","#divsubcontent")');
            }else
            {
                $base_kom=$this->uri->segment(5);
                $this->fungsi->run_js('load_silent("master/peminjaman/show_editForm/'.$base_kom.'","#divsubcontent")');
            }
        }
        public function show_addForm()
        {
            $this->fungsi->check_previleges('peminjaman');
            $this->load->library('form_validation');
            $config = array(array('field'=>'peminjaman','label'=>'peminjaman','rules'=>'required'));
            $this->form_validation->set_rules($config);
            $this->form_validation->set_error_delimiters('<span class="error-span">','</span>');
            if($this->form_validation->run()==FALSE)
            {
                $data['status']='';
                $this->load->view('master/peminjaman/v_peminjaman_add',$data);
            }
            else
            {
                $datapost=get_post_data(array('id','nama_peminjam','tgl_pinjam'));
                $this->m_nama_alat->insertData($datapost);
                $this->fungsi->run_js('load_silent("master/peminjaman","#content")');
                $this->fungsi->message_box("Data Master Peminjaman Berhasil Disimpan","success");
                $this->fungsi->catat($datapost,"Menambah Master peminjaman dengan data sbb:",true);
            }
        }
    }