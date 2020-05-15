 
<html>
<head>
	<title>PHP form select box example</title>
<!-- define some style elements-->
<style>
label,a 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}

</style>	
</head>

<body>
<?php
	if(isset($_POST['formSubmit'])) 
	{
		$varCountry = $_POST['formCountry'];
		$errorMessage = "";
		
		if(empty($varCountry)) 
		{
			$errorMessage = "<li>You forgot to select a State!</li>";
		}
		
		if($errorMessage != "") 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
		else 
		{
			// note that both methods can't be demonstrated at the same time
			// comment out the method you don't want to demonstrate

			// method 1: switch
			$redir = "US.html";
			switch($varCountry)
			{
				case "US": $redir = "US.html"; break;
				case "UK": $redir = "UK.html"; break;
				case "France": $redir = "France.html"; break;
				case "Mexico": $redir = "Mexico.html"; break;
				case "Russia": $redir = "Russia.html"; break;
				case "Japan": $redir = "Japan.html"; break;
				default: echo("Error!"); exit(); break;
			}
			echo " redirecting to: $redir ";
			
			// header("Location: $redir");
			// end method 1
			
			// method 2: dynamic redirect
			//header("Location: " . $varCountry . ".html");
			// end method 2

			exit();
		}
	}
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<label for='formCountry'>Select your country </label><br>
	<select name="formCountry">
		<option value="">Select a country...</option>
		<option value="US">United States</option>
		<option value="UK">United Kingdom</option>
		<option value="France">France</option>
		<option value="Mexico">Mexico</option>
		<option value="Russia">Russia</option>
		<option value="Japan">Japan</option>
	</select> 
	<input type="submit" name="formSubmit" value="Submit" />
</form>

</body>
</html>