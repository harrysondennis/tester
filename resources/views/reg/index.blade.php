@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fa fa-wheelchair"> Registered PwD</i></h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('reg.create') }}">
                       <i class="fa fa-plus">
                        Register
                       </i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>
           <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="row">S/N</th>
                                <th>fullname</th>
                                <th>gender</th>
                                <th>Date of birth</th>
                                <th>phone</th>
                                <th>Region</th>
                                <th>District</th>
                                <th>Ward</th>
                                <th>category of disability</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($regs as $reg)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $reg->firstname }} {{ $reg->middlename }} {{ $reg->surname }}</td>
                                <td>{{ $reg->gender }}</td>
                                <td>{{ $reg->dob }}</td>
                                <td>{{ $reg->phone }}</td>
                                <td>{{ $reg->region }}</td>
                                <td>{{ $reg->district }}</td>
                                <td>{{ $reg->ward }}</td>
                                <td>
                                    @foreach ($reg->cods as $cod)
                                    <span class="badge badge-primary">{{ $cod->name }}</span>
                                    @endforeach    
                                </td>
                                <td width="120">
                                    {!! Form::open(['route' => ['reg.destroy', $reg->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        <a href="{{ route('reg.show', $reg->id) }}" class='btn btn-default btn-xs'>
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="{{ route('editreg', $reg->id) }}" class='btn btn-default btn-xs'>
                                            <i class="far fa-edit"></i>
                                        </a>
                                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix float-right">
                <div class="float-right">
                    
                </div>
            </div>
        </div>

    </div>
</div>

@endsection