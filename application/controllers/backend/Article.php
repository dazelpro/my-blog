<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	function __construct(){
		parent::__construct();
		error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('admin');
            redirect($url);
        };
        $this->load->model('backend/Article_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	public function index()
	{
		$x['category'] = $this->db->query("select* from t_category");
		$x['tag'] = $this->db->query("select* from t_tag"); 
		$x['isi'] = $this->load->view('backend/v_article',$x,true);
		$this->load->view('backend/dashboard',$x);
	}

	public function listing()
	{
		$d['data'] = $this->db->query("select* from t_article join t_category where t_category.category_id = t_article.article_category_id");  
		$x['isi'] = $this->load->view('backend/v_list_article',$d,true);
		$this->load->view('backend/dashboard',$x);
	}

	public function get()
	{
		$id = $this->uri->segment(4);
		$x['category'] = $this->db->query("select* from t_category");
		$x['tag'] = $this->db->query("select* from t_tag"); 
		$x['article'] = $this->db->query("select* from t_article where article_id = '$id'"); 
		$x['isi'] = $this->load->view('backend/v_edit_article',$x,true);
		$this->load->view('backend/dashboard',$x);
	}

	public function publish()
	{
		$config['upload_path'] = './assets/backend/upload/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
		$config['encrypt_name'] = TRUE;
		$config['max_size'] = 5000;

	    $this->upload->initialize($config);
	    if(!empty($_FILES['image']['name'])){
	        if ($this->upload->do_upload('image')){
	        	$gbr = $this->upload->data();
	            
	            $foto=$gbr['file_name'];
                $title=$this->input->post('title');
                $slug=$this->input->post('slug');
                $content=$this->input->post('ckeditor');
                $category=$this->input->post('category');
                $xtags[]=$this->input->post('tag');
				foreach($xtags as $tag){
					$tags = @implode(",", $tag);
				}

				$this->Article_model->publish($foto,$title,$slug,$content,$category,$tags);
				redirect('backend/Article');
			}else{
				//redirect ke blog jika gambar gagal upload
				// redirect('Welcome/Gagal');
				$url=base_url('backend/article');
				echo $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<i class="fa fa-warning"></i> &nbsp;
					Upload failed. Please upload images in JPG, PNG, JPEG and a maximum size of 5MB.</div>');
				redirect($url);
		    }
	                 
	    }else{
	    	//redirect ke blog jika gambar kosong
			// redirect('Welcome/Kosong');
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->query("delete from t_article where article_id='$id'");
		redirect('backend/article/listing');
	}

}

/* End of file Article.php */
/* Location: ./application/controllers/backend/Article.php */