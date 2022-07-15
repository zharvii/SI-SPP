<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Front Controller
 *
 * This class provides a common place to handle any tasks that need to
 * be done for all public-facing controllers.
 */
class Front_Controller extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();

      $this->set_current_user();
		
		//log_message('info', '_MSM_ Front_Controller Class Initialized');
   }
}
