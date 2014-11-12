<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->model('Categories');
		$this->load->model('States');
		
		$categories = $this->Categories->get();
		$formattedCat = array('0' => '');
		foreach($categories as $category){
			$formattedCat[$category->cat_id] = $category->category;
		}
		$data['allCats'] = $formattedCat;
		
		$states = $this->States->get();
		$formatted_states = array('0' => '');
		foreach($states as $state){
			$formattedStates[$state->state_id] = $state->state_name;
		}
		$data['allStates'] = $formattedStates;
		
		$this->load->helper('form');
		$this->load->view('signup_head');
		$this->load->view('signup', $data);
	}
	
	public function data_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules();
		$this->form_validation->set_rules();
		$this->form_validation->set_rules();
	}
}
?>