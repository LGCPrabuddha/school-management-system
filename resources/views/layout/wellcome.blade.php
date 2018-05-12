<!DOCTYPE html>
<html lang="en">
  <head>
    <title>welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/dycalendar.min.css')}}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
  </head>
  <body class="bodybackground">
    <!-- header nav bar -->
    <nav class="navbar navbar-default headernav ">
      <div class="container-fluid">
        <div class="navbar-header">
          <!-- <a style="color:#ffffff;" class="navbar-brand">Home</a> -->
        </div>
        <ul class="nav navbar-nav">
          <li>
            <li><a style="color:#ffffff;font-size:17px;" href="{{route('/')}}">Home</a></li>
            <li class="dropdown">
              <a style="color:#ffffff;font-size:17px;background: #001f4d;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Gallery<span class="caret"></span></a>
              <ul class="dropdown-menu bodybackground">
                <li><a href="{{route('wellcomeVideoGallery')}}">Videos</a></li>
                <li><a href="{{route('wellcomeGalary')}}"></i> Images</a></li>
              </ul>
            </li>
            <li><a style="color:#ffffff;font-size:17px;" href="#">History</a></li>
            <li><a style="color:#ffffff;font-size:17px;" href="{{route('wellcomeContact')}}">Contact</a></li>
          </li>
        </ul>
        <ul style="float:right;" class="nav navbar-nav">
          <li>
            <li><a href="{{route('logpage')}}" style="color:#ffffff;"><i class="fa fa-user" style="margin-right:10px; color:#ffffff;" aria-hidden="true"></i> Login</a></li>
          </li>
        </ul>
      </div>
    </nav>
    <!-- header nav bar -->
    @yield('body')
  </body>
</html>
