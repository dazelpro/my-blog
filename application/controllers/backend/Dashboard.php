<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('admin');
            redirect($url);
        };
	}
	function index(){	
		$this->load->view('backend/dashboard');
	}

}