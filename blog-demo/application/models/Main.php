<?php

namespace application\models;

use application\core\Model;

class Main extends Model 
{

	public $error;

	public function postsCount() 
	{
		return $this->db->column('SELECT COUNT(id) FROM posts');
	}

	public function postsList($route) 
	{
		return $this->db->row('SELECT * FROM posts ORDER BY date');
	}

}