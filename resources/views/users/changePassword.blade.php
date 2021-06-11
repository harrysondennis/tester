@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fa fa-key">  Change Password </i></h1>
                </div>
            </div>
        </div>
    </section>

        <div class="content px-3">

            @include('flash::message')

            @include('adminlte-templates::common.errors')
        
        <div class="card">   
            <div class="card-body">
                <form action="/changePassword" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="">Current Password</label>
                            <input class="form-control" type="text" name="old_password" required>
                        </div>  
                    </div>                
                    
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="">New Password</label>
                            <input class="form-control" type="password" name="new_password" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="">Confirm New Password</label>
                            <input class="form-control" type="password" name="confirm_password" required>
                        </div>
                    </div>
                </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Save</button>
                    </div>
                </form>
            </div>
        </div>      
    </div>   
@endsection
