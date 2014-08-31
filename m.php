<?php
	$p2 = unserialize(file_get_contents('object.txt'));
//	var_dump($p2);
	$p2->sayName();
?>