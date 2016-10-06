
<?php
require ("helper/Helper.php");
require ("helper/ServerHelper.php"); ?>

<!DOCTYPE html>
<html>
<body>

	<?php include ("header.php"); ?>
	
	<h1>PHP Form Validation Example</h1>
	
	<form 
		method="post" 
		action="<?php echo getSecureInputData(getPhpSelf()); ?>" >
		
	  	Name: <input type="text" name="name" /> <br /> <br />
	  	
	  	Email: <input type="text" name="email" /> <br /> <br />
	  	
	  	Website: <input type="text" name="website" /> <br /> <br />
	  	
	  	<input type="submit">
	</form>
	
	<?php 
	
		if (isPerformingPost()) {
			onPerformPostRequest();
		}
	
		function onPerformPostRequest() {
			echo getSecureInputData(getDataFromPost("name"));
			echo "<br />";
			
			echo getSecureInputData(getDataFromPost("email"));
			echo "<br />";
			
			echo getSecureInputData(getDataFromPost("website"));
			echo "<br />";
		}
	?>

</body>
</html>