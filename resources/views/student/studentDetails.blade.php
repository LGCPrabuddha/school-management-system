<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Student Details</title>
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

    <h2 class="pheader"> Student Detailses</h2>

  <div style="margin-top:30px;" class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 pbodycombox">
      <br><br>
        <div class="ph3">
          <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Registration Num : 1234</h3>
          <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Name with initials : L G charaka Prabuddha</h3>
          <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Initials Name : Liyana Guruge</h3>
        </div>

      <table class="ph3.1">
        <tr>
          <td class="col-lg-4"><h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Birth Day : 1994-03-12</h3></td>
          <td class="col-lg-6"><h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Religion and Racr : Budisam and Sinhalis</h3> </td>
        </tr>
      </table>
      <div class="ph3">
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Private address : Koratuwe gedara, Waliamuna, Walasmulla. </h3>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Date of entry : 2015-01-01</h3>
      </div>

      <div class="ph3">
      <br>
      <h2>Father's Detailses</h2>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Father's name : L G Gamini</h3>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Father's Job : Farmer</h3>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> work places : ---</h3>
      </div>
        <table class="ph3.1">
        <tr>
          <td class="col-lg-4"><h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Hand Phone : 0716131767</h3></td>
          <td class="col-lg-6"><h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Land Phone : 0112254761</h3> </td>
        </tr>
      </table>

      <div class="ph3">
      <br>
      <h2>Monther's Detailses</h2>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Monther's name : P P G Ramani</h3>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Monther's Job : Housewife</h3>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> work places : ---</h3>
      </div>
        <table class="ph3.1">
        <tr>
          <td class="col-lg-4"><h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Hand Phone : 0716131767</h3></td>
          <td class="col-lg-6"><h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Land Phone : 0112254761</h3> </td>
        </tr>
      </table>
      <br>

      <div class="ph3">
      <br>
      <h2>Guardian's Detailses</h2>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Guardian's name : ---</h3>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Guardian's Job : ---</h3>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> work places : ---</h3>
      </div>
        <table class="ph3.1">
        <tr>
          <td class="col-lg-4"><h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Hand Phone : ---</h3></td>
          <td class="col-lg-6"><h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Land Phone : ---</h3> </td>
        </tr>
      </table>

      <div class="ph3">
      <br>
      <h2>Emergency Notices</h2>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Name : L G Gamini</h3>
        <h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Address : Koratuwe gedara, Waliamuna, Walasmulla. </h3>
      </div>
      <table class="ph3.1">
        <tr>
          <td class="col-lg-4"><h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Hand Phone : 0716131767</h3></td>
          <td class="col-lg-6"><h3><i style="font-size:13px;" class="fa fa-circle" aria-hidden="true"></i> Land Phone : 0112254761</h3> </td>
        </tr>
      </table>

      <br>
    </div>
    <div class="col-md-2"></div>
  </div>
 <br>

  </body>
</html>
