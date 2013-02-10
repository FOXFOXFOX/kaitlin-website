<!----------------------------------------------------------------------------
Index PHP for IanPaschal.com
Designed by Ian Paschal, ©2013
contact@ianpaschal.com
http://www.ianpaschal.com/
----------------------------------------------------------------------------->

<?php
	$root_url = $_SERVER['DOCUMENT_ROOT'];
	$url = split('/', $_SERVER['REQUEST_URI']);
  
  // If URL is ianpaschal.com/
  if (empty($url[1])) {
  	$page = 'work';
  	$title = 'work';
  }
  // If URL is ianpaschal.com/work/[project]
  else if (($url[1] == 'work') && !empty($url[2])) {
  	$page = 'view';
	  $title = $url[2];
	}
	// If URL is ianpaschal.com/edit/[project]
	else if (($url[1] == 'edit') && !empty($url[2])){
  	$page = 'edit';
	  $title = $url[2];
	}
	// If URL is ianpaschal.com/[page]
	else {
  	$page = $url[1];
  	$title = $url[1];
  }
  
	$title = str_replace('-', ' ', $title);
	$title = ucwords($title);
	$safe_pages = array(
		'work',
		'view',
		'about',
		'contact',
		'dashboard',
		'edit',
		'new'
	);
	
	include($root_url.'/assets/inc/header.php');
	if(in_array($page, $safe_pages)) {
		include($root_url.'/pages/'.$page.'.php');
  } else {  
    include($root_url.'/pages/404.php');
  }
  include($root_url.'/assets/inc/footer.php');
?>