<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	
	<h1>Register</h1>
	
	<form method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Company Name</td>
				<td><input type="text" name="compname"></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname"></td>
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
		<h1>Already registered?</h1>
		<input type="button" onclick="window.location='/login'" name = "login" id= "login" value="login">
	</form>
</body>
</html>