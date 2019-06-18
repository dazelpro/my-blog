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
		$d['data'] = $this->db->query("select* from t_category");  
		$x['isi'] = $this->load->view('backend/v_dashboard',$d,true);
		$this->load->view('backend/v_template',$x);
	}

}