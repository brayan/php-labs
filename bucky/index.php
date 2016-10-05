<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php 
	
	include ("header.php");// for menus
 	require ("helper/ServerHelper.php");
 	require ("helper/Helper.php");

// 	phpinfo(); 
	

//	echo $text." ".$asdf;
	
	// die();
	
//	if (true) {
//		echo "True";
//	}
	
	// != is equal to <> 
	// == same value
	// === same value and same type
// 	mysql_connect("localhost", "aaa", "asdaaf") || die("Deu pau na kombi");
	
	
// 	preg_match(); // match string;
	
//	myName(12);
//
//	function myName($var) {
//		echo "I'm Brayan and I'm ".howOldAmI(1991)." years old";
//	}
//
//	function howOldAmI($bornYear) {
//		return 2016 - $bornYear;
//	}
//

//https://www.youtube.com/watch?v=jhZLfyscYgI&list=PLC62DA565A393C969&index=34

// 	$GLOBALS // Access all the global variables;

	showServerInfo();

	function showServerInfo() {
		echo ServerHelper::getPhpSelf();
		echo "<br>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br>";
		echo $_SERVER['HTTP_HOST'];
		echo "<br>";
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br>";
		echo $_SERVER['SCRIPT_NAME'];
	}
	
	if (isRequestPost()) {
		
		$name = requestName();
		
		if (isEmpty($name)) {
			echo "Name is empty";
		} else {
			echo $name;
		}
	}
	
	function requestName() {
		return $_REQUEST['fname'];
	}
	
	
?>


</body>
</html>



