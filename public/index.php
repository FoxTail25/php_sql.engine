<?php
echo 'Hello word! (from PHP SQL engine)<br/>';
$url = $_SERVER['REQUEST_URI']; // поучаем адрес запроса
echo '$_SERVER["REQUEST_URI"] =' . $url;
include('../db/connect.php');

preg_match('#/page/(\d+)#',$url, $match);
// preg_match('#/page/(\d+)#', $url, $match);
$id = $match[1];
$query = "SELECT * FROM pages WHERE id = '$id'";
$db_answer = mysqli_query($site_base_link, $query) or die(mysqli_error($site_base_link));
$page = mysqli_fetch_assoc($db_answer);

$layout = file_get_contents('layout.php');
$layout = str_replace('{{ title in layout }}', $page['title'], $layout);
$layout = str_replace('{{ content in layout }}', $page['content'], $layout);


echo $layout; // Возвращаем страницу пользователю
?>