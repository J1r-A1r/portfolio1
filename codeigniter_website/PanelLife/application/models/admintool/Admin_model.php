<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

public function admin_login($username, $password)
{		
	$this->db->where('nickname', $username);
	$this->db->where('status', 1);
	$this->db->where('password', $password);
	$query = $this->db->get('users');

	if($query->num_rows() > 0)
	{
		return $query->result_array();
	}
	else
	{
		return false;
	}
}

function forum(){
	$query = $this->db->get('forum');
	return $query->result_array();
}
function deleteforum($id){
	$this->db->where('id',$id);
	$this->db->delete('forum');
}
function addforum($data){
	$this->db->insert('forum',$data);
}
function forumsingle($id){
	$this->db->where('id',$id);
	$query = $this->db->get('forum');
	return $query->row();
}
function forumcomment($id){
	$this->db->where('forum_id',$id);
	$query = $this->db->get('comments_forum');
	return $query->result_array();
}	
function changecomment($id){
	$this->db->where('id',$id);
	$query = $this->db->get('forum');
	$result = $query->row_array();
	$data['comment'] = $result['comment']-1;
	$this->db->where('id',$id);
	$this->db->update('forum',$data);
}
function deleteForumComment($id){
	$this->db->where('id='.$id);
	$this->db->delete('comments_form');
}
function users(){
	$this->db->where('status',0);
	$query = $this->db->get('users');
	return $query->result_array();
}
function deleteuser($id){
	if ($this->session->userdata('user')) {
		$this->db->where('id',$id);
		$query = $this->db->get('users');
		$result = $query->row();
		if ($this->session->userdata('user')['id'] == $result->id) {
			$this->session->unset_userdata('user');
		}
	}
	$this->db->where('id',$id);
	$this->db->delete('users');
}
function blog(){
	$query = $this->db->get('blog');
	return $query->result_array();
}
function addblog($data){
	$this->db->insert('blog',$data);
}

function blogsingle($id){
	$this->db->where('id',$id);
	$query = $this->db->get('blog');
	return $query->row();
}
function blogcomment($id){
	$this->db->where('blog_id',$id);
	$query = $this->db->get('comments_blog');
	return $query->result_array();
}



function deleteBlogComment($id){
	$this->db->where('id='.$id);
	$this->db->delete('comments_blog');
}
function delete_blog($id){
	$this->db->where('id',$id);
	$query = $this->db->get('blog');
	$result = $query->row_array();
	if(!empty($result['img'])){
		unlink('./assets/img/blog/'.$result['img']);
	}
	$this->db->where('id',$id);
	$this->db->delete('blog');
}
}