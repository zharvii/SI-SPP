<?php defined('BASEPATH') || exit('No direct script access allowed');

class Home extends Authenticated_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
        $this->load->model('home_model');
        $this->mymodel = $this->home_model;
	}

	function index()
	{
		$this->data['view']    = 'home';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
	}

	function today(){
 		header('Content-Type: application/json');
        echo $this->mymodel->get();
	}

}
