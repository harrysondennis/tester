@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Register Person with Disability</h1>
                </div>
            </div>
        </div>
    </section>

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

    <div class="content px-3">

        @include('flash::message')

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'reg.store']) !!}

            <div class="card-body">

                <div class="row">
                    <!-- Firstname Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('firstname', 'Firstname:') !!}
                        {!! Form::text('firstname', null, ['class' => 'form-control','maxlength' => 255,'placeholder' => 'First Name','maxlength' => 255,'required']) !!}
                    </div>
                    <!-- Middlename Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('middlename', 'Middlename:') !!}
                        {!! Form::text('middlename', null, ['class' => 'form-control','maxlength' => 255,'placeholder' => 'Middle Name','maxlength' => 255,'required']) !!}
                    </div>
                    <!-- Surname Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('surname', 'Surname:') !!}
                        {!! Form::text('surname', null, ['class' => 'form-control','maxlength' => 255,'placeholder' => 'Surname','maxlength' => 255,'required']) !!}
                    </div>
                    <!-- Gender -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('gender', 'Gender:') !!}
                        <select name="gender" id="role" class="gender form-control">
                            <option value="">select gender...</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <!-- Date of birth -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('dob', 'Date of birth:') !!}
                        {!! Form::date('dob', null, ['class' => 'form-control','maxlength' => 255,'placeholder' => 'Date of Birth','maxlength' => 255,'required']) !!}
                    </div>
                    <!-- Phone number -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('phone', 'Phone Number:') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'placeholder' => 'Phone Number','maxlength' => 255,'required']) !!}
                    </div>
                    {{-- <div class="form-group col-sm-6">
                        {!! Form::label('permission', 'Permission:') !!}
                       <select name="" id="">
                           <option value="">{{ route(per) }}</option>
                       </select>
                    </div> --}}

                    <!-- Email Field -->
                    {{-- <div class="form-group col-sm-6">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'required']) !!}
                    </div>

                    <!-- Role Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('role', 'Role:') !!}
                        <select name="role" id="role" class="role form-control">
                            <option value="">select role...</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Password Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('password', 'Password:') !!}
                        {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'required']) !!}
                    </div>
                    <!-- Password confirm Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('password_confirmation', 'Password Confirm:') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                </div> --}}

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                {{-- <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a> --}}
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
