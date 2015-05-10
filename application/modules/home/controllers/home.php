<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data );
		$this->template->set_partial('footer','footer',$data );
	}
	
	public function index(){
		$data = array();

		$this->load->model(array('modelcategory'));
		$this->load->model(array('admin/modelgallery'));
		$this->load->model(array('admin/modelbanner'));

		$list_category = $this->modelcategory->getCategories(array("type"=>0,"status"=>1));
		$cat_made = array();
		$cat_ongoing = array();
		foreach ($list_category as $key => $value) {
			$value['items'] = $this->modelgallery->getGallery(array('category_id'=>$value['id']));

			if ($value['parent']==1){
				$cat_made[] = $value;
			}elseif ($value['parent']==0){
				$cat_ongoing[] = $value;
			}
		}
		$data['cat_made'] = $cat_made;
		$data['cat_ongoing'] = $cat_ongoing;

		$banners = $this->modelbanner->getBanner(array('position'=>0));
		$data['banners'] = $banners;

		$this->template->build('home',$data);
	}
}
