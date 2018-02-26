@extends('admin.showUserMainUp')

@section('showUser')
  @if (isset($_POST['submit']))
      <!-- student ditals-->
      @if($detail=='Student')
          <!-- //student -->
          @if ($user=='Personal')
          <br>
              <h2 class="text">Update  Student Details</h2>
              <br>
              @foreach ($results as $result)
            <form class="bodybackground" action="{{route('updateStudentDitels')}}" method="post">
              <div class="tab-pane active"  >
                <div class="step33 flable">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Admission No</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Admission No" name="admNo" value="{{$result->admNo}}">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Admission Date</label>
                            <input id="date" type="date" class="form-control" name="addDate" value="{{$result->admDate}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Name with initials</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name with initials" name="fullName" value="{{$result->fullName}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Surname</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Surname" name="surname" value="{{$result->surName}}">
                        </div>
                        <div class="col-md-6">
                          <label for="exampleInputEmail1">First Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="fname" value="{{$result->fName}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Ethics</label>
                            <select style="color:black;" name="ethics" class="form-control">
                                <option value="Sinhala">Sinhala</option>
                                <option value="SL Tamil">SL Tamil</option>
                                <option value="Indian Tamil">Indian Tamil</option>
                                <option value="SL Muslim">SL Muslim</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Religion</label>
                            <select style="color:black;" name="religion" class="form-control">
                                <option value="Buddist">Buddist</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Islam">Islam</option>
                                <option value="Catholic">Catholic</option>
                                <option value="Christian">Christian</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Distance to school</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Distance to school" name="far" value="{{$result->far}}">
                        </div>
                        <div class="col-md-6">
                          <label for="exampleInputEmail1">Admission Grade</label>
                          <div class="row">
                            <div class="col-md-4">
                              <select style="color:black;" name="grade1" class="form-control">
                                  <option value="6-">6</option>
                                  <option value="7-">7</option>
                                  <option value="8-">8</option>
                                  <option value="9-">9</option>
                                  <option value="10-">10</option>
                                  <option value="11-">11</option>
                                  <option value="12-">12</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                              <select style="color:black;" name="grade2" class="form-control">
                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="C">C</option>
                                  <option value="D">D</option>
                                  <option value="E">E</option>
                                  <option value="F">F</option>
                                  <option value="G">G</option>
                              </select>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Birthday</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="bDate" value="{{$result->bDay}}">
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
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Permanent Addresse</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="pAddress" value="{{$result->pAddress}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Temporari Addresse</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="tAddress" value="{{$result->tAddress}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Mobile Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="mPhone" value="{{$result->mNomber}}">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Land Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="lPhone" value="{{$result->lNomber}}">
                        </div>
                    </div>
                </div>
                <br>
                <ul class="list-inline pull-right">
                    <li><button type="submit" class="btn btn-primary" style="font-size:20px; width:100px;">Save</button></li>
                </ul>
            </div>
            {{ csrf_field() }}
            </form>
            @endforeach

        <!-- //parents -->
          @elseif($user=='parents')

            <h2 class="text">Update Parents Details</h2>
            <br>
            <h3 style="color: #001f4d;">Father's Details</h3>
            <br>
            @foreach ($results as $result)
            <form class="bodybackground" action="{{route('updateParentDitels')}}" method="post">
                <div class="tab-pane" >
                  <div class="step33 flable">
                      <div class="step_21">
                        <input type="hidden" name="admNo" value="{{$result->admNo}}">
                          <!-- father's details -->
                          <div class="row">
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Father's name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="fathName" value="{{$result->fName}}">
                              </div>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Father's Job</label>
                                  <select name="fJob" class="form-control">
                                      <option value="Farmer">Farmer</option>
                                      <option value="2">job1</option>
                                      <option value="1">job2</option>
                                      <option value="4">job3</option>
                                      <option value="5">job4</option>
                                      <option value="6">job5</option>
                                      <option value="3">job6</option>
                                  </select>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Permanent Addresse</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="fathPAddress" value="{{$result->fAddress}}">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Work's Place Address</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="fathJobAddress" value="{{$result->fJobAddress}}">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="fathEmail" value="{{$result->fEmail}}">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Mobile Number</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="fathMNo" value="{{$result->fMNo}}">
                              </div>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Work's Place</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="fathJobNo" value="{{$result->fJobNo}}">
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
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="motName" value="{{$result->mName}}">
                              </div>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Mother's Job</label>
                                  <select name="motJob" class="form-control">
                                      <option value="">Housewife</option>
                                      <option value="2">job1</option>
                                      <option value="1">job2</option>
                                      <option value="4">job3</option>
                                      <option value="5">job4</option>
                                      <option value="6">job5</option>
                                      <option value="3">job6</option>
                                  </select>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Permanent Addresse</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="motPAddress" value="{{$result->mAddress}}">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Work's Place Address</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="motJobAddress" value="{{$result->mJobAddress}}">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="motEmail" value="{{$result->mEmail}}">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Mobile Number</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="motMNo" value="{{$result->mMNo}}">
                              </div>
                              <div class="col-md-6">
                                  <label for="exampleInputEmail1">Work's Place</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="motJobNo" value="{{$result->mJobNo}}">
                              </div>
                          </div>
                          <!-- mother's Detailse -->

                          <br>

                      </div>
                      <div class="step-22">

                      </div>
                  </div>
                  <ul class="list-inline pull-right">
                      <li><button style="margin-right:10px;font-size:20px; width:100px;" type="submit" class="btn btn-primary">Save</button></li>
                  </ul>
                  {{ csrf_field() }}
              </div>
            </form>
          @endforeach

        <!-- //guardian -->
          @elseif($user=='guardian')
            @foreach ($results as $result)
                <h2 class="text">Update Guardian's Detailses</h2>
                <br>
              <form class="bodybackground" action="{{route('updateGuardianDitels')}}" method="post">
                <div class="tab-pane" role="tabpanel" id="step3">
                  <div class="step33 flable">
                    <input type="hidden" name="admNo" value="{{$result->admNo}}">
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Guardian's name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="guaName" value="{{$result->gName}}">
                          </div>
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Guardian's Job</label>
                              <select name="guaJob" class="form-control">
                                  <option value="Housewife">Housewife</option>
                                  <option value="2">job1</option>
                                  <option value="1">job2</option>
                                  <option value="4">job3</option>
                                  <option value="5">job4</option>
                                  <option value="6">job5</option>
                                  <option value="3">job6</option>
                              </select>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="exampleInputEmail1">Permanent Addresse</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="guaPAddress" value="{{$result->gAddress}}">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="exampleInputEmail1">Work's Place Address</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="guaJobAddress" value="{{$result->gJobAddress}}">
                          </div>
                      </div>
                      <div class="row">
                              <div class="col-md-12">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="guaEmail" value="{{$result->gEmail}}">
                              </div>
                          </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Mobile Number</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="guaMNo" value="{{$result->gMNo}}">
                          </div>
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Work's Place</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="guaJobNo" value="{{$result->gJobNo}}">
                          </div>
                      </div>
                          <!-- Guardian's Detailse -->

                      <br>

                  </div>
                  <ul class="list-inline pull-right">
                      <li><button type="submit" style="font-size:20px; width:100px;" class="btn btn-primary">Save</button></li>
                  </ul>
                  {{ csrf_field() }}
              </div>
              @endforeach
            </form>
            <!-- emergencie -->
          @elseif($user=='emergency')
            @foreach ($results as $result)
                <h2 class="text">Update Emergency Notices</h2>
                <br>
              <form class="bodybackground" action="{{route('updateEmergenciesDitels')}}" method="post">
                <input type="hidden" name="admNo" value="{{$result->admNo}}">
                <div class="tab-pane" role="tabpanel" id="complete">
                  <div class="step33 flable">
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="emeName" value="{{$result->eName}}">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="exampleInputEmail1">Family Member in School</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Family Member 1" name="emeMember1" value="{{$result->eMember1}}"><br>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Family Member 2" name="emeMember2" value="{{$result->eMember2}}"><br>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Family Member 3" name="emeMember3" value="{{$result->eMember3}}">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="exampleInputEmail1">Permanent Addresse</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="emePAddress" value="{{$result->eAddress}}">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <label for="exampleInputEmail1">Work's Place Address</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="emeJobAddress" value="{{$result->eJobAddress}}">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Mobile Number</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="emeMNo" value="{{$result->eMNo}}">
                          </div>
                          <div class="col-md-6">
                              <label for="exampleInputEmail1">Work's Place</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="emeJobNo" value="{{$result->eJobNo}}">
                          </div>
                      </div>
                          <br>            <!-- Emergency Notices's Detailse -->
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="submit" style="font-size:20px; width:100px;" class="btn btn-primary ">Save</button></li>
                        </ul>

                    </div>
                    {{ csrf_field() }}
                  </form>
            @endforeach
          @endif

      <!-- teacher ditals-->
      @elseif($detail=='Teachre')
        <h2 class="text">Update Teacher Details</h2>
        <br>
          @foreach ($results as $result)
          <form role="form" class="bodybackground" method="post" action="{{route('updateTeacherDitels')}}" >
            <div class="flable">
              <div class="row">
                <input type="hidden" name="admNo" value="{{$result->admNo}}">
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Registretion Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="regdate" value="{{$result->regDate}}">
                </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Full Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name" name="fullName" value="{{$result->fullName}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <label for="exampleInputEmail1">Birthday</label>
                      <input type="date" class="form-control" id="exampleInputEmail1" name="bDate" value="{{$result->bDay}}">
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
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIC Number" name="nic" value="{{$result->nic}}">
                  </div>
                  <div class="col-md-6">
                      <label for="exampleInputEmail1">The day work is accepted</label>
                      <input type="date" class="form-control" id="exampleInputEmail1" name="firstDate" value="{{$result->firstDate}}">
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
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Academic Qualification" name="bestQuali" value="{{$result->bestQuali}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Professional Qualifications</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Professional Qualification" name="proQuali" value="{{$result->proQuali}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Schools in served</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="School 1" name="sch1" value="{{$result->wSch1}}"><br>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="School 2" name="sch2" value="{{$result->wSch2}}"><br>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="School 3" name="sch3" value="{{$result->wSch3}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Permanent Addresse</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="pAddress" value="{{$result->pAddress}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Temporari Addresse</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="tAddress" value="{{$result->tAddress}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <label for="exampleInputEmail1">Mobile Number</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="mNum" value="{{$result->mNomber}}">
                  </div>
                  <div class="col-md-6">
                      <label for="exampleInputEmail1">Land Number</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="lNum" value="{{$result->lNomber}}">
                  </div>
              </div>
              <ul class="list-inline pull-right">
                <br>
                  <li><button type="submit" class="btn btn-primary">Save</button></li>
              </ul>
            </div>
            {{ csrf_field() }}
          </form>
          @endforeach

     <!-- admin ditals -->
     @elseif($detail=='Admin')
       <h1>Admin ok</h1>
      @endif
  @endif
@endsection
