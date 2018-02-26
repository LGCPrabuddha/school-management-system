@extends('layout.adminmain')

@section('title')
  Subject Section
@endsection

@section('body')
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <!-- 9 grade student Subject selection -->
      <h2 style="color:#001f4d; text-align: center;">Grade 9 Student Subject Selection</h2>
      <br><br>
      @if(count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if( session()->has('message'))
        <div class="alert alert-danger">
          {{ session()->get('message')}}
        </div>
      @endif
      <!-- subject selection -->
      <div class="row">
        <form class="" action="{{route('subjectSelection')}}" method="post">
          <div class="row">
            <div class="col-md-2" style="text-align: center;">
              <h4 style="color:#001f4d;">Registration No</h4>
              <br>
              <input type="text" name="stdId" class="form-control" placeholder="Registration No" value="" required>
            </div>
            <div class="col-md-3" style="text-align: center;">
              <h4 style="color:#001f4d;">Subject Group 1</h4>
              <br>
              <select style="color:black;" name="subject1" class="form-control" style="font-size:16px;">
                  <option style="font-size:16px;color:#001f4d;" value="sub 1.0" >sub 1.0</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 1.1" >sub 1.1</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 1.2" >sub 1.2</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 1.3" >sub 1.3</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 1.4" >sub 1.4</option>
              </select>
            </div>
            <div class="col-md-3" style="text-align: center;">
              <h4 style="color:#001f4d;">Subject Group 2</h4>
              <br>
              <select style="color:black;" name="subject2" class="form-control" style="font-size:16px;">
                  <option style="font-size:16px;color:#001f4d;" value="sub 2.0" >sub 2.0</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 2.1" >sub 2.1</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 2.2" >sub 2.2</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 2.3" >sub 2.3</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 2.4" >sub 2.4</option>
              </select>
            </div>
            <div class="col-md-3" style="text-align: center;">
              <h4 style="color:#001f4d;">Subject Group 3</h4>
              <br>
              <select style="color:black;" name="subject3" class="form-control" style="font-size:16px;">
                  <option style="font-size:16px;color:#001f4d;" value="sub 3.0" >sub 3.0</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 3.1" >sub 3.1</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 3.2" >sub 3.2</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 3.3" >sub 3.3</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 3.4" >sub 3.4</option>
              </select>
            </div>
            <div class="col-md-1">
              <br><br><br>
              <button type="submit" name="submit" class="btn btn-primary" style="width:80px;">Submit</button>
            </div>
            {{ csrf_field() }}
          </div>
        </form>
      </div>
      <br><br><br>
      <!-- search subject -->
      <div class="row">
        <h2 style="color:#001f4d; text-align: center;">Search Student</h2>
        <br><br>
        <form class="" action="{{route('selectSubjectView')}}" method="post">
          <div class="row">
            <div class="col-md-3 ">
              <h4 style="color:#001f4d;">Subject Group 1</h4>
              <br>
              <select style="color:black;" name="subject1" class="form-control" style="font-size:16px;">
                  <option style="font-size:16px;color:#001f4d;" value="sub 1.0" >sub 1.0</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 1.1" >sub 1.1</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 1.2" >sub 1.2</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 1.3" >sub 1.3</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 1.4" >sub 1.4</option>
              </select>
            </div>
            <div class="col-md-3 ">
              <h4 style="color:#001f4d;">Subject Group 2</h4>
              <br>
              <select style="color:black;" name="subject2" class="form-control" style="font-size:16px;">
                  <option style="font-size:16px;color:#001f4d;" value="sub 2.0" >sub 2.0</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 2.1" >sub 2.1</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 2.2" >sub 2.2</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 2.3" >sub 2.3</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 2.4" >sub 2.4</option>
              </select>
            </div>
            <div class="col-md-3 ">
              <h4 style="color:#001f4d;">Subject Group 3</h4>
              <br>
              <select style="color:black;" name="subject3" class="form-control" style="font-size:16px;">
                  <option style="font-size:16px;color:#001f4d;" value="sub 3.0" >sub 3.0</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 3.1" >sub 3.1</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 3.2" >sub 3.2</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 3.3" >sub 3.3</option>
                  <option style="font-size:16px;color:#001f4d;" value="sub 3.4" >sub 3.4</option>
              </select>
            </div>
            <div class="col-md-3 ">
              <br><br><br>
              <button type="submit" name="submit1" class="btn btn-primary" style="width:80px;">Search</button>
            </div>
            {{ csrf_field() }}
          </div>
        </form>
      </div>

      <!-- delete student -->
      <div class="row">
        <br><br><br>
        <h2 style="color:#001f4d; text-align: center;">Student Details</h2>
        <br><br>
        <form class="" action="{{route('subjStudentDetelse')}}" method="post">
          <div class="row">
            <div class="col-md-3" style="color:#001f4d;">
              <h4 style="color:#001f4d;">Registration No</h4>
              <br>
              <input type="text" name="stdId" class="form-control" placeholder="Registration No" value="" required>
            </div>
            <div class="col-md-3 ">
              <br><br><br>
              <button type="submit" name="submit2" class="btn btn-primary" style="width:80px;">Search</button>
            </div>
            {{ csrf_field() }}
          </div>
          <br><br><br>
        </form>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>

  <!-- search stutent -->
  @if (isset($_POST['submit1']))
  <div class="row ">
    <div class="col-md-2 "></div>
    <div class="col-md-8 ">
      @if(count($results)>0)
      <br><br><br>
      <h2 style="color: #001f4d;text-align: center;">Student details</h2>
      <br><br>
      <div class="container col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width:20%;text-align: center;"><h3>Admission No</h3></th>
              <th style="text-align: center;"><h3>Fill name</h3></th>
              <th style="text-align: center;"><h3>Class</h3></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($results as $result)
              <tr style="font-size:18px;color:#000000;">
                <td style="text-align: center;">{{$result->admition}}</td>
                <td style="text-align: center;">{{$result->fname}}</td>
                <td style="text-align: center;">{{$result->current_class}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <br><br><br>
      </div>
      @else
        <h4 class="alert alert-danger">No Select Subject</h4>
      @endif
    </div>
    <div class="col-md-2 "></div>
  </div>
  @elseif (isset($_POST['submit2']))
  <div class="row ">
    <div class="col-md-2 "></div>
    <div class="col-md-8 ">
      <br>

      <!-- if condetion -->
      @if(count($results)>0)
      <h2 style="color: #001f4d;text-align: center;">Student Select Subject</h2>
      <br><br>
      <div class="container col-md-12">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width:20%;text-align: center;"><h3>Admission No</h3></th>
              <th style="text-align: center;"><h3>Subject 1</h3></th>
              <th style="text-align: center;"><h3>Subject 2</h3></th>
              <th style="text-align: center;"><h3>Subject 3</h3></th>
              <th style="text-align: center;"><h3>Delete</h3></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($results as $result)
              <tr style="font-size:18px;color:#000000;">
                <td style="text-align: center;">{{$result->id}}</td>
                <td style="text-align: center;">{{$result->sub1}}</td>
                <td style="text-align: center;">{{$result->sub2}}</td>
                <td style="text-align: center;">{{$result->sub3}}</td>
            @endforeach
                <td>
                  <form action="{{route('studentDelete9')}}" method="post">
                    <input type="hidden" name="id" value="{{$result->id}}">
                    <input type="hidden" name="sub1" value="{{$result->sub1}}">
                    <input type="hidden" name="sub2" value="{{$result->sub2}}">
                    <input type="hidden" name="sub3" value="{{$result->sub3}}">
                    <button type="submit" name="submitD" class="btn btn-warning" style="font-size:15px;color:black;">Delete</button>
                    {{ csrf_field() }}
                  </form>
                </td>
              </tr>
          </tbody>
        </table>
        @else
          <h4 class="alert alert-danger">No Subject Select</h4>
        @endif
        <br><br><br>
      </div>
    </div>
    <div class="col-md-2 "></div>
  </div>
  @endif

@endsection
