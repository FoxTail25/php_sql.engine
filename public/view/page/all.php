<?php
	$query = "SELECT slug, title FROM pages WHERE slug != '404'";
	$res = mysqli_query($site_base_link, $query) or die(mysqli_error($link));
	
	for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row); 
	
	$content = '';
	foreach ($data as $page) {
		$content .= '
			<div>
				<a href="/page/'  . $page['slug'] . '">' . 
					$page['title'] . '</a> 
			</div>
		';
	}
	
	$page = [
		'title' => 'список всех страниц',
		'content' => $content
	];
	
	return $page;
?>