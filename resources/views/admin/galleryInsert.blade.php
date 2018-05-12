@extends('layout.adminmain')

@section('title')
  Gallery
@endsection

@section('body')

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-6">
    <div class="content">
      <br><br>
      <h3>Images upload to gallery</h3>
      <br>
      <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-1">
            <h4>Title</h4>
          </div>
          <div class="col-md-8">
            <input id="exampleInputEmail1" type="text" class="form-control" name="title" required>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <label>Select image to upload:</label>
          </div>
          <div class="col-md-4">
            <input type="file" name="file[]" id="file" multiple>
          </div>
          <div class="col-md-2">
            <button type="submit" name="submitImages" class="btn btn-primary" style="">Upload</button>
          </div>
        </div>
        {{ csrf_field() }}
      </form>
    </div>
    <div class="content">
      <br><br>
      <h3>Video upload to gallery</h3>
      <br>
      <form class="" action="{{route('upload')}}" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-1">
            <h4>Title</h4>
          </div>
          <div class="col-md-8">
            <input id="exampleInputEmail1" type="text" class="form-control" name="title" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <h4>Video link</h4>
          </div>
          <div class="col-md-7">
            <input id="exampleInputEmail1" type="text" class="form-control" name="videoLink">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-2">
            <button type="submit" name="submitVideos" class="btn btn-primary" style="">Upload</button>
          </div>
        </div>
        {{ csrf_field() }}
      </form>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>

@endsection
