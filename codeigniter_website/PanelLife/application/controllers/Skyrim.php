<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skyrim extends CI_Controller {
////////////////////////////////////////// Log in, Log Out /////////////////////////////////////////////////////////
	function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == true) {
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$this->load->model('skyrim_model');
			if($user = $this->skyrim_model->can_login($email,$password)){
				$session_data = array(
					'user' => [
						'email' => $user[0]['email'],
						'nickname'=> $user[0]['nickname'],
						'id'=> $user[0]['id'],
						'avatar'=> $user[0]['avatar'],
					]
					

				);
				$this->session->set_userdata($session_data);
				$url = $_SERVER['HTTP_REFERER'];
				redirect($url);
			}
			else{
				$this->session->set_flashdata('error','Invalid username and password');
				redirect(base_url());
			}
		}
		else{
			$this->index();
		}
	}
	function logout(){
		$this->session->unset_userdata('user');
		$url = $_SERVER['HTTP_REFERER'];
		redirect($url);
	}
////////////////////////////////////////// Pages /////////////////////////////////////////////////////////
	public function index()
	{
		$this->load->model('skyrim_model');
		$this->load->view('inc/header');
		$data['forum'] = $this->skyrim_model->home_forum();
		$data['blog'] = $this->skyrim_model->home_blog();
		$this->load->view('index',$data);
		$this->load->view('inc/footer');
	}
	public function history()
	{
		$this->load->view('inc/header');
		$this->load->view('history');
		$this->load->view('inc/footer');
	}
////////////////////////////////////////// Forum /////////////////////////////////////////////////////////
	function addforum(){
		if (!$this->session->userdata('user')) {
			redirect(base_url());
		}
		$this->load->model('skyrim_model');
		$data['name'] = $this->input->post('name');
		$data['description'] = $this->input->post('description');
		$data['nickname'] = $this->input->post('nickname');
		$data['user_id'] = $this->input->post('user_id');
		$data['likes'] = 0;
		$data['comment'] = 0;
		$data['view'] = 0;
		if ($this->input->post('add')) {
			$this->skyrim_model->addforum($data);
			redirect(base_url().'forum');
		}	
	}
	public function forum($page="")
	{
		$this->load->view('inc/header');
		$this->load->model('skyrim_model');
		$curr_page = 0;
		$total_rows = $this->skyrim_model->getTotalForum();		
		if(isset($page) && trim($page) != ""){
			$curr_page = $page;
		}
		$config['base_url'] = base_url('forum');
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 5;
		$config['uri_segment'] = 2;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['num_tag_open'] = "<li class='page-item'>";
		$config['num_tag_close'] = "</li>";

		$config['cur_tag_open'] = "<li class='page-item active disabled'><a class='page-link' href='javascript:void(0)'>";
		$config['cur_tag_close'] = "</a></li>";

		$config['next_tag_open'] = "<li class='page-item'>";
		$config['next_tag_close'] = "</li>";

		$config['prev_tag_open'] = "<li class='page-item'>";
		$config['prev_tag_close'] = "</li>";

		$config['first_tag_open'] = "<li class='page-item'>";
		$config['first_tag_close'] = "</li>";

		$config['last_tag_open'] = "<li class='page-item'>";
		$config['last_tag_close'] = "</li>";

		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';

		$config['attributes'] = array('class'=>'page-link');

		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();
		$data['forum'] = $this->skyrim_model->forum($config['per_page'],$curr_page);
		$this->load->view('forum',$data);
		$this->load->view('inc/footer');
	}
	public function forumsingle()
	{
		$this->load->model('skyrim_model');
		$this->load->view('inc/header');
		$data['forum'] = $this->skyrim_model->forum_single($this->uri->segment(2));
		$data['comments'] = $this->skyrim_model->get_forum_comments($this->uri->segment(2));
		$data['comments_count'] = count($data['comments']);
		$view = $data['forum'][0]['view'];
		if ($this->session->userdata('user')) {
			$view+=1;
			$this->skyrim_model->view($view,$this->uri->segment(2));
		}
		$this->load->view('forumsingle',$data);
		$this->load->view('inc/footer');
	}
	function like(){
		if (!$this->session->userdata('user')) {
			redirect(base_url());
		}
		$this->load->model('skyrim_model');
		$data['forum'] = $this->skyrim_model->forum_single($this->uri->segment(2));
		$like = $data['forum'][0]['likes'];
		if ($this->session->userdata('user')) {
			$like+=1;
			$this->skyrim_model->like($like,$this->uri->segment(2));
			redirect(base_url().'forumsingle/'.$this->uri->segment(2));
		}
	}

	function addcomment(){
		if (!$this->session->userdata('user')) {
			redirect(base_url());
		}
		$this->load->model('skyrim_model');
		$data['nickname'] = $this->input->post('nickname');
		$data['avatar'] = $this->input->post('avatar');
		$data['description'] = $this->input->post('description');
		$data['user_id'] = $this->input->post('user_id');
		$data['forum_id'] = $this->input->post('forum_id');
		$forum_id = $data['forum_id'];
		$this->form_validation->set_rules('description','Comment','required');
		if ($this->form_validation->run() == true) {
		$comment = $this->skyrim_model->get_forum_comments($data['forum_id']);
		$count = count($comment)+1;

			$this->skyrim_model->add_forum_comment($data,$forum_id,$count);
			redirect(base_url().'forumsingle/'.$data['forum_id']);
		}
		else{
			redirect(base_url().'forumsingle/'.$data['forum_id']);
		}

	}
