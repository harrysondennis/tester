@extends('layouts.app')

@section('content')

<div class="container ">
  <center><h3 style="color: rgb(3, 19, 39);"><strong>DASHBOARD </strong></h3></center>
        <hr>
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



<div class="row">
  <div class="col-sm-6">
  <div class="card">
    <h5 class="card-header">MALE AND FEMALE PWD</h5>
    <div class="card-body">
      <div class="col">
        <div id="chartdiv"></div>
       </div>
    </div>
  </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <h5 class="card-header">TYPES OF DISABILITY </h5>
      <div class="card-body">
        <div class="col">
          <div id="chart"></div>
        </div>
      </div>
    </div>
    </div>

    {{-- <div class="col">
     <div id="chartdiv"></div>
    </div>

    <div class="col">
      <div id="chart"></div>
    </div> --}}
    <div class= "row">
      <div id="tanzania" style="width: 100%; height: 500px;"></div>
    </div>
 </div>

 










<div>




  





@endsection
@section('pagescript')
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script>
  am4core.ready(function() {
  
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end
  
  // Create chart instance
  var chart = am4core.create("chartdiv", am4charts.PieChart);
  
  // Add data
  chart.data = [ {
    "Gender": "Male",
    "litres": {{$male}}
  }, {
    "Gender": "Female",
    "litres": {{$female}}
  }, 
  ];
  
  // Add and configure Series
  var pieSeries = chart.series.push(new am4charts.PieSeries());
  pieSeries.dataFields.value = "litres";
  pieSeries.dataFields.category = "Gender";
  pieSeries.slices.template.stroke = am4core.color("#fff");
  pieSeries.slices.template.strokeWidth = 2;
  pieSeries.slices.template.strokeOpacity = 1;
  
  // This creates initial animation
  pieSeries.hiddenState.properties.opacity = 1;
  pieSeries.hiddenState.properties.endAngle = -90;
  pieSeries.hiddenState.properties.startAngle = -90;
  
  }); // end am4core.ready()
  </script>
  <script>
    am4core.ready(function() {
    
    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    // Create chart instance
    var chart = am4core.create("chart", am4charts.PieChart);
    
    // Add data
    chart.data = [ {
      "Disability": "Sensory Disabilities",
      "litres": {{$male}}
    }, {
      "Disability": "Mental illness",
      "litres": {{$female}}
    }, 
    {
      "Disability": "Physical Disabilities",
      "litres": {{$female}}
    }, 
    {
      "Disability": "Intellectual Disabilities",
      "litres": {{$female}}
    }, 
    ];
    
    // Add and configure Series
    var pieSeries = chart.series.push(new am4charts.PieSeries());
    pieSeries.dataFields.value = "litres";
    pieSeries.dataFields.category = "Disability";
    pieSeries.slices.template.stroke = am4core.color("#fff");
    pieSeries.slices.template.strokeWidth = 2;
    pieSeries.slices.template.strokeOpacity = 1;
    
    // This creates initial animation
    pieSeries.hiddenState.properties.opacity = 1;
    pieSeries.hiddenState.properties.endAngle = -90;
    pieSeries.hiddenState.properties.startAngle = -90;
    
    }); // end am4core.ready()
    </script>
    <script>
      am4core.ready(function() {
      
      // Themes begin
      am4core.useTheme(am4themes_animated);
      // Themes end
      
      // Create chart instance
      var chart = am4core.create("tanzania", am4charts.XYChart);
      chart.scrollbarX = new am4core.Scrollbar();
      

      var data=[];
            var dataz = <?php echo json_encode($region, JSON_HEX_TAG); ?>;
            console.log(dataz);
            for(let index=0;index<dataz.length;index++){
                 ///  console.log(dataz[index].region);
                let individual_data={"region": dataz[index].region, "visits": dataz[index].visits};
                data.push(individual_data);


            }
          

      // Add data
      chart.data =data;
      
      // Create axes
      var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
      categoryAxis.dataFields.category = "region";
      categoryAxis.renderer.grid.template.location = 0;
      categoryAxis.renderer.minGridDistance = 30;
      categoryAxis.renderer.labels.template.horizontalCenter = "right";
      categoryAxis.renderer.labels.template.verticalCenter = "middle";
      categoryAxis.renderer.labels.template.rotation = 270;
      categoryAxis.tooltip.disabled = true;
      categoryAxis.renderer.minHeight = 110;
      
      var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
      valueAxis.renderer.minWidth = 50;
      
      // Create series
      var series = chart.series.push(new am4charts.ColumnSeries());
      series.sequencedInterpolation = true;
      series.dataFields.valueY = "visits";
      series.dataFields.categoryX = "region";
      series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
      series.columns.template.strokeWidth = 0;
      
      series.tooltip.pointerOrientation = "vertical";
      
      series.columns.template.column.cornerRadiusTopLeft = 10;
      series.columns.template.column.cornerRadiusTopRight = 10;
      series.columns.template.column.fillOpacity = 0.8;
      
      // on hover, make corner radiuses bigger
      var hoverState = series.columns.template.column.states.create("hover");
      hoverState.properties.cornerRadiusTopLeft = 0;
      hoverState.properties.cornerRadiusTopRight = 0;
      hoverState.properties.fillOpacity = 1;
      
      series.columns.template.adapter.add("fill", function(fill, target) {
        return chart.colors.getIndex(target.dataItem.index);
      });
      
      // Cursor
      chart.cursor = new am4charts.XYCursor();
      
      }); // end am4core.ready()
      </script>