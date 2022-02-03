<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skyrim_model extends CI_Model {

////////////////////////////////////////// Registration /////////////////////////////////////////////////////////
	function registration($data)
	{
		$this->db->insert('users',$data);
		return $this->db->insert_id();	
	}	
	function can_login($email, $password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('users');
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		else{
			return false;
		}

	}
public function home_forum()
{
	$this->db->order_by('view', 'DESC');
	$query = $this->db->get('forum',4);
	return $query->result_array();	
}
public function home_blog()
{
	$this->db->order_by('id', 'DESC');
	$query = $this->db->get('blog',4);
	return $query->result_array();	
}
/////////////////////////////////////////////// Forum ///////////////////////////////////////////////////////
public function addforum($data){
	$this->db->insert('forum',$data);
}
public function view($view,$forum_id){
	$this->db->where('id='.$forum_id);
	$this->db->set('view', $view);
	$this->db->update('forum');
}
public function like($like,$forum_id){
	$this->db->where('id='.$forum_id);
	$this->db->set('likes', $like);
	$this->db->update('forum');
}
public function forum($num,$offset)
{
	$this->db->order_by('id', 'DESC');
	$query = $this->db->get('forum',$num,$offset);
	return $query->result_array();	
}
public function forum_single($id)
{
	$query = $this->db->get_where('forum','id='.$id);
	return $query->result_array();
}
public function add_forum_comment($data,$forum_id,$count){
	$this->db->insert('comments_forum',$data);
	$this->db->where('id='.$forum_id);
	$this->db->set('comment', $count);
	$this->db->update('forum');
}
public function get_forum_comments($id)
{
	$query = $this->db->get_where('comments_forum','forum_id='.$id);
	return $query->result_array();
}
public function getTotalForum()
{
	$forumlist = $this->db->select('*')->from('forum')->get();
	return $forumlist->num_rows();
}
/////////////////////////////////////////////// Blog ///////////////////////////////////////////////////////

public function blog($num,$offset)
{
	$query = $this->db->get('blog',$num,$offset);
	return $query->result_array();	
}

public function blog_single($id)
{
	$query = $this->db->get_where('blog','id='.$id);
	return $query->result_array();
}

public function add_blog_comment($data,$blog_id){
	$this->db->insert('comments_blog',$data);
	$this->db->where('id='.$blog_id);
}
public function get_blog_comments($id)
{
	$query = $this->db->get_where('comments_blog','blog_id='.$id);
	return $query->result_array();
}
public function getTotalBlog()
{
	$forumlist = $this->db->select('*')->from('blog')->get();
	return $forumlist->num_rows();
}
}