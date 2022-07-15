<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Histori extends Data_Controller {

    function __construct()
	{
		parent::__construct();
        $this->load->library('datatables');
        $this->load->model('histori_model');
        $this->mymodel = $this->histori_model;
	}

	function index()
	{
		$this->data['view']    = 'histori';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
    }

	function getSiswa()
    {
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        header('Content-Type: application/json');
        echo $this->mymodel->getSiswa($kelas,$jurusan);
	}
    
    
    function datail(){
		$this->data['view']    = 'detail_histori';
        $this->data['param']    = $this->input->get('param');
        $this->load->view('template/default', $this->data);
    }
    

    function getHistori()
    {
        $no = $this->input->post('state');
        header('Content-Type: application/json');
        echo $this->mymodel->getHistori($no);
    }
    
    function pembayaran(){
		$this->data['view']    = 'histori-siswa';
        $this->data['param']    = '';
        $this->load->view('template/default', $this->data);
    }

    function getHistoriSiswa()
    {
        header('Content-Type: application/json');
        echo $this->mymodel->getHistori($this->session->userdata('userid'));
    }
}

    /* End of file  spp.php */
