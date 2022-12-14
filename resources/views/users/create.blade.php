@extends('layouts.admin_dashboard.main')
@section('content')
<div class="container">
    <div class="justify-content-center">

        <div class="card">
            <div class="card-header">Create user
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}">Users</a>
                </span>
            </div>

            <div class="card-body">

                {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <strong>Member ID:</strong>
                        <input type="text" name="member_mid" style="color:green; text-align:center; font-size:large" class="form-control" value="{{ $id }}">
                    </div>
                    <div class="col-xl-8 col-lg-6 col-12 form-group">
                    <strong>Full Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group" style="display: none">
                        <input type="text" name="is_admin" value="{{ 1 }}">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <strong>Role: </strong>
                        <select class="select2" name="roles" value="{{ old('roles') }}">
                            <option value="Admin">Admin</option>
                            <option value="Superadmin">Superadmin</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-12 form-group mt-5" >
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                {!! Form::close() !!}
            </div>

            </div>
        </div>
    </div>
</div>
@endsection