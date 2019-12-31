<!DOCTYPE html>
<html>

<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<form class="box" action="index.php" method="POST">
		<h1>Login</h1>
		<input type="text" name="username" placeholder="Username" autocomplete="off">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="login" value="Login">
	</form>

</body>

</html>

<?php

if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'admin' && $password == 'admin') {
		header('location:home.php');
	} else {
?>
		<script>
			alert('username = admin dan password = admin');
		</script>
<?php
	}
}



?>