@extends('layout.adminmain')

@section('title')
  AL / OL Result View
@endsection

@section('body')
<div class="col-md-2"></div>
<!-- insert risult in each student -->
<!-- get student name -->
@foreach ($users as $user)
  <?php $name = $user->fname;?>
@endforeach
<div class="col-md-8">
  <!-- view o/l result -->
  <br>
  @if (isset($_POST['searchOl']))
    <div class="row">
      <h2 style="text-align:center;">{{$name}}'s O/L result</h2>
    </div>
    <br><br><br>
    <div class="col-md-3"></div>
      @foreach ($results as $result)
      <?php $index =  $result->indexNo;?>
        <div class="col-md-6">
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
              <h3 class="insertLabel" style="text-align:right;">{{$result->indexNo}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <h3 class="insertLabel">Maths </h3>
            </div>
            <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
            <div class="col-md-2">
              <h3 class="insertLabel">{{$result->maths}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <h3 class="insertLabel">Science </h3>
            </div>
            <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
            <div class="col-md-2">
              <h3 class="insertLabel">{{$result->science}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <h3 class="insertLabel">Religion </h3>
            </div>
            <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
            <div class="col-md-2">
              <h3 class="insertLabel">{{$result->religion}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <h3 class="insertLabel">Sinhala </h3>
            </div>
            <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
            <div class="col-md-2">
              <h3 class="insertLabel">{{$result->sinhala}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <h3 class="insertLabel">English </h3>
            </div>
            <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
            <div class="col-md-2">
              <h3 class="insertLabel">{{$result->english}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <h3 class="insertLabel">History </h3>
            </div>
            <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
            <div class="col-md-2">
              <h3 class="insertLabel">{{$result->history}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <h3 class="insertLabel">First group  </h3>
            </div>
            <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
            <div class="col-md-2">
              <h3 class="insertLabel">{{$result->subjectGroup1}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <h3 class="insertLabel">Second group </h3>
            </div>
            <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
            <div class="col-md-2">
              <h3 class="insertLabel">{{$result->subjectGroup2}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <h3 class="insertLabel">Third group </h3>
            </div>
            <div class="col-md-3"><h3 class="insertLabel"> - </h3></div>
            <div class="col-md-2">
              <h3 class="insertLabel">{{$result->subjectGroup3}}</h3>
            </div>
          </div>
          <br><br>
      @endforeach
      <!-- delete ol result each student -->
        <div class="row">
          <form class="" action="{{route('alOlExamResultInsert')}}" method="post">
            <input type="hidden" name="index" value="{{$index}}">
            <div>
              <button type="submit" style="float:right;width:100px;font-size:18px;" class="btn btn-danger" name="deleteOlResult">Delete</button>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
        <br><br>
      </div>
    <div class="col-md-3"></div>
  @else
  @endif
</div>
<div class="col-md-2"></div>
@endsection
