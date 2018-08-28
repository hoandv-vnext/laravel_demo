<!DOCTYPE html>
<html>
<!-- <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hello cac ban</title>
    <link rel="stylesheet" href="">
</head> -->
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<!-- <body>
     <h2>User Manage</h2>
     <br>
     <>
     <h3>User List</h3>
     <br>
     <ul>
	@foreach($users as $user)
		<li>Name : {{$user->name}} | Sex : {{$user->sex}}</li>
	@endforeach
	</ul>



</body> -->
<body>

<div class="container">
  <h2>User Manage</h2>
  <p>User List</p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Sex</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->sex}}</td>
        <td>
        <a href='{{$user->id}}/edit'>Edit</a>
        <a href='{{$user->id}}/del'>Del</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>