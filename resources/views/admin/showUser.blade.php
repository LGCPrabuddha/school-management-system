@extends('layout.adminmain')

@section('title')
  User Details
@endsection

@section('body')
<!-- search student in reg table -->
<div class="col-md-2"></div>
<div class="col-md-8">
  @if (isset($_POST['submit']))

    @if($results ->isEmpty())
      <h4 class="alert alert-danger"> Search student is not register.</h4>
    @else
        <!-- student ditals-->
        @if($detail=='Student')
            <!-- //student -->
            @if ($user=='Personal')
              @foreach ($results as $result)
              <br><br>
              <h2 class="text">Student Details</h2>
                <br>
                <div class="tab-pane active"  >
                  <div class="step33 flable">
                      <div class="row">
                          <div class="col-md-6">
                              <label>Admission No</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->admNo}}</label>
                          </div>
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Admission Date</label>
                              <label class="form-control dataView">{{$result->admDate}}</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="exampleInputEmail1">Name with initials</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->fullName}}</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Surname</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->surName}}</label>
                          </div>
                          <div class="col-md-6">
                            <label for="exampleInputEmail1">First Name</label>
                            <label  class="form-control dataView" id="exampleInputEmail1">{{$result->fName}}</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Ethics</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->ethics}}</label>
                          </div>
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Religion</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->religion}}</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Distance to school</label>
                              <label class="form-control dataView" id="exampleInputEmail1" style="width: 92%;">{{$result->far}}</label>
                              <label style="float:right;margin-top:-30px;">Km</label>
                          </div>
                          <div class="col-md-6">
                            <label for="exampleInputEmail1">Admission Grade</label>
                            <label class="form-control dataView" id="exampleInputEmail1">{{$result->addGrade}}</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Birthday</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->bDay}}</label>
                          </div>
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Gender</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->sex}}</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="exampleInputEmail1">Permanent Addresse</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->pAddress}}</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="exampleInputEmail1">Temporari Addresse</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->tAddress}}</label>
                          </div>
                      </div>
                  </div>
                  <br>
              </div>
              @endforeach
          <!-- //parents -->
            @elseif($user=='parents')
            <h2 class="text">Parents Details</h2>
              <br>
              <h3 style="color: #001f4d;">Father's Details</h3>
              <br>
              @foreach ($results as $result)
              <div class="tab-pane" >
                  <div class="step33 flable">
                      <div class="step_21">
                          <!-- father's details -->
                          <div class="row">
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Father's name</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->fName}}</label>
                              </div>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Father's Job</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->fJob}}</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">NIC Number</label>
                                  <label class="form-control dataView" id="exampleInputEmail1" style="width: 94%;">{{$result->fNIC}}</label>
                                  <label style="float:right;margin-top:-30px;">V</label>
                              </div>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Old Boys ?</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->fOld}}</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Permanent Addresse</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->fAddress}}</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Work's Place Address</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->fJobAddress}}</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->fEmail}}</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Mobile Number</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->fMNo}}</label>
                              </div>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Work's Place</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->fJobNo}}</label>
                              </div>
                          </div>
                          <!-- father's details -->
                          <br><br>

                          <!-- mother's Detailse -->
                          <div class="row">
                              <h3>Mother's Details</h3>
                              <br>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Mother's name</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->mName}}</label>
                              </div>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Mother's Job</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->mJob}}</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">NIC Number</label>
                                  <label class="form-control dataView" id="exampleInputEmail1" style="width: 94%;">{{$result->mNIC}}</label>
                                  <label style="float:right;margin-top:-30px;">V</label>
                              </div>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Old Boys ?</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->mOld}}</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Permanent Addresse</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->mAddress}}</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Work's Place Address</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->mJobAddress}}</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->mEmail}}</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Mobile Number</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->mMNo}}</label>
                              </div>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Work's Place</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->mJobNo}}</label>
                              </div>
                          </div>
                          <!-- mother's Detailse -->
                          <br>
                      </div>
                  </div>
              </div>
              @endforeach

          <!-- //guardian -->
            @elseif($user=='guardian')
                  <h2 class="text">Guardian's Detailses</h2>
                  <br>
            @foreach ($results as $result)
              <div class="tab-pane" role="tabpanel" id="step3">
                  <div class="step33 flable">
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Guardian's name</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->gName}}</label>
                          </div>
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Guardian's Job</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->gJob}}</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">NIC Number</label>
                              <label class="form-control dataView" id="exampleInputEmail1" style="width: 94%;">{{$result->gNIC}}</label>
                              <label style="float:right;margin-top:-30px;">V</label>
                          </div>
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Old Boys ?</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->gOld}}</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="exampleInputEmail1">Permanent Addresse</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->gAddress}}</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="exampleInputEmail1">Work's Place Address</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->gJobAddress}}</label>
                          </div>
                      </div>
                      <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->gEmail}}</label>
                              </div>
                          </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Mobile Number</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->gMNo}}</label>
                          </div>
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Work's Place</label>
                              <label class="form-control dataView" id="exampleInputEmail1">{{$result->gJobNo}}</label>
                          </div>
                      </div>
                          <!-- Guardian's Detailse -->

                      <br>

                  </div>
              </div>
            @endforeach
              <!-- emergencie -->
            @elseif($user=='emergency')
            <h2 class="text">Emergency Details</h2>
            <br>
                @foreach ($results as $result)
                  <div class="tab-pane" role="tabpanel" id="complete">
                    <div class="step33 flable">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Name</label>
                                <label class="form-control dataView" id="exampleInputEmail1">{{$result->eName}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Family Member in School</label>
                                <label type="text" class="form-control dataView" id="exampleInputEmail1">{{$result->eMember1}}</label><br>
                                <label type="text" class="form-control dataView" id="exampleInputEmail1">{{$result->eMember2}}</label><br>
                                <label type="text" class="form-control dataView" id="exampleInputEmail1">{{$result->eMember3}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Permanent Addresse</label>
                                <label class="form-control dataView" id="exampleInputEmail1">{{$result->eAddress}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Work's Place Address</label>
                                <label class="form-control dataView" id="exampleInputEmail1">{{$result->eJobAddress}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Mobile Number</label>
                                <label class="form-control dataView" id="exampleInputEmail1">{{$result->eMNo}}</label>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Work's Place</label>
                                <label class="form-control dataView" id="exampleInputEmail1">{{$result->eJobNo}}</label>
                            </div>
                        </div>
                            <br>            <!-- Emergency Notices's Detailse -->
                          </div>

                      </div>
                @endforeach
              @else
                <h4 class="alert alert-danger"> pleass check you seaching field.</h4>
              @endif

        <!-- teacher ditals-->
        @elseif($detail=='Teachre')
          @if($user=='Personal')
          <h1 style="text-align: center;">Teacher Details</h1><br>
          <!-- Personal details -->
            @foreach ($results as $result)
            <div class="flable">
              <div class="row">
                <h2 class="text">Personal Details</h2>
                <br>
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Registretion No</label>
                    <label class="form-control dataView" id="exampleInputEmail1">{{$result->admNo}}</label>
                </div>
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Registretion Date</label>
                    <label class="form-control dataView" id="exampleInputEmail1">{{$result->regDate}}</label>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Name with initials</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->fullName}}</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Full Name</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->nameIniti}}</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <label for="exampleInputEmail1">Birthday</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->bDay}}</label>
                  </div>
                  <div class="col-md-6">
                      <label for="exampleInputEmail1">Gender</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->sex}}</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-8">
                      <label for="exampleInputEmail1">Email Address</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->email}}</label>
                  </div>
                  <div class="col-md-4">
                      <label for="exampleInputEmail1">NIC Number</label>
                      <label class="form-control dataView" style="width:45%;" id="exampleInputEmail1">{{$result->nic}} V</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Permanent Addresse</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->pAddress}}</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Temporari Addresse</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->tAddress}}</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <label for="exampleInputEmail1">Mobile Number</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->tAddress}}</label>
                  </div>
                  <div class="col-md-6">
                      <label for="exampleInputEmail1">Land Number</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->lNomber}}</label>
                  </div>
              </div>
              <br><br>
            </div>
            @endforeach
            <!-- Qualifications details -->
          @elseif($user=='Qualifications')
            @foreach ($results as $result)
            <div class="flable">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="text">Qualifications</h2>
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <label for="exampleInputEmail1">The day work is accepted</label>
                    <label class="form-control dataView" id="exampleInputEmail1">{{$result->firstDate}}</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <label for="exampleInputEmail1">Main Subject</label>
                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->mainSubject}}</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleInputEmail1">Sub Subject1</label>
                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->subSubject1}}</label>
                </div>
                <div class="col-md-4">
                  <label for="exampleInputEmail1">Sub Subject2</label>
                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->subSubject2}}</label>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <label for="exampleInputEmail1">Training Institute</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->institute}}</label>
                  </div>
                  <div class="col-md-6">
                      <label for="exampleInputEmail1">Current Grade</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->grade}}</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Best Academic Qualification</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->bestQuali}}</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Professional Qualifications</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->proQuali}}</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Schools in served</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->wSch1}}</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->wSch2}}</label>
                      <label class="form-control dataView" id="exampleInputEmail1">{{$result->wSch3}}</label>

                  </div>
              </div>
              <br><br>
            </div>
            @endforeach

            <!-- Emergencie details -->
       @elseif($user=='Emergencie')
        @foreach ($results as $result)
        <div class="flable">
          <div class="row">
              <h2 class="text">Emergency Notices</h2>
              <br>
              <div class="col-md-6">
                  <label for="exampleInputEmail1">Name</label>
                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->ename}}</label>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <label for="exampleInputEmail1">Permanent Addresse</label>
                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->epaddress}}</label>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <label for="exampleInputEmail1">Work's Place Address</label>
                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->ewaddress}}</label>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <label for="exampleInputEmail1">Mobile Number</label>
                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->epNumber}}</label>
              </div>
              <div class="col-md-6">
                  <label for="exampleInputEmail1">Work's Place</label>
                  <label class="form-control dataView" id="exampleInputEmail1">{{$result->ewNumber}}</label>
              </div>
          </div>
        </div>
        @endforeach
       <!-- admin ditals -->
       @elseif($detail=='Admin')
         <h1>Admin ok</h1>
       @endif
    @endif
  @endif
  @endif
</div>
<div class="col-md-8"></div>
@endsection
