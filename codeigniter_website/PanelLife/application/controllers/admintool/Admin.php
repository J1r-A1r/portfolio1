<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect(base_url().'admintool');
		}
	}
	public function index(){
		$this->load->view('admintool/inc/header');
		$this->load->view('admintool/admin');
		$this->load->view('admintool/inc/footer');
	}
	public function forum(){
		$this->load->model('admintool/admin_model');
		$this->load->view('admintool/inc/header');
		$data['forum'] = $this->admin_model->forum();
		$this->load->view('admintool/forum',$data);
		$this->load->view('admintool/inc/footer');
	}
	function addforum(){
		$this->load->model('admintool/admin_model');
		$data['name'] = $this->input->post('title');
		$data['description'] = $this->input->post('desc');
		$data['nickname'] = $this->session->userdata('admin')['username'];
		$data['user_id'] = $this->session->userdata('admin')['id'];
		$data['likes'] = 0;
		$data['comment'] = 0;
		$data['view'] = 0;
		$this->form_validation->set_rules('title', 'Имя', 'required', array('required'=> 'Поле %s пустое'));
		if ($this->form_validation->run() == true) {
			if ($this->input->post('add')) {
				$this->admin_model->addforum($data);
				redirect(base_url().'adminforum');
			}
		}
	}
	function deleteforum(){
		$this->load->model('admintool/admin_model');
		$this->admin_model->deleteforum($this->uri->segment(2));
		redirect(base_url().'adminforum');
	}

	public function forumsingle(){
		$this->load->model('admintool/admin_model');
		$this->load->view('admintool/inc/header');
		$data['forum'] = $this->admin_model->forumsingle($this->uri->segment(2));
		$data['comment'] = $this->admin_model->forumcomment($this->uri->segment(2));
		$this->load->view('admintool/forumsingle',$data);
		$this->load->view('admintool/inc/footer');
	}
	function deleteForumComment(){
		$this->load->model('admintool/admin_model');
		$this->admin_model->changecomment($this->uri->segment(2));
		$this->admin_model->deleteForumComment($this->uri->segment(3));

		$url = $_SERVER['HTTP_REFERER'];
		redirect($url);
	}
	public function users(){
		$this->load->model('admintool/admin_model');
		$this->load->view('admintool/inc/header');
		$data['users'] = $this->admin_model->users();
		$this->load->view('admintool/users',$data);
		$this->load->view('admintool/inc/footer');
	}
	function deleteuser(){
		$this->load->model('admintool/admin_model');
		$this->admin_model->deleteuser($this->uri->segment(2));

		$url = $_SERVER['HTTP_REFERER'];
		redirect($url);
	}
	public function blog(){
		$this->load->model('admintool/admin_model');
		$this->load->view('admintool/inc/header');
		$data['blog'] = $this->admin_model->blog();
		$this->load->view('admintool/blog',$data);
		$this->load->view('admintool/inc/footer');
	}

	function addblog(){
		$this->load->model('admintool/admin_model');
		$data['name'] = $this->input->post('title');
		$data['description'] = $this->input->post('desc');
		$config['upload_path'] = './assets/img/blog';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = 25000;

		$this->load->library('upload',$config);
		$this->upload->do_upload('img');
		$image_data = $this->upload->data();
		$add['img'] = $image_data['file_name'];
		$data['img'] = $add['img'];

		if ($this->input->post('add')) {
			$this->admin_model->addblog($data);
			redirect(base_url().'adminblog');
		}

	}
	public function blogsingle(){
		$this->load->model('admintool/admin_model');
		$this->load->view('admintool/inc/header');
		$data['blog'] = $this->admin_model->blogsingle($this->uri->segment(2));
		$data['comment'] = $this->admin_model->blogcomment($this->uri->segment(2));
		$this->load->view('admintool/blogsingle',$data);
		$this->load->view('admintool/inc/footer');
	}



	function delete_blog(){
		$this->load->model('admintool/admin_model');
		$this->admin_model->delete_blog($this->uri->segment(2));
		$url = $_SERVER['HTTP_REFERER'];
		redirect($url);
	}
	function deleteBlogComment(){
		$this->load->model('admintool/admin_model');
		$this->admin_model->deleteBlogComment($this->uri->segment(2));

		$url = $_SERVER['HTTP_REFERER'];
		redirect($url);
	}
}

