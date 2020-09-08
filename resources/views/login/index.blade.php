<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	
	<h1>Login</h1>
	
	<form method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
		<h1>Didn't register?</h1>
		<input type="button" onclick="window.location='/register'" name = "register" id= "register" value="Register">
	</form>
</body>
</html>