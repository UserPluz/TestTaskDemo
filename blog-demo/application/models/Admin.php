<?php

namespace application\models;

use application\core\Model;

class Admin extends Model 
{

	public $error;

	public function loginValidate($post) 
	{
		$config = require 'application/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) 
		{
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}

	public function postValidate($post, $type) 
	{
		$nameLen = iconv_strlen($post['name']);
		if ($nameLen < 3 or $nameLen > 100) 
		{
			$this->error = 'Название должно содержать от 3 до 100 символов';
			return false;
		}
		return true;
	}

	public function postAdd($post) 
	{
		$params = [
			 'id' => $this->db->lastInsertId(),
			 'name' => $post['name'],
			 'content' => $post['content'],
			 'date' => $post['date']
			];
		$this->db->query('INSERT INTO posts VALUES (:id, :name, :content, :date)', $params);
		return $this->db->lastInsertId();
	}

	public function postEdit($post, $id) 
	{
		$params = [
			'id' => $id,
			'name' => $post['name'],
			'content' => $post['content'],
			'date' => $post['date'],
		];
		$this->db->query('UPDATE posts SET name = :name, content = :content, date = :date WHERE id = :id', $params);
	}


	public function isPostExists($id) 
	{
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM posts WHERE id = :id', $params);
	}

	public function postDelete($id) 
	{
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM posts WHERE id = :id', $params);
	}

	public function postData($id) 
	{
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM posts WHERE id = :id', $params);
	}

}