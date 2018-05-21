@extends('layout.adminmain')

@section('title')
  Admin Allocate
@endsection

@section('body')

<div class="col-md-2"></div>
<div class="col-md-8">
  <br><br><br>
  <div class="row">
    @if(session()->has('message'))
      <div class="alert alert-danger">
        {{session()->get('message')}}
      </div>
    @endif
    <h1>Allocate Admin</h1>
    <hr>
    <div class="row">
      <input type="text" class="form-control" style="width:20%;float:left;margin-right:2em;" name="teaRegNo" value="" placeholder="Teacher Registration No">
      <input type="text" class="form-control" style="width:20%;float:left;margin-right:2em;" name="admRegNo" value="" placeholder="Admin Registration No">
      <label for="exampleInputEmail1" style="float:left;margin-right:2em;font-size:20px;">Fields</label>
      <select style="color:black;width:20%;float:left;margin-right:2em;" name="fields" class="form-control">
          <option value="Registration">Registration</option>
          <option value="Media">Media</option>
      </select>
      <button type="submit" name="submitVideos" class="btn btn-primary" style="">Submit</button>
    </div>
  </div>
</div>
<div class="col-md-2"></div>

@endsection
