<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	public function admin_login()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username' , 'required');
		$this->form_validation->set_rules('password', 'Password' , 'required');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$this->load->model('admintool/admin_model');
			$admin = $this->admin_model->admin_login($username, $password);
			if($admin[0]['status'] == 1){
				if($admin = $this->admin_model->admin_login($username, $password))
				{
					$session_data = array(
						'admin'=>[
							'id' => $admin[0]['id'],
							'username' => $admin[0]['nickname'],
							'status' => $admin[0]['status'],
							'email' => $admin[0]['email'],
						]
						);
					$this->session->set_userdata($session_data);
					redirect(base_url().'adminhome');
				}
				else
				{
					$this->session->set_flashdata('error', 'Invalid username and password');
					redirect(base_url().'admintool');
				}
			}
			else{
				$this->session->set_flashdata('error', 'You are not Admin!!!');
				redirect(base_url().'admintool');
			}
		}
		$this->load->view('admintool/index');
	}

	public function logout()
	{
		$this->session->unset_userdata('admin');
		redirect(base_url().'admintool');
	}
}