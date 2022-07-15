<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends Data_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->library('hash');
		$this->load->library('Auth');
        $this->load->library('datatables');
        $this->load->model('petugas_model');
        $this->mymodel = $this->petugas_model;
	}

	function index()
	{
		$this->data['view']    = 'petugas';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
	}

	function getPetugas()
    {
        header('Content-Type: application/json');
        echo $this->mymodel->getAll();
	}

	function insertPetugas()
    {

        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');

        $encrypt=$this->hash->ecryptPassword($pass);

		if($this->mymodel->insert($user,$encrypt,$nama,$level)){
			echo '1';
		}else{
			echo '0';
		}
	}

	function editPetugas()
    {

        $id = $this->input->post('id');
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $param = $this->input->post('param');

        if($param=='t'){
            $encrypt=$this->hash->ecryptPassword($pass);

            if($this->mymodel->update($id,$user,$encrypt,$nama,$level,$param)){
                echo '1';
            }else{
                echo '0';
            }
        }else if($param=='f'){
            if($this->mymodel->update($id,$user,$pass,$nama,$level,$param)){
                echo '1';
            }else{
                echo '0';
            }
        }
	}

	function hapusPetugas()
    {
        $id = $this->uri->segment('3');

        if($this->mymodel->delete($id)){
			echo '1';
		}else{
			echo '0';
		}
    }

    function changePassword()
    {

        $id = $this->input->post('id');
        $pass = $this->input->post('pass');

        $encrypt=$this->hash->ecryptPassword($pass);

		if($this->mymodel->changePassword($id,$encrypt)){
			echo '1';
		}else{
			echo '0';
		}
    }

    function validate(){
        $id = $this->uri->segment('3');
        $pass = $this->uri->segment('4');

        $user = $this->db->query("SELECT * FROM petugas WHERE id_petugas='$id'")->row();

        if (!$this->hash->checkPassword(trim($pass),trim($user->password))) {
			return 'f';
		}else{
            return 't';
        }
    }

}

