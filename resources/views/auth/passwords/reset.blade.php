@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')

    <div class="breadcrumb-area pt-5 pb-5" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Reset Password</h2>
            </div>
        </div>
    </div>

    <div class="register-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="form-group">

                                {!! Form::open(['route' => 'password.update', 'method' => 'post']) !!}
                                    <input type="hidden" name="token" value="{{ $token }}">
                                <div class="mb-2">
                                    {!! Form::label('email', 'Email *') !!}
                                    {!! Form::email('email', old('email'), ['placeholder' => 'Your email']) !!}
                                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="mb-2">
                                    {!! Form::label('password', 'Password *') !!}
                                    {!! Form::password('password', ['placeholder' => 'Password']) !!}
                                    @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="mb-2">
                                    {!! Form::label('password_confirmation', 'Confirm password *') !!}
                                    {!! Form::password('password_confirmation', ['placeholder' => 'confirm password']) !!}
                                    @error('password_confirmation')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        {!! Form::button('Reset Password', ['type' => 'submit', 'class' => 'default-btn floatright']) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection











