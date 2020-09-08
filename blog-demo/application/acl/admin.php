<?php
//Контроль доступа
return [
	'all' => [
		'login',
	],
	'admin' => [
		'posts',
		'logout',
		'add',
		'edit',
		'delete',
	],
];