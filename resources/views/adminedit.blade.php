<!DOCTYPE html>
<html>
<head>
	<title>admin home</title>
</head>
<body>

  <h1>Create New user</h1>
	<form method="post">
    {{csrf_field()}}
		<table>
			<tr>
				<td>employer name</td>
				<td><input type="text" name="employer_name" value="{{$user['employer_name']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('employer_name')}}</td>
			</tr>
			<tr>
				<td>company_name</td>
				<td><input type="text" name="company_name" value="{{$user['company_name']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('company_name')}}</td>
			</tr>
			<tr>
				<td>contact_no</td>
				<td><input type="text" name="contact_no" value="{{$user['contact_no']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('contact_no')}}</td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name='username' value="{{$user['username']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('username')}}</td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password" value="{{$user['password']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('password')}}</td>
			</tr>
			<tr>
				<td>type</td>
				<td><input type="text" name="user_type" value="{{$user['user_type']}}" ></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('user_type')}}</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
