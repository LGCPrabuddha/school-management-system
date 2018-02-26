@extends('layout.adminmain')

@section('title')
  Teacher Registration
@endsection

@section('body')

<!-- form open -->
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <form role="form" class="bodybackground" method="post" action="{{route('teaRegestation')}}" >
      <div class="flable">
        <div class="row">
          <h2 class="text">Teacher Details</h2>
          <br>
          <div class="col-md-6">
              <label for="exampleInputEmail1">Registretion No</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Registretion No" name="admNo">
          </div>
          <div class="col-md-6">
              <label for="exampleInputEmail1">Registretion Date</label>
              <input type="date" class="form-control" id="exampleInputEmail1" name="regdate">
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name" name="fullName">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleInputEmail1">Birthday</label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="bDate">
            </div>
            <div class="col-md-6">
                <label for="exampleInputEmail1">Gender</label>
                <div class="row">
                    <div class="col-md-3 col-xs-3">
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="inlineRadio2" value="Male"> Male
                        </label>
                    </div>
                    <div class="col-md-9 col-xs-9">
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="inlineRadio3" value="Female"> Female
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleInputEmail1">NIC Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIC Number" name="nic">
            </div>
            <div class="col-md-6">
                <label for="exampleInputEmail1">The day work is accepted</label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="firstDate">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleInputEmail1">Training Institute</label>
                <select name="institute" class="form-control">
                    <option value="Institute 1">Institute 1</option>
                    <option value="Institute 2">Institute 2</option>
                    <option value="Institute 3">Institute 3</option>
                    <option value="Institute 4">Institute 4</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="exampleInputEmail1">Current Grade</label>
                <select name="grade" class="form-control">
                    <option value="Grade 1">Grade 1</option>
                    <option value="Grade 2">Grade 2</option>
                    <option value="Grade 3">Grade 3</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="exampleInputEmail1">Best Academic Qualification</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Academic Qualification" name="bestQuali">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="exampleInputEmail1">Professional Qualifications</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Professional Qualification" name="proQuali">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="exampleInputEmail1">Schools in served</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="School 1" name="sch1"><br>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="School 2" name="sch2"><br>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="School 3" name="sch3">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="exampleInputEmail1">Permanent Addresse</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="pAddress">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="exampleInputEmail1">Temporari Addresse</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="tAddress">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleInputEmail1">Mobile Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="mNum">
            </div>
            <div class="col-md-6">
                <label for="exampleInputEmail1">Land Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="lNum">
            </div>
        </div>
        <ul class="list-inline pull-right">
          <br>
            <li><button type="submit" class="btn btn-primary btn-info-full next-step rebotton">Submit</button></li>
        </ul>
      </div>
      {{ csrf_field() }}
    </form>
  </div>
  <div class="col-md-2"></div>
  <!-- form close -->
<!-- //Early appointment date -->
@endsection
