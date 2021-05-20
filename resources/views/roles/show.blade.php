@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <i class="fa fa-users"><h1> Roles Details</h1></i>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('roles.index') }}">
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
                        <p>{{ $role->id }}</p>
                    </div>
                    <!-- Name Field -->
                    <div class="col-sm-12">
                        {!! Form::label('name', 'Name:') !!}
                        <p>{{ $role->name }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection