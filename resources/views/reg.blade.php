@extends('layout.main')

@section('title')
  welcome page
@endsection

@section('body')
<h2>Registation</h2>
    <form class="form-horizontal" method="post" action="">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="reg" name="regnum">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
        <div class="col-sm-10">
          <input type="texe" class="form-control" id="inputEmail3" placeholder="First Name" name="fname">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">poshition</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="poshition" name="poshition">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Sign up</button>
        </div>
        {{ csrf_field() }}
      </div>
    </form>
  </div>

@endsection
