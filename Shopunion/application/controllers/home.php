<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('content_home');
		$this->load->view('footer');
	}
}
?>