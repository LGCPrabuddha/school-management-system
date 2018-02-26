@extends('layout.usermain')

@section('title')
  Admin Home
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
                          <a href="#menu-toggle"  id="menu-toggle" style="margin-top:20px;float:right;">
                            <i class=" icon fa fa-bars" style="font-size:35px !Important;" aria-hidden="true" aria-hidden="true"></i>
                          </a>

                  </li>
                  <li style="margin-top:10px;" class="iconfont dropbefor">
                      <a href="#"><i class="fa fa-list " aria-hidden="true"> </i> <span style="margin-left:10px;"> Registration</span>  </a>
                        <ul>
                          <li class="sideDrop dropafter linkdrop">
                            <a href="{{route('stdReg')}}"><i style="margin-right: 10px;" class="fa fa-graduation-cap"></i> Student</a>
                            <a href="{{route('teaReg')}}"><i style="margin-right: 20px;" class="fa fa-user"></i>Teacher</a>
                            <a href="#"><i style="margin-right: 20px;" class="fa fa-user-secret"></i>Admin</a>
                            <a href="{{route('showUser')}}"><i style="margin-right: 20px;" class="fa fa-search"></i>Search</a>
                            <a href="{{route('upUserShow')}}"><i style="margin-right: 20px;" class="fa fa-pencil-square-o"></i>Update </a>
                          </li>
                        </ul>
                  </li>
                  <li style="margin-top:10px;" class="iconfont dropbefor">
                      <a href="#"> <i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;"> Exam</span> </a>
                        <ul>
                          <li class="sideDrop dropafter linkdrop">
                            <a href="{{route('allExam')}}"><i style="margin-right: 10px;" class="fa fa-graduation-cap"></i> All Exams</a>
                          </li>
                        </ul>
                  </li>
                  <li class="iconfont">
                      <a href="#"> <i class="fa fa-video-camera " aria-hidden="true"> </i> <span style="margin-left:10px;"> Media</span> </a>
                  </li>
                  <li class="iconfont dropbefor">
                      <a href="#"><i class="fa fa-file-text-o " aria-hidden="true"> </i> <span style="margin-left:10px;">Non Academic</span> </a>
                      <ul>
                        <li class="sideDrop dropafter linkdrop">
                          <a href="{{route('studentAllocate')}}"><i style="margin-right: 10px;" class="fa fa-graduation-cap"></i> Student</a>
                          <a href="{{route('teacherAllocate')}}"><i style="margin-right: 20px;" class="fa fa-user"></i>Teacher</a>
                          <a href="{{route('viewGrade10Subjectselection')}}"><i style="margin-right: 20px;" class="fa fa-file"></i>Subject select</a>
                        </li>
                      </ul>
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
<!-- side bar end -->


@endsection
