<?php
include('../db/connect.php');
$url = $_SERVER['REQUEST_URI']; // поучаем адрес запроса



    if (preg_match('#^/page/([a-z0-9_-]+)$#', $url, $params)) {
		$page = include 'view/page/show.php';
	}
	
	if (preg_match('#^/page/all$#', $url, $params)) {
		$page = include 'view/page/all.php';
	}



	$layout = file_get_contents('layout.php');
	$layout = str_replace('{{ title in layout }}', $page['title'], 
		$layout); 
	$layout = str_replace('{{ content in layout }}', $page['content'], 
		$layout); 
	
	echo $layout;
    
?>
