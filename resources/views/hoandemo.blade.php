<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hello cac ban</title>
    <link rel="stylesheet" href="">
</head>
<body>
     hello cac ban!

     <ul>
	@foreach($users as $user)
		<li>Host : {{$user->Host}} | Name : {{$user->User}}</li>
	@endforeach
	</ul>



</body>
</html>