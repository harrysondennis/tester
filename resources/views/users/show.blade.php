@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <i class="fa fa-user"><h1>User Details</h1></i>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('users.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    <!-- Name Field -->
                    <div class="col-sm-12">
                        {!! Form::label('id', 'Id:') !!}
                        <p>{{ $user->id }}</p>
                    </div>
                    <!-- Name Field -->
                    <div class="col-sm-12">
                        {!! Form::label('name', 'Name:') !!}
                        <p>{{ $user->firstname }} {{ $user->middlename }} {{ $user->surname }}</p>
                    </div>

                    <!-- Email Field -->
                    <div class="col-sm-12">
                        {!! Form::label('email', 'Email:') !!}
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="col-sm-12">
                        {!! Form::label('role', 'Role:') !!}
                        <p>@foreach($user->roles as $role)
                            <span class="badge badge-primary">{{ $role->name ?? '-'}}</span>
                            @endforeach</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection