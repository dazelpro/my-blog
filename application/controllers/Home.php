<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$x['article'] = $this->db->query("select* from t_article");
		$x['category_menu'] = $this->db->query("select* from t_category");
		$x['tags'] = $this->db->query("select* from t_tag");
		$this->load->view('home',$x);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */