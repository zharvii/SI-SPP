<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends Data_Controller {

    function __construct()
	{
		parent::__construct();
        $this->load->library('datatables');
        $this->load->model('pembayaran_model');
        $this->mymodel = $this->pembayaran_model;
	}

	function index()
	{
		$this->data['view']    = 'pembayaran';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
	}

	function getList()
    {
        $no = $this->input->post('state');
        header('Content-Type: application/json');
        echo $this->mymodel->getAll($no);
	}

	function getTotal(){
		$no = $this->uri->segment('3');
        echo $this->mymodel->getTotal($no);
	}

	function bayar()
    {
		$id_petugas=$this->session->userdata('userid');
		$nis=$this->input->post('nis');
		$bulan_dibayar=$this->input->post('bbayar');
		$tahun_dibayar=$this->input->post('tbayar');
		$id_spp=$this->input->post('idspp');
		$jumlah_bayar=$this->input->post('jbayar');
		$no_pembayaran=$this->input->post('nobayar');

		if($this->mymodel->check($nis,$tahun_dibayar,$bulan_dibayar)==0){
			if($this->mymodel->insert($id_petugas,$nis,$bulan_dibayar,$tahun_dibayar,$id_spp,$jumlah_bayar,$no_pembayaran)){
				echo '1';
			}else{
				echo '0';
			}
		}else{
			echo '2';
		}

		
	}

	function getNo(){
		echo $this->mymodel->getNo();
	}

	function hapus()
    {
        $id = $this->uri->segment('3');

        if($this->mymodel->delete($id)){
			echo '1';
		}else{
			echo '0';
		}
	}
	
	function batal()
    {
        $id = $this->uri->segment('3');

        if($this->mymodel->cancel($id)){
			echo '1';
		}else{
			echo '0';
		}
	}
	
	function invoice(){
		$this->data['view']    = 'invoice';
        $this->data['param']    = $this->input->get('param');
        $this->load->view('template/default', $this->data);
	}

}

    /* End of file  spp.php */
