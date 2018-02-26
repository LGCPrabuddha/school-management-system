@extends('layout.usermain')

@section('title')
  Sudent Home Page
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
                      <a href="#"><i class="fa fa-home " aria-hidden="true"> </i> <span style="margin-left:10px;">Home</span>  </a>
                  </li>
                  <li class="iconfont">
                      <a href=""> <i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;"> A/L Results</span> </a>
                  </li>
                  <li class="iconfont">
                      <a href="#"> <i class="fa fa-list-alt " aria-hidden="true"> </i> <span style="margin-left:10px;"> O/L Results</span> </a>
                  </li>
                  <li class="iconfont">
                      <a href=""> <i class="fa fa-graduation-cap" aria-hidden="true"> </i> <span style="margin-left:10px;"> Student Results</span> </a>
                  </li>
                  <li class="iconfont">
                      <a href="#"><i class="fa fa-file-text-o " aria-hidden="true"> </i> <span style="margin-left:10px;">Section Results</span> </a>
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
  <div class="bodybaner">
    <br><br><br><br><br><br><br><br><br>
    <h3>Walasmulla National School</h3>
    <h3>Welcome to the Virtual Learning Environment for the WNS Students</h3>
    <h3 style="font-size:16px;">WNS සිසුන් සඳහා වූ අතථ්‍ය ඉගෙනුම් පරිස්ථිතියට ඔබව සාදරයෙන් පිළිගනිමු... !</h3>

  </div>
<!-- cover photo end -->

<!-- Time table -->
  <div>
    <br>
    <ul class="timelink">
      <li><i style="padding: 3px;" class="fa fa-table" aria-hidden="true"></i><a href="#" class="time">  Academic Time Table</a></li>
      <li><i style="padding: 3px;" class="fa fa-table" aria-hidden="true"></i><a href="#" class="time">  Exam Time Table</a></li>
    </ul>
  </div>
<!-- Time table end -->

<!-- news box -->
  <div class="bodycombox">
    <h2>Sample header 1</h2>
    <p>
    For example, if you are designing a brand new website for someone, most times you will have to make sure the prototype looks finished by inserting text or photos or what have you. The purpose of this is so the person viewing the prototype has a chance to actually feel and understand the idea behind what you have created.
    </p>
  </div>
  <div class="bodycombox">
    <h2>Sample header 2</h2>
    <p>
    For example, if you are designing a brand new website for someone, most times you will have to make sure the prototype looks finished by inserting text or photos or what have you. The purpose of this is so the person viewing the prototype has a chance to actually feel and understand the idea behind what you have created.
    </p>
  </div>
<!-- news box end -->
<br>
</div>

<!-- page content -->


  <div style="float: right;" class="col-md-2">
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
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 1</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 2</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 3</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 4</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 5</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 6</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 7</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 8</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 9</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 10</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 11</a></li>
      <li style="list-style: none; margin-top: 5px;" ><i style="margin-left:30px;" class="fa fa-book"></i><a href="#" class="rightlinkcss" role="button">Subject 12</a></li>
    </ul>
  </div>
  <!-- side link close-->
</div>




<!-- script open -->


<!-- script Clouse -->
@endsection
