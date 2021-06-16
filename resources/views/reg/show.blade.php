@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fa fa-wheelchair"> Person with disability Details</i></h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('reg.index') }}">
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
                        {!! Form::label('firstname', 'Firstname:') !!}
                        <p>{{ $reg->firstname }}</p>
                    </div>
                    <!-- Name Field -->
                    <div class="col-sm-12">
                        {!! Form::label('middlename', 'Middlename:') !!}
                        <p>{{ $reg->middlename }}</p>
                    </div>

                    <div class="col-sm-12">
                        {!! Form::label('surname', 'Surname:') !!}
                        <p>{{ $reg->surname }}</p>
                    </div>

                    <div class="col-sm-12">
                        {!! Form::label('gender', 'Gender:') !!}
                        <p>{{ $reg->gender }}</p>
                    </div>
                    
                    <div class="col-sm-12">
                        {!! Form::label('dob', 'Date of birth:') !!}
                        <p>{{ $reg->dob }}</p>
                    </div>

                    <div class="col-sm-12">
                        {!! Form::label('phone', 'Phone Number:') !!}
                        <p>{{ $reg->phone }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection