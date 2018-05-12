@extends('layout.adminmain')

@section('title')
  O/L Result Analysis
@endsection

@section('body')
<div class="col-md-2 "></div>
<div class="col-md-8 ">
  @if(isset($_POST['analysisOL']))
    <h3 style="text-align:center;" >O/L Result Analysis</h3>
    <br><br>
    <div class="col-md-7 ">
      <br><br>
      <h3><u>Subject Group I</u></h3>
      <h3 style="font-size:19px; color:#001f4d;">Geogrophy</h3>
      <h3 style="font-size:19px; color:#001f4d;">Citizenship Education</h3>
      <h3 style="font-size:19px; color:#001f4d;">Entrepreneuship Studies</h3>
      <h3 style="font-size:19px; color:#001f4d;">Business & Accounting</h3>
      <h3 style="font-size:19px; color:#001f4d;">Tamil</h3>
      <br>
      <h3><u>Subject Group II</u></h3>
      <h3 style="font-size:19px; color:#001f4d;">Music</h3>
      <h3 style="font-size:19px; color:#001f4d;">Art</h3>
      <h3 style="font-size:19px; color:#001f4d;">Dancing</h3>
      <h3 style="font-size:19px; color:#001f4d;">Sinhala Literature</h3>
      <h3 style="font-size:19px; color:#001f4d;">English Literature</h3>
      <br>
      <h3><u>Subject Group III</u></h3>
      <h3 style="font-size:19px; color:#001f4d;">Informution and Communication Technology</h3>
      <h3 style="font-size:19px; color:#001f4d;">Agriculture and Food Technology</h3>
      <h3 style="font-size:19px; color:#001f4d;">Design and Construction Technology</h3>
      <h3 style="font-size:19px; color:#001f4d;">Design and Mechanical Technology</h3>
      <h3 style="font-size:19px; color:#001f4d;">Design, Electrical and Electronic Technology</h3>
      <h3 style="font-size:19px; color:#001f4d;">Art & Crafts</h3>
      <h3 style="font-size:19px; color:#001f4d;">Home Ecconomics</h3>
      <h3 style="font-size:19px; color:#001f4d;">Health and Physical Education</h3>
      <h3 style="font-size:19px; color:#001f4d;">Communication and Media Education</h3>
      <br><br><br><br><br>
    </div>
    <form class="" action="{{route('OlAlAnalysisAdd')}}" method="post">
      <div class="col-md-1 analysis">
        <h3 style="text-align:center;">A</h3>
        <br><br>
        <input type="text" class="form-control" placeholder="00" name="geogrophy_A" required>
        <input type="text" class="form-control" placeholder="00" name="citizenshipEducation_A" required>
        <input type="text" class="form-control" placeholder="00" name="entrepreneushipStudies_A" required>
        <input type="text" class="form-control" placeholder="00" name="business_A" required>
        <input type="text" class="form-control" placeholder="00" name="tamil_A" required>
        <br><br><br><br>
        <input type="text" class="form-control" placeholder="00" name="music_A" required>
        <input type="text" class="form-control" placeholder="00" name="art_A" required>
        <input type="text" class="form-control" placeholder="00" name="dancing_A" required>
        <input type="text" class="form-control" placeholder="00" name="sinhalaLit_A" required>
        <input type="text" class="form-control" placeholder="00" name="englishLit_A" required>
        <br><br><br><br>
        <input type="text" class="form-control" placeholder="00" name="ICT_A" required>
        <input type="text" class="form-control" placeholder="00" name="AFT_A" required>
        <input type="text" class="form-control" placeholder="00" name="DC_A" required>
        <input type="text" class="form-control" placeholder="00" name="DM_A" required>
        <input type="text" class="form-control" placeholder="00" name="DEE_A" required>
        <input type="text" class="form-control" placeholder="00" name="artCrafts_A" required>
        <input type="text" class="form-control" placeholder="00" name="HE_A" required>
        <input type="text" class="form-control" placeholder="00" name="HEE_A" required>
        <input type="text" class="form-control" placeholder="00" name="CME_A" required>
      </div>
      <div class="col-md-1 analysis">
        <h3 style="text-align:center;">B</h3>
        <br><br>
        <input type="text" class="form-control" placeholder="00" name="geogrophy_B" required>
        <input type="text" class="form-control" placeholder="00" name="citizenshipEducation_B" required>
        <input type="text" class="form-control" placeholder="00" name="entrepreneushipStudies_B" required>
        <input type="text" class="form-control" placeholder="00" name="business_B" required>
        <input type="text" class="form-control" placeholder="00" name="tamil_B" required>
        <br><br><br><br>
        <input type="text" class="form-control" placeholder="00" name="music_B" required>
        <input type="text" class="form-control" placeholder="00" name="art_B" required>
        <input type="text" class="form-control" placeholder="00" name="dancing_B" required>
        <input type="text" class="form-control" placeholder="00" name="sinhalaLit_B" required>
        <input type="text" class="form-control" placeholder="00" name="englishLit_B" required>
        <br><br><br><br>
        <input type="text" class="form-control" placeholder="00" name="ICT_B" required>
        <input type="text" class="form-control" placeholder="00" name="AFT_B" required>
        <input type="text" class="form-control" placeholder="00" name="DC_B" required>
        <input type="text" class="form-control" placeholder="00" name="DM_B" required>
        <input type="text" class="form-control" placeholder="00" name="DEE_B" required>
        <input type="text" class="form-control" placeholder="00" name="artCrafts_B" required>
        <input type="text" class="form-control" placeholder="00" name="HE_B" required>
        <input type="text" class="form-control" placeholder="00" name="HEE_B" required>
        <input type="text" class="form-control" placeholder="00" name="CME_B" required>
      </div>
      <div class="col-md-1 analysis">
        <h3 style="text-align:center;">C</h3>
        <br><br>
        <input type="text" class="form-control" placeholder="00" name="geogrophy_C" required>
        <input type="text" class="form-control" placeholder="00" name="citizenshipEducation_C" required>
        <input type="text" class="form-control" placeholder="00" name="entrepreneushipStudies_C" required>
        <input type="text" class="form-control" placeholder="00" name="business_C" required>
        <input type="text" class="form-control" placeholder="00" name="tamil_C" required>
        <br><br><br><br>
        <input type="text" class="form-control" placeholder="00" name="music_C" required>
        <input type="text" class="form-control" placeholder="00" name="art_C" required>
        <input type="text" class="form-control" placeholder="00" name="dancing_C" required>
        <input type="text" class="form-control" placeholder="00" name="sinhalaLit_C" required>
        <input type="text" class="form-control" placeholder="00" name="englishLit_C" required>
        <br><br><br><br>
        <input type="text" class="form-control" placeholder="00" name="ICT_C" required>
        <input type="text" class="form-control" placeholder="00" name="AFT_C" required>
        <input type="text" class="form-control" placeholder="00" name="DC_C" required>
        <input type="text" class="form-control" placeholder="00" name="DM_C" required>
        <input type="text" class="form-control" placeholder="00" name="DEE_C" required>
        <input type="text" class="form-control" placeholder="00" name="artCrafts_C" required>
        <input type="text" class="form-control" placeholder="00" name="HE_C" required>
        <input type="text" class="form-control" placeholder="00" name="HEE_C" required>
        <input type="text" class="form-control" placeholder="00" name="CME_C" required>
      </div>
      <div class="col-md-1 analysis">
        <h3 style="text-align:center;">S</h3>
        <br><br>
        <input type="text" class="form-control" placeholder="00" name="geogrophy_S" required>
        <input type="text" class="form-control" placeholder="00" name="citizenshipEducation_S" required>
        <input type="text" class="form-control" placeholder="00" name="entrepreneushipStudies_S" required>
        <input type="text" class="form-control" placeholder="00" name="business_S" required>
        <input type="text" class="form-control" placeholder="00" name="tamil_S" required>
        <br><br><br><br>
        <input type="text" class="form-control" placeholder="00" name="music_S" required>
        <input type="text" class="form-control" placeholder="00" name="art_S" required>
        <input type="text" class="form-control" placeholder="00" name="dancing_S" required>
        <input type="text" class="form-control" placeholder="00" name="sinhalaLit_S" required>
        <input type="text" class="form-control" placeholder="00" name="englishLit_S" required>
        <br><br><br><br>
        <input type="text" class="form-control" placeholder="00" name="ICT_S" required>
        <input type="text" class="form-control" placeholder="00" name="AFT_S" required>
        <input type="text" class="form-control" placeholder="00" name="DC_S" required>
        <input type="text" class="form-control" placeholder="00" name="DM_S" required>
        <input type="text" class="form-control" placeholder="00" name="DEE_S" required>
        <input type="text" class="form-control" placeholder="00" name="artCrafts_S" required>
        <input type="text" class="form-control" placeholder="00" name="HE_S" required>
        <input type="text" class="form-control" placeholder="00" name="HEE_S" required>
        <input type="text" class="form-control" placeholder="00" name="CME_S" required>
      </div>
      <div class="col-md-1 analysis">
        <h3 style="text-align:center;">F</h3>
        <br><br>
        <input type="text" class="form-control" placeholder="00" name="geogrophy_F" required>
        <input type="text" class="form-control" placeholder="00" name="citizenshipEducation_F" required>
        <input type="text" class="form-control" placeholder="00" name="entrepreneushipStudies_F" required>
        <input type="text" class="form-control" placeholder="00" name="business_F" required>
        <input type="text" class="form-control" placeholder="00" name="tamil_F" required>
        <br><br><br><br>
        <input type="text" class="form-control" placeholder="00" name="music_F" required>
        <input type="text" class="form-control" placeholder="00" name="art_F" required>
        <input type="text" class="form-control" placeholder="00" name="dancing_F" required>
        <input type="text" class="form-control" placeholder="00" name="sinhalaLit_F" required>
        <input type="text" class="form-control" placeholder="00" name="englishLit_F" required>
        <br><br><br><br>
        <input type="text" class="form-control" placeholder="00" name="ICT_F" required>
        <input type="text" class="form-control" placeholder="00" name="AFT_F" required>
        <input type="text" class="form-control" placeholder="00" name="DC_F" required>
        <input type="text" class="form-control" placeholder="00" name="DM_F" required>
        <input type="text" class="form-control" placeholder="00" name="DEE_F" required>
        <input type="text" class="form-control" placeholder="00" name="artCrafts_F" required>
        <input type="text" class="form-control" placeholder="00" name="HE_F" required>
        <input type="text" class="form-control" placeholder="00" name="HEE_F" required>
        <input type="text" class="form-control" placeholder="00" name="CME_F" required>
        <br>
      </div>
      <button type="submit" class="btn btn-primary" style=" width:80px;font-size:14px;" name="addAnalysisOLResult">Submit</button>
      {{ csrf_field() }}
    <form>
  @elseif(isset($_POST['updateAnalysisOL']))
  @foreach ($results as $result)
    <h3 style="text-align:center;" >O/L Result Analysis Update {{$result->year}}</h3>
  @endforeach
    <br><br>
    <div class="col-md-7 ">
      <br><br>
      <h3><u>Subject Group I</u></h3>
      <h3 style="font-size:19px; color:#001f4d;">Geogrophy</h3>
      <h3 style="font-size:19px; color:#001f4d;">Citizenship Education</h3>
      <h3 style="font-size:19px; color:#001f4d;">Entrepreneuship Studies</h3>
      <h3 style="font-size:19px; color:#001f4d;">Business & Accounting</h3>
      <h3 style="font-size:19px; color:#001f4d;">Tamil</h3>
      <br>
      <h3><u>Subject Group II</u></h3>
      <h3 style="font-size:19px; color:#001f4d;">Music</h3>
      <h3 style="font-size:19px; color:#001f4d;">Art</h3>
      <h3 style="font-size:19px; color:#001f4d;">Dancing</h3>
      <h3 style="font-size:19px; color:#001f4d;">Sinhala Literature</h3>
      <h3 style="font-size:19px; color:#001f4d;">English Literature</h3>
      <br>
      <h3><u>Subject Group III</u></h3>
      <h3 style="font-size:19px; color:#001f4d;">Informution and Communication Technology</h3>
      <h3 style="font-size:19px; color:#001f4d;">Agriculture and Food Technology</h3>
      <h3 style="font-size:19px; color:#001f4d;">Design and Construction Technology</h3>
      <h3 style="font-size:19px; color:#001f4d;">Design and Mechanical Technology</h3>
      <h3 style="font-size:19px; color:#001f4d;">Design, Electrical and Electronic Technology</h3>
      <h3 style="font-size:19px; color:#001f4d;">Art & Crafts</h3>
      <h3 style="font-size:19px; color:#001f4d;">Home Ecconomics</h3>
      <h3 style="font-size:19px; color:#001f4d;">Health and Physical Education</h3>
      <h3 style="font-size:19px; color:#001f4d;">Communication and Media Education</h3>
      <br><br><br><br><br>
    </div>
    @foreach ($results as $result)
      <form class="" action="{{route('OlAlAnalysisAdd')}}" method="post">
        <input type="hidden" name="year" value="{{$result->year}}">
        <div class="col-md-1 analysis">
          <h3 style="text-align:center;">A</h3>
          <br><br>
          <input type="text" class="form-control" placeholder="00" name="geogrophy_A" value="{{$result->geogrophyA}}" required>
          <input type="text" class="form-control" placeholder="00" name="citizenshipEducation_A" value="{{$result->citizenshipA}}" required>
          <input type="text" class="form-control" placeholder="00" name="entrepreneushipStudies_A" value="{{$result->entrepreneushipA}}" required>
          <input type="text" class="form-control" placeholder="00" name="business_A" value="{{$result->bisinuessA}}" required>
          <input type="text" class="form-control" placeholder="00" name="tamil_A" value="{{$result->tamilA}}" required>
          <br><br><br><br>
          <input type="text" class="form-control" placeholder="00" name="music_A" value="{{$result->musicA}}" required>
          <input type="text" class="form-control" placeholder="00" name="art_A" value="{{$result->artA}}" required>
          <input type="text" class="form-control" placeholder="00" name="dancing_A" value="{{$result->dancingA}}" required>
          <input type="text" class="form-control" placeholder="00" name="sinhalaLit_A" value="{{$result->sinhalaLitA}}" required>
          <input type="text" class="form-control" placeholder="00" name="englishLit_A" value="{{$result->englishLitA}}" required>
          <br><br><br><br>
          <input type="text" class="form-control" placeholder="00" name="ICT_A" value="{{$result->ICTA}}" required>
          <input type="text" class="form-control" placeholder="00" name="AFT_A" value="{{$result->AFTA}}" required>
          <input type="text" class="form-control" placeholder="00" name="DC_A" value="{{$result->DC_A}}" required>
          <input type="text" class="form-control" placeholder="00" name="DM_A" value="{{$result->DM_A}}" required>
          <input type="text" class="form-control" placeholder="00" name="DEE_A" value="{{$result->DEE_A}}" required>
          <input type="text" class="form-control" placeholder="00" name="artCrafts_A" value="{{$result->craftsA}}" required>
          <input type="text" class="form-control" placeholder="00" name="HE_A" value="{{$result->HE_A}}" required>
          <input type="text" class="form-control" placeholder="00" name="HEE_A" value="{{$result->HEE_A}}" required>
          <input type="text" class="form-control" placeholder="00" name="CME_A" value="{{$result->CME_A}}" required>
        </div>
        <div class="col-md-1 analysis">
          <h3 style="text-align:center;">B</h3>
          <br><br>
          <input type="text" class="form-control" placeholder="00" name="geogrophy_B" value="{{$result->geogrophyB}}" required>
          <input type="text" class="form-control" placeholder="00" name="citizenshipEducation_B" value="{{$result->citizenshipB}}" required>
          <input type="text" class="form-control" placeholder="00" name="entrepreneushipStudies_B" value="{{$result->entrepreneushipB}}" required>
          <input type="text" class="form-control" placeholder="00" name="business_B" value="{{$result->bisinuessB}}" required>
          <input type="text" class="form-control" placeholder="00" name="tamil_B" value="{{$result->tamilB}}" required>
          <br><br><br><br>
          <input type="text" class="form-control" placeholder="00" name="music_B" value="{{$result->musicB}}" required>
          <input type="text" class="form-control" placeholder="00" name="art_B" value="{{$result->artB}}" required>
          <input type="text" class="form-control" placeholder="00" name="dancing_B" value="{{$result->dancingB}}" required>
          <input type="text" class="form-control" placeholder="00" name="sinhalaLit_B" value="{{$result->sinhalaLitB}}" required>
          <input type="text" class="form-control" placeholder="00" name="englishLit_B" value="{{$result->englishLitB}}" required>
          <br><br><br><br>
          <input type="text" class="form-control" placeholder="00" name="ICT_B" value="{{$result->ICTB}}" required>
          <input type="text" class="form-control" placeholder="00" name="AFT_B" value="{{$result->AFTB}}" required>
          <input type="text" class="form-control" placeholder="00" name="DC_B" value="{{$result->DC_B}}" required>
          <input type="text" class="form-control" placeholder="00" name="DM_B" value="{{$result->DM_B}}" required>
          <input type="text" class="form-control" placeholder="00" name="DEE_B" value="{{$result->DEE_B}}" required>
          <input type="text" class="form-control" placeholder="00" name="artCrafts_B" value="{{$result->craftsB}}" required>
          <input type="text" class="form-control" placeholder="00" name="HE_B" value="{{$result->HE_B}}" required>
          <input type="text" class="form-control" placeholder="00" name="HEE_B" value="{{$result->HEE_B}}" required>
          <input type="text" class="form-control" placeholder="00" name="CME_B" value="{{$result->CME_B}}" required>
        </div>
        <div class="col-md-1 analysis">
          <h3 style="text-align:center;">C</h3>
          <br><br>
          <input type="text" class="form-control" placeholder="00" name="geogrophy_C" value="{{$result->geogrophyC}}" required>
          <input type="text" class="form-control" placeholder="00" name="citizenshipEducation_C" value="{{$result->citizenshipC}}" required>
          <input type="text" class="form-control" placeholder="00" name="entrepreneushipStudies_C" value="{{$result->entrepreneushipC}}" required>
          <input type="text" class="form-control" placeholder="00" name="business_C" value="{{$result->bisinuessC}}" required>
          <input type="text" class="form-control" placeholder="00" name="tamil_C" value="{{$result->tamilC}}" required>
          <br><br><br><br>
          <input type="text" class="form-control" placeholder="00" name="music_C" value="{{$result->musicC}}" required>
          <input type="text" class="form-control" placeholder="00" name="art_C" value="{{$result->artC}}" required>
          <input type="text" class="form-control" placeholder="00" name="dancing_C" value="{{$result->dancingC}}" required>
          <input type="text" class="form-control" placeholder="00" name="sinhalaLit_C" value="{{$result->sinhalaLitC}}" required>
          <input type="text" class="form-control" placeholder="00" name="englishLit_C" value="{{$result->englishLitC}}" required>
          <br><br><br><br>
          <input type="text" class="form-control" placeholder="00" name="ICT_C" value="{{$result->ICTC}}" required>
          <input type="text" class="form-control" placeholder="00" name="AFT_C" value="{{$result->AFTC}}" required>
          <input type="text" class="form-control" placeholder="00" name="DC_C" value="{{$result->DC_C}}" required>
          <input type="text" class="form-control" placeholder="00" name="DM_C" value="{{$result->DM_C}}" required>
          <input type="text" class="form-control" placeholder="00" name="DEE_C" value="{{$result->DEE_C}}" required>
          <input type="text" class="form-control" placeholder="00" name="artCrafts_C" value="{{$result->craftsC}}" required>
          <input type="text" class="form-control" placeholder="00" name="HE_C" value="{{$result->HE_C}}" required>
          <input type="text" class="form-control" placeholder="00" name="HEE_C" value="{{$result->HEE_C}}" required>
          <input type="text" class="form-control" placeholder="00" name="CME_C" value="{{$result->CME_C}}" required>
        </div>
        <div class="col-md-1 analysis">
          <h3 style="text-align:center;">S</h3>
          <br><br>
          <input type="text" class="form-control" placeholder="00" name="geogrophy_S" value="{{$result->geogrophyS}}" required>
          <input type="text" class="form-control" placeholder="00" name="citizenshipEducation_S" value="{{$result->citizenshipS}}" required>
          <input type="text" class="form-control" placeholder="00" name="entrepreneushipStudies_S" value="{{$result->entrepreneushipS}}" required>
          <input type="text" class="form-control" placeholder="00" name="business_S" value="{{$result->bisinuessS}}" required>
          <input type="text" class="form-control" placeholder="00" name="tamil_S" value="{{$result->tamilS}}" required>
          <br><br><br><br>
          <input type="text" class="form-control" placeholder="00" name="music_S" value="{{$result->musicS}}" required>
          <input type="text" class="form-control" placeholder="00" name="art_S" value="{{$result->artS}}" required>
          <input type="text" class="form-control" placeholder="00" name="dancing_S" value="{{$result->dancingS}}" required>
          <input type="text" class="form-control" placeholder="00" name="sinhalaLit_S" value="{{$result->sinhalaLitS}}" required>
          <input type="text" class="form-control" placeholder="00" name="englishLit_S" value="{{$result->englishLitS}}" required>
          <br><br><br><br>
          <input type="text" class="form-control" placeholder="00" name="ICT_S" value="{{$result->ICTS}}" required>
          <input type="text" class="form-control" placeholder="00" name="AFT_S" value="{{$result->AFTS}}" required>
          <input type="text" class="form-control" placeholder="00" name="DC_S" value="{{$result->DC_S}}" required>
          <input type="text" class="form-control" placeholder="00" name="DM_S" value="{{$result->DM_S}}" required>
          <input type="text" class="form-control" placeholder="00" name="DEE_S" value="{{$result->DEE_S}}" required>
          <input type="text" class="form-control" placeholder="00" name="artCrafts_S" value="{{$result->craftsS}}" required>
          <input type="text" class="form-control" placeholder="00" name="HE_S" value="{{$result->HE_S}}" required>
          <input type="text" class="form-control" placeholder="00" name="HEE_S" value="{{$result->HEE_S}}" required>
          <input type="text" class="form-control" placeholder="00" name="CME_S" value="{{$result->CME_S}}" required>
        </div>
        <div class="col-md-1 analysis">
          <h3 style="text-align:center;">F</h3>
          <br><br>
          <input type="text" class="form-control" placeholder="00" name="geogrophy_F" value="{{$result->geogrophyF}}" required>
          <input type="text" class="form-control" placeholder="00" name="citizenshipEducation_F" value="{{$result->citizenshipF}}" required>
          <input type="text" class="form-control" placeholder="00" name="entrepreneushipStudies_F" value="{{$result->entrepreneushipF}}" required>
          <input type="text" class="form-control" placeholder="00" name="business_F" value="{{$result->bisinuessF}}" required>
          <input type="text" class="form-control" placeholder="00" name="tamil_F" value="{{$result->tamilF}}" required>
          <br><br><br><br>
          <input type="text" class="form-control" placeholder="00" name="music_F" value="{{$result->musicF}}" required>
          <input type="text" class="form-control" placeholder="00" name="art_F" value="{{$result->artF}}" required>
          <input type="text" class="form-control" placeholder="00" name="dancing_F" value="{{$result->dancingF}}" required>
          <input type="text" class="form-control" placeholder="00" name="sinhalaLit_F" value="{{$result->sinhalaLitF}}" required>
          <input type="text" class="form-control" placeholder="00" name="englishLit_F" value="{{$result->englishLitF}}" required>
          <br><br><br><br>
          <input type="text" class="form-control" placeholder="00" name="ICT_F" value="{{$result->ICTF}}" required>
          <input type="text" class="form-control" placeholder="00" name="AFT_F" value="{{$result->AFTF}}" required>
          <input type="text" class="form-control" placeholder="00" name="DC_F" value="{{$result->DC_F}}" required>
          <input type="text" class="form-control" placeholder="00" name="DM_F" value="{{$result->DM_F}}" required>
          <input type="text" class="form-control" placeholder="00" name="DEE_F" value="{{$result->DEE_F}}" required>
          <input type="text" class="form-control" placeholder="00" name="artCrafts_F" value="{{$result->craftsF}}" required>
          <input type="text" class="form-control" placeholder="00" name="HE_F" value="{{$result->HE_F}}" required>
          <input type="text" class="form-control" placeholder="00" name="HEE_F" value="{{$result->HEE_F}}" required>
          <input type="text" class="form-control" placeholder="00" name="CME_F" value="{{$result->CME_F}}" required>
          <br>
        </div>
      @endforeach
      <button type="submit" class="btn btn-primary" style=" width:80px;font-size:14px;" name="updateAnalysisOLResult">Submit</button>
      {{ csrf_field() }}
    <form>
  @endif

</div>
<div class="col-md-2 "></div>
@endsection
