<?php
	$host = 'MySQL-8.0'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'site_base';      // имя базы данных
	
	$site_base_link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($site_base_link, "SET NAMES 'utf8'");
?>
