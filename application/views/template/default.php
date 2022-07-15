<?php
$this->data['param'] = $param;
$this->data['name'] = $this->session->userdata('namauser');
$this->load->view('template/head.php');
$this->load->view('template/navbar.php');
$this->load->view('template/sidebar.php', $this->data);
$this->load->view($view, $this->data);
