@extends('layout.adminmain')

@section('title')
  Update Student Result
@endsection

@section('body')
<!-- student name -->
<div class="container">
  @foreach ($stuTemps as $stuTemp)
   <?php $temp = $stuTemp->fname; ?>
  @endforeach
  <!-- get result -->
  @foreach ($results as $result)
   <?php $term = $result->term; ?>
  @endforeach
  @if($students ->isEmpty())
    <div class="row">
      <h4 class="alert alert-danger" style="text-align:center;">{{$temp}} not in the {{$grade}} class</h4>
    </div>
  @else
    <div class="row">
      <br>
      <h2 style="text-align:center;">{{$temp}} result in {{$grade}} class.</h2>
    </div>
    <!-- retrieve result to update-->
    <br><br>
    <div class="">
      <form class="" action="{{route('updateStudentResult')}}" method="post">
        <input type="hidden" name="student" value="{{$stu}}">
        <input type="hidden" name="class" value="{{$grade}}">
        <input type="hidden" name="term" value="{{$term}}">
        @foreach ($results as $result)
          <?php $section = $result->section; ?>
        @endforeach
        <div class="row">
          @if($section == 10 || $section == 11)
          <div class="col-md-4">
            <h4 class="hedh4">Subject</h4>
            <br>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Religion</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Sinhala</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Maths</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Science</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> English</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> History</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Group 1</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Group 2</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Group 3</h4>
          </div>
          <div class="col-md-2">
              <h4 style="text-align:center;" class="hedh4">1st Term</h4>
              <div class="col-md-3"></div>
              <div class="col-md-6 studentUpdate">
              <br>
              @foreach ($results as $result)
              <input type="text" style="width:50px;height:28px;" class="form-control" name="religion1" value="{{$result->religion1stTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="sinhala1" value="{{$result->sinhala1stTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="maths1" value="{{$result->maths1stTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="seince1" value="{{$result->seince1stTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="english1" value="{{$result->english1stTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="history1" value="{{$result->history1stTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="group1_t1" value="{{$result->grouop1Sub1stTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="group2_t1" value="{{$result->grouop2Sub1stTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="group3_t1" value="{{$result->grouop3Sub1stTerm}}">
              @endforeach
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="col-md-2">
            <h4 class="hedh4">2st Term</h4>
            <div class="col-md-3"></div>
            <div class="col-md-6 studentUpdate">
              <br>
              @foreach ($results as $result)
              <input type="text" style="width:50px;height:28px;" class="form-control" name="religion2" value="{{$result->religion2ndTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="sinhala2" value="{{$result->sinhala2ndTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="maths2" value="{{$result->maths2ndTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="seince2" value="{{$result->seince2ndTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="english2" value="{{$result->english2ndTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="history2" value="{{$result->history2ndTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="group1_t2" value="{{$result->grouop1Sub2ndTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="group2_t2" value="{{$result->grouop2Sub2ndTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="group3_t2" value="{{$result->grouop3Sub2ndTerm}}">
              @endforeach
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="col-md-2">
            <h4 class="hedh4">3rd Term</h4>
            <div class="col-md-3"></div>
            <div class="col-md-6 studentUpdate">
              <br>
              @foreach ($results as $result)
              <input type="text" style="width:50px;height:28px;" class="form-control" name="religion3" value="{{$result->religion3rdTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="sinhala3" value="{{$result->sinhala3rdTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="maths3" value="{{$result->maths3rdTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="seince3" value="{{$result->seince3rdTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="english3" value="{{$result->english3rdTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="history3" value="{{$result->history3rdTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="group1_t3" value="{{$result->grouop1Sub3rdTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="group2_t3" value="{{$result->grouop2Sub3rdTerm}}">
              <input type="text" style="width:50px;height:28px;" class="form-control" name="group3_t3" value="{{$result->grouop3Sub3rdTerm}}">
              @endforeach
            </div>
            <div class="col-md-3"></div>
            </div>
          </div>
          @else
          <div class="row">
          <div class="col-md-4">
            <h4 class="hedh4">Subject</h4>
            <br>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Religion</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Sinhala</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Maths</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Science</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> English</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> History</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Geography</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Citizenship Education</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> ICT</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Art</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Health and Physical Education</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Tamil</h4>
            <h4 class="hedh5New"><i class="fa fa-file-text-o reporticon" style="font-size:14px;"></i> Technology</h4>
          </div>
          <div class="col-md-2">
              <h4 class="hedh4">1st Term</h4>
              <div class="col-md-3"></div>
              <div class="col-md-6 studentUpdate">
              <br>
              @foreach ($results as $result)
                <input type="text" style="width:50px;height:28px;" class="form-control" name="religion1" value="{{$result->religion1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="sinhala1" value="{{$result->sinhala1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="maths1" value="{{$result->maths1stTerm	}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="seince1" value="{{$result->seince1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="english1" value="{{$result->english1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="history1" value="{{$result->history1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="geography1" value="{{$result->geography1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="citizenStudy1" value="{{$result->citizenStudy1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="it1" value="{{$result->it1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="esthetics1" value="{{$result->esthetics1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="health1" value="{{$result->health1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="tamil1" value="{{$result->tamil1stTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="technology1" value="{{$result->practicalTechnology1stTerm}}">
              @endforeach
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="col-md-2">
            <h4 class="hedh4">2st Term</h4>
            <div class="col-md-3"></div>
            <div class="col-md-6 studentUpdate">
              <br>
              @foreach ($results as $result)
                <input type="text" style="width:50px;height:28px;" class="form-control" name="religion2" value="{{$result->religion2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="sinhala2" value="{{$result->sinhala2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="maths2" value="{{$result->maths2ndTerm	}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="seince2" value="{{$result->seince2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="english2" value="{{$result->english2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="history2" value="{{$result->history2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="geography2" value="{{$result->geography2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="citizenStudy2" value="{{$result->citizenStudy2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="it2" value="{{$result->it2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="esthetics2" value="{{$result->esthetics2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="health2" value="{{$result->health2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="tamil2" value="{{$result->tamil2ndTerm}}">
                <input type="text" style="width:50px;height:28px;" class="form-control" name="technology2" value="{{$result->practicalTechnology2ndTerm}}">
              @endforeach
            </div>
            <div class="col-md-3"></div>
            </div>
            <div class="col-md-2">
              <h4 class="hedh4">3rd Term</h4>
              <div class="col-md-3"></div>
              <div class="col-md-6 studentUpdate">
                <br>
                @foreach ($results as $result)
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="religion3" value="{{$result->religion3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="sinhala3" value="{{$result->sinhala3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="maths3" value="{{$result->maths3rdTerm	}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="seince3" value="{{$result->seince3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="english3" value="{{$result->english3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="history3" value="{{$result->history3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="geography3" value="{{$result->geography3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="citizenStudy3" value="{{$result->citizenStudy3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="it3" value="{{$result->it3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="esthetics3" value="{{$result->esthetics3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="health3" value="{{$result->health3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="tamil3" value="{{$result->tamil3rdTerm}}">
                  <input type="text" style="width:50px;height:28px;" class="form-control" name="technology3" value="{{$result->practicalTechnology3rdTerm}}">
                @endforeach
              </div>
              <div class="col-md-3"></div>
              </div>
            </div>
            @endif
          </div>
          <div class="row">
            <div class="col-md-8"></div>
              <div class="col-md-2">
              <br>
                <button type="submit" name="submitUp" class="btn btn-primary" style="width:100px; float:right">Update</button>
              <br><br><br>
            </div>
            <div class="col-md-2"></div>
          </div>
        {{ csrf_field() }}
      </form>
    </div>
  @endif
</div>

@endsection
