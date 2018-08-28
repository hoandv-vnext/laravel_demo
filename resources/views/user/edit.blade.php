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

<body>

<div class="container">
  <h2>User Edit</h2>
  <form action="{{ url('user/update') }}" method="POST" role="form">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{old('name',$getUserById->name)}}" name="name">
    </div>

    <div class="form-group">
      <label for="sex">Sex:</label>
      <input type="text" class="form-control" id="sex" placeholder="Enter sex" name="sex">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>


  </form>
</div>

</body>

</html>