@extends('layout.adminmain')

@section('title')
  AL / OL Result
@endsection

@section('body')
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <br><br>
    <div class="row">
      @if( session()->has('message'))
        <div class="alert alert-danger col-md-6">
          <h4>{{ session()->get('message')}}</h4>
        </div>
      @endif
    </div>

    <div class="row">
      <!-- o/l result  -->
      <div class="col-md-6">
        <h2 style="text-align:center;">O/L Result</h2>
        <br>
        <!-- insert result -->
        <div class="row">
          <h3 style="">Insert Result</h3>
          <br>
          <form class="" action="{{route('alOlExamResultInsert')}}" method="post">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Index No" style="font-size:16px;" name="index" required>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" placeholder="Registration No" style="font-size:16px;" name="reg" required>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" style="width:100px;font-size:18px;" name="olIn">Submit</button>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
        <br><br>
        <div class="row" style="background:#001f4d; height: 1px;"></div>
        <!-- update result -->
        <br><br>
        <div class="row">
          <h3 style="">Update Result</h3>
          <br>
          <form class="" action="{{route('alOlExamResultInsert')}}" method="post">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Index No" style="font-size:16px;" name="index" required>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" style="width:100px;font-size:18px;" name="updateOlView">Submit</button>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
        <br><br>
        <div class="row" style="background:#001f4d; height: 1px;"></div>

        <!-- view result -->
        <br><br>
        <div class="row">
          <h3 style="">Search Result</h3>
          <br>
          <form class="" action="{{route('alOlExamResultInsert')}}" method="post">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Index No" style="font-size:16px;" name="index" required>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" style="width:100px;font-size:18px;" name="searchOl">Search</button>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
        <br><br>
      </div>

      <!-- a/l result -->
      <div class="col-md-6">
        <h2 style="text-align:center;">A/L Result</h2>
        <br>
        <!-- insert Result -->
        <div class="row">
          <h3 style="">Insert Result</h3>
          <br>
          <form class="" action="" method="post">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Index No" style="font-size:16px;" name="index" required>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" placeholder="Registration No" style="font-size:16px;" name="reg" required>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" style="width:100px;font-size:18px;" name="alIn">Submit</button>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
        <br><br>
        <div class="row" style="background:#001f4d; height: 1px;"></div>
        <!-- update result -->
        <br><br>
        <div class="row">
          <h3 style="">Update Result</h3>
          <br>
          <form class="" action="" method="post">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Index No" style="font-size:16px;" name="index" required>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" style="width:100px;font-size:18px;" name="button">Submit</button>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
        <br><br>
        <div class="row" style="background:#001f4d; height: 1px;"></div>

        <!-- view result -->
        <br><br>
        <div class="row">
          <h3 style="">Search Result</h3>
          <br>
          <form class="" action="" method="post">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Index No" style="font-size:16px;" name="index" required>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" style="width:100px;font-size:18px;" name="button">Search</button>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
        <br><br>
      </div>

    </div>

  </div>
  <div class="col-md-1"></div>
@endsection
