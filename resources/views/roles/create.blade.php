@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fa fa-users">  Create Roles</i></h1>
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

            {!! Form::open(['route' => 'roles.store']) !!}

            <div class="card-body">

                <div class="row">
                    <!--Role Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', 'Role Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'required']) !!}
                    </div>
                    <div class="form-group col-sm-6">
                       <input type="hidden" value="web" name="guard_name">
                    </div>
                     <!-- Permission Field -->
                     <div class="form-group col-sm-6">
                         <div class="form-wrapper">
                        {!! Form::label('permission', 'Permission:') !!}
                        <select class="form-control select2" name="role_permissions[]" id="permission"  multiple="multiple" required="">
                            <option value="">select permission...</option>
                            @foreach ($permissions as $permission)
                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
