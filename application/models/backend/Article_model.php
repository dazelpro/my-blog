<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

	function publish($foto,$title,$slug,$content,$category,$tags){
        $data = array(
	        'article_title'	   		=> $title,
	        'article_content'  		=> $content,
	        'article_image' 		=> $foto,
	        'article_category_id' 	=> $category,
	        'article_tags' 	   		=> $tags,   
	        'article_slug' 	   		=> $slug,
	        'article_user_id'	   	=> $this->session->userdata('id')
		);
		$this->db->insert('t_article', $data);
    }

    function detail(){
    	
    }

}

/* End of file Article_model.php */
/* Location: ./application/models/backend/Article_model.php */