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


<div class="col-md-9">
  <div class="row">
    <h2 style="text-align: center; color: #001f4d;">Subject group 1 result {{$year}}</h2>
      <div style="margin-top:-20px;">
        <canvas id="bar-chart-1" ></canvas>
      </div>
      <br><br>
  </div>
  <div style="margin-left:10px;" class="row">
    <h2 style="text-align: center; color: #001f4d;">Subject group 2 result {{$year}}</h2>
      <div style="margin-top:-20px;">
        <canvas id="bar-chart-2" ></canvas>
      </div>
      <br><br>
  </div>
  <div class="row">
    <h2 style="text-align: center; color: #001f4d;">Subject group 3 result {{$year}}</h2>
      <div style="margin-top:-20px;">
        <canvas id="bar-chart-3" ></canvas>
      </div>
      <br>
  </div>
  <div class="row" style="color: #001f4d;">
    <div class="col-md-6">
      <h5><i style="font-size:6px;" class="fa fa-circle" aria-hidden="true"></i> ICT -- Informution and Communication Technology</h5>
      <h5><i style="font-size:6px;" class="fa fa-circle" aria-hidden="true"></i> A & FT -- Agriculture and Food Technology</h5>
      <h5><i style="font-size:6px;" class="fa fa-circle" aria-hidden="true"></i> D & C -- Design and Construction Technology</h5>
      <h5><i style="font-size:6px;" class="fa fa-circle" aria-hidden="true"></i> D & M -- Design and Mechanical Technology</h5>
      <br>
    </div>
    <div class="col-md-6">
      <h5><i style="font-size:6px;" class="fa fa-circle" aria-hidden="true"></i> D,E & E -- Design, Electrical and Electronic Technology</h4>
      <h5><i style="font-size:6px;" class="fa fa-circle" aria-hidden="true"></i> HE -- Home Ecconomics</h5>
      <h5><i style="font-size:6px;" class="fa fa-circle" aria-hidden="true"></i> H & EE -- Health and Physical Education</h5>
      <h5><i style="font-size:6px;" class="fa fa-circle" aria-hidden="true"></i> C & ME -- Communication and Media Education</h5>
      <br>
    </div>
  </div>
</div>


<script>

  Chart.defaults.global.defaultFontSize = 16;
  Chart.defaults.global.defaultFontColor = '#001f4d';
  new Chart(document.getElementById("bar-chart-1"), {
      type: 'bar',
      data: {
        labels: ["Geogrophy", "Citizenship Education", "Entrepreneuship Studies","Business & Accounting","Tamil"],
        datasets: [
          {
            label: "A",
            backgroundColor: "#3f465a",
            data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->geogrophyA);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->citizenshipA);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->entrepreneushipA);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->bisinuessA);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->tamilA);} ?>]
          }, {
            label: "B",
            backgroundColor: "#667292",
            data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->geogrophyB);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->citizenshipB);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->entrepreneushipB);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->bisinuessB);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->tamilB);} ?>]
          }, {
            label: "C",
            backgroundColor: "#8d9db6",
            data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->geogrophyC);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->citizenshipC);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->entrepreneushipC);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->bisinuessC);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->tamilC);} ?>]
          }, {
            label: "S",
            backgroundColor: "#bccad6",
            data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->geogrophyS);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->citizenshipS);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->entrepreneushipS);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->bisinuessS);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->tamilS);} ?>]
          }, {
            label: "F",
            backgroundColor: "#d2d6e0",
            data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->geogrophyF);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->citizenshipF);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->entrepreneushipF);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->bisinuessF);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->tamilF);} ?>]
          }
        ]
      },
      options: {
        title: {
          display: true,
        }
      }
    });
  new Chart(document.getElementById("bar-chart-2"), {
      type: 'bar',
      data: {
        labels: ["Music", "Art", "Dancing","Sinhala Literature","English Literature"],
        datasets: [
          {
            label: "A",
            backgroundColor: "#3f465a",
            data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->musicA);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->artA);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->dancingA);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->sinhalaLitA);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->englishLitA);} ?>]
          }, {
            label: "B",
            backgroundColor: "#667292",
            data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->musicB);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->artB);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->dancingB);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->sinhalaLitB);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->englishLitB);} ?>]
          }, {
            label: "C",
            backgroundColor: "#8d9db6",
            data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->musicC);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->artC);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->dancingC);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->sinhalaLitC);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->englishLitC);} ?>]
          }, {
            label: "S",
            backgroundColor: "#bccad6",
            data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->musicS);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->artS);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->dancingS);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->sinhalaLitS);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->englishLitS);} ?>]
          }, {
            label: "F",
            backgroundColor: "#d2d6e0",
            data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->musicF);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->artF);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->dancingF);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->sinhalaLitF);} ?>,
                  <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->englishLitF);} ?>]
          }
        ]
      },
      options: {
        title: {
          display: true,
        }
      }
    });

    new Chart(document.getElementById("bar-chart-3"), {
        type: 'bar',
        data: {
          labels: ["ICT", "A & FT", "D & C","D & M","D,E & E","Art & Crafts","HE","H & EE","C & ME"],
          datasets: [
            {
              label: "A",
              backgroundColor: "#3f465a",
              data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->ICTA);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->AFTA);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DC_A);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DM_A);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DEE_A);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->craftsA);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->HE_A);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->HEE_A);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->CME_A);} ?>]
            }, {
              label: "B",
              backgroundColor: "#667292",
              data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->ICTB);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->AFTB);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DC_B);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DM_B);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DEE_B);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->craftsB);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->HE_B);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->HEE_B);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->CME_B);} ?>]
            }, {
              label: "C",
              backgroundColor: "#8d9db6",
              data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->ICTC);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->AFTC);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DC_C);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DM_C);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DEE_C);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->craftsC);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->HE_C);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->HEE_C);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->CME_C);} ?>]
            }, {
              label: "S",
              backgroundColor: "#bccad6",
              data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->ICTS);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->AFTS);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DC_S);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DM_S);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DEE_S);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->craftsS);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->HE_S);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->HEE_S);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->CME_S);} ?>]
            }, {
              label: "F",
              backgroundColor: "#d2d6e0",
              data: [<?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->ICTF);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->AFTF);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DC_F);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DM_F);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->DEE_F);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->craftsF);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->HE_F);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->HEE_F);} ?>,
                    <?php foreach ($subjectGroups as $subjectGroup) {echo($subjectGroup->CME_F);} ?>]
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
