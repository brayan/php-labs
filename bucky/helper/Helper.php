<?php

	function getFromServer($name) {
		return $_SERVER[$name];
	}

	function getFromPost($name) {
		return $_POST[$name];
	}
	
	function getFromGet($name) {
		return $_GET[$name];
	}
	
	function isRequestPost() {
		return $_SERVER["REQUEST_METHOD"] == "POST";
	}
	
	function isEmpty($var) {
		return empty($var);
	}

?>