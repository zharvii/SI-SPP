<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/


$hook['pre_system'][] = array(
    'class'    => '',
    'function' => 'load_app_controllers',
    'filename' => 'Pre_system.php',
    'filepath' => 'hooks'
);

/*
  // Store the requested URL, which will sometimes be different from previous URL.
  $hook['pre_controller'][] = array(
      'class'    => 'App_hooks',
      'function' => 'save_requested',
      'filename' => 'App_hooks.php',
      'filepath' => 'hooks',
      'params'   => ''
  );
  */


// Allow performance of good redirects to previous pages.
$hook['post_controller'][] = array(
    'class'    => 'App_hooks',
    'function' => 'save_previous',
    'filename' => 'App_hooks.php',
    'filepath' => 'hooks',
    'params'   => ''
);


$hook['post_system'][] = array(
    'class'    => '',
    'function' => 'post_system',
    'filename' => 'Post_system.php',
    'filepath' => 'hooks',
    'params'   => ''
);
