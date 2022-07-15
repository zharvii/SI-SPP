<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends Data_Controller {

    function __construct()
	{
		parent::__construct();
        $this->load->library('datatables');
        $this->load->model('kelas_model');
        $this->mymodel = $this->kelas_model;
	}

	function index()
	{
		$this->data['view']    = 'kelas';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
	}

	function getKelas()
    {
        header('Content-Type: application/json');
        echo $this->mymodel->getAll();
	}

	function insertKelas()
    {
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');

		if($this->mymodel->insert($nama,$jurusan)){
			echo '1';
		}else{
			echo '0';
		}
	}

	function editKelas()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');

		if($this->mymodel->update($id,$nama,$jurusan)){
			echo '1';
		}else{
			echo '0';
		}
	}

	function hapusKelas()
    {
        $id = $this->uri->segment('3');

        if($this->mymodel->delete($id)){
			echo '1';
		}else{
			echo '0';
		}
    }

}

    /* End of file  kelas.php */
