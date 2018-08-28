<!-- create.blade.php -->
 
@extends('layout')

@section('content')
<div class="container">
  <form method="post" action="{{action('CRUDController@store')}}">

    <div class="form-group row">
    {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Post</label>
      <div class="col-sm-10">
        <textarea name="post" rows="8" cols="80"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </form>
</div>
@endsection