@extends('layout.adminmain')

@section('title')
  Exam Result
@endsection

@section('body')
<div class="container">
  <div class="row">
    <h2 style="text-align:center;">{{$grade}} class {{$term}} result.</h2>
  </div>
  <br><br>
  <!-- view student result -->
  @foreach ($results as $result)
    <?php $temp = $result->term; ?>
  @endforeach
    @if($results ->isEmpty())
      <h4 class="alert alert-danger">No result in {{$grade}} class.</h4>
    @else
      <div class="row">
        <div class="col-md-3">
          <table class="table table-bordered subjectHeadr" style="width:98px;">
            <tbody style="text-align:center;">
              <thead>
                <tr>
                  <th>Name</th>
                </tr>
              </thead>
              @foreach($students as $student)
              <tr>
                <td>{{$student->fname}}</td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-md-9">
            @foreach ($results as $result)
              <?php $section = $result->section;  ?>
            @endforeach
            @if($section == 10 || $section == 11)
              <table class="table table-bordered subjectHeadr">
                <tbody style="text-align:center;">
                  <thead>
                    <tr>
                      <th>Religion</th>
                      <th>Sinhala</th>
                      <th>Maths</th>
                      <th>Seince</th>
                      <th>English</th>
                      <th>History</th>
                      <th>Group 1</th>
                      <th>Group 2</th>
                      <th>Group 3</th>
                      <th>Totle</th>
                      <th>Average</th>
                    </tr>
                  </thead>
                  @if(($temp == '1stTerm' || $temp == '2ndTerm' || $temp == '3rdTerm') && $term == '1stTerm')
                    @foreach ($results as $result)
                      <tr>
                        <td>{{$result->religion1stTerm}}</td>
                        <td>{{$result->sinhala1stTerm}}</td>
                        <td>{{$result->maths1stTerm}}</td>
                        <td>{{$result->seince1stTerm}}</td>
                        <td>{{$result->english1stTerm}}</td>
                        <td>{{$result->history1stTerm}}</td>
                        <td>{{$result->grouop1Sub1stTerm}}</td>
                        <td>{{$result->grouop2Sub1stTerm}}</td>
                        <td>{{$result->grouop3Sub1stTerm}}</td>
                        <td>{{$result->totelMarks1stTerm}}</td>
                        <td>{{$result->avg1stTerm}}</td>
                      </tr>
                    @endforeach
                  @elseif(($temp == '2ndTerm' || $temp == '3rdTerm') && $term == '2ndTerm')
                    @foreach ($results as $key => $result)
                      <tr>
                        <td>{{$result->religion2ndTerm}}</td>
                        <td>{{$result->sinhala2ndTerm}}</td>
                        <td>{{$result->maths2ndTerm}}</td>
                        <td>{{$result->seince2ndTerm}}</td>
                        <td>{{$result->english2ndTerm}}</td>
                        <td>{{$result->history2ndTerm}}</td>
                        <td>{{$result->grouop1Sub2ndTerm}}</td>
                        <td>{{$result->grouop2Sub2ndTerm}}</td>
                        <td>{{$result->totelMarks2ndTerm}}</td>
                        <td>{{$result->avg2ndTerm}}</td>
                      </tr>
                    @endforeach
                  @elseif(($temp == '2ndTerm' || $temp == '3rdTerm') && $term == '2ndTerm')
                    @foreach ($results as $key => $result)
                      <tr>
                        <td>{{$result->religion3rdTerm}}</td>
                        <td>{{$result->sinhala3rdTerm}}</td>
                        <td>{{$result->maths3rdTerm}}</td>
                        <td>{{$result->seince3rdTerm}}</td>
                        <td>{{$result->english3rdTerm}}</td>
                        <td>{{$result->history3rdTerm}}</td>
                        <td>{{$result->grouop1Sub3rdTerm}}</td>
                        <td>{{$result->grouop2Sub3rdTerm}}</td>
                        <td>{{$result->grouop3Sub3rdTerm}}</td>
                        <td>{{$result->totelMarks3rdTerm}}</td>
                        <td>{{$result->avg3rdTerm}}</td>
                      </tr>
                    @endforeach
                  @else
                    <h4 class="alert alert-danger">No result in {{$term}}</h4>
                  @endif
               </tbody>
             </table>
            @else
              <table class="table table-bordered subjectHeadr">
                <tbody style="text-align:center;">
                  <thead>
                    <tr>
                      <th>Religion</th>
                      <th>Sinhala</th>
                      <th>Maths</th>
                      <th>Seince</th>
                      <th>English</th>
                      <th>History</th>
                      <th>Geo..</th>
                      <th>Citizen..</th>
                      <th>It</th>
                      <th>Esth..</th>
                      <th>Health..</th>
                      <th>Tamil</th>
                      <th>Tech</th>
                      <th>Totle</th>
                      <th>Average</th>
                    </tr>
                  </thead>
                  @if(($temp == '1stTerm' || $temp == '2ndTerm' || $temp == '3rdTerm') && $term == '1stTerm')
                    @foreach ($results as $result)
                      <tr>
                        <td>{{$result->religion1stTerm}}</td>
                        <td>{{$result->sinhala1stTerm}}</td>
                        <td>{{$result->maths1stTerm}}</td>
                        <td>{{$result->seince1stTerm}}</td>
                        <td>{{$result->english1stTerm}}</td>
                        <td>{{$result->history1stTerm}}</td>
                        <td>{{$result->geography1stTerm}}</td>
                        <td>{{$result->citizenStudy1stTerm}}</td>
                        <td>{{$result->it1stTerm}}</td>
                        <td>{{$result->esthetics1stTerm}}</td>
                        <td>{{$result->health1stTerm}}</td>
                        <td>{{$result->tamil1stTerm	}}</td>
                        <td>{{$result->practicalTechnology1stTerm}}</td>
                        <td>{{$result->totelMarks1stTerm}}</td>
                        <td>{{$result->avg1stTerm}}</td>
                      </tr>
                    @endforeach
                  @elseif(($temp == '2ndTerm' || $temp == '3rdTerm') && $term == '2ndTerm')
                    @foreach ($results as $key => $result)
                      <tr>
                        <td>{{$result->religion2ndTerm}}</td>
                        <td>{{$result->sinhala2ndTerm}}</td>
                        <td>{{$result->maths2ndTerm}}</td>
                        <td>{{$result->seince2ndTerm}}</td>
                        <td>{{$result->english2ndTerm}}</td>
                        <td>{{$result->history2ndTerm}}</td>
                        <td>{{$result->geography2ndTerm}}</td>
                        <td>{{$result->citizenStudy2ndTerm}}</td>
                        <td>{{$result->it2ndTerm}}</td>
                        <td>{{$result->esthetics2ndTerm}}</td>
                        <td>{{$result->health2ndTerm}}</td>
                        <td>{{$result->tamil2ndTerm	}}</td>
                        <td>{{$result->practicalTechnology2ndTerm}}</td>
                        <td>{{$result->totelMarks2ndTerm}}</td>
                        <td>{{$result->avg2ndTerm}}</td>
                      </tr>
                    @endforeach
                  @elseif(($temp == '2ndTerm' || $temp == '3rdTerm') && $term == '2ndTerm')
                    @foreach ($results as $key => $result)
                      <tr>
                        <td>{{$result->religion3rdTerm}}</td>
                        <td>{{$result->sinhala3rdTerm}}</td>
                        <td>{{$result->maths3rdTerm}}</td>
                        <td>{{$result->seince3rdTerm}}</td>
                        <td>{{$result->english3rdTerm}}</td>
                        <td>{{$result->history3rdTerm}}</td>
                        <td>{{$result->geography3rdTerm}}</td>
                        <td>{{$result->citizenStudy3rdTerm}}</td>
                        <td>{{$result->it3rdTerm}}</td>
                        <td>{{$result->esthetics3rdTerm}}</td>
                        <td>{{$result->health3rdTerm}}</td>
                        <td>{{$result->tamil3rdTerm	}}</td>
                        <td>{{$result->practicalTechnology3rdTerm}}</td>
                        <td>{{$result->totelMarks3rdTerm}}</td>
                        <td>{{$result->avg3rdTerm}}</td>
                      </tr>
                    @endforeach
                  @else
                    <h4 class="alert alert-danger">No result in {{$term}}</h4>
                  @endif
              </tbody>
            </table>
          @endif
        </div>
      </div>
    @endif
</div>
@endsection
