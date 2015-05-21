<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->template->set_partial('header','admin-header');
		$this->template->set_partial('footer','admin-footer');

		$user = $this->session->userdata('user'); 
		if ($user['id']){
			#Tải model 
			$this->load->model(array('modelsupport'));

			$this->template->set('user',$user);
		}else{
			redirect(base_url('login'));
		}

		$this->template->set_layout('admin');
	}
	
	public function index($page = 1){
		$data = array();

		if($page<1)
			$page=1;
		$item_per_page = 20;
		$begin = ($page-1) * $item_per_page;

		$list =  $this->modelsupport->getSupports($begin,($item_per_page+1));
		$data['list'] = $list;
		// var_dump($data['list']);die;
		$newer_link = '';
		if(count($list)>$item_per_page){
			$newer_link = base_url().'admin/support/index/'.($page+1);
			unset($list[$item_per_page]);
		}
		$older_link = '';
		if ($page>1) {
			$older_link = base_url().'admin/support/index/'.($page-1);
		}
		$data['newer_link'] = $newer_link;
		$data['older_link'] = $older_link;

		$this->template->build('listsupport',$data);
	}
	public function delete($id=0){
		$this->db->delete('supports', array('id' => $id)); 
		redirect(base_url('/admin/support'));
	}
}
