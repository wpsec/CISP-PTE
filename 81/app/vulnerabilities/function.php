<?php

function filter_keyword( $string ) 
{ 
	$keyword = ' |union'; 
	$arr = explode( '|', $keyword ); 
	$result = str_ireplace( $arr, '', $string ); 
	return $result;
} 
	
?>