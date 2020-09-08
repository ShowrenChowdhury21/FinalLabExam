<!DOCTYPE html>
<html>
<head>
	<title>admin home</title>
</head>
<body>

  <h1>Create New Job</h1>
	<form method="post" action='/employerhome/save'>
    {{csrf_field()}}
		<table>
			<tr>
				<td>company name</td>
				<td><input type="text" name="company_name" value="{{old('company_name')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('company_name')}}</td>
			</tr>
			<tr>
				<td>job title</td>
				<td><input type="text" name="job_title" value="{{old('job_title')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('job_title')}}</td>
			</tr>
			<tr>
				<td>job location</td>
				<td><input type="text" name="job_location" value="{{old('job_location')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('job_location')}}</td>
			</tr>
			<tr>
				<td>salary</td>
				<td><input type="text" name='salary' value="{{old('salary')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>{{$errors->first('salary')}}</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html>
