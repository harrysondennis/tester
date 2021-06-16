@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fa fa-unlock-alt">Permission Details</i></h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('permissions.index') }}">
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
                        <p>{{ $permission->id }}</p>
                    </div>
                    <!-- Name Field -->
                    <div class="col-sm-12">
                        {!! Form::label('name', 'Name:') !!}
                        <p>{{ $permission->name }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection