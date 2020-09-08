<!DOCTYPE html>
<html>
<head>
	<title>admin home</title>
	<script type="text/javascript" src="{{asset('js/search.css')}}"></script>
</head>
<body>
  <h1>admin home</h1>
	<form method="post">
    {{csrf_field()}}
	<a href="{{route('admin.create')}}">Create User</a>
	  <h2>user list</h2>
	  
	  <input type="text" class="search" id="search" onkeyup="search()" placeholder="Search using ID, Name or Email"> <br><br><br>

      <table border="1" id="table">
      	<tr>
			<td>ID</td>
      		<td>employer name</td>
      		<td>company name</td>
      		<td>contact no</td>
      		<td>username</td>
			<td>user type</td>
			<td>Action</td>
      	</tr>

      @for($i=0; $i != count($users); $i++)
      	<tr>
			<td>{{$users[$i]->id}}</td>
      		<td>{{$users[$i]->employer_name}}</td>
      		<td>{{$users[$i]->company_name}}</td>
      		<td>{{$users[$i]->contact_no}}</td>
      		<td>{{$users[$i]->username}}</td>
      		<td>{{$users[$i]->user_type}}</td>
      		<td>
      			<a href="{{route('admin.edit', [$users[$i]->id])}}">Edit</a> |
      			<a href="{{route('admin.delete', [$users[$i]->id])}}">Delete</a>
      		</td>
      	</tr>
      @endfor
      </table>
	</form>
	<br><br>
	<a href="{{route('login.index')}}">Logout</a>
  </body>
  </html>