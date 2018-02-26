@extends('layout.adminmain')

@section('title')
  Student Allocate
@endsection

@section('body')

<!-- Search Class -->
<div>
  <div class="col-md-1 "></div>
  <div class="col-md-10 ">
    @if( session()->has('message'))
      <div class="alert alert-danger">
        {{ session()->get('message')}}
      </div>
    @endif
    <div class="">
      <!-- student assign and search class -->
        <div class="row" style="color:#001f4d;">
          <div class="col-md-7 ">
            <br>
            <h2 style="color:#001f4d; margin-left:100px;">Student Assign</h2>
            <br>
            <form method="post" action="{{route('setStudentForClass')}}">
                <div class="col-md-1 "></div>
                <div class="form-group col-md-4 ">
                  <input type="text" class="form-control" placeholder="Registration No"
                   style="font-size:16px;color:#001f4d;" name="stuId" required>
                </div>
                <div class="col-md-2 ">
                    <select style="color:black; font-size:16px; width:70px;" name="section" class="form-control">
                        <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                        <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                        <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                        <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                        <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                        <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
                    </select>
                </div>
                <div class="col-md-2 ">
                    <select style="color:black; font-size:16px; width:70px;" name="poshition" class="form-control">
                        <option style="font-size:16px;color:#001f4d;" value="-A" >A</option>
                        <option style="font-size:16px;color:#001f4d;" value="-B" >B</option>
                        <option style="font-size:16px;color:#001f4d;" value="-C" >C</option>
                        <option style="font-size:16px;color:#001f4d;" value="-D" >D</option>
                        <option style="font-size:16px;color:#001f4d;" value="-E" >E</option>
                        <option style="font-size:16px;color:#001f4d;" value="-F" >F</option>
                        <option style="font-size:16px;color:#001f4d;" value="-G" >G</option>
                        <option style="font-size:16px;color:#001f4d;" value="-H" >H</option>
                        <option style="font-size:16px;color:#001f4d;" value="-I" >I</option>
                        <option style="font-size:16px;color:#001f4d;" value="-J" >J</option>
                    </select>
                </div>

                <div class="col-md-3 ">
                    <button type="submit" name="submit" class="btn btn-primary" style="width:100px; margin-left:10px;">Assign</button>
                </div>
                {{ csrf_field() }}
            </form>
          </div>

          <!-- //search  classes -->
        <div class="col-md-5 ">
          <br>
          <h2 style="color:#001f4d; margin-left:100px;">Search Class</h2>
          <br>
          <form class="" action="{{route('searchAllStudentInClass')}}" method="post">
              <input type="hidden" name="date" value="{{date('Y')}}">
            <div class="col-md-2 "></div>
            <div class="col-md-3 ">
                <select style="color:black; font-size:16px; width:70px;" name="section" class="form-control">
                    <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                    <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                    <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                    <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                    <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                    <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
                </select>
            </div>
            <div class="col-md-3 ">
                <select style="color:black; font-size:16px; width:70px;" name="poshition" class="form-control">
                    <option style="font-size:16px;color:#001f4d;" value="-A" >A</option>
                    <option style="font-size:16px;color:#001f4d;" value="-B" >B</option>
                    <option style="font-size:16px;color:#001f4d;" value="-C" >C</option>
                    <option style="font-size:16px;color:#001f4d;" value="-D" >D</option>
                    <option style="font-size:16px;color:#001f4d;" value="-E" >E</option>
                    <option style="font-size:16px;color:#001f4d;" value="-F" >F</option>
                    <option style="font-size:16px;color:#001f4d;" value="-G" >G</option>
                    <option style="font-size:16px;color:#001f4d;" value="-H" >H</option>
                    <option style="font-size:16px;color:#001f4d;" value="-I" >I</option>
                    <option style="font-size:16px;color:#001f4d;" value="-J" >J</option>
                </select>
            </div>

            <div class="col-md-4 ">
                <button type="submit" name="submit1" class="btn btn-primary" style="width:100px; margin-left:10px;">Search</button>
            </div>
            {{ csrf_field() }}
          </form>
          </form>
        </div>

      </div>
      <!-- student assign and search class end-->

      <!-- view old student in a each class -->
      <!-- line -->
      <br>
      <div class="row" style="background:#001f4d; height: 1px;"></div>
      <div class="row" style="color:#001f4d;">
        <div class="col-md-7 ">
          <br>
          <h2 style="color:#001f4d; margin-left:100px;">View Old Student in Each Class</h2>
          <br>
          <form method="post" action="{{route('searchAllStudentInClass')}}">
              <div class="col-md-1 "></div>
              <div class="form-group col-md-4 ">
                <select style="color:black; font-size:16px; width:180px;" name="date" class="form-control">
                  @foreach ($years as $year)
                    <option style="font-size:16px;color:#001f4d;" value="{{$year}}" >{{$year}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-2 ">
                  <select style="color:black; font-size:16px; width:70px;" name="section" class="form-control">
                      <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                      <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                      <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                      <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                      <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                      <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
                  </select>
              </div>
              <div class="col-md-2 ">
                  <select style="color:black; font-size:16px; width:70px;" name="poshition" class="form-control">
                      <option style="font-size:16px;color:#001f4d;" value="-A" >A</option>
                      <option style="font-size:16px;color:#001f4d;" value="-B" >B</option>
                      <option style="font-size:16px;color:#001f4d;" value="-C" >C</option>
                      <option style="font-size:16px;color:#001f4d;" value="-D" >D</option>
                      <option style="font-size:16px;color:#001f4d;" value="-E" >E</option>
                      <option style="font-size:16px;color:#001f4d;" value="-F" >F</option>
                      <option style="font-size:16px;color:#001f4d;" value="-G" >G</option>
                      <option style="font-size:16px;color:#001f4d;" value="-H" >H</option>
                      <option style="font-size:16px;color:#001f4d;" value="-I" >I</option>
                      <option style="font-size:16px;color:#001f4d;" value="-J" >J</option>
                  </select>
              </div>

              <div class="col-md-3 ">
                  <button type="submit" name="submit2" class="btn btn-primary" style="width:100px; margin-left:10px;">Search</button>
              </div>
              {{ csrf_field() }}
          </form>
        </div>

      <div class="col-md-5 ">
        <br>
        <h2 style="color:#001f4d; margin-left:100px;">View Student</h2>
        <br>
        <form class="" action="{{route('eachStudentData')}}" method="post">
          <div class="col-md-2 "></div>
          <div class="form-group col-md-6 ">
            <input type="text" class="form-control" placeholder="Registration No"
             style="font-size:16px;color:#001f4d;" name="id" required></input>
          </div>
          <div class="col-md-4 ">
              <button type="submit" name="submit3" class="btn btn-primary" style="width:100px; margin-left:10px;">Search</button>
          </div>
          {{ csrf_field() }}
        </form>
      </div>

    </div>
    <!-- search student and update a class end-->
    </div>

<!-- view data -->

  </div>
</div>
<div class="">
  <div class="col-md-2 "></div>
  <div class="col-md-8 ">
    <br>
    <!-- view class student -->
    @if (isset($_POST['submit1']) || isset($_POST['submit2']))
      @if ($results->isEmpty())
      <h4 class="alert alert-danger">No Students {{$class}} Class in {{$searchYear}}</h4>
      @else
        <div class="">
          <br>
          <h2 style="color:#001f4d;text-align: center;">All Students {{$class}} Class in {{$searchYear}}</h2>
          <br>
        </div>
        <div class="container">
          <table class="table table-bordered" style="width: 70%;">
            <thead>
              <tr>
                <th><h3>Admission No</h3></th>
                <th><h3>Name with initials</h3></th>
                <th><h3>Gender</h3></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($results as $result)
                <tr style="font-size:18px;color:#000000;">
                  <td>{{$result->student}}</td>
                  <td>{{$result->fullName}}</td>
                  <td>{{$result->sex}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @endif
    @elseif (isset($_POST['submit3']))
      @if ($stdDatas->isEmpty())
      <h4 class="alert alert-danger">It is Not a Student</h4>
      @else
        <div class="">
          <br><br>
          <h2 style="color:#001f4d;text-align: center;">Student Data</h2>
        </div>
        <div class="container">
          <br>
          <table class="table table-condensed" style="width: 70%;">
            <thead>
              <tr>
                <th><h3>Admission No</h3></th>
                <th><h3>Name with initials</h3></th>
                <th><h3>Current Class</h3></th>
                <th><h3>Year</h3></th>
                <th><h3>Delete</h3></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($stdDatas as $stdData)
                <tr style="font-size:18px;color:#000000;">
                  <td>{{$stdData->admition}}</td>
                  <td>{{$stdData->fname}}</td>
                  <td>{{$stdData->current_class}}</td>
                  <td>{{$stdData->current_year}}</td>
                  <td>
                    <form action="{{route('classStudentDelete')}}" method="post">
                      <input type="hidden" name="id" value="{{$stdData->admition}}">
                      <input type="hidden" name="class" value="{{$stdData->current_class}}">
                      <button type="button" name="button4" class="btn btn-warning" style="font-size:15px;color:black;">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <br><br><br>
      @endif
    @endif
  </div>
  <div class="col-md-2 "></div>
</div>



@endsection
