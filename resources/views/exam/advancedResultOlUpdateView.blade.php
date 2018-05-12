@extends('layout.adminmain')

@section('title')
  AL / OL Result Update
@endsection

@section('body')
<div class="col-md-2"></div>
<!-- insert risult in each student -->
<!-- get student name -->
@foreach ($users as $user)
  <?php $name = $user->fname; $regNo = $user->admition;?>
@endforeach
<div class="col-md-8">
  <!-- insert o/l result -->
  <br>
  @if (isset($_POST['updateOlView']))
    <div class="row">
      <h2 style="text-align:center;">Update {{$name}}'s O/L result</h2>
    </div>
    <br><br><br>
    <div class="col-md-3"></div>
      <div class="col-md-6">
        <form class="" action="{{route('alOlExamResultInsert')}}" method="post">
          <!-- set data for update -->
          @foreach ($results as $result)
          <div class="row">
            <div class="col-md-7">
              <h3 class="insertLabel">Registration No </h3>
            </div>
            <div class="col-md-1"><h3 class="insertLabel"> - </h3></div>
            <div class="col-md-4">
              <h3 class="insertLabel" style="text-align:right;">{{$result->admNo}}</h3>
            </div>
          </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Index No </h3>
              </div>
              <div class="col-md-1"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-4">
                <br>
                <input type="text" style="font-size:18px;text-align:right;" class="form-control" id="exampleInputEmail1" placeholder="Index No"
                name="index" value="{{$result->indexNo}}" required>
                <!-- get student inxex and Registration number -->
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
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__"
                name="maths" value="{{$result->maths}}" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Science </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__"
                name="science" value="{{$result->science}}" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Religion </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__"
                 name="religion" value="{{$result->religion}}" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Sinhala </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__"
                name="sinhala" value="{{$result->sinhala}}" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">English </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__"
                name="english" value="{{$result->english}}" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">History </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__"
                name="history" value="{{$result->history}}" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">First group  </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__"
                name="subgGroup1" value="{{$result->subjectGroup1}}" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Second group </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__"
                name="subgGroup2" value="{{$result->subjectGroup2}}" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <h3 class="insertLabel">Third group </h3>
              </div>
              <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
              <div class="col-md-2">
                <br>
                <input type="text" style="font-size:18px;" class="form-control" id="exampleInputEmail1" placeholder="__"
                name="subgGroup3" value="{{$result->subjectGroup3}}" required>
              </div>
            </div>
          @endforeach
          <div class="row">
            <br><br>
            <div class="col-md-3" style="float:right;">
              <button type="submit" class="btn btn-primary" style="width:100px;font-size:18px;" name="updateOlResult">Update</button>
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
