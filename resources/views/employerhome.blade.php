<!DOCTYPE html>
<html>
<head>
	<title>Employee home</title>
</head>
<body>
  <h1>Employee home</h1>
	<form method="post">
    {{csrf_field()}}
    <a href="{{route('employer.create')}}">Create job</a>
      <h2>user list</h2>
      <table border="1">
      	<tr>
			<td>Id</td>
      		<td>Company name</td>
      		<td>Job title</td>
      		<td>Job location</td>
			<td>Salary</td>
			<td>Actions</td>
      	</tr>

      @for($i=0; $i != count($job); $i++)
      	<tr>
			<td>{{$job[$i]->id}}</td>
      		<td>{{$job[$i]->company_name}}</td>
      		<td>{{$job[$i]->job_title}}</td>
      		<td>{{$job[$i]->job_location}}</td>
      		<td>{{$job[$i]->salary}}</td>
      		<td>
      			<a href="{{route('employer.edit', [$job[$i]->id])}}">Edit</a> |
      			<a href="{{route('employer.delete', [$job[$i]->id])}}">Delete</a>
      		</td>
      	</tr>
      @endfor
      </table>
	</form>
	<br><br>
	<a href="{{route('login.index')}}">Logout</a>
  </body>
  </html>
