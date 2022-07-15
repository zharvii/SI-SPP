<?php defined('BASEPATH') || exit('No direct script access allowed');

class Data_Controller extends Authenticated_Controller
{
	protected $mymodel = null;

   public function __construct()
   {
      parent::__construct();
		
		//log_message('info', '_MSM_ Data_Controller Class Initialized');
   }
	
   function delete()
   {
		if ($this->input->post())
		{
			$pkey   = $this->input->post('id');

			if ($this->mymodel->select($pkey)->num_rows() > 0)
			{
				if ($this->mymodel->delete($pkey))
				{
					$this->session->set_flashdata('message',$this->lang->line('msm_form_data_deleted'));
					$this->output
						  ->set_content_type('application/json')
					     ->set_output(json_encode(array('status' => 'SUCCESS',
					                                    'message' => $this->lang->line('msm_form_data_deleted'))));	
				}
				else // Send response to caller
					$this->output
						  ->set_content_type('application/json')
					     ->set_output(json_encode(array('status' => 'FAIL',
					                                    'message' => $this->lang->line('msm_form_data_del_failed'))));					
			}
			else
			{
				// Send response to caller
				$this->output
					  ->set_content_type('application/json')
					  ->set_output(json_encode(array('status' => 'FAIL',
					                                 'message' => $this->lang->line('msm_form_data_not_found'))));
			}
		}
   }
}
