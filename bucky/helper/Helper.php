<?php

	function getFromServer($name) {
		return $_SERVER[$name];
	}

	function getDataFromPost($name) {
		return $_POST[$name];
	}
	
	function getFromGet($name) {
		return $_GET[$name];
	}
	
	function isPerformingPost() {
		return getRequestMethod() == "POST";
	}
	
	function getRequestMethod() {
		return getFromServer("REQUEST_METHOD");
	}
	
	function isEmpty($var) {
		return empty($var);
	}
	
	function getPhpSelf() {
		return getFromServer('PHP_SELF');
	}
	
	function getSecureInputData($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
			
		return $data;
	}

?>