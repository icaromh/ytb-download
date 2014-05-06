<?php
if(isset($_GET['m']) && !empty($_GET['m'])){
	$file = urldecode($_GET['m']);

	header('Content-Description: File Transfer');
	header('Content-Disposition: attachment; filename="'.$file.'"');
	header('Content-Type: application/octet-stream');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: ' . filesize('musics/'.$file));
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Pragma: public');
	header('Expires: 0');
	readfile('musics/'.$file);
	exit;
}
