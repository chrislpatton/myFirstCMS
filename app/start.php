<?php 
	ini_set('display_errors', 'On');

	define('APP_ROOT', __DIR__);
	define('BASE_URL', 'http://localhost/myfirstcms/');

	$db = new PDO('mysql:host=localhost;dbname=cms', 'root','root');
	// echo APP_ROOT, BASE_URL;
 