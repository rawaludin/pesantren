<!-- resources/views/auth/login.blade.php -->
@extends('layouts.master')

@section('content')
{!! Form::open(['url'=>'/auth/login']) !!}
    <legend>Login</legend>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
      <label for="email">Email</label>
      {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="checkbox">
        <label>
            {!! Form::checkbox('remember') !!} Remember Me
        </label>
    </div>

    {!! Form::submit('Login', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}
@stop
