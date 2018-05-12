@extends('layout.studentView')

@section('title')
  Sudent Result
@endsection

@section('body')
<!-- sidebar -->
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
                      <a href="{{route('viewStudentResult')}}"> <i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;"> Student Result</span> </a>
                  </li>
                  <li class="iconfont">
                      <a href="{{route('viewStudentReport')}}"> <i class="fa fa-book " aria-hidden="true"> </i> <span style="margin-left:10px;"> Student Report</span> </a>
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
<div style="margin-top:-10px;" class="col-md-10">
  <h1 style="text-align: center; color: #001f4d;">Student Result in Each Term's</h1>
  <div style="margin-top:-25px;">
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
      labels: ["Religion", "Sinhala", "Maths","Seince","English","History","Geography","CitizenStudy","ICT","Esthetics","Health","Tamil","Technology"],
      datasets: [
        {
          label: "1st Term",
          backgroundColor: "#3f465a",
            data:  [<?php echo ($examResults[0]) ?>,<?php echo ($examResults[1]) ?>, <?php echo ($examResults[2]) ?>,
                    <?php echo ($examResults[3]) ?>,<?php echo ($examResults[4]) ?>,<?php echo ($examResults[5]) ?>,
                    <?php echo ($examResults[6]) ?>,<?php echo ($examResults[7]) ?>,<?php echo ($examResults[8]) ?>,
                    <?php echo ($examResults[9]) ?>,<?php echo ($examResults[10]) ?>,<?php echo ($examResults[11]) ?>,
                    <?php echo ($examResults[12]) ?>]
        }, {
          label: "2nd Term",
          backgroundColor: "#667292",
          data:  [<?php echo ($examResults[13]) ?>,<?php echo ($examResults[14]) ?>, <?php echo ($examResults[15]) ?>,
                  <?php echo ($examResults[16]) ?>,<?php echo ($examResults[17]) ?>,<?php echo ($examResults[18]) ?>,
                  <?php echo ($examResults[19]) ?>,<?php echo ($examResults[20]) ?>,<?php echo ($examResults[21]) ?>,
                  <?php echo ($examResults[22]) ?>,<?php echo ($examResults[23]) ?>,<?php echo ($examResults[24]) ?>,
                  <?php echo ($examResults[25]) ?>]
        }, {
          label: "3rd Term",
          backgroundColor: "#bccad6",
          data:  [<?php echo ($examResults[26]) ?>,<?php echo ($examResults[27]) ?>, <?php echo ($examResults[28]) ?>,
                  <?php echo ($examResults[29]) ?>,<?php echo ($examResults[30]) ?>,<?php echo ($examResults[31]) ?>,
                  <?php echo ($examResults[32]) ?>,<?php echo ($examResults[33]) ?>,<?php echo ($examResults[34]) ?>,
                  <?php echo ($examResults[35]) ?>,<?php echo ($examResults[36]) ?>,<?php echo ($examResults[37]) ?>,
                  <?php echo ($examResults[38]) ?>]
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
