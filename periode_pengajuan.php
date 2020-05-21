<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class periode_pengajuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('pengajuan/m_periode_pengajuan');
	}

	public function index()
	{
		$this->fungsi->check_previleges('periode_pengajuan');
		$data['periode_pengajuan'] = $this->m_periode_pengajuan->getData();
		$this->load->view('pengajuan/periode_pengajuan/v_periode_pengajuan_list',$data);
	}
	
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "PERIODE PENGAJUAN";
		$subheader = "periode_pengajuan";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("pengajuan/periode_pengajuan/show_addForm/","#divsubcontent")');	
        }
        if($param=='base1'){
			$this->fungsi->run_js('load_silent("pengajuan/periode_pengajuan/show_viewForm/","#divsubcontent")');	
		}
        else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("pengajuan/periode_pengajuan/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}

	public function show_addForm()
	{
		$this->fungsi->check_previleges('periode_pengajuan');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'id',
					'rules' => 'required'
                ),
                array(
					'field'	=> 'semester',
					'label' => 'semester',
					'rules' => 'required'
                ),
                array(
					'field'	=> 'status_pengajuan',
					'label' => 'status_pengajuan',
					'rules' => 'required'
                ),
                array(
					'field'	=> 'sumber_pendanaan',
					'label' => 'sumber_pendanaan',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('pengajuan/periode_pengajuan/v_periode_pengajuan_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','semester','tgl_pengajuan','sumber_pendanaan','tgl_pendanaan_turun','pajak','status_pengajuan','status'));
			$this->m_periode_pengajuan->insertData($datapost);
			$this->fungsi->run_js('load_silent("pengajuan/periode_pengajuan","#content")');
			$this->fungsi->message_box("Data Pengajuan Periode Pengajuan sukses disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Pengajuan periode_pengajuan dengan data sbb:",true);
		}
	}

	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('periode_pengajuan');
		$this->load->library('form_validation');
		$config = array(
            array(
                'field'	=> 'id',
                'label' => 'id',
                'rules' => 'required'
            ),
            array(
                'field'	=> 'semester',
                'label' => 'semester',
                'rules' => 'required'
            ),
            array(
                'field'	=> 'status_pengajuan',
                'label' => 'status_pengajuan',
                'rules' => 'required'
            ),
            array(
                'field'	=> 'sumber_pendanaan',
                'label' => 'sumber_pendanaan',
                'rules' => 'required'
            )
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('periode_pengajuan',array('id'=>$id));
			$data['status']='';
			$this->load->view('pengajuan/periode_pengajuan/v_periode_pengajuan_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','semester','tgl_pengajuan','sumber_pendanaan','tgl_pendanaan_turun','pajak','status_pengajuan','status'));
			$this->m_periode_pengajuan->updateData($datapost);
			$this->fungsi->run_js('load_silent("pengajuan/periode_pengajuan","#content")');
			$this->fungsi->message_box("Data Pengajuan Periode Pengajuan sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Pengajuan periode_pengajuan dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_periode_pengajuan->deleteData($id);
		redirect('admin');
    }
    public function show_viewform()
    {
        $this->fungsi->check_previleges('periode_pengajuan');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');
        $data['view'] = $this->db->get_where('periode_pengajuan',array('id'=>$id));
		$this->load->view('pengajuan/periode_pengajuan/v_periode_pengajuan_view',$data);

    }
}

/* End of file periode_pengajuan.php */
/* Location: ./application/controllers/pengajuan/periode_pengajuan.php */
