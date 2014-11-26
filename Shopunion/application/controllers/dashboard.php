<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	Public Dashboard(){
		$this->load->model('Advertiser');
		$advertiser = new Advertiser();
	}
	public function index()
	{
		if($this->session->userdata['is_logged_in']){
			//$this->load->model('Advertiser');
			//$advertiser = new Advertiser();
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
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
?>