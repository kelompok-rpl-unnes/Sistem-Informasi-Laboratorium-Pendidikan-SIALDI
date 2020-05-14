<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class satuan extends CI_Controller
{
    public function index()
    {
        $this->load->view('satuan/v_satuan_list');
    }
}