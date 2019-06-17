<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('backend/Login_model','login_model');
        error_reporting(0);
	}

	function index(){
		$this->load->view('backend/v_login');
	}

	function auth(){
        $email=str_replace("'", "", htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES));
        $password=str_replace("'", "", htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));
        $data=$this->login_model->auth($email,$password);
        if($data->num_rows() > 0){
         	$this->session->set_userdata('logged',TRUE);
         	$this->session->set_userdata('user',$u);
         	$x = $data->row_array();

         	if($x['user_level']=='1'){ //Administrator
            	$this->session->set_userdata('access','1');
            	$id=$x['user_id'];
            	$name=$x['user_name'];
            	$nick_name=$x['user_nick_name'];
            	$this->session->set_userdata('id',$id);
            	$this->session->set_userdata('name',$name);
            	redirect('dashboard');

         	}else{ //Others User 
             	$this->session->set_userdata('access','2');
            	$id=$x['user_id'];
            	$name=$x['user_name'];
            	$nick_name=$x['user_nick_name'];
            	$this->session->set_userdata('id',$id);
            	$this->session->set_userdata('name',$name);
            	redirect('dashboard');
         	}	

        }else{
        	$url=base_url('admin');
            echo $this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<i class="fa fa-warning"></i> &nbsp;Email or Password Failed !</div>');
            redirect($url);
        }

    }
       
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('admin');
        redirect($url);
    }
	
}