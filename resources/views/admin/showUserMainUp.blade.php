@extends('layout.adminmain')

@section('title')
  User Update Details
@endsection

@section('body')
<div>
  <div class="col-md-1"></div>
    <!-- search box -->
  <div class="col-md-10 ">
    <br><br>
    <form role="search" method="post" action="{{route('updateUserDitels')}}">
      <div class="row" style="color:#001f4d;">
        <div class="col-md-1"></div>
        <h1 style="text-align: center;">Update Data</h1>
        @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <br><br><br>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" placeholder="Registration No"
           style="font-size:16px;color:#001f4d;" name="id" required>
        </div>
        <div class="col-md-2">
            <select style="color:black;" name="poshition" class="form-control" style="font-size:16px;">
                <option style="font-size:16px;color:#001f4d;" value="Student" >Student</option>
                <option style="font-size:16px;color:#001f4d;" value="Teachre" >Teacher</option>
                <option style="font-size:16px;color:#001f4d;" value="Admin" >Admin</option>
            </select>
        </div>
        <div class="col-md-5" style="font-size:18px;">
          <div class="col-md-3 col-xs-3">
              <label class="radio-inline">
                  <input type="radio" name="Detail" id="inlineRadio2" value="Personal"> Personal
              </label>
          </div>
          <div class="col-md-3 col-xs-3">
              <label class="radio-inline">
                  <input type="radio" name="Detail" id="inlineRadio3" value="Parents"> Parents
              </label>
          </div>
          <div class="col-md-3 col-xs-3">
              <label class="radio-inline">
                  <input type="radio" name="Detail" id="inlineRadio3" value="Guardian"> Guardian
              </label>
          </div>
          <div class="col-md-3 col-xs-3">
              <label class="radio-inline">
                  <input type="radio" name="Detail" id="inlineRadio3" value="Emergencie"> Emergencies
              </label>
          </div>
        </div>
        <div class="col-md-2">
            <button type="submit" name="submit" class="btn btn-primary" style="width:100px; margin-left:10px;">Search</button>
        </div>
        {{ csrf_field() }}
      </div>
    </form>
  </div>
  <!-- search box end-->
  <div class="col-md-1"></div>
</div>

<div class="">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">@yield('showUser')<br><br></div>
    <div class="col-md-2"></div>
  </div>
</div>




@endsection
