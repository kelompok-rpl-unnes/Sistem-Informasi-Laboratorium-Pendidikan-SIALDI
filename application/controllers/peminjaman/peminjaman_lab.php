<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peminjaman_lab extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('peminjaman/m_peminjaman_lab');
	}

	public function index()
	{
		$this->fungsi->check_previleges('peminjaman_lab');
		$data['peminjaman_lab'] = $this->m_peminjaman_lab->getData();
		$this->load->view('peminjaman/peminjaman_lab/v_peminjaman_lab_list',$data);
	}
	
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "PEMINJAMAN LABORATORIUM";
		$subheader = "peminjaman_lab";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("peminjaman/peminjaman_lab/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("peminjaman/peminjaman_lab/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}

	public function show_addForm()
	{
		$this->fungsi->check_previleges('peminjaman_lab');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'nama_peminjam',
					'label' => 'nama_peminjam',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('peminjaman/peminjaman_lab/v_peminjaman_lab_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','nama_peminjam','tgl_pinjam','tgl_selesai','status_pinjam'));
			$this->m_peminjaman_lab->insertData($datapost);
			$this->fungsi->run_js('load_silent("peminjaman/peminjaman_lab","#content")');
			$this->fungsi->message_box("Data Peminjaman Laboratorium sukses disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah peminjaman_lab dengan data sbb:",true);
		}
	}

	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('peminjaman_lab');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'wes mbarke',
					'rules' => ''
				),
				array(
					'field'	=> 'nama_peminjam',
					'label' => 'nama_peminjam',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('tipe_lab',array('id'=>$id));
			$data['status']='';
			$this->load->view('peminjaman/peminjaman_lab/v_peminjaman_lab_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','nama_peminjam','tgl_pinjam','tgl_selesai','status_pinjam'));
			$this->m_peminjaman_lab->updateData($datapost);
			$this->fungsi->run_js('load_silent("peminjaman/peminjaman_lab","#content")');
			$this->fungsi->message_box("Data Peminjaman Laboratorium sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit peminjaman_lab dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_peminjaman_lab->deleteData($id);
		redirect('admin');
	}
}

/* End of file peminjaman_lab.php */
/* Location: ./application/controllers/peminjaman/peminjaman_lab.php */
