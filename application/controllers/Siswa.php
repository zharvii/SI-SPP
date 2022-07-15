<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Data_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->library('hash');
        $this->load->library('datatables');
        $this->load->model('siswa_model');
        $this->mymodel = $this->siswa_model;
	}

	function index()
	{
		$this->data['view']    = 'siswa';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
	}

	function getSiswa()
    {
        header('Content-Type: application/json');
        echo $this->mymodel->getAll();
	}

	function getNis()
    {
        echo $this->mymodel->genNis();
	}
    // `nis`, `nisn`, `nama`, `id_kelas`, `alamat`, `no_tlp`, `id_spp`, `tgl_lahir`, `pin`, `kompetensi`, `tahun_masuk`

	function insertSiswa()
    {
        $nis = $this->input->post('nis');
        $nisn = $this->input->post('nisn');
        $nama = $this->input->post('nama');
        $kelasJurusan = explode(";",$this->input->post('kelas'));
        $alamat = $this->input->post('alamat');
        $no_tlp = $this->input->post('hp');
        // $id_spp = $this->input->post('spp');
        $id_spp = '4';
        $tgl_lahir = $this->input->post('tgllhr');
		$tahun_masuk = date('Y');
		$pin = date("dmy",strtotime($tgl_lahir));

		if($this->mymodel->insert($nis,$nisn,$nama,$kelasJurusan[0],$alamat,$no_tlp,$id_spp,$tgl_lahir,$pin,$kelasJurusan[1],$tahun_masuk)){
			echo '1';
		}else{
			echo '0';
		}
	}

	function editSiswa()
    {
        $nis = $this->input->post('nis');
        $nisn = $this->input->post('nisn');
        $nama = $this->input->post('nama');
        $kelasJurusan = explode(";",$this->input->post('kelas'));
        $alamat = $this->input->post('alamat');
        $no_tlp = $this->input->post('hp');
        // $id_spp = $this->input->post('spp');
        $id_spp = '4';
        $tgl_lahir = $this->input->post('tgllhr');
		$tahun_masuk = date('Y');
		$pin = date("dmy",strtotime($tgl_lahir));

		if($this->mymodel->update($nis,$nisn,$nama,$kelasJurusan[0],$alamat,$no_tlp,$id_spp,$tgl_lahir,$pin,$kelasJurusan[1],$tahun_masuk)){
			echo '1';
		}else{
			echo '0';
		}
	}

	function hapusSiswa()
    {
        $nis = $this->uri->segment('3');

        if($this->mymodel->delete($nis)){
			echo '1';
		}else{
			echo '0';
		}
	}
	

	function checkNisn(){
        $nisn = $this->uri->segment('3');
		if($this->db->query("select * from siswa where nisn='$nisn'")->num_rows()==0){
			echo 't';
		}else {
			echo 'f';
		}
	}

	function checkNoHp(){
        $hp = $this->uri->segment('3');
		if($this->db->query("select * from siswa where no_tlp='$hp'")->num_rows()==0){
			echo 't';
		}else {
			echo 'f';
		}
	}

}

    /* End of file  siswa.php */