////////////////////////////////////////// Blog /////////////////////////////////////////////////////////
	public function blog($page="")
	{
		$this->load->model('skyrim_model');
		$this->load->view('inc/header');
		$curr_page = 0;
		$total_rows = $this->skyrim_model->getTotalBlog();
		if(isset($page) && trim($page) != ""){
			$curr_page = $page;
		}
		$config['base_url'] = base_url('blog');
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 4;
		$config['uri_segment'] = 2;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['num_tag_open'] = "<li class='page-item'>";
		$config['num_tag_close'] = "</li>";

		$config['cur_tag_open'] = "<li class='page-item active disabled'><a class='page-link' href='javascript:void(0)'>";
		$config['cur_tag_close'] = "</a></li>";

		$config['next_tag_open'] = "<li class='page-item'>";
		$config['next_tag_close'] = "</li>";

		$config['prev_tag_open'] = "<li class='page-item'>";
		$config['prev_tag_close'] = "</li>";

		$config['first_tag_open'] = "<li class='page-item'>";
		$config['first_tag_close'] = "</li>";

		$config['last_tag_open'] = "<li class='page-item'>";
		$config['last_tag_close'] = "</li>";

		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';

		$config['attributes'] = array('class'=>'page-link');
		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();
		$data['blog'] = $this->skyrim_model->blog($config['per_page'],$curr_page);
		$this->load->view('blog',$data);
		$this->load->view('inc/footer');
	}

	public function blogsingle()
	{
		$this->load->model('skyrim_model');
		$this->load->view('inc/header');
		$data['comments'] = $this->skyrim_model->get_blog_comments($this->uri->segment(2));
		$data['blog'] = $this->skyrim_model->blog_single($this->uri->segment(2));
		$this->load->view('blogsingle',$data);
		$this->load->view('inc/footer');
	}
		public function addBlogcomment(){
		$this->load->model('skyrim_model');
		$data['nickname'] = $this->input->post('nickname');
		$data['avatar'] = $this->input->post('avatar');
		$data['description'] = $this->input->post('description');
		$data['user_id'] = $this->input->post('user_id');
		$data['blog_id'] = $this->input->post('blog_id');
		$blog_id = $data['blog_id'];
		$this->form_validation->set_rules('description','Comment','required');
		if ($this->form_validation->run() == true) {
		$comment = $this->skyrim_model->get_blog_comments($data['blog_id']);
			$this->skyrim_model->add_blog_comment($data,$blog_id);
			redirect(base_url().'blogsingle/'.$data['blog_id']);
		}
		else{
			redirect(base_url().'blogsingle/'.$data['blog_id']);
		}

	}
}