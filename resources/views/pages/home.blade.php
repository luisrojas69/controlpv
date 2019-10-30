@extends('layouts.master')

@section('title-page', "Bienvenido - Granja Boraure")

@section('additionals-css')
  <link rel="stylesheet" href="{{ asset ('css/dataTables.bootstrap.min.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset ('css/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset ('css/bootstrap-datepicker.min.css') }}">  
@endsection

@section('content')
 @include('layouts._my_message')
 @include('layouts._my_error')
 
<section class="content">


  <!--Modal-->
        <div class="modal fade" tabindex="-1" id="modal-control">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>

              <div class="modal-body">
               <div>
                  <h4 class="info_modal"></h4>
               </div>
              </div>
            </div>
            <!-- /.modal-content -->

          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- Fin Modal -->

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>12</h3>

              <p>Sectores</p>
            </div>
            <div class="icon">
              <i class="fa fa-clone"></i>
            </div>
            <a href="#" class="small-box-footer">Ver Lista de Sectores <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>13</h3>

              <p>Lotes</p>
            </div>
            <div class="icon">
              <i class="fa fa-object-ungroup"></i>
            </div>
            <a href="#" class="small-box-footer">Ver Lista de Lotes <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>14</h3>

              <p>Tablones</p>
            </div>
            <div class="icon">
              <i class="fa fa-object-group"></i>
            </div>
            <a href="#" class="small-box-footer">Ver Lista de Tablones <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 class="fa fa-umbrella"></h3>

              <p>Precipitaciones</p>
            </div>
            <div class="icon">
              <i class="fa fa-umbrella"></i>
            </div>
            <a href="#" class="small-box-footer">Ver detalle de Precipitaciones <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla Resumen - Control Hect&aacute;reas</h3>
              
              <div class="input-group pull-right">
                  <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span>
                      <i class="fa fa-calendar"></i> Seleccione Rango de Fecha
                    </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr class="bg-aqua">
                  <th style="width: auto">Mes</th>
                  <th style="width: auto">Total</th>
                  <th style="width: auto">Monto</th>
                  <th style="width: auto;">% Punto</th>
                  <th style="width: auto;">% Cliente</th>
                  <th style="width: auto;">% Banco</th>
                  <th>Comentario</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($result as $control)
                <tr>
                  <td class="bg-green">{{ $control->Ene}}</td>
                  

                </tr>
                @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
              </div>


<div class="row" id="graphic">

    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Controles </h3>
<a class="btn btn-primary no-margin pull-right" title="Agregar un nuevo Control" href="{{route('control.create')}}">
                                <i class="fa fa-plus"></i> Control
                     </a>
             
            </div>
<div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height: 285px; width: 632px;" width="632" height="285"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

      <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <div class="widget-user-image">
                <img class="img-circle" src="{{ asset ('img/logo-lluvia.png') }}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">No se</h3>
              <h5 class="widget-user-desc">Resumen de Precipitaciones</h5>
            </div>

     
            <!-- /.box-body -->
            <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay" id=loading>
              <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- end loading -->
       

            <div class="box-footer no-padding">

              <ul class="nav nav-stacked">
                <li><a href="#" >Total ultimos 12 Meses <span class="pull-right badge bg-blue " id="acum12meses"></span></a></li>
                <li><a href="#">Total a&ntilde;o Actual<span class="pull-right badge bg-aqua" id="acum_anio_actual"></span></a></li>
                <li><a href="#">Total mes Actual <span class="pull-right badge bg-green" id="acum_mes_actual"></span></a></li>
                <li><a href="#">Total mes Pasado <span class="pull-right badge bg-yellow" id="acum_mes_pasado"></span></a></li>
                <li><a href="#">Total a&ntilde;o Pasado <span class="pull-right badge bg-red" id="acum_anio_pasado"></span></a></li>

                </ul>

                <div class="box-footer">
                <a href="{{ route('control.index') }}" class="btn btn-default">Volver a Controles</a>
                <a class="btn btn-primary no-margin pull-right" title="Agregar un nueva Precipitacion" href="{{route('control.create')}}">
                    <i class="fa fa-plus"></i> Control
                </a>
              </div>
            </div>
          </div>
          <!-- /.widget-user -->
</div>

    </div>
</section>
@endsection

@section('additionals-scripts')

<!-- date-range-picker -->
<script src="{{ asset('js/moment.min.js') }}"></script>

<script src="{{ asset('js/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('js/bootstrap-datepicker.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/Chart.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/Chart.js') }}"></script>

