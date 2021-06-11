@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                   <h1><i class="fa fa-user">  Edit PwD Details</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($reg, ['route' => ['reg.update', $reg->id], 'method' => 'patch']) !!}

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
                     <!-- Region -->
                    <div class="form-group col-sm-6">                    
                       {!! Form::label('region', 'Region:') !!}
                       <select class="form-control" name="region" id="region">
                           <option value="region">select region...</option>
                           @foreach ($regions as $region)
                           <option value="{{ $region->region_code }}">{{ $region->name }}</option>
                           @endforeach
                       </select>
                   </div> 
                   <!-- District -->
                   <div class="form-group col-sm-6">                  
                   {!! Form::label('District', 'District:') !!}
                        <select class="form-control" name="district" id="district">
                            <option value="district">select district...</option>                      
                        </select>
                   </div>    
                   <!-- Ward -->
                   <div class="form-group col-sm-6">            
                        {!! Form::label('Ward', 'Ward:') !!}
                        <select class="form-control" name="ward" id="ward">
                            <option value="ward">select ward...</option>                 
                        </select>
                    </div> 
                    <!-- Type of disability -->
                    <div class="form-group col-sm-6">            
                        {!! Form::label('tod', 'Type Of Disability:') !!}
                        <select class="form-control" name="tod" id="tod">
                            <option value="">select Type Of Disability...</option>                 
                        </select>
                    </div>  
                    <!-- category of disability -->
                    <div class="form-group col-sm-6">            
                        {!! Form::label('cod', 'Category Of Disability:') !!}
                        <select class="form-control" name="cod" id="cod">
                            <option value="">Select Category Of Disability...</option>                 
                        </select>
                    </div>

                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('reg.index') }}" class="btn btn-default">Cancel</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
   
$(document).ready(function(){
    $("#region").on('change',function () {
        var url = $("#selectform").attr("data-district-url");
        $("#district").empty();
        var data = $(this).val();
        console.log(data);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: url,
            data: {
                'dist': data
                
            },
            success: function (response) {
              
               console.log("lukelo");
                $("#district").empty();
                $("#district").append('<option value="">-- Select Destined Block --</option>');
                response.forEach(element=>{
                     $('#district').append(`<option value="${element['district_code']}">${element['name']} </option>`);
                });
            }
        });
    })
});
</script>


<script>
   
    $(document).ready(function(){
        $("#district").on('change',function () {
            var url = $("#selectform").attr("data-ward-url");
            $("#ward").empty();
            var data = $(this).val();
            console.log(data);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    'ward': data
                    
                },
                success: function (response) {
                  
               
                    $("#ward").empty();
                    $("#ward").append('<option value="">-- Select Destined Block --</option>');
                    response.forEach(element=>{
                         $('#ward').append(`<option value="${element['ward_code']}">${element['name']} </option>`);
                    });
                }
            });
        })
    });
    </script>