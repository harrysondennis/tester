@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fa fa-user">  Create User</i></h1>
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

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'users.store']) !!}

            <div class="card-body">

                <div class="row">
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'placeholder' => 'name','maxlength' => 255]) !!}
                    </div>
                    
                    {{-- <div class="form-group col-sm-6">
                        {!! Form::label('permission', 'Permission:') !!}
                       <select name="" id="">
                           <option value="">{{ route(per) }}</option>
                       </select>
                    </div> --}}

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
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
                        {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                    <!-- Password confirm Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('password_confirmation', 'Password Confirm:') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
