<?php
print_r($_POST['email']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularz</title>
</head>
<body>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<label for="email">Email</label><br>
		<input type="email" name="email"><br>
		<label for="password">Hasło</label><br>
		<input type="password" name="password"><br><br>
		<input type="submit" value="Wyślij">

	</form>

</body>
</html>