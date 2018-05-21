<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Change Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/dycalendar.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  </head>
  <body class="bodybackground">
    <!-- header nav bar -->
    <nav class="navbar navbar-default headernav ">
      <div class="container-fluid">
        <div class="navbar-header">
          <a style="color:#ffffff;" class="navbar-brand" href="{{route('stdlog')}}">Home</a>
          <!-- <a style="color:#ffffff; " class="navbar-brand" >Virtual Learning Environment for the WNS Students</a> -->
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <?php $users = Session()->get('user'); ?>
            <a style="color:#ffffff; background: #001f4d;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{$users->fname}}<span class="caret"></span></a>
            <ul class="dropdown-menu bodybackground">
              <li><a href="{{route('signout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- header nav bar -->

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <br><br>
        @if(session()->has('message'))
          <div class="alert alert-danger">
            {{session()->get('message')}}
          </div>
        @endif
        <br><br>
        <h2 style="text-align: center;">Change Password</h2>
        <br><br>
        <form class="" action="{{route('passwordChange')}}" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-4">
              <label style="float:right;">Current Password</label>
            </div>
            <div class="col-md-8">
              <input class="form-control" style="width:50%;" type="password" name="cPassword" value="" placeholder="Current Password">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
              <label style="float:right;">New Password</label>
            </div>
            <div class="col-md-8">
              <input class="form-control" style="width:50%;" type="password" name="nPassword" value="" placeholder="New Password">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
              <label style="float:right;">Conform Password</label>
            </div>
            <div class="col-md-8">
              <input class="form-control" style="width:50%;" type="password" name="ncPassword" value="" placeholder="Conform Password">
            </div>
          </div>
          <br>
          <button type="submit" name="submitVideos" class="btn btn-primary" style="float:right;margin-right:22em;">Update</button>
          {{ csrf_field() }}
        </form>
      </div>
      <div class="col-md-2"></div>
    </div>

  </body>
</html>
