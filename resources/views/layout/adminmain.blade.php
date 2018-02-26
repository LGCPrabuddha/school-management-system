<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/dycalendar.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body class="bodybackground">
    <!-- header nav bar -->
    <nav class="navbar navbar-default headernav ">
      <div class="container-fluid">
        <div class="navbar-header">
          <a style="color:#ffffff;" class="navbar-brand" href="{{route('admlog')}}">Home</a>
          <!-- <a style="color:#ffffff; " class="navbar-brand" >Virtual Learning Environment for the WNS Students</a> -->
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a style="color:#ffffff; background: #001f4d;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">charaka<span class="caret"></span></a>
            <ul class="dropdown-menu bodybackground">
              <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
              <li><a href="{{route('signout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- header nav bar -->
    @yield('body')
  </body>
</html>
