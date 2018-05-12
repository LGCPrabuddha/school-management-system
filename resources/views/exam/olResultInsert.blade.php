@extends('layout.adminmain')

@section('title')
  AL / OL Result Insert
@endsection

@section('body')
  <div class="col-md-2"></div>
  <!-- insert risult in each student -->
  <!-- get student name -->
  @foreach ($results as $result)
    <?php $name = $result->fname; $regNo = $result->admition;?>
  @endforeach
  <div class="col-md-8">
    <!-- insert o/l result -->
    <br>
    @if (isset($_POST['olIn']))
      <div class="row">
        <h2 style="text-align:center;">Insert {{$name}}'s O/L result</h2>
      </div>
      <br><br><br>
      <div class="col-md-3"></div>
        <div class="col-md-6">
          <form class="" action="{{route('alOlExamResultInsert')}}" method="post">
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Index No </h3>
              </div>
              <div class="col-md-1"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-4">
                <h3 class="insertLabel" style="text-align:right;">{{$index}}</h3>
                <!-- get student inxex and Registration number -->
                <input type="hidden" name="index" value="{{$index}}">
                <input type="hidden" name="regNo" value="{{$regNo}}">
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Maths </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__" name="maths" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Science </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__" name="science" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Religion </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__" name="religion" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Sinhala </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__" name="sinhala" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">English </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__" name="english" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">History </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__" name="history" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">First group  </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__" name="subgGroup1" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Second group </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__" name="subgGroup2" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Third group </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__" name="subgGroup3" required>
              </div>
            </div>
            <div class="row">
              <br><br>
              <div class="col-md-3" style="float:right;">
                <button type="submit" class="btn btn-primary" style="width:100px;font-size:18px;" name="buttonOlResult">Submit</button>
              </div>
            </div>
            <br><br>
            {{ csrf_field() }}
          </form>
        </div>
      <div class="col-md-3"></div>
    @else
    @endif
  </div>
  <div class="col-md-2"></div>
@endsection
