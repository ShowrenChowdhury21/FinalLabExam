<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
		<form method="post">
			{{csrf_field()}}
				<h1>Sign In</h1>
				<table>
					<tr>
						<td>username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
				<h1>Didn't Register yet??</h1>
				<a type ='button' href='/registration' name="registration">Register</a>
		</form>
</body>
</html>
