<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends MX_Controller{
	
	public function __construct(){
		parent::__construct();

	}
	
	public function index($page = null){
		$this->load->model('admin/modelcategory');

		$categories = $this->modelcategory->getCategories();

		$data = array();

		$cat_tour = array();
		$cat_art = array();
		$cat_edu = array();

		foreach ($categories as $key => $value) {
			if ($value['type'] == 0) {
				$cat_tour[] = $value;
			}elseif($value['type'] == 1) {
				$cat_art[] = $value;
			}elseif($value['type'] == 2) {
				$cat_edu[] = $value;
			}
		}
		$data['cat_tour'] = $cat_tour;
		$data['cat_art'] = $cat_art;
		$data['cat_edu'] = $cat_edu;
		$data['page'] = $page;

		$this->load->model(array('admin/modelsetting'));
		$this->load->helper(array('util')); 

		$setting = $this->modelsetting->getSetting(null);
		$setting = add_array_key('key',$setting);
		foreach ($setting as $key => $value) {
			$setting[$key]['data'] = json_decode($value['value']);
		}
		$data['setting'] = $setting;

		$this->load->model(array('admin/modelmember'));
		$list_member = $this->modelmember->getMembers(null,null);
		$data['list_member'] = $list_member;

		return $data;

		// $this->template->load_view('header',$data);

		// $this->template->build('header',$data);
	}
	
}
