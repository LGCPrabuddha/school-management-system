@extends('layout.adminmain')

@section('title')
  Teacher Allocate
@endsection

@section('body')
<div>
  <div class="col-md-1 "></div>
  <div class="col-md-10 ">
    @if( session()->has('message'))
      <div class="alert alert-danger">
        {{ session()->get('message')}}
      </div>
    @endif
    <div class="">
      <!-- teacher assign and search each filed -->
      <!-- assign grade head -->
      <div class="row" style="color:#001f4d;">
        <div class="col-md-6">
          <br>
          <h2 style="color:#001f4d; margin-left:100px;"> Assign Grade Head</h2>
          <br>
          <form method="post" action="{{route('allocateGradehead')}}">
              <div class="col-md-1 "></div>
              <div class="form-group col-md-4 ">
                <input type="text" class="form-control" placeholder="Registration No"
                 style="font-size:16px;color:#001f4d;" name="id" required></input>
              </div>
              <div class="col-md-4 ">
                  <select style="color:black; font-size:16px; width:70px;" name="grade" class="form-control">
                      <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                      <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                      <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                      <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                      <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                      <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
                  </select>
              </div>

              <div class="col-md-3 ">
                  <button type="submit" name="submit1" class="btn btn-primary" style="width:100px; margin-left:10px;">Assign</button>
              </div>
              {{ csrf_field() }}
          </form>
        </div>

        <!-- update grade head -->
        <div class="col-md-6">
          <br>
          <h2 style="color:#001f4d; margin-left:100px;">Update Grade Head</h2>
          <br>
          <form method="post" action="{{route('updateGradehead')}}">
              <div class="col-md-1 "></div>
              <div class="form-group col-md-4 ">
                <input type="text" class="form-control" placeholder="Registration No"
                 style="font-size:16px;color:#001f4d;" name="id" required></input>
              </div>
              <div class="col-md-4 ">
                  <select style="color:black; font-size:16px; width:70px;" name="grade" class="form-control">
                      <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                      <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                      <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                      <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                      <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                      <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
                  </select>
              </div>

              <div class="col-md-3 ">
                  <button type="submit" name="submit2" class="btn btn-primary" style="width:100px; margin-left:10px;">Update</button>
              </div>
              {{ csrf_field() }}
          </form>
        </div>

      </div>
      <!-- class teachers -->
      <!-- line -->
      <div class="row" style="background:#001f4d; height: 1px;"></div>
        <div class="row" style="color:#001f4d;">
          <div class="col-md-6 ">
            <br>
            <h2 style="color:#001f4d; margin-left:100px;">Assign Class Teacher</h2>
            <br>
            <form method="post" action="{{route('allocateClassTeacher')}}">
                <div class="col-md-1 "></div>
                <div class="form-group col-md-4 ">
                  <input type="text" class="form-control" placeholder="Registration No"
                   style="font-size:16px;color:#001f4d;" name="id" required></input>
                </div>
                <div class="col-md-2 ">
                    <select style="color:black; font-size:16px; width:70px;" name="poshition1" class="form-control">
                        <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                        <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                        <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                        <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                        <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                        <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
                    </select>
                </div>
                <div class="col-md-2 ">
                    <select style="color:black; font-size:16px; width:70px;" name="poshition2" class="form-control">
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
                    <button type="submit" name="submit3" class="btn btn-primary" style="width:100px; margin-left:10px;">Assign</button>
                </div>
                {{ csrf_field() }}
            </form>
          </div>

          <!-- update class teacher -->
        <div class="col-md-6 ">
          <br>
          <h2 style="color:#001f4d; margin-left:100px;">Update Class Teacher</h2>
          <br>
          <form method="post" action="{{route('updateClassTeacher')}}">
              <div class="col-md-1 "></div>
              <div class="form-group col-md-4 ">
                <input type="text" class="form-control" placeholder="Registration No"
                 style="font-size:16px;color:#001f4d;" name="id" required></input>
              </div>
              <div class="col-md-2 ">
                  <select style="color:black; font-size:16px; width:70px;" name="poshition1" class="form-control">
                      <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                      <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                      <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                      <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                      <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                      <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
                  </select>
              </div>
              <div class="col-md-2 ">
                  <select style="color:black; font-size:16px; width:70px;" name="poshition2" class="form-control">
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
                  <button type="submit" name="submit4" class="btn btn-primary" style="width:100px; margin-left:10px;">Update</button>
              </div>
              {{ csrf_field() }}
          </form>
        </div>

      </div>

      <!-- Assign Subclass Teacher -->
      <div class="row" style="color:#001f4d;">
        <div class="col-md-6 ">
          <br>
          <h2 style="color:#001f4d; margin-left:100px;">Assign Subclass Teacher</h2>
          <br>
          <form method="post" action="{{route('allocateSubClassTeacher')}}">
              <div class="col-md-1 "></div>
              <div class="form-group col-md-4 ">
                <input type="text" class="form-control" placeholder="Registration No"
                 style="font-size:16px;color:#001f4d;" name="id" required></input>
              </div>
              <div class="col-md-2 ">
                  <select style="color:black; font-size:16px; width:70px;" name="poshition1" class="form-control">
                      <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                      <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                      <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                      <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                      <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                      <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
                  </select>
              </div>
              <div class="col-md-2 ">
                  <select style="color:black; font-size:16px; width:70px;" name="poshition2" class="form-control">
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
                  <button type="submit" name="submit5" class="btn btn-primary" style="width:100px; margin-left:10px;">Assign</button>
              </div>
              {{ csrf_field() }}
          </form>
        </div>

        <!-- update sub class teacher -->
        <!-- line -->
        <div class="row" style="background:#001f4d; height: 1px;"></div>
      <div class="col-md-6 ">
        <br>
        <h2 style="color:#001f4d; margin-left:100px;">Update Subclass Teacher</h2>
        <br>
        <form method="post" action="{{route('updateSubClassTeacher')}}">
            <div class="col-md-1 "></div>
            <div class="form-group col-md-4 ">
              <input type="text" class="form-control" placeholder="Registration No"
               style="font-size:16px;color:#001f4d;" name="id" required></input>
            </div>
            <div class="col-md-2 ">
                <select style="color:black; font-size:16px; width:70px;" name="poshition1" class="form-control">
                    <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                    <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                    <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                    <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                    <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                    <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
                </select>
            </div>
            <div class="col-md-2 ">
                <select style="color:black; font-size:16px; width:70px;" name="poshition2" class="form-control">
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
                <button type="submit" name="submit6" class="btn btn-primary" style="width:100px; margin-left:10px;">Update</button>
            </div>
            {{ csrf_field() }}
        </form>
      </div>

    </div>

    <!-- view class teacher and sub class teacher -->
    <br><br>
    <!-- line -->
    <div class="row" style="background:#001f4d; height: 1px;"></div>
    <div class="row" style="color:#001f4d;">
      <div class="col-md-6 ">
        <br>
        <h3 style="color:#001f4d; margin-left:100px;">Search Greade Head</h3>
        <br>
        <form class="" action="{{route('viewGradeHead')}}" method="post">
          <div class="col-md-2 "></div>
          <div class="col-md-3 ">
              <select style="color:black; font-size:16px; width:70px;" name="grade" class="form-control">
                  <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                  <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                  <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                  <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                  <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                  <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
              </select>
          </div>

          <div class="col-md-4 ">
              <button type="submit" name="submit7" class="btn btn-primary" style="width:100px; margin-left:10px;">Search</button>
          </div>
          {{ csrf_field() }}
        </form>
      </div>

    <div class="col-md-6 ">
      <br>
      <h3 style="color:#001f4d; margin-left:100px;">Search Class Teacher</h3>
      <br>
      <form class="" action="{{route('viewClassTeacher')}}" method="post">
        <div class="col-md-2 "></div>
        <div class="col-md-3 ">
            <select style="color:black; font-size:16px; width:70px;" name="grade" class="form-control">
                <option style="font-size:16px;color:#001f4d;" value="6" >6</option>
                <option style="font-size:16px;color:#001f4d;" value="7" >7</option>
                <option style="font-size:16px;color:#001f4d;" value="8" >8</option>
                <option style="font-size:16px;color:#001f4d;" value="9" >9</option>
                <option style="font-size:16px;color:#001f4d;" value="10" >10</option>
                <option style="font-size:16px;color:#001f4d;" value="11" >11</option>
            </select>
        </div>

        <div class="col-md-4 ">
            <button type="submit" name="submit8" class="btn btn-primary" style="width:100px; margin-left:10px;">Search</button>
        </div>
        {{ csrf_field() }}
      </form>
      <br><br>
    </div>

  </div>

  <br>
    </div>
    <!-- grade head -->
    <div class="">
        @if (isset($_POST['submit7']))
        <!-- line -->
        <div class="row" style="background:#001f4d; height: 1px;"></div>
        <br><br>
        <div class="col-md-2"></div>
        <div class="container col-md-8">
          <h2 style="color:#001f4d; text-align: center;">Geade Head</h2>
          <br>
          <table class="table" style="color:#001f4d;">
            <thead>
                <tr>
                  <th><h3>Grade</h3></th>
                  <th><h3>Registretion No</h3></th>
                  <th><h3>Full Name</h3></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><h4>{{$gradeName}}</h4></td>
                  <td><h4>{{$id}}</h4></td>
                  @foreach ($results as $result)
                    <td><h4>{{$result->fullName}}</h4></td>
                  @endforeach
                </tr>
              </tbody>
            </table>
          <br><br><br>
          </div>
        @elseif (isset($_POST['submit8']))
        <!-- line -->
        <div class="row" style="background:#001f4d; height: 1px;"></div>
        <br><br>
        <div class=""></div>
        <div class="container ">
          <h2 style="color:#001f4d; text-align: center;">Grade {{$gradeName}} Class Teacher</h2>
          <br>
          <table class="table" style="color:#001f4d;">
            <thead>
                <tr>
                  <th><h3>Class</h3></th>
                  <th><h3>Class Teacher</h3></th>
                  <th><h3>Sub Class Teacher</h3></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($results as $result)
                  <tr>
                    <td><h4>{{$result->class}}</h4></td>
                    <td><h4>{{$result->classTeacher}}</h4></td>
                    <td><h4>{{$result->subClassTeacher}}</h4></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          <br><br><br>
          </div>
        @endif
    </div>
  </div>
</div>
@endsection
