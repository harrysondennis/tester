<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
 integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
 crossorigin="anonymous"/>
 <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
          integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
          crossorigin="anonymous"/>


          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/> 
          <link rel="stylesheet" type="text/css" href="{{asset('plugins\select2\css\select2.min.css')}}">
          <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
          integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
          crossorigin="anonymous"/> 
          <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
          <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


          <script src="{{asset('plugins\select2\js\select2.min.js')}}" type="text/javascript"></script>



          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
          integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
          crossorigin="anonymous"></script>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
  integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
  crossorigin="anonymous"></script>
  
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
          integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
          crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"
          integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg=="
          crossorigin="anonymous"></script>
  
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
          integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
          crossorigin="anonymous"></script>






<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">


@yield('third_party_stylesheets')

@stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- Main Header -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="img/avablue.png"
                     class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"> <i class="fa fa-caret-down" ></i></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="img/avablue.png"
                         class="img-circle elevation-2"
                         alt="User Image">
                    <p>
                       Logged in: {{ Auth::user()->firstname }}
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    {{-- <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
                    <a href="#" class="btn btn-primary btn-flat float-right"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        @yield('content')
        
        <center><h3 style="color: rgb(3, 19, 39);"><strong>PEOPLE WITH DISABILITY MANAGEMENT </strong></h3></center>
        <hr>
        @include('flash::message')
        <div class="col-sm-6">
            <div class="col-sm-6">
                <a class="btn btn-primary float-none"
                href="{{ route('reg.create') }}">
                <i class="fa fa-plus"> Register </i>
                </a>
            </div>
        </div>
<br>
<table id="my" class="display table table-bordered" style="width:100%">
                        <thead class="thead-dark">
                            <tr>
                                <th >S/N</th>
                                <th>fullname</th>
                                <th>gender</th>
                                <th>Date of birth</th>
                                <th>phone</th>
                                <th>Region</th>
                                <th>District</th>
                                <th>Ward</th>
                                <th>category of disability</th>
                                <th >Action</th>
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
                                        @can('view pwd')
                                        <a href="{{ route('reg.show', $reg->id) }}" class='btn btn-default btn-xs'>
                                            <i class="far fa-eye"></i>
                                        </a>   
                                        @endcan

                                        <a href="/reg/{{$reg->id}}/edit" class='btn btn-default btn-xs'>
                                            <i class="far fa-edit"></i>
                                        </a>   

                                        @can('delete pwd')
                                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}   
                                        @endcan
                                        
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
      

                </section>
            </div>
            
            <!-- Main Footer -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2021 <a href="#">PwDRS</a>.</strong> All rights reserved.
            </footer>
            </div>
            
            
            
              </body> 
            
            
            
            
            
            <script>
            $(function () {
                bsCustomFileInput.init();
            });
            
            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });
            
            $('.select2').select2();
            </script>
            
            <script>
            $("#position").select2({
            allowClear:true,
            placeholder: 'Position'
            });
            </script>
            
            
            
            @yield('third_party_scripts')
            
            @stack('page_scripts')
            
            
            <script src=https://code.jquery.com/jquery-3.5.1.js></script>
            <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> 
             <script src=" https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
            
            
            
            <script type="text/javascript">
            $(document).ready(function() {
                $('#my').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        {
                extend: 'print',
                messageTop: 'This is the list of people with disability',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [ {
            targets: -1,
            visible: false
        }
                    ]
                } );
            } );
               
               </script>
            