@extends('layout.adminmain')

@section('title')
  Messenger
@endsection

@section('body')
<div class="col-md-2"></div>
<div class="col-md-8">
  @if( session()->has('message'))
    <div class="alert alert-danger">
      <h4>{{ session()->get('message')}}</h4>
    </div>
  @endif
  <div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Create new Massage</h4>
      </div>
      <div class="panel-body">
        <form class="" action="{{route('smsSend')}}" method="post">
          <div class="form-group">
            <div class="col-md-2">
              <label style="font-size:18px;" for="upload_file">Send To :</label>
            </div>
            <div class="col-md-3">
              <select style="color:black;font-size:16px;" name="ethics" class="form-control">
                  <option value="teacher">All Teacher</option>
                  <option value="student">All Student</option>
                  <option value="6">Grade 6</option>
                  <option value="7">Grade 7</option>
                  <option value="8">Grade 8</option>
                  <option value="9">Grade 9</option>
                  <option value="10">Grade 10</option>
                  <option value="11">Grade 11</option>
                  <option value="12">Grade 12</option>
              </select>
            </div>
          </div>
          <br>
          <br><br><br>
          <div class="form-group">
            <textarea style="height:300px; font-size:16px;color:black;" id="massege" name="massege" class="form-control" required>

            </textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success" style="width:100px;">Send</button>
          </div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
</div>
<div class="col-md-2"></div>
@endsection
