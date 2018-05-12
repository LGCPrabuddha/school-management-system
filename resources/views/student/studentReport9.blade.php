@extends('layout.studentView')

@section('title')
  Sudent Report
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

<div class="col-md-10">
  <!-- report -->
  <div class="row">
    <h1 style="text-align:center;">Student Report</h1>
    <br><br><br>
    <div class="col-md-4">
      <h4 class="hedh4">Subject</h4>
      <br>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Religion</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Sinhala</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Maths</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Science</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> English</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> History</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Geography</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> CitizenStudy</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> ICT</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Art</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Health and Physical Education</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Tamil</h4>
      <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Technology</h4>
    </div>
    <div class="col-md-2">
        <h4 class="hedh4">1st Term</h4>
        <br>
        @foreach ($studentResults as $studentResult)
          <h4 class="hedh5">{{$studentResult->religion1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->sinhala1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->maths1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->seince1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->english1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->history1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->geography1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->citizenStudy1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->it1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->esthetics1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->health1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->tamil1stTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->practicalTechnology1stTerm}}</h4>
        @endforeach
    </div>
    <div class="col-md-2">
      <div class="col-md-9 ">
        <h4 class="hedh4">2st Term</h4>
        <br>
        @foreach ($studentResults as $studentResult)
          <h4 class="hedh5">{{$studentResult->religion2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->sinhala2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->maths2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->seince2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->english2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->history2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->geography2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->citizenStudy2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->it2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->esthetics2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->health2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->tamil2ndTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->practicalTechnology2ndTerm}}</h4>
        @endforeach
      </div>
    </div>
    <div class="col-md-2">
      <div class="col-md-9 ">
        <h4 class="hedh4">3rd Term</h4>
        <br>
        @foreach ($studentResults as $studentResult)
          <h4 class="hedh5">{{$studentResult->religion3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->sinhala3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->maths3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->seince3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->english3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->history3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->geography3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->citizenStudy3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->it3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->esthetics3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->health3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->tamil3rdTerm}}</h4>
          <h4 class="hedh5">{{$studentResult->practicalTechnology3rdTerm}}</h4>
        @endforeach
      </div>
    </div>
  </div>
  <br><br><br><br><br>

  <!-- rank and average -->
  <div class="row">
    <div class="col-md-4">
      <br><br><br>
      <h4 style="color: #001f4d; margin-left:40px;"><i class="fa fa-circle reporticon" style="font-size:8px;" ></i> Number of students in class</h4>
      <h4 style="color: #001f4d; margin-left:40px;"><i class="fa fa-circle reporticon" style="font-size:8px;"></i> Total marks in student</h4>
      <h4 style="color: #001f4d; margin-left:40px;"><i class="fa fa-circle reporticon" style="font-size:8px;"></i> Average marks in student</h4>
      <h4 style="color: #001f4d; margin-left:40px;"><i class="fa fa-circle reporticon" style="font-size:8px;"></i> Max average in class</h4>
      <br>
    </div>
    <!-- <div class="col-md-1 "></div> -->
    <div class="col-md-2">
      <h4 class="hedh4">1st Term</h4>
      <br>
      <h4 class="reporttext">{{$totelStudent}}</h4>
      @foreach ($studentResults as $studentResult)
        <h4 class="reporttext">{{$studentResult->totelMarks1stTerm}}</h4>
        <h4 class="reporttext">{{$studentResult->avg1stTerm}}</h4>
      @endforeach
      <h4 class="reporttext">{{$max1st}}</h4>
      <br>
    </div>
    <div class="col-md-2">
      <h4 class="hedh4">2nd Term</h4>
      <br>
      <h4 class="reporttext">{{$totelStudent}}</h4>
      @foreach ($studentResults as $studentResult)
        <h4 class="reporttext">{{$studentResult->totelMarks2ndTerm}}</h4>
        <h4 class="reporttext">{{$studentResult->avg2ndTerm}}</h4>
      @endforeach
      <h4 class="reporttext">{{$max2nd}}</h4>
      <br>
    </div>
    <div class="col-md-2">
      <h4 class="hedh4">3rd Term</h4>
      <br>
      <h4 class="reporttext">{{$totelStudent}}</h4>
      @foreach ($studentResults as $studentResult)
        <h4 class="reporttext">{{$studentResult->totelMarks3rdTerm}}</h4>
        <h4 class="reporttext">{{$studentResult->avg3rdTerm}}</h4>
      @endforeach
      <h4 class="reporttext">{{$max3rd}}</h4>
      <br>
    </div>
  </div>
  <br><br>
</div>


@endsection
