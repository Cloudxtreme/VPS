<?php
	header("Content-type: application/octet-stream");
	header('Content-Disposition: attachment; filename="'. basename($_GET['filename']).'"');
	header("Content-Length: ". filesize($_GET['filename']));
	readfile($_GET['filename']);
?>
