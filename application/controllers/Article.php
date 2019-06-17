<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('backend/Article_model','article_model');
        error_reporting(0);
	}

	public function index()
	{
		
	}

	function detail($slug)
	{
		$x['article'] = $this->db->query("select* from t_article where article_slug='testing'");
		$x['article_popular'] = $this->db->query("select* from t_article limit 5");
		$x['category_menu'] = $this->db->query("select* from t_category");
		$x['tags'] = $this->db->query("select* from t_tag");
		$this->load->view('v_article_detail',$x);
	}

}

/* End of file Article.php */
/* Location: ./application/controllers/Article.php */