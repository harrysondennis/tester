@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                   <h1><i class="fa fa-wheelchair">  Edit PwD Details</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">
            {{-- @foreach ($regs as $reg) --}}
            <form action="/reg/{{ $reg->id }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            {!! Form::label('firstname', 'Firstname:') !!}
                           <input type="text" name="firstname" class = "form-control" value = "{{ $reg->firstname }}" placeholder = "First Name" maxlength="255" required> 
                        </div>
                        <!-- Middlename Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('middlename', 'Middlename:') !!}
                            <input type="text" name="middlename" class = "form-control" value = "{{ $reg->middlename }}" placeholder = "Middle Name" maxlength="255" required> 
                        </div>
                        <!-- Surname Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('surname', 'Surname:') !!}
                            <input type="text" name="surname" class = "form-control" value = "{{ $reg->surname }}" placeholder = "Surname" maxlength="255" required> 
                        </div>
                        <!-- Gender -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('gender', 'Gender:') !!}
                            <select name="gender" id="role" class="gender form-control">
                                <option value="">select gender...</option>
                                <option value="male" {{ $reg->gender=="male" ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $reg->gender=="female" ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                        <!-- Date of birth -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('dob', 'Date of birth:') !!}
                            <input type="text" name="dob" class = "form-control" value = "{{ $reg->dob }}" placeholder = "Date of Birth" maxlength="255" required>                         
                        </div>
                        <!-- Phone number -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('phone', 'Phone Number:') !!}
                            <input type="text" name="phone" class = "form-control" value = "{{ $reg->phone }}" placeholder = "Phone Number" maxlength="255" required> 
                        </div>
                        <!-- Region -->
                        <div class="form-group col-sm-6">                    
                        {!! Form::label('region', 'Region:') !!}
                        <select class="form-control" name="region" id="region">
                            <option value="region">select region...</option>
                            @foreach (\App\Models\Region::all() as $region)
                            <option value="{{ $region->region_code }}" {{ $region->name==$reg->region ? 'selected' : '' }}>{{ $region->name }}</option>
                            @endforeach
                        </select>
                    </div> 

                    {{-- {{ $reg->district }} --}}
                    <!-- District -->
                    <div class="form-group col-sm-6">                  
                    {!! Form::label('District', 'District:') !!}
                            <select class="form-control" name="district" id="district">
                                <option value="region">select district...</option>
                                @foreach (\App\Models\District::all() as $district)
                                {{-- {{ $district->name }} --}}
                                <option value="{{ $district->district_code }}" {{$district->name==$reg->district ? 'selected' : '' }}>{{ $district->name }}</option>                  
                                @endforeach
                            </select>
                    </div>    
                    <!-- Ward -->
                    <div class="form-group col-sm-6">            
                            {!! Form::label('Ward', 'Ward:') !!}
                            <select class="form-control" name="ward" id="ward">
                                <option value="ward">select ward...</option>   
                                @foreach (\App\Models\Ward::all() as $ward)
                                <option value="{{ $ward->ward_code }}" {{ $ward->name==$reg->ward ? 'selected' : '' }}>{{ $ward->name }}</option>                  
                                @endforeach              
                            </select>
                        </div> 


                        <!-- Type of disability -->
                        <div class="form-group col-sm-6">            
                            {!! Form::label('tod', 'Type Of Disability:') !!}
                            <select class="form-control select2" name="tod[]" data-placeholder="Select Type Of Disability" id="tod" multiple="multiple" class="tod-id" >  
                                <option value="">select Type Of Disability...</option>  
                                @foreach (\App\Models\Tod::all() as $tod)
                                    @foreach ($reg->cods as $a)
                                        <option value="{{ $tod->id }}"
                                            @foreach ($tod->cods as $c)
                                            {{ $c->id == $a->id ? 'selected' : ''}} 
                                            @endforeach 
                                        >{{ $tod->name }}</option>                  
                                    
                                    @endforeach
                                @endforeach 
                                

                            </select>
                        </div>  
                        <!-- category of disability -->
                        <div class="form-group col-sm-6">            
                            {!! Form::label('cod', 'Category Of Disability:') !!}
                            <select class="form-control  select2" data-placeholder="Select Category Of Disability" name="cod[]" id="cod" multiple="multiple">   
                                <option value="">Select Category Of Disability...</option> 
                                @foreach (\App\Models\Cod::all() as $cod)   
                                <option value="{{ $cod->id }}"
                                    @foreach ($reg->cods as $a)
                                            {{ $cod->id==$a->id ? 'selected' : ''}}    
                                    @endforeach
                                    >{{ $cod->name }}</option>               
                                @endforeach 
                            </select>
                        </div>

                    </div>
                </div>

               <div class="card-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('reg.index') }}" class="btn btn-default">Cancel</a>
                </div>    
            </form>

          
           
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
                  
                   console.log("");
                    $("#district").empty();
                    $("#district").append('<option value="">-- Select District --</option>');
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
                        $("#ward").append('<option value="">-- Select Ward --</option>');
                        response.forEach(element=>{
                             $('#ward').append(`<option value="${element['ward_code']}">${element['name']} </option>`);
                        });
                    }
                });
            })
        });
        </script>
    
        
    
       <script>
       
        $(document).ready(function(){
            let q
            $("#tod").on('change',function () {
                var url = $("#selectform").attr("data-district-cod");
                $("#cod").empty();
                var data = $(this).val();
                //console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            //     $.ajax({
            //         type: "POST",
            //         url: url,
            //         data: {
            //             'cod_code': data
                       
            //         },
            //         success: function (response) {
                     
            //            console.log(response);
            //             $("#cod").empty();
            //             $("#cod").append('<option value="">-- Select Category of disability --</option>');
            //             response.forEach(element=>{
            //                  $('#cod').append(`<option value="${element['id']}">${element['name']} </option>`);
            //             });
            //         }
            //    });
    
            //  $.get('/cod',function(data){
            //    console.log(data);
            //  })
    
            $.ajax({
                url: "/cod",
                type: "get", //send it through get method
                data: { 
                    data: data, 
                },
                success: function(response) {
                       console.log(response);
                        $("#cod").empty();
                        $("#cod").append();
                        response.forEach(element=>{
                            console.log(element);
                             $('#cod').append(`<option value="${element['id']}">${element['name']} </option>`);
                        });
                },
                error: function(xhr) {
                    console.log('error');
                }
                });
            })
        });
         </script>