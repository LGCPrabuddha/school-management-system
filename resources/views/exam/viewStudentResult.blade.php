@extends('layout.adminmain')

@section('title')
  Student Result
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
    <!-- retrieve result -->
    <br><br>
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
          <h4 class="hedh4">1st Term</h4>
          <br>
          @foreach ($results as $result)
            <h4 class="hedh5">{{$result->religion1stTerm}}</h4>
            <h4 class="hedh5">{{$result->sinhala1stTerm}}</h4>
            <h4 class="hedh5">{{$result->maths1stTerm}}</h4>
            <h4 class="hedh5">{{$result->seince1stTerm}}</h4>
            <h4 class="hedh5">{{$result->english1stTerm}}</h4>
            <h4 class="hedh5">{{$result->history1stTerm}}</h4>
            <h4 class="hedh5">{{$result->grouop1Sub1stTerm}}</h4>
            <h4 class="hedh5">{{$result->grouop2Sub1stTerm}}</h4>
            <h4 class="hedh5">{{$result->grouop3Sub1stTerm}}</h4>
          @endforeach
      </div>
      <div class="col-md-2">
        <div class="col-md-9 ">
          <h4 class="hedh4">2st Term</h4>
          <br>
          @foreach ($results as $result)
            <h4 class="hedh5">{{$result->religion2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->sinhala2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->maths2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->seince2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->english2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->history2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->grouop1Sub2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->grouop2Sub2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->grouop3Sub2ndTerm}}</h4>
          @endforeach
        </div>
      </div>
      <div class="col-md-2">
        <div class="col-md-9 ">
          <h4 class="hedh4">3rd Term</h4>
          <br>
          @foreach ($results as $result)
            <h4 class="hedh5">{{$result->religion3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->sinhala3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->maths3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->seince3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->english3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->history3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->grouop1Sub3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->grouop2Sub3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->grouop3Sub3rdTerm}}</h4>
          @endforeach
        </div>
      </div>
      @else
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
          <br>
          @foreach ($results as $result)
            <h4 class="hedh5">{{$result->religion1stTerm}}</h4>
            <h4 class="hedh5">{{$result->sinhala1stTerm}}</h4>
            <h4 class="hedh5">{{$result->maths1stTerm}}</h4>
            <h4 class="hedh5">{{$result->seince1stTerm}}</h4>
            <h4 class="hedh5">{{$result->english1stTerm}}</h4>
            <h4 class="hedh5">{{$result->history1stTerm}}</h4>
            <h4 class="hedh5">{{$result->geography1stTerm}}</h4>
            <h4 class="hedh5">{{$result->citizenStudy1stTerm}}</h4>
            <h4 class="hedh5">{{$result->it1stTerm}}</h4>
            <h4 class="hedh5">{{$result->esthetics1stTerm}}</h4>
            <h4 class="hedh5">{{$result->health1stTerm}}</h4>
            <h4 class="hedh5">{{$result->tamil1stTerm}}</h4>
            <h4 class="hedh5">{{$result->practicalTechnology1stTerm}}</h4>
          @endforeach
      </div>
      <div class="col-md-2">
        <div class="col-md-9 ">
          <h4 class="hedh4">2st Term</h4>
          <br>
          @foreach ($results as $result)
            <h4 class="hedh5">{{$result->religion2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->sinhala2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->maths2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->seince2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->english2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->history2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->geography2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->citizenStudy2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->it2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->esthetics2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->health2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->tamil2ndTerm}}</h4>
            <h4 class="hedh5">{{$result->practicalTechnology2ndTerm}}</h4>
          @endforeach
        </div>
      </div>
      <div class="col-md-2">
        <div class="col-md-9 ">
          <h4 class="hedh4">3rd Term</h4>
          <br>
          @foreach ($results as $result)
            <h4 class="hedh5">{{$result->religion3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->sinhala3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->maths3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->seince3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->english3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->history3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->geography3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->citizenStudy3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->it3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->esthetics3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->health3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->tamil3rdTerm}}</h4>
            <h4 class="hedh5">{{$result->practicalTechnology3rdTerm}}</h4>
          @endforeach
        </div>
      </div>
      @endif
    </div>
  @endif
</div>

@endsection
