
<?php 
// https://phpbestpractices.org/
// http://br.phptherightway.com/
// Most common mistakes;
// http://www.w3schools.com/php/php_form_validation.asp
	require ("helper/ServerHelper.php");
	require ("helper/Helper.php");
?>


<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars(getFromServer('PHP_SELF'));?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php 
	include ("header.php");// for menus
 	

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



