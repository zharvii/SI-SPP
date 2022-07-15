<?php defined('BASEPATH') || exit('No direct script access allowed');

class Authenticated_Controller extends MY_Controller
{
   protected $require_authentication = true;

   public function __construct()
   {
      parent::__construct();
		
		//log_message('info', '_MSM_ Authenticated_Controller Class Initialized');
   }
}
