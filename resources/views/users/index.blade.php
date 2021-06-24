@extends('layouts.app') 

@section('content') 

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fa fa-user">Users</i></h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-primary float-right"
                   href="{{ route('users.create') }}">
                   <i class="fa fa-plus">
                    Add New User
                   </i>
                </a>
            </div>
        </div>
    </div>
</section>




    @include('flash::message')

   
            {{-- <h6>{{ $no_of_users }}</h6> --}}
          




    <table class="hover table table-striped table-bordered" id="my">
        <thead>
            <tr>
                <th scope="row">S/N</th>
                <th>firstname</th>
                <th>middlename</th>
                <th>surname</th>
                <th>Email</th>
                <th>role</th>
                <th>Status</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->middlename }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->email }}</td>
            <td>
                @foreach($user->roles as $role)
                <span class="badge badge-primary">{{ $role->name ?? '-'}}</span>
                @endforeach
            </td>
            <td><span class="badge {{$user->color}}"><i>{{$user->status}}</i></span></td>
            <td >
                {{-- {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!} --}}
                <div class='btn-group'>
                    <a href="{{ route('users.show', $user->id) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                    </a>

                    <a href="{{ route('users.edit', $user->id) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-edit"></i>
                    </a>
                    <form action="/userstatus/{{$user->id}}" method="POST" style="display:inline;">
                        @csrf
                        @method('PATCH')
                        @if($user->status == 'disabled')
                        <button type="submit"  name= "set" value="active" class="btn btn-sm btn-success"><i class="fa fa-lock"></i></button>
                        
                        @else
                        <button type="submit"  name= "set" value="disabled" class="btn btn-sm btn-danger"><i class="fa fa-unlock"></i></button>
                        
                        @endif
                       
                    </form>

                </div>


                </td>

            </tr>
                @endforeach




        </tbody>
</table>

@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    var result = [];
           jQuery(document).ready(function($){
               var table = $('#my').DataTable( {
                   dom: '<"top"fl>rt<"bottom"p>',
       
       
                   select: {
                       //style: 'os',
                       style: 'multi',
                       selector: 'td:first-child'
                   },
       
                   order: [[ 1, 'asc' ]]
               });
           });
   
   </script>