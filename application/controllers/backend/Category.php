<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct(){
		parent::__construct();
		error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('admin');
            redirect($url);
        };
	}
	
	public function index()
	{
		$d['data'] = $this->db->query("select* from t_category");  
		$x['isi'] = $this->load->view('backend/v_category',$d,true);
		$this->load->view('backend/v_Template',$x);
	}

	public function save()
	{
		$name = strip_tags(htmlspecialchars($this->input->post('name',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $name);
		$trim     = trim($string);
		$slug     = strtolower(str_replace(" ", "-", $trim));
		$this->db->query("insert into t_category (category_name,category_slug) values('$name','$slug')");
		redirect('backend/category');	
	}

	public function update()
	{
		$id = $this->input->post('id');
		$name = strip_tags(htmlspecialchars($this->input->post('name',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $name);
		$trim     = trim($string);
		$slug     = strtolower(str_replace(" ", "-", $trim));
		$this->db->query("update t_category set category_name='$name', category_slug='$slug' where category_id='$id'");
		redirect('backend/category');	
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->query("delete from t_category where category_id='$id'");
		redirect('backend/category');	
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/backend/Category.php */