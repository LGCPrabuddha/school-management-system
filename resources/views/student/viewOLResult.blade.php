@extends('layout.studentView')

@section('title')
  O/L Result
@endsection

@section('body')

<div class="col-md-2">
  <div class="container">
    <div class="row">
       <div id="wrapper">

          <!-- Sidebar -->
          <div id="sidebar-wrapper">
              <ul class="sidebar-nav" style="margin-left:0;">
                  <li class="sidebar-brand">
                      <a href="#"  id="menu-toggle" style="margin-top:20px;float:right;">
                        <i class=" icon fa fa-bars" style="font-size:35px !Important;" aria-hidden="true" aria-hidden="true"></i>
                      </a>
                  </li>
                  <li style="margin-top:10px;" class="iconfont">
                      <a href="{{route('viewStudentOLResult')}}"> <i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;"> O/L Result</span> </a>
                  </li>
                  <li class="iconfont">
                      <a href="{{route('viewStudentOLResultBarChart')}}"> <i class="fa fa-bar-chart" aria-hidden="true"> </i> <span style="margin-left:10px;"> Result Chart</span> </a>
                  </li>
                  <li class="iconfont">
                      <a href="{{route('viewExtraRisultOL')}}"> <i class="fa fa-file" aria-hidden="true"> </i> <span style="margin-left:15px;"> Extra Result</span> </a>
                  </li>
              </ul>
          </div>

  <!-- header nav bar end-->
  <!-- script open -->
          <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
          </script>

  <!-- script close -->
  <!-- sidebar close -->
      </div>
    </div>
  </div>
</div>


<!-- chartopen -->
<div class="col-md-10">
  <br><br>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-3">
      <div class="row">
        <div class="col-md-4">
          <h4 style="text-align:right; width: 100%;height: 30px;background-color:#3f465a;"></h4>
        </div>
        <div class="col-md-8">
          <h4>Exam pass</h4>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="row">
        <div class="col-md-4">
          <h4 style="text-align:right; width: 100%;height: 30px;background-color:#bccad6;"></h4>
        </div>
        <div class="col-md-8">
          <h4>Exam failed</h4>
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>

<br><br>
  <div class="row">
    <div class="col-md-4">
        <canvas id="pie-chart1" ></canvas>
        <h3 style="text-align: center;"><?php echo(round($passStudent1/$totleStudents1*100)) ?>% pass</h3>
        <h2 style="text-align: center;">O/L Result in <?php echo date('Y')-1 ?></h2>
    </div>
    <div class="col-md-4">
        <canvas id="pie-chart2" ></canvas>
        <h3 style="text-align: center;"><?php echo(round($passStudent2/$totleStudents2*100)) ?>% pass</h3>
        <h2 style="text-align: center;">O/L Result in <?php echo date('Y')-2 ?></h2>
    </div>
    <div class="col-md-4">
        <canvas id="pie-chart3" ></canvas>
        <h3 style="text-align: center;"><?php echo(round($passStudent3/$totleStudents3*100)) ?>% pass</h3>
        <h2 style="text-align: center;">O/L Result in <?php echo date('Y')-3 ?></h2>
    </div>
  </div>
</div>
<!-- chartopen clous-->

<br>


  <script>

    Chart.defaults.global.defaultFontSize = 13;
    Chart.defaults.global.defaultFontColor = "#000000";
    new Chart(document.getElementById("pie-chart1"), {
        type: 'pie',
        data: {
          labels: ["Examination pass ", "Examination failed "],
          datasets: [{
            //label: "Population (millions)",
            backgroundColor: ["#001f4d", "#bccad6"],
            data: [<?php echo($passStudent1) ?>,<?php echo($totleStudents1-$passStudent1) ?>]
          }]
        },
        options: {
          title: {
            display: false,
            //text: '<?php echo(round($passStudent1/$totleStudents1*100)) ?>% pass',
          }
        }
      });

      new Chart(document.getElementById("pie-chart2"), {
          type: 'pie',
          data: {
            labels: ["Examination pass ", "Examination failed "],
            datasets: [{
              //label: "Population (millions)",
              backgroundColor: ["#001f4d", "#bccad6"],
              data: [<?php echo($passStudent2) ?>,<?php echo($totleStudents2-$passStudent2) ?>]
            }]
          },
          options: {
            title: {
              display: false,
              //text: '<?php echo(round($passStudent1/$totleStudents1*100)) ?>% pass',
            }
          }
        });

        new Chart(document.getElementById("pie-chart3"), {
            type: 'pie',
            data: {
              labels: ["Examination pass ", "Examination failed "],
              datasets: [{
                //label: "Population (millions)",
                backgroundColor: ["#001f4d", "#bccad6"],
                data: [<?php echo($passStudent3) ?>,<?php echo($totleStudents3-$passStudent3) ?>]
              }]
            },
            options: {
              title: {
                display: false,
                //text: '<?php echo(round($passStudent1/$totleStudents1*100)) ?>% pass',
              }
            }
          });


 </script>



@endsection