<script type="text/javascript">

   var url = "/home/lastmonths";
    $(document).ready(function(){
     $.ajax({
      dataType: 'json',
      url: url,
      method: "GET",
        beforeSend: function() {
          $("#loading").show();
         },
        success: function(datos)
        {
         $("#loading").hide();
          $("#acum12meses").html(datos[0].total+" bs");
          $("#acum_anio_actual").html(datos[0].total_anio_actual+" bs");
          $("#acum_mes_actual").html(datos[0].Mes12+" bs");
          $("#acum_mes_pasado").html(datos[0].mes_pasado+" bs");
          $("#acum_anio_pasado").html(datos[0].total_anio_pasado+" bs");
          getGraphic(datos);
        },
       timeout:9000,
         error: function()
         {
         console.log("Error Sincronizando");
         }

      });
  });


    // Obtener Tabla de Todos los Meses, Via AJAX

   function getGraphic(datos) {
   
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Activar para usar areaChartGet context with jQuery - using jQuery's .get() method.
    //var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
   // var areaChart       = new Chart(areaChartCanvas)

    var pr = datos[0].posicion
    var areaChartData = {
  
      labels  : pr==12?['Ene','Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep','Oct','Nov','Dic']:
                pr==1?['Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep','Oct','Nov','Dic','Ene']:
                pr==2?['Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep','Oct','Nov','Dic', 'Ene','Feb']:
                pr==3?['Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep','Oct','Nov','Dic','Ene','Feb', 'Mar']:
                pr==4?['May', 'Jun', 'Jul', 'Ago', 'Sep','Oct','Nov','Dic','Ene','Feb', 'Mar', 'Abr']:
                pr==5?['Jun', 'Jul', 'Ago', 'Sep', 'Oct','Nov','Dic','Ene','Feb', 'Mar', 'Abr','May']:
                pr==6?['Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic','Ene','Feb','Mar', 'Abr', 'May', 'Jun']:
                pr==7?['Ago', 'Sep', 'Oct', 'Nov', 'Dic', 'Ene','Feb', 'Mar','Abr', 'May', 'Jun', 'Jul' ]:
                pr==8?['Sep','Oct','Nov','Dic','Ene','Feb', 'Mar', 'Abr','May', 'Jun', 'Jul', 'Ago']:
                pr==9?['Oct','Nov','Dic','Ene','Feb', 'Mar', 'Abr','May','Jun', 'Jul', 'Ago', 'Sep']:
                pr==10?['Nov','Dic', 'Ene','Feb', 'Mar','Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep','Oct' ]:
                ['Dic', 'Ene','Feb', 'Mar', 'Abr','May', 'Jun', 'Jul', 'Ago', 'Sep','Oct','Nov'],
      
      datasets: [


        {
          label               : 'Precipitaciones',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [datos[0].Mes1, datos[0].Mes2, datos[0].Mes3, datos[0].Mes4, datos[0].Mes5, datos[0].Mes6, datos[0].Mes7, datos[0].Mes8, datos[0].Mes9, datos[0].Mes10, datos[0].Mes11, datos[0].Mes12],
         
        }
      ]
    }
    
//-------------
    //- AREA CHART -
    //-------------

   /* var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : true,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 2,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)*/

   //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    //barChartData.datasets[1].strokeColor = '#00a65a'
   // barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
   
  }

</script>




<!-- Page script -->
<script>
  $(function () {

   //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Hoy'       : [moment(), moment()],
          'Ayer'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Ultimos 7 Dias' : [moment().subtract(6, 'days'), moment()],
          'Ultimos 30 Dias': [moment().subtract(29, 'days'), moment()],
          'Mes Actual'  : [moment().startOf('month'), moment().endOf('month')],
          'Mes Pasado'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'))
        execute(start, end);
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })  

  });

      function execute(st, en){
      var start_date = st.format('YYYY-MM-DD');
      var end_date = en.format('YYYY-MM-DD');  
      var url = "/home/between2dates/"+start_date+"/"+end_date;

    $(document).ready(function(){
     $.ajax({
      dataType: 'json',
      url: url,
      method: "GET",
        beforeSend: function() {
          $("#loading").show();
         },
        success: function(datos)
        {
          console.log(datos[0].total);
          var total = parseInt(datos[0].total).toFixed(2);
          var cliente= (total*0.95).toFixed(2);
          var banco= (total*0.0175).toFixed(2);
          var saldo= (total*0.9825).toFixed(2);
          var comision = (saldo*0.002).toFixed(2);
          var ganancia_no_neta= (total*0.0325).toFixed(2);
          var ganancia_neta = (ganancia_no_neta-comision).toFixed(2);
          
          var t2= '<div class="box-body"><table class="table table-bordered"><tbody><tr><th style="width: 10px">#</th>            <th>Concepto</th>  <th>Monto</th>     <th style="width: 40px; text-align:center">%</th></tr><tr><td>1.</td><td>Total</td><td>'+total+'</td><td><span class="badge bg-red">100%</span></td></tr><tr><td>2.</td><td>% Cliente</td><td><strong>'+cliente+'</strong></td>                     <td><span class="badge bg-yellow">95%</span></td></tr>                <tr>                  <td>3.</td>                  <td>% Banco</td><td>'+banco+'</td>                   <td><span class="badge bg-light-blue">1.75%</span></td>                </tr>  <tr>  <td>5.</td><td>Comision % Banco</td><td>'+comision+'</td>           <td><span class="badge bg-purple">0.2%</span></td></tr>               <tr>                  <td>4.</td>                  <td>Ganancia</td><td>'+ganancia_neta+'</td>                             <td><span class="badge bg-green">3.25%</span></td></tr>               </tbody></table>            </div>';

          $('.modal-title').text('Tabla de Control');
          $('.info_modal').html(t2);
          $('#modal-control').modal('show');
        },
       timeout:9000,
         error: function()
         {
         console.log("Error Sincronizando");
         }

      });
    });
    }  
   

</script>


@endsection