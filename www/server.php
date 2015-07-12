<?php
	$file=$_GET['file'];
	
	header('Content-Type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
	echo '<response>';
		echo file_get_contents($file);
	echo '</response>';
?>