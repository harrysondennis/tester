@extends('layouts.app')

@section('content')

<div class="container ">
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
                <h3>{{ $no_of_regs }}</h3>

                <p>PEOPLE WITH DISABILITY</p>
              </div>
              <div class="icon">
                <i class="fa fa-wheelchair"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $no_of_roles }}</h3>

                <p>ROLES</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>
        

    </div>
{{-- 
    <div class="row">
    <canvas id="canvas" height="100" width="300"></canvas>
  </div>





  <div class='row'>
    <canvas id="pie-chart" width="800" height="450"></canvas>

  </div>
  --}}

<div>




  





@endsection
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}


{{-- <script>

var year = <?php echo $regin; ?>;

    var user = [1,2,3,4,5];

    var barChartData = {

        labels: year,

        datasets: [{

            label: 'Region',

            backgroundColor: "pink",

            data: user

        }]

    };


    window.onload = function() {

        var ctx = document.getElementById("canvas").getContext("2d");

        window.myBar = new Chart(ctx, {

            type: 'bar',

            data: barChartData,

            options: {

                elements: {

                    rectangle: {

                        borderWidth: 2,

                        borderColor: '#c1c1c1',

                        borderSkipped: 'bottom'

                    }

                },

                responsive: true,

                title: {

                    display: true,

                    text: 'Distribution of pwd in Tanzania'

                }

            }

        });

    };

</script> --}}


<script>
 
 
  new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [2478,5267,734,784,433]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});



</script>