@extends('layouts.app')

@section('content')

<div class="container p-3">
    <div class="row">

        <div class="col">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $no_of_users }}</h3>

                <p>USERS</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
           </div>
        </div>
          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>PEOPLE WITH DISABILITY</p>
              </div>
              <div class="icon">
                <i class="fa fa-wheelchair"></i>
              </div>
            </div>
          </div>
          
        

    </div>
</div>
@endsection
