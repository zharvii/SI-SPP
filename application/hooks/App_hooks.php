<?php defined('BASEPATH') || exit('No direct script access allowed');

class App_hooks
{
	private $ignore_pages = array(
		'/front/login',
		'/front/logout',
		'/images',
	);

	public function __construct()
	{
	}

	/**
	 * Stores the name of the current uri in the session as 'previous_page'.
	 * This allows redirects to take us back to the previous page without
	 * relying on inconsistent browser support or spoofing.
	 *
	 * Called by the "post_controller" hook.
	*/
   public function save_previous()
   {
		$CI =& get_instance();

		if (! class_exists('CI_Session', false)) 
		{
			$CI->load->library('session');
		}

		if (! $this->ruriInArray($this->ignore_pages))
		{
			$CI->session->set_userdata('previous_page', current_url());
		}
   }
	
    protected function ruriInArray(array $ruriArray)
   {
		$CI =& get_instance();
		
      $ruriString = '/' . ltrim(
         str_replace($CI->router->directory, '', $CI->uri->ruri_string()),
         '/'
      );
      return in_array($ruriString, $ruriArray);
   }
}
