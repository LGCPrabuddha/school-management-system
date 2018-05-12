@extends('layout.adminmain')

@section('title')
  AL / OL Analysis
@endsection

@section('body')

<div class="col-md-1"></div>
<div class="col-md-10">
  @if( session()->has('message'))
    <div class="alert alert-danger">
      {{ session()->get('message')}}
    </div>
  @endif
  <br><br>
  <div class="col-md-6">
    <h2 style="text-align:center;">O/L Result</h2>
    <br>
    <div class="row">
      <form class="" action="{{route('OlAlAnalysisAdd')}}" method="post">
        <div class="col-md-5">
          <h3>Analysis o/l result</h3>
        </div>
        <div class="col-md-2">
          <br>
          <button type="submit" class="btn btn-primary" style=" width:100px;font-size:16px;" name="analysisOL">Submit</button>
        </div>
        {{ csrf_field() }}
      </form>
      <br><br><br><br>
    </div>
    <div class="row" style="background:#001f4d; height: 1px;"></div>
    <div class="row">
      <form class="" action="{{route('OlAlAnalysisAdd')}}" method="post">
        <br><br>
        <div class="col-md-4">
          <h3>Update result</h3>
        </div>
        <div class="col-md-3">
          <br>
          <select style="color:black; font-size:16px; width:100px;" name="year" class="form-control">
              <option style="font-size:16px;color:#001f4d;" value="{{$year-1}}" >{{$year-1}}</option>
              <option style="font-size:16px;color:#001f4d;" value="{{$year-2}}" >{{$year-2}}</option>
              <option style="font-size:16px;color:#001f4d;" value="{{$year-3}}" >{{$year-3}}</option>
          </select>
        </div>
        <div class="col-md-2">
          <br>
          <button type="submit" class="btn btn-primary" style=" width:100px;font-size:16px;" name="updateAnalysisOL">Search</button>
        </div>
        {{ csrf_field() }}
      </form>
    </div>
  </div>
  <div class="col-md-6">
    <h2 style="text-align:center;">A/L Result</h2>
    <br>
    <div class="row">
      <form class="" action="" method="post">
        <div class="col-md-5">
          <h3>Analysis a/l result</h3>
        </div>
        <div class="col-md-2">
          <br>
          <button type="submit" class="btn btn-primary" style=" width:100px;font-size:16px;" name="analysisAL">Submit</button>
        </div>
      </form>
      <br><br><br><br>
    </div>
    <div class="row" style="background:#001f4d; height: 1px;"></div>
    <div class="row">
      <br><br>
      <div class="col-md-4">
        <h3>Update result</h3>
      </div>
      <div class="col-md-3">
        <br>
        <select style="color:black; font-size:16px; width:100px;" name="year" class="form-control">
            <option style="font-size:16px;color:#001f4d;" value="{{$year-1}}" >{{$year-1}}</option>
            <option style="font-size:16px;color:#001f4d;" value="{{$year-2}}" >{{$year-2}}</option>
            <option style="font-size:16px;color:#001f4d;" value="{{$year-3}}" >{{$year-3}}</option>
        </select>
      </div>
      <div class="col-md-2">
        <br>
        <button type="submit" class="btn btn-primary" style=" width:100px;font-size:16px;" name="updateOL">Search</button>
      </div>
    </div>
  </div>
</div>
<div class="col-md-1"></div>

@endsection
