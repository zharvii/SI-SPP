<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends Data_Controller {

    function __construct()
	{
		parent::__construct();
        $this->load->library('datatables');
        $this->load->model('spp_model');
        $this->mymodel = $this->spp_model;
	}

	function index()
	{
		$this->data['view']    = 'spp';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
	}

	function getSpp()
    {
        header('Content-Type: application/json');
        echo $this->mymodel->getAll();
	}

	function insertSpp()
    {
        $tahun = $this->input->post('tahun');
        $nominal = $this->input->post('nominal');

		if($this->mymodel->insert($tahun,$nominal)){
			echo '1';
		}else{
			echo '0';
		}
	}

	function editSpp()
    {
        $id = $this->input->post('id');
        $tahun = $this->input->post('tahun');
        $nominal = $this->input->post('nominal');

		if($this->mymodel->update($id,$tahun,$nominal)){
			echo '1';
		}else{
			echo '0';
		}
	}

	function hapusSpp()
    {
        $id = $this->uri->segment('3');

        if($this->mymodel->delete($id)){
			echo '1';
		}else{
			echo '0';
		}
    }

}

    /* End of file  spp.php */
