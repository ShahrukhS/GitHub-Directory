<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function index()
	{
		$this->load->view('signin');
	}
	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('UserName', 'Email', 'required|callback_validate_credentials');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		
		if($this->form_validation->run()){
			/*$data[] = (
				'username' => $this->input->post('UserName'),
				'is_logged_in' => 1,
			);*/
			//$this->session->set_userdata($data);
			redirect('');
		}else{
			$this->load->view('signin');
		}
	}
	private function validate_credentials(){
		$this->load->model('Advertisers');
		if($this->Advertisers->can_login()){
			return true;
		}
	}
}
?>