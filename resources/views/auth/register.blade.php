<!-- resources/views/auth/register.blade.php -->
@extends('layouts.master')

@section('content')

{!! Form::open(['url'=>'/auth/register']) !!}
    <legend>Register New User</legend>

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
      <label for="name">Name</label>
      {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      <label for="password_confirmation">Confirm Password</label>
      {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Register', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}
@stop
