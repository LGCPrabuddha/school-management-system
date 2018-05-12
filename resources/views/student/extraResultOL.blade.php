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


<div class="col-md-10">
  <!-- view old O/L result -->
  <h2 style="text-align:center;">Search O/L results</h2>
  <br>
  <!-- old risult -->
  <div class="row">
    <h3>Old result</h3>
    <form method="post" action="{{route('viewGetExtraRisultOL')}}">
      <div class="col-md-2">
        <h3>Select year :-</h3>
      </div>
      <div class="col-md-2">
        <br>
        <select style="color:black;" name="year" class="form-control" style="font-size:18px;">
          @foreach ($years as $year)
            <option style="font-size:18px;color:#001f4d;" value="{{$year}}" >{{$year}}</option>
          @endforeach
        </select>
      </div>
      {{ csrf_field() }}
      <div class="col-md-6">
        <br>
         <button type="submit" name="oldResult" class="btn btn-primary" style="width:80px;">Search</button>
      </div>
    </form>
  </div>
  <br>
  <div class="col-md-10 row" style="background:#001f4d; height: 1px;"></div>
  <!-- subject Group result -->
  <div class="row">
    <h3>Subject group result</h3>
    <form method="post" action="{{route('viewGetGroupRisultOL')}}">
      <div class="col-md-2">
        <h3>Select year :-</h3>
      </div>
      <div class="col-md-2">
        <br>
        <select style="color:black;" name="year" class="form-control" style="font-size:18px;">
          @foreach ($years as $year)
            <option style="font-size:18px;color:#001f4d;" value="{{$year+1}}" >{{$year+1}}</option>
          @endforeach
        </select>
      </div>
      {{ csrf_field() }}
      <div class="col-md-6">
        <br>
         <button type="submit" name="oldResult" class="btn btn-primary" style="width:80px;">Search</button>
      </div>
    </form>
  </div>

</div>

@endsection
