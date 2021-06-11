@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fa fa-users">  Edit Roles</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'required']) !!}
                    </div>
                    
                     <!-- Permission Field -->
                     <div class="form-group col-sm-6">
                        <div class="form-wrapper">
                       {!! Form::label('permission', 'Permission:') !!}
                       <select class="form-control select2" style="color: black" name="role_permissions[]" id="permission"  multiple="multiple" required="">
                           <option value="">select permission...</option>
                           @foreach ($permissions as $permission)
                           <option value="{{ $permission->id }}" @if($role_permissions->contains($permission)) selected @endif>{{ $permission->name }}</option>
                           @endforeach
                       </select>
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