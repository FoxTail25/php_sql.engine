<?php
// echo 'Hello word! (from PHP file engine)<br/>';
$url = $_SERVER['REQUEST_URI']; // поучаем адрес запроса
// echo '$_SERVER["REQUEST_URI"] =' . $url;
include('../db/connect.php');
$query = "SELECT * FROM pages WHERE id = 1";
$db_answer = mysqli_query($site_base_link, $query);
$res = mysqli_fetch_assoc($db_answer);
var_dump($res);

$layout = file_get_contents('layout.php');

echo $layout; // Возвращаем страницу пользователю
?>