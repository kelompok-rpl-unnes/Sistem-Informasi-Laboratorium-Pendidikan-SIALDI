<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengajuan_alat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('pengajuan/m_pengajuan_alat');
	}

	public function index()
	{
		$this->fungsi->check_previleges('pengajuan_alat');
		$data['pengajuan_alat'] = $this->m_pengajuan_alat->getData();
		$this->load->view('pengajuan/pengajuan_alat/v_pengajuan_alat_list',$data);
	}
	
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "PENGAJUAN ALAT";
		$subheader = "pengajuan_alat";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("pengajuan/pengajuan_alat/show_addForm/","#divsubcontent")');	
        }
        if($param=='base1'){
			$this->fungsi->run_js('load_silent("pengajuan/pengajuan_alat/show_viewForm/","#divsubcontent")');	
		}
        else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("pengajuan/pengajuan_alat/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}

	public function show_addForm()
	{
		$this->fungsi->check_previleges('pengajuan_alat');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'id',
					'rules' => 'required'
                ),
                array(
					'field'	=> 'nama_lab',
					'label' => 'nama_lab',
					'rules' => 'required'
                ),
                array(
					'field'	=> 'nama_alat',
					'label' => 'nama_alat',
					'rules' => 'required'
                ),
                array(
					'field'	=> 'tipe',
					'label' => 'tipe',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('pengajuan/pengajuan_alat/v_pengajuan_alat_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','nama_lab','nama_alat','merk','tipe','jumlah','harga','status'));
			$this->m_pengajuan_alat->insertData($datapost);
			$this->fungsi->run_js('load_silent("pengajuan/pengajuan_alat","#content")');
			$this->fungsi->message_box("Data Pengajuan Pengajuan Alat sukses disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Pengajuan pengajuan_alat dengan data sbb:",true);
		}
	}

	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('pengajuan_alat');
		$this->load->library('form_validation');
		$config = array(
            array(
                'field'	=> 'id',
                'label' => 'id',
                'rules' => 'required'
            ),
            array(
                'field'	=> 'nama_lab',
                'label' => 'nama_lab',
                'rules' => 'required'
            ),
            array(
                'field'	=> 'nama_alat',
                'label' => 'nama_alat',
                'rules' => 'required'
            ),
            array(
                'field'	=> 'tipe',
                'label' => 'tipe',
                'rules' => 'required'
            )
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('pengajuan_alat',array('id'=>$id));
			$data['status']='';
			$this->load->view('pengajuan/pengajuan_alat/v_pengajuan_alat_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','nama_lab','nama_alat','merk','tipe','jumlah','harga','status'));
			$this->m_pengajuan_alat->updateData($datapost);
			$this->fungsi->run_js('load_silent("pengajuan/pengajuan_alat","#content")');
			$this->fungsi->message_box("Data Pengajuan Pengajuan Alat sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Pengajuan pengajuan_alat dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_pengajuan_alat->deleteData($id);
		redirect('admin');
    }
    public function show_viewform()
    {
        $this->fungsi->check_previleges('pengajuan_alat');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');
        $data['view'] = $this->db->get_where('pengajuan_alat',array('id'=>$id));
		$this->load->view('pengajuan/pengajuan_alat/v_pengajuan_alat_view',$data);

    }
}

/* End of file pengajuan_alat.php */
/* Location: ./application/controllers/pengajuan/pengajuan_alat.php */
