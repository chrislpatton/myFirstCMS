<?php 

	require 'app/start.php';
	// echo "Hello";
	$pages = $db-> query("
		SELECT _id,label,slug
		FROM pages
		")->fetchAll(PDO::FETCH_ASSOC);

	require VIEW_ROOT .'/home.php';
	