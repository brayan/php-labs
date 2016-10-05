<?php
	
class ServerHelper {
		
	public static function getPhpSelf() {
		return self::getFromServer('PHP_SELF');
	}
		
		
	public static function getFromServer($name) {
		return $_SERVER[$name];
	}
		
}


?>