<?php defined('BASEPATH') || exit('No direct script access allowed');

class Front extends Front_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('Auth');
	}

	function index()
	{
		$this->login();
	}

	function login()
	{
		if ($this->auth->is_logged_in()) {

			redirect($this->previous_page);
		}

		$this->data['pagetitle']  = 'Login Page';
		$this->data['view']       = 'login';
		$this->data['pageid']     = 'login-page';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$type = $this->input->post('tipe');


			if ($this->auth->login($username, $password,$type)) {
				redirect($this->requested_page);
			} else {
				$this->load->view('simple', $this->data);
			}
		} else {
			$this->load->view('simple', $this->data);
		}
	}



	function logout()
	{
		$this->auth->logout();
		$this->login();
	}
}
