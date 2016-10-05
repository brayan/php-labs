
<?php 
	require ("helper/Helper.php");
	require ("helper/ServerHelper.php"); ?>

<!DOCTYPE html>
<html>
<body>

	<?php include ("header.php"); ?>

	<form 
		method="post" 
		action="<?php echo htmlspecialchars(getFromServer('PHP_SELF'));?>" >
		
	  	Name: <input type="text" name="fname">
	  	<input type="submit">
	  	
	</form>

	<?php 
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