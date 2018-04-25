@extends('layout.adminmain')

@section('title')
  Delete Users
@endsection

@section('body')
<div class="col-md-1"></div>
<div class="col-md-10">
  <div class="row">
    <br><br>
    <h1 class="text">Delete students and teachers data</h1>
  </div>
  <br><br><br>
  <div class="row">
    <!-- student deleted -->
    <div class="col-md-4">
      <h3 class="text">Students</h3>
      <br>
      <form class="" action="{{route('getDeleteData')}}" method="post">
        <div class="col-md-2"></div>
        <div class="col-md-5">
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Reg No" name="admNo" required>
          <input type="hidden"  name="type" value="student">
        </div>
        <div class="col-md-3">
          <button type="submit" name="submit" style="width:70px;" class="btn btn-primary" name="button">View</button>
        </div>
        {{ csrf_field() }}
      </form>
    </div>
    <!-- teacher deleted -->
    <div class="col-md-4">
      <h3 class="text">Teachers</h3>
      <br>
      <form class="" action="{{route('getDeleteData')}}" method="post">
        <div class="col-md-2"></div>
        <div class="col-md-5">
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Reg No" name="admNo" required>
          <input type="hidden"  name="type" value="teacher">
        </div>
        <div class="col-md-3">
          <button type="submit" name="submit" style="width:70px;" class="btn btn-primary" name="button">View</button>
        </div>
        {{ csrf_field() }}
      </form>
    </div>

    <div class="col-md-4">
      <h3 class="text">Admin</h3>
      <br>
      <form class="" action="{{route('getDeleteData')}}" method="post">
        <div class="col-md-2"></div>
        <div class="col-md-5">
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Reg No" name="admNo" required>
          <input type="hidden"  name="type" value="admin">
        </div>
        <div class="col-md-3">
          <button type="submit" name="submit" style="width:70px;" class="btn btn-primary">View</button>
        </div>
        {{ csrf_field() }}
      </form>
    </div>
  </div>
  <!-- if errors -->
  <br><br>
  <div class="row">
    @if( session()->has('message'))
      <div class="alert alert-danger">
        <h4>{{ session()->get('message')}}</h4>
      </div>
    @endif
  </div>

  <!-- view data -->
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      @if(isset($_POST['submit']))
        <br>
        <h2 style="text-align:center;">{{$type}} details</h2>
        <br><br>
        @if($results ->isEmpty())
        @else
          <table class="table table-bordered subjectHeadr">
            <tbody style="text-align:center;">
              <thead>
                <tr>
                  <th>Registration No</th>
                  <th>Full Name</th>
                  <th>Class</th>
                  <th>Delete</th>
                </tr>
              </thead>
                @foreach ($results as $result)
                  <tr style="text-align:center;color:black;font-size:18px;">
                    <td>{{$result->admition}}</td>
                    <td>{{$result->fname}}</td>
                    <td>{{$result->current_class}}</td>
                    <td>
                      <form action="{{route('getDeleteData')}}" method="post">
                        <input type="hidden" name="admNo" value="{{$result->admition}}">
                        <input type="hidden" name="type" value="{{$result->position}}">
                        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                        {{ csrf_field() }}
                      </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <br>
        @endif
      @endif
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<div class="col-md-1"></div>
<button type="button" name="button"></button>
@endsection
