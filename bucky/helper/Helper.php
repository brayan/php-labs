<?php
	
	function isRequestPost() {
		return $_SERVER["REQUEST_METHOD"] == "POST";
	}
	
	function isEmpty($var) {
		return empty($var);
	}

?>