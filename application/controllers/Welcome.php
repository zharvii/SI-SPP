<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->library('datatables');
		// $this->load->model('User_Model');

		// header('Content-Type: application/json');
		// echo $this->User_Model->get_all_users();
		// $this->db->select('*');
		// $this->db->from('tbl_login');
		// $this->db->where('namauser', 'test');
		// $query = $this->db->get();
		// $result = $query->row_array();
		// echo "<script language=\"javascript\">alert('test');</script>";
		// $ex = $this->auth->checkPassword('12345678', $result['pasword']);
		// if ($ex) {
		// 	echo 'matp';
		// } else {
		// 	echo 'no';
		// }
		echo 'oke';
	}

	// function ajaxUsername()
	// {
	// 	$username = $this->input->post('username');
	// 	// $password = $this->input->post('password');
	// 	$this->db->select('*');
	// 	$this->db->from('login');
	// 	$this->db->where('email', $username);
	// 	$query = $this->db->get();

	// 	if ($query->num_rows() > 0) {
	// 		echo 't';
	// 	} else {
	// 		echo 'f';
	// 	}
	// }


	// function ajaxPassword()
	// {
	// 	$this->load->library('auth');
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');

	// 	$query = $this->db->query("select * from login where email='$username'");

	// 	$data = $query->result();
	// 	$pass = '';
	// 	$namauser = '';
	// 	foreach ($data as $dt) {
	// 		$namauser = $dt->email;
	// 		$pass = $dt->password;
	// 	}


	// 	if ($this->auth->checkPassword($password, $pass)) {
	// 		echo 't';
	// 	} else {
	// 		echo 'f';
	// 	}
	// }

	function cekLogin()
	{
		$this->load->library('auth');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$tipe = $this->input->post('tipe');

		if($tipe=='P'){
			$this->db->select('*');
			$this->db->from('petugas');
			$this->db->where('username', $username);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {

				$data=$query->result();

				$pass='';

				foreach ($data as $dt) {
					$pass = $dt->password;
				}

				if ($this->auth->checkPassword($password, $pass)) {
					echo '200';
				} else {
					echo '500';
				}

			} else {
				echo '404';
			}
		}else if($tipe=='S'){
			$this->db->select('*');
			$this->db->from('siswa');
			$this->db->where('nis', $username);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {

				$data=$query->result();

				$pass='';

				foreach ($data as $dt) {
					$pass = $dt->pin;
				}

				if ($password==$pass) {
					echo '200';
				} else {
					echo '500';
				}

			} else {
				echo '404';
			}
		}else{
			echo 'Error';
		}
	}
}
