<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {
	public function index(){
		$this->load->view('head');
		$this->load->view('header');
		$this->load->library('table');
		$this->load->model('Model_students');
		$records = $this->db->get('students')->result();
		foreach($records as $record){
			$updated_records[] = array(
				$record->id,$record->name,$record->current_year,$record->grad_year,
				anchor('students/update/'.$record->id,'Update')." ".anchor('students/delete/'.$record->id,'Delete')
			);
		}
		$this->load->view('content_student',array('stds' => $updated_records));
		$this->load->view('footer');
	}
	public function add(){
		$this->load->library('table');
		if(empty($_POST) === true){
			$this->load->view('head');
			$this->load->view('header');
			$this->load->view('content_stdinsert');
			$this->load->view('footer');
		}else{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name','Student Name','required|alpha|xss_clean');
			$this->form_validation->set_rules('cur_year','Current Year','required|max_length[1]|xss_clean');
			$this->form_validation->set_rules('grad_year','Graduation Year','required|max_length[4]|xss_clean');
			if($this->form_validation->run() === false){
				$this->load->view('head');
				$this->load->view('header');
				$this->load->view('content_stdinsert');
				$this->load->view('footer');
			}else{
				$this->load->model('mydatabase');
				$rows = array('name' => 'Shehryar');
				$this->mydatabase->insert($rows);
				redirect('students');
			}
		}
	}
	public function update($user_id){
		$this->load->view('head');
		$this->load->view('header');
		$this->load->model('students');
		$rows = array('name' => 'Sohail');
		$this->mydatabase->update($rows);
		echo 'The value has been updated';
	}
	public function delete($user_id){
		echo $user_id;
	}
}