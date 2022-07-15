<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once('phpass-0.3/PasswordHash.php');

define('PHPASS_HASH_STRENGTH', 8);
define('PHPASS_HASH_PORTABLE', false);

class Auth
{
	/** @var object A pointer to the CodeIgniter instance. */
	private $CI;

	/** @var string The ip_address of the current user. */
	private $ip_address;

	/** @var array The names of all existing permissions. */
	private $permissions = null;

	/** @var array The permissions by role. */
	private $role_permissions = array();

	/** @var object The logged-in user. */
	private $user;

	protected $user_table = 'petugas'; // Table name

	public function __construct()
	{
		$this->CI = &get_instance();
		$this->ip_address = $this->CI->input->ip_address();
	}

	function is_logged_in()
	{
		if ($this->CI->session->userdata('logged_in') == NULL)
			return false;
		else
			return $this->CI->session->userdata('logged_in');
	}

	function user()
	{
		// If the user has already been cached, return it.
		if (isset($this->user)) {
			return $this->user;
		}
		$this->user = false;

		$namauser = $this->CI->session->userdata('namauser');
		if (empty($namauser)) {
			return false;
		} else {
			if(is_numeric($namauser)){
				//Check against user table
				$this->CI->db->select('*');
				$this->CI->db->where('nis', $this->CI->session->userdata('namauser'));
				$query = $this->CI->db->get_where('siswa');

				if ($query->num_rows() > 0) {
					$this->user = $query->row();
					$this->user->nisn = $this->user->nisn;
					return $this->user;
				} else {
					return false;
				}
			}else{
					//Check against user table
					$this->CI->db->select('*');
					$this->CI->db->where('username', $this->CI->session->userdata('namauser'));
					$query = $this->CI->db->get_where($this->user_table);

					if ($query->num_rows() > 0) {
						$this->user = $query->row();
						$this->user->username = $this->user->username;
						return $this->user;
					} else {
						return false;
					}
			}
		}
	}



	function login($loginname = '', $password = '',$sebagai='')
	{
		if ($loginname == '' or $password == '')
			return false;

		//Check if already logged in
		if ($this->CI->session->userdata('namauser') == $loginname || $this->CI->session->userdata('userid') == $loginname) {
			return true;
		}

		if($sebagai=='S'){
			//Check against user table
			$this->CI->db->select('*');
			$this->CI->db->from('siswa');
			$this->CI->db->where('nis', $loginname);
			$query = $this->CI->db->get();

			if ($query->num_rows() > 0) {
				$result = $query->row_array();

				$cleanPass = trim($result['pin']);

				if ($password != $cleanPass) {

					return false;
				}


				//Create a fresh, brand new session
				if (CI_VERSION >= '3.0') {
					$this->CI->session->sess_regenerate(TRUE);
				} else {
					//Destroy old session
					$this->CI->session->sess_destroy();
					$this->CI->session->sess_create();
				}


				$this->CI->session->set_userdata(
					array(
						'userid'   => $result['nis'],
						'namauser'   => $result['nis'],
						'logged_in'   => true,
						'role'   => 'siswa',
						'nama'   => $result['nama']

					)
				);

				return true;
			} else {

				return false;
			}
		}else if($sebagai='P'){
			//Check against user table
			$this->CI->db->select('*');
			$this->CI->db->from($this->user_table);
			$this->CI->db->where('username', $loginname);
			$query = $this->CI->db->get();

			if ($query->num_rows() > 0) {
				$result = $query->row_array();

				$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
				$cleanPass = trim($result['password']);

				if (!$hasher->CheckPassword($password, $cleanPass)) {

					return false;
				}


				//Create a fresh, brand new session
				if (CI_VERSION >= '3.0') {
					$this->CI->session->sess_regenerate(TRUE);
				} else {
					//Destroy old session
					$this->CI->session->sess_destroy();
					$this->CI->session->sess_create();
				}


				$this->CI->session->set_userdata(
					array(
						'userid'   => $result['id_petugas'],
						'namauser'   => $result['username'],
						'logged_in'   => true,
						'role'   => $result['level'],
						'nama'   => $result['nama_petugas']

					)
				);

				return true;
			} else {

				return false;
			}
		}else{
			return false;
		}
	}


