<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
   protected $ignore_pages = array(
      '/front/login',
      '/front/logout',
      '/images',
   );

   /**
    * @var string Stores the previously viewed page's complete URL. Managed by
    * App_hooks->prepRedirect() via a 'post_controller' hook and stored in the
    * session.
    */
   protected $previous_page;

   /**
    * @var string Stores the requested page, which will sometimes differ from the
    * current page in cases like the login page, where the requested page will
    * need to be available if they are successfully authenticated. Managed by
    * App_hooks->saveRequested() via a 'pre_controller' hook and stored in the
    * session.
    */
   protected $requested_page;

   /** @var object Stores the current user's details, if they've logged in. */
   protected $current_user = null;

   /** @var bool If true, the user must log in to access any method. */
   protected $require_authentication = false;

   /** @var array Parameters for view components. */
   protected $data = array();

   /** @var int Identifier for our content. */
   protected $id;


   function __construct()
   {
      parent::__construct();

      // Set language from session var

      $this->save_requested_url();

      if ($this->require_authentication === true) {
         $this->authenticate();
      }

      // Make sure no assets end up as a requested page or a 404 page.
      if (!preg_match('/\.(gif|jpg|jpeg|png|css|js|ico|shtml)$/i', $this->uri->uri_string())) {
         $this->previous_page  = $this->session->userdata('previous_page');
         $this->requested_page = $this->session->userdata('requested_page');
      }
   }

   /**
    * Ensures that a user is logged in. Any additional authentication will need
    * to be done by the child classes.
    *
    * By having the authentication handled here (rather than Authenticated_Controller),
    * it can be called in the Base_Controller's __construct() method to ensure
    * the user's chosen language is used whenever the user is logged in, even if
    * the child controller doesn't require authentication.
    *
    * @return void
    */
   protected function authenticate()
   {
      $this->load->library('auth');
      // Ensure the user is logged in.
      //$this->auth->restrict();
      $this->set_current_user();
   }

   /**
    * If the Auth lib is loaded, set $this->current_user.
    *
    * By returning if the Auth library hasn't already been loaded, we potentially
    * save some time and prevent loading unnecessary libraries.
    *
    * @return void
    */
   protected function set_current_user()
   {
      if (!class_exists('Auth', false)) {
         return;
      }

      // Load the currently logged-in user for convenience.
      if ($this->auth->is_logged_in()) {
         $this->current_user = clone $this->auth->user();
      } else {
         redirect('front/login');
      }
   }


   protected function save_requested_url()
   {
      // Either the session library was available all along or it has been loaded,
      // so determine whether the current URL is in the ignore_pages array and,
      // if it is not, set it as the requested page in the session.
      if (!$this->ruriInArray($this->ignore_pages)) {
         $this->session->set_userdata('requested_page', current_url());
      }
   }

   protected function ruriInArray(array $ruriArray)
   {
      // Output of uri->ruri_string() is considerably different in CI 3 when using
      // the BF_Router, so the following normalizes the output for the comparison
      // with $this->ignore_pages.
      $ruriString = '/' . ltrim(
         str_replace($this->router->directory, '', $this->uri->ruri_string()),
         '/'
      );
      return in_array($ruriString, $ruriArray);
   }

   function reset_flash_data()
   {
      $this->session->set_flashdata('message', '');
   }
   /* Save current opened sidebar menu */
   function sidebar($menu_id = 'null')
   {
      if (empty($menu_id))
         $this->session->unset_userdata('sidebar_menu');
      else if ($menu_id === 'null')
         $this->session->unset_userdata('sidebar_menu');
      else
         $this->session->set_userdata('sidebar_menu', $menu_id);
   }
}
