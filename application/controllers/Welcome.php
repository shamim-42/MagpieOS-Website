<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Admin_model');
    }

	public function index()
	{
		$data['value'] = $this->Admin_model->fetch_all_info_model();
		$this->load->view('welcome_message', $data);
	}
}