	public function checkPassword($passwordDecrypt, $passwordEncript)
	{
		$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
		if ($hasher->CheckPassword($passwordDecrypt, trim($passwordEncript))) {
			return true;
		} else {

			return false;
		}
	}

	function logout()
	{

		// unset session's userdata
		$user_data = $this->CI->session->all_userdata();
		foreach ($user_data as $key => $value) {
			if (
				$key != 'session_id' &&
				$key != 'ip_address' &&
				$key != 'user_agent' &&
				$key != 'last_activity'
			) {
				$this->CI->session->unset_userdata($key);
			}
		}

		$this->CI->session->sess_destroy();
	}



	public function has_permission($controller, $method = 'index')
	{
		// member of admin group? OK allow!
		if ($this->CI->session->userdata('rolename') === 'admin')
			return TRUE;

		$granted = FALSE;

		// Check Role/Group permission
		$roleName = $this->CI->session->userdata('rolename');
		$granted = $this->do_check_permission($controller, $method, 'G', $roleName);

		if ($granted === TRUE) {
			return TRUE;
		} else {
			// Check user permission
			$loginName = $this->CI->session->userdata('loginname');
			$granted = $this->do_check_permission($controller, $method, 'U', $loginName);
			return $granted;
		}
	}

	public function do_check_permission($controller, $method, $ug_type, $ug_name)
	{
		$granted = FALSE;
		$table = '';

		if ($ug_type === 'G')
			$table = 'v_roles_acl';
		if ($ug_type === 'U')
			$table = 'v_users_acl';

		$this->CI->db->select('a_all,a_index,a_add,a_delete,a_update,a_print,a_other');
		$this->CI->db->where('ug_name', $ug_name);
		$this->CI->db->where('site_url', $controller);
		$this->CI->db->where('tipe', 'CONTROLLER');
		$query = $this->CI->db->get($table);
		$row = $query->first_row();

		if (isset($row)) {
			if ($row->a_all == '1')   // check all access
				return TRUE;

			else if ($row->a_index == '1'   && ($method == 'index' || $method == 'page')) // check index	
				return TRUE;

			else if ($row->a_add == '1'     && $method == 'add')                          // check add	
				return TRUE;

			else if ($row->a_delete == '1'  && $method == 'delete')                       // check delete	
				return TRUE;

			else if ($row->a_update == '1'    && ($method == 'edit' || $method == 'update')) // check edit	
				return TRUE;

			else if ($row->a_print == '1'   && $method == 'print')                         // check print	
				return TRUE;

			else if ($row->a_other != "")     																// fallback..	                                    
			{
				$akses = explode(',', $row->a_other);

				if (empty($akses))
					$granted = FALSE;
				if (in_array($method, $akses))
					return TRUE;
			} else
				$granted = FALSE;
		} else
			$granted = FALSE;

		return $granted;
	}


	/**
	 * Check whether a user is logged in (and, optionally of the correct role) and,
	 * if not, send them to the login screen.
	 *
	 * If no permission is checked, will simply verify that the user is logged in.
	 * If a permission is passed in to the first parameter, it will check the user's
	 * role and verify that role has the appropriate permission.
	 *
	 * @param string $permission (Optional) The permission to check for.
	 * @param string $uri        (Optional) The redirect URI if the user does not
	 * have the correct permission.
	 *
	 * @return boolean True if the user has the appropriate access permissions.
	 * Redirect to the previous page if the user doesn't have permissions.
	 * Redirect to LOGIN_AREA page if the user is not logged in.
	 */
	public function restrict($permission = null, $uri = null)
	{
		// If user isn't logged in, redirect to the login page.
		if ($this->is_logged_in() === false) {
			redirect(base_url() . '/front/login');
		}

		// Check whether the user has the proper permissions.
		if (empty($permission) || $this->has_permission($permission)) {
			return true;
		}

		// If the user is logged in, but does not have permission...

		// If $uri is not set, get the previous page from the session.
		if (!$uri) {
			$uri = $this->CI->session->userdata('previous_page');

			// If previous page and current page are the same, but the user no longer
			// has permission, redirect to site URL to prevent an infinite loop.
			if ($uri == current_url()) {
				$uri = site_url();
			}
		}

		// Inform the user of the lack of permission and redirect.
		redirect($uri);
	}
}
