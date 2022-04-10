<?php

if(!function_exists('p')){
	function p($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
}
if(!function_exists('get_formetted_date')){
	function get_formetted_date($date, $formate){
		return date($formate, strtotime($date));
	}
}