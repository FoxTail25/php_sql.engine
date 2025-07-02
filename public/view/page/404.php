<?php
$slug = '404';
$query  = "SELECT * FROM pages WHERE slug='$slug'";
	
$res = mysqli_query($site_base_link, $query) or die(mysqli_error($site_base_link));
$page   = mysqli_fetch_assoc($res);

return $page;
?>