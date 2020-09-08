<?php

namespace application\controllers;

use application\core\Controller;

//Контроллер главной страницы
class MainController extends Controller 
{

	public function indexAction() 
	{
		$vars = [
			'list' => $this->model->postsList($this->route),
		];
		$this->view->render('Главная страница', $vars);
	}

}