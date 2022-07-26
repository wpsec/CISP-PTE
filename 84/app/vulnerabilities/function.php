<?php

function filter($cmd)
{
	$cmdarrays = array("ls", "echo", "cat", "more", "sort", "vi");

	foreach ($cmdarrays as &$value) {
		if (strpos($cmd, $value) == true) {
			return false;
		}
	}
	return true;
}
