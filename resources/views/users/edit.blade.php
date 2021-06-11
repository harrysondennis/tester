@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                   <h1><i class="fa fa-user">Edit User</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
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

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'required']) !!}
                    </div>

                    <!-- Role Field -->
                    <div class="form-group col-sm-6">
                    {!! Form::label('role', 'Role:') !!}
                        <select name="role" id="role" class="role form-control">
                            <option value="">select role...</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}"@if($user_roles->contains($role)) selected @endif>{{ $role->name }}</option>
                            @endforeach
                        </select>
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