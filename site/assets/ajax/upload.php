<?php
	$filename = hash('crc32', time());
	$filepath = '/content/images/'.$filename.'.jpg';
	$file = $_SERVER['DOCUMENT_ROOT'].$filepath;
	$data = file_get_contents('php://input');
	file_put_contents($file, $data);
	echo $filepath;
?>