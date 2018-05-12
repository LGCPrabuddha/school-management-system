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


<!-- bar chart -->
<div class="col-md-10">
  <h1 style="text-align: center; color: #001f4d;margin-top:-5px;">O/L Results in <?php echo date('Y')-1 ?></h1>
  <div style="margin-top:-30px;">
    <canvas id="bar-chart-grouped" ></canvas>
  </div>
</div>
  <!-- bar chart end-->






<script>

    Chart.defaults.global.defaultFontSize = 16;
    Chart.defaults.global.defaultFontColor = '#001f4d';
    new Chart(document.getElementById("bar-chart-grouped"), {
        type: 'bar',
        data: {
          labels: ["Maths", "Science", "Religion","Sinhala","English","History","Group 1","Group 2","Group 3"],
          datasets: [
            {
              label: "A",
              backgroundColor: "#3f465a",
              data: [<?php echo ($results['maths_A']) ?>,<?php echo ($results['science_A']) ?>,<?php echo ($results['religion_A']) ?>,
                     <?php echo ($results['sinhala_A']) ?>,<?php echo ($results['english_A']) ?>,<?php echo ($results['history_A']) ?>,
                     <?php echo ($results['subjectGroup1_A']) ?>,<?php echo ($results['subjectGroup2_A']) ?>,<?php echo ($results['subjectGroup3_A']) ?>]
            }, {
              label: "B",
              backgroundColor: "#667292",
              data: [<?php echo ($results['maths_B']) ?>,<?php echo ($results['science_B']) ?>,<?php echo ($results['religion_B']) ?>,
                     <?php echo ($results['sinhala_B']) ?>,<?php echo ($results['english_B']) ?>,<?php echo ($results['history_B']) ?>,
                     <?php echo ($results['subjectGroup1_B']) ?>,<?php echo ($results['subjectGroup2_B']) ?>,<?php echo ($results['subjectGroup3_B']) ?>]
            }, {
              label: "C",
              backgroundColor: "#8d9db6",
              data: [<?php echo ($results['maths_C']) ?>,<?php echo ($results['science_C']) ?>,<?php echo ($results['religion_C']) ?>,
                     <?php echo ($results['sinhala_C']) ?>,<?php echo ($results['english_C']) ?>,<?php echo ($results['history_C']) ?>,
                     <?php echo ($results['subjectGroup1_C']) ?>,<?php echo ($results['subjectGroup2_C']) ?>,<?php echo ($results['subjectGroup3_C']) ?>]
            }, {
              label: "S",
              backgroundColor: "#bccad6",
              data: [<?php echo ($results['maths_S']) ?>,<?php echo ($results['science_S']) ?>,<?php echo ($results['religion_S']) ?>,
                     <?php echo ($results['sinhala_S']) ?>,<?php echo ($results['english_S']) ?>,<?php echo ($results['history_S']) ?>,
                     <?php echo ($results['subjectGroup1_S']) ?>,<?php echo ($results['subjectGroup2_S']) ?>,<?php echo ($results['subjectGroup3_S']) ?>]
            }, {
              label: "F",
              backgroundColor: "#d2d6e0",
              data: [<?php echo ($results['maths_F']) ?>,<?php echo ($results['science_F']) ?>,<?php echo ($results['religion_F']) ?>,
                     <?php echo ($results['sinhala_F']) ?>,<?php echo ($results['english_F']) ?>,<?php echo ($results['history_F']) ?>,
                     <?php echo ($results['subjectGroup1_F']) ?>,<?php echo ($results['subjectGroup2_F']) ?>,<?php echo ($results['subjectGroup3_F']) ?>]
            }
          ]
        },
        options: {
          title: {
            display: true,
          }
        }
    });

</script>

@endsection
