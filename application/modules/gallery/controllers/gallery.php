<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MX_Controller {
	private $b_Check = true;

	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util_helper')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model('admin/modelgallery');

		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data);
		$data['is_news_page'] = false;
		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index($cat = 0){
		$data = array();

		$this->load->model('admin/modelbanner');

		$data['page'] = "gallery";
		$where = array('status'=>1);
		if($cat>0) 
			$where['category_id'] = $cat;
 		$list_items = $this->modelgallery->getGallery($where);
 
 		$data['list_items'] = $list_items;

 		$category = $this->modelbanner->getBanner(array('id'=>$cat));
 		$data['g_title'] = $category[0]['title'];

		$this->template->build('gallery',$data);
	}
}