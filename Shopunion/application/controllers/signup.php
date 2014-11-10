<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->model('Categories');
		$categories = $this->Categories->get();
		$formattedCat = array('0' => '');
		foreach($categories as $category){
			$formattedCat[$category->cat_id] = $category->category;
		}
		$this->load->helper('form');
		$data['allCats'] = $formattedCat;
		$this->load->view('signup_head');
		$this->load->view('signup', $data);
		//$this->load->view('footer');
	}
	public function data_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules();
		$this->form_validation->set_rules();
		$this->form_validation->set_rules();
	}
}
?>