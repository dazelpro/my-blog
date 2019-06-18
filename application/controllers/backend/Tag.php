<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller {
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
		$d['data'] = $this->db->query("select* from t_tag");  
		$x['isi'] = $this->load->view('backend/v_tag',$d,true);
		$this->load->view('backend/v_template',$x);
	}

	public function save()
	{
		$name = $this->input->post('name');
		$this->db->query("insert into t_tag (tag_name) values('$name')");
		redirect('backend/tag');	
	}

	public function update()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$this->db->query("update t_tag set tag_name='$name' where tag_id='$id'");
		redirect('backend/tag');	
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->query("delete from t_tag where tag_id='$id'");
		redirect('backend/tag');	
	}

}

/* End of file Tag.php */
/* Location: ./application/controllers/backend/Tag.php */