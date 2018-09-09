@extends('layouts.header')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">INTRO SCREEN</div>

                <div class="card-body">
                <h2>WELCOM !</h2><br>
                <h3>THIS LARAVEL DEMO APP</h3>

                <br><br>
                <a href="{{ action('HomeController@index') }}" class="btn btn-warning">HOME</a>
                <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection