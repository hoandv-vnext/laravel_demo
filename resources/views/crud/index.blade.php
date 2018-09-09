<!-- index.blade.php -->

@extends('layouts.header')


@section('content')
  <div class="container">

  <br>
  <a href="{{action('CRUDController@create')}}" class="btn btn-warning">Add New</a>
  <br><br>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Post</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['post']}}</td>

        <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        
        
        <td>
          <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection