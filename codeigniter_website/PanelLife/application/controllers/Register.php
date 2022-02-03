<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

		public function __construct(){

		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->library('encrypt');
		$this->load->model('skyrim_model');
		if ($this->session->userdata('user')) {
			redirect(base_url());
		}
	}

		public function index(){
			$this->load->view('inc/header');
			$this->load->view('register');
			$this->load->view('inc/footer');
		}
		function validation(){
		$this->form_validation->set_message('is_unique', 'The %s is already taken');
		$this->form_validation->set_rules('nickname','Nickname','required|is_unique[users.nickname]');
		$this->form_validation->set_rules('email','Email','required|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() == true) {
			$data = array(
			'nickname'=>$this->input->post('nickname'),
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password')),
			'avatar'=>$this->input->post('avatar'),
			'status'=>0
		);
		$id = $this->skyrim_model->registration($data);
		$this->regsuccess();

		}
		else{
			$this->index();
		}

	}

	public function regsuccess(){
		if ($this->session->userdata('user')) {
			redirect(base_url());
		}
			$this->load->view('inc/header');
			$this->load->view('reg_success');
			$this->load->view('inc/footer');
		}
}