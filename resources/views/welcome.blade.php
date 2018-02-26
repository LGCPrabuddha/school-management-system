@extends('layout.main')

@section('title')
  welcome page
@endsection

@section('body')

<!-- header nav bar -->
<nav class="navbar navbar-default headernav ">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a style="color:#ffffff;" class="navbar-brand">Home</a> -->
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <li><a href="{{route('logpage')}}" style="color:#ffffff;"><i class="fa fa-user" style="margin-right:10px; color:#ffffff;" aria-hidden="true"></i> Login</a></li>
      </li>
    </ul>
  </div>
</nav>
<!-- header nav bar -->
<div class="">
  <a href="#">Registration</a>
</div>






@endsection
