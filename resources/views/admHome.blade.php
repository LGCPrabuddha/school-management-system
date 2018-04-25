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
                        <a href="{{route('deletePage')}}"><i style="margin-right: 20px;" class="fa fa-pencil-square-o"></i>Delete </a>
                      </li>
                    </ul>
                  </li>
                  <li style="margin-top:10px;" class="iconfont dropbefor">
                    <a href="#"> <i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;"> Exam</span> </a>
                    <ul>
                      <li class="sideDrop dropafter linkdrop">
                        <a href="{{route('allExam')}}"><i style="margin-right: 10px;" class="fa fa-graduation-cap"></i> All Exams</a>
                        <a href="{{route('alOlExam')}}"><i style="margin-right: 10px;" class="fa fa-graduation-cap"></i> AL / OL Exams</a>
                        <a href="{{route('viewOlAlAnalysis')}}"><i style="margin-right: 10px;" class="fa fa-link"></i> AL / OL Analysis</a>
                      </li>
                    </ul>
                  </li>
                  <li class="iconfont dropbefor">
                    <a href="#"> <i class="fa fa-video-camera " aria-hidden="true"> </i> <span style="margin-left:10px;"> Media</span> </a>
                    <ul>
                      <li class="sideDrop dropafter linkdrop">
                        <a href="{{route('newsPageView')}}"><i style="margin-right: 10px;" class="fa fa-align-left"></i> Notice</a>
                        <a href="{{route('smsPage')}}"><i style="margin-right: 10px;" class="fa fa-envelope"></i> massages</a>

                      </li>
                    </ul>
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
  <!-- sidebar close -->
      </div>
    </div>
  </div>
</div>
<!-- side bar end -->

<!-- body -->
<div class="col-md-8">

  <div class="bodybaner row">
    <br><br>
    <div class="">
      <img src="{{asset('image/logo.png')}}" style="height: 165px; width:220px;">
    </div>
    <br>
    <h3>Walasmulla National School</h3>
    <h3>Welcome to the Virtual Learning Environment for the WNS Students</h3>
    <h3 style="font-size:16px;">වලස්මුල්ල ජාතික පසලේහි සිසුන් සඳහා වූ අතථ්‍ය ඉගෙනුම් පරිස්ථිතියට ඔබව සාදරයෙන් පිළිගනිමු... !</h3>
  </div>
<!-- cover photo end -->
<!-- Time table -->
  <div class="row">
    <br>
    <ul class="timelink">
      <li><i style="padding: 3px;" class="fa fa-table" aria-hidden="true"></i><a href="#" class="time">  Academic Time Table</a></li>
      <li><i style="padding: 3px;" class="fa fa-table" aria-hidden="true"></i><a href="#" class="time">  Exam Time Table</a></li>
    </ul>
  </div>
<!-- Time table end -->
<br>
  @if( session()->has('message'))
    <div class="alert alert-danger">
      <h4>{{ session()->get('message')}}</h4>
    </div>
  @endif
<!-- news box -->
<div class="row">
  @foreach ($datas as $data)
    <div class="bodycombox" style="padding:10px;">
      {!!$data->detail!!}
      <hr>
      <a href="{{route('updateNoticeView',array($data->id))}}" style="width:80px;" class="btn btn-primary">Edit</a>
      <a href="{{route('noticeDelete',array($data->id))}}" style="width:80px;" class="btn btn-danger pull-right">Delete</a>
    </div>
  @endforeach
</div>
<br>
</div>

<div class="col-md-2">

</div>

<!-- script open -->
        <script>
          $("#menu-toggle").click(function(e) {
              e.preventDefault();
              $("#wrapper").toggleClass("toggled");
          });
        </script>

<!-- script close -->

@endsection
