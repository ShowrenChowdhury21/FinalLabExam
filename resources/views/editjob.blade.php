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
				<td>company name</td>
				<td><input type="text" name="company_name" value="{{$job['company_name']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('company_name')}}</td>
			</tr>
			<tr>
				<td>job title</td>
				<td><input type="text" name="job_title" value="{{$job['job_title']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('job_title')}}</td>
			</tr>
			<tr>
				<td>job location</td>
				<td><input type="text" name="job_location" value="{{$job['job_location']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('job_location')}}</td>
			</tr>
			<tr>
				<td>salary</td>
				<td><input type="text" name='salary' value="{{$job['salary']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('salary')}}</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
