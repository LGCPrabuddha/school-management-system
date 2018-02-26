@extends('layout.main')

@section('title')
  login page
@endsection

@section('body')
<br><br>
<br><br>
    <div class="col-md-3"></div>
    <div class="col-md-6 bodycombox" style="height: 500px;">
      @if(count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      @if( session()->has('message'))
        <div class="alert alert-danger">
          {{ session()->get('message')}}
        </div>
      @endif
      <h2 class="text">Login User</h2>
      <br>
      <div class="col-md-4"></div>
      <div class="col-md-6">
        <img src="{{asset('image/login.png')}}" style="height: 200px; width:200px;">
      </div>
      <!-- login form -->
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <br><br>
        <form class="" action="{{route('login')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <input class="form-control" style="height:40px;" type="text" name="admition" value="" placeholder="Registration Number">
          </div>
          <div class="form-group">
            <input class="form-control" style="height:40px;" type="password" name="password" value="" placeholder="Password">
          </div>
          <div class="form-group text">
            <button class="btn btn-primary" style="height: 35px; width:80px; font-size:16px;" type="submit">Login</button>
          </div>
        </form>
        <br>
      </div>

    </div>
    <div class="col-md-3"></div>
@endsection
