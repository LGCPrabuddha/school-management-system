@extends('layout.teacher')

@section('title')
  Home page
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
                  <li style="margin-top:10px;" class="iconfont">
                      <a href=""> <i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;"> A/L Results</span> </a>
                  </li>
                  <li class="iconfont">
                      <a href="#"> <i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;"> O/L Results</span> </a>
                  </li>
                  <li class="iconfont">
                      <a href="#"> <i class="fa fa-graduation-cap" aria-hidden="true"> </i> <span style="margin-left:10px;"> Student Results</span> </a>
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


<!-- page content -->
<!-- cover photo -->
<div  class="col-md-8">
  <!-- <div class="img">
  <img src="images/wns2.jpg" class="img-rounded" alt="Smiley face" height="250" width="850">
  </div> -->
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
    @foreach ($datas as $data)
      <div class="bodycombox" style="padding:10px;">
        {!!$data->detail!!}
        <hr>
      </div>
    @endforeach
  </div>
  <br>
<!-- Time table end -->
<br>
</div>

<!-- page content -->


  <div class="col-md-2">
  <!-- calender -->
    <div class="some-class">
        <div class="calendar-container">
            <div style="background: #001f4d;" class="dycalendar-month dycalendar-container round-edge skin-black gradient"></div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/dycalendar-jquery.min.js"></script>
    <script src="js/default.js"></script>
  <!-- calender -->
  <br>

  <!-- side link -->
  <div class="rightlink">
    <ul>
      <br>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Religion</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Sinhala</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Maths</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Seince</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">English</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">History</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Geography</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Citizen Study</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">ICT</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Esthetics</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Health</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Tamil</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Technology</a></li>
    </ul>
  </div>
  <!-- side link close-->
</div>




<!-- script open -->


<!-- script Clouse -->
@endsection
