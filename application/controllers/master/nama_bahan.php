<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nama_bahan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('master/m_nama_bahan');
	}

	public function index()
	{
		$this->fungsi->check_previleges('nama_bahan');
		$data['nama_bahan'] = $this->m_nama_bahan->getData();
		$this->load->view('master/nama_bahan/v_nama_bahan_list',$data);
	}

	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Master Nama Bahan";
		$subheader = "nama_bahan";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("master/nama_bahan/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("master/nama_bahan/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}

	public function show_addForm()
	{
		$this->fungsi->check_previleges('nama_bahan');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'nama_bahan',
					'label' => 'nama_bahan',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('master/nama_bahan/v_nama_bahan_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('kode','nama_bahan','keterangan','id_status'));
			$this->m_nama_bahan->insertData($datapost);
			$this->fungsi->run_js('load_silent("master/nama_bahan","#content")');
			$this->fungsi->message_box("Data Master Nama Bahan sukses disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Master nama_bahan dengan data sbb:",true);
		}
	}

	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('nama_bahan');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'wes mbarke',
					'rules' => ''
				),
				array(
					'field'	=> 'nama_bahan',
					'label' => 'nama_bahan',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('master_nama_bahan',array('id'=>$id));
			$data['status']='';
			$this->load->view('master/nama_bahan/v_nama_bahan_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode','nama_bahan','keterangan','id_status'));
			$this->m_nama_bahan->updateData($datapost);
			$this->fungsi->run_js('load_silent("master/nama_bahan","#content")');
			$this->fungsi->message_box("Data Master Nama Bahan sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Master nama_bahan dengan data sbb:",true);
		}
	}
}

/* End of file nama_bahan.php */
/* Location: ./application/controllers/master/nama_bahan.php */
