@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MAIN SCREEN</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>You are logged in!<br><br>

                    <li class="nav-item">
                                <a class="nav-link" href="{{ action('CrudController@index') }}">{{ __('User List') }}</a>
                    </li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
