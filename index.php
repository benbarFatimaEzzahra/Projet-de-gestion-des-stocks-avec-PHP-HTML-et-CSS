
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> login</title>
	<link rel="stylesheet" a href="css/login.css">	
</head>
<body>
	<div class="container">
		<form action="connexion.php" method="POST">
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
		<form>
			<div class="form-input">
				<i class="person"></i>
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" name="login" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>