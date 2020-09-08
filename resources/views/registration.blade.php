<!DOCTYPE html>
<html>
<head>
	<title>admin home</title>
</head>
<body>

  <h1>registration</h1>
	<form method="post">
    {{csrf_field()}}
		<table>
			<tr>
				<td>employer name</td>
				<td><input type="text" name="employer_name" value="{{old('employer_name')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('employer_name')}}</td>
			</tr>
			<tr>
				<td>company_name</td>
				<td><input type="text" name="company_name" value="{{old('company_name')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('company_name')}}</td>
			</tr>
			<tr>
				<td>contact_no</td>
				<td><input type="text" name="contact_no" value="{{old('contact_no')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('contact_no')}}</td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name='username' value="{{old('username')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('username')}}</td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password" value="{{old('password')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('password')}}</td>
			</tr>
			<!-- <tr>
				<td>type</td>
				<td><input type="text" name="user_type" value="{{old('user_type')}}" ></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('user_type')}}</td>
			</tr>
			<tr> -->
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
		<h1>Already Signed in?</h1>
		<a type ='button' href='/login' name="login">Sign In</a>
	</form>
</body>
</html>
