<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		if($this->session->userdata['is_logged_in']){
			$this->load->model('Advertiser');
			$advertiser = new Advertiser();
			$advertiser->load($this->session->userdata['ad_id']);
			$this->load->view('dashboard', $advertiser);
		}else{
			$this->load->view('restricted');
		}
	}
	public function business(){
		$this->load->view('business');
	}
	public function push(){
		$this->load->model('Posts');
		$newPost = new Posts();
		$newPost->ad_id = $this->session->userdata['ad_id'];
		$newPost->title = $this->input->post('NewPostTitle');
		$newPost->message = $this->input->post('NewPostBody');
		//$newPost->dateTime = 
		
		$newPost->insert();
	}
	public function Password(){
		$this->load->view('password');
	}
	public function validate_password(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('field', 'field name to appear', 'xss_clean|callback_validate_old_password');
		if($this->form_validation->run()){
			redirect('');
		}else{
			$this->load->view('');
		}
	}
	public function validate_old_password(){
		if(){
			return true
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
?>