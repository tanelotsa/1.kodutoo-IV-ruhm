<?php
	
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "*";
	
	//kas keegi vajutas nuppu 
	
	if (isset ($_POST["signupEmail"])) {
		
		//on olemas
		//kas email on olemas
		if(empty($_POST["signupEmail"])) {
			
			//on tühi
			$signupEmailError = "Väli on kohustuslik!";
		
		}
	
	}
	
	//kas epost on tühi
	
	$signupPasswordError = "*";
	
	if (isset ($_POST["signupPassword"])) {
		
		if(empty($_POST["signupPassword"])) {
			
			$signupPasswordError = "Väli on kohustuslik";
		}
		else
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sisselogimise leht</title>
	</head>
<body>

	<h1>Logi Sisse</h1>
	<form method="POST">
	
		<label>E-Post</label> 
		<br>
		<input name="loginEmail" type = "email" >
		
		<br><br>
		<label>Parool</label>
		<br>
		<input name="loginPassword" type = "password" >
	
		<br><br>
		
		<input type = "submit" value = "LOGI SISSE" >
	</form>
	
	<br><br>
	
	<form method="POST">
	
		<label>E-Post</label> 
		<br>
		<input name="signupEmail" type = "email" > <?php echo $signupEmailError; ?>
		
		<br><br>
		<label>Parool</label>
		<br>
		<input name="signupPassword" type = "password" > <?php echo $signupPasswordError; ?>
	
		<br><br>
		
		<input type = "submit" value = "LOO KASUTAJA" >
	</form>
	
	</body>
</html>