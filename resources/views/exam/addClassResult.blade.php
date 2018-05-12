@extends('layout.adminmain')

@section('title')
  Class Result
@endsection

@section('body')
  <div class="row">
    <div class="col-md-1"></div>
    <div class="container col-md-10">
      <br><br><br>
      <form class="" action="{{route('insertStudntResult')}}" method="post">
        <div class="row">
          <div class="" style="text-align: center;">
            <label><h2>Insert {{$grade}} class result in {{$term}}</h2></label>
          </div>
          <br>
      </div>
      <br>
      <div class="row" style="background:#001f4d; height: 1px;"></div>
      <br><br>
      @if($grade == 10 || $grade == 11)
      <table class="table subjectHeadr">
        <thead>
          <tr>
            <th>Name</th>
            <th>Religion</th>
            <th>Sinhala</th>
            <th>Maths</th>
            <th>Seince</th>
            <th>English</th>
            <th>History</th>
            <th>Group 1</th>
            <th>Group 2</th>
            <th>Group 3</th>
          </tr>
        </thead>
        <tbody>
          <input type="hidden" name="class" value="{{$grade}}">
          <input type="hidden" name="term" value="{{$term}}">
          @foreach ($results as $result)
            <input class="form-control" style="font-size:16px;color:#001f4d;"  type="hidden" name="StudentId" value="{{$result->admition}}">
            <tr>
              <td><label for="">{{$result->fname}}</label></td>
              <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="religion{{$result->admition}}" ></td>
              <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="sinhala{{$result->admition}}" ></td>
              <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="maths{{$result->admition}}" ></td>
              <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="seince{{$result->admition}}" ></td>
              <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="english{{$result->admition}}" ></td>
              <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="history{{$result->admition}}" ></td>
              <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="group1_{{$result->admition}}" ></td>
              <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="group2_{{$result->admition}}" ></td>
              <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="group3_{{$result->admition}}" ></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      @else
        <table class="table subjectHeadr">
          <thead>
            <tr>
              <th>Name</th>
              <th>Religion</th>
              <th>Sinhala</th>
              <th>Maths</th>
              <th>Seince</th>
              <th>English</th>
              <th>History</th>
              <th>Geography</th>
              <th>CitizenStudy</th>
              <th>It</th>
              <th>Esthetics</th>
              <th>Health</th>
              <th>Tamil</th>
              <th>Technology</th>
            </tr>
          </thead>
          <tbody>
            <input type="hidden" name="class" value="{{$grade}}">
            <input type="hidden" name="term" value="{{$term}}">
            @foreach ($results as $result)
              <input class="form-control" style="font-size:16px;color:#001f4d;"  type="hidden" name="StudentId" value="{{$result->admition}}">
              <tr>
                <td><label for="">{{$result->fname}}</label></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="religion{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="sinhala{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="maths{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="seince{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="english{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="history{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="geography{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="citizenStudy{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="it{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="esthetics{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="health{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="tamil{{$result->admition}}" ></td>
                <td><input class="form-control" style="font-size:16px;color:#001f4d;" type="text" name="technology{{$result->admition}}" ></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif
        <br>
        <div class="">
            <button type="submit" name="submit1" class="btn btn-primary" style="width:100px; float:right;">Submit</button>
        </div>
        {{ csrf_field() }}
      </form>
    </div>
    <div class="col-md-1"></div>
  </div>
@endsection
