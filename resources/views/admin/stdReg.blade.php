@extends('layout.adminmain')

@section('title')
  Student Registration
@endsection

@section('body')
<div class="col-md-2"></div>
      <div class="col-md-8">



          <div class="row">
              <section>
              <div class="wizard">
                  <div class="wizard-inner">
                      <div class="connecting-line"></div>
                      <ul class="nav nav-tabs bodybackground" role="tablist">

                          <li role="presentation" class="active">
                              <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Student">
                                  <span class="round-tab">
                                      <!-- <i class="glyphicon glyphicon-user"></i> -->
                                      <i class="fa fa-graduation-cap"></i>
                                  </span>
                              </a>
                          </li>

                          <li role="presentation" class="disabled">
                              <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Parents">
                                  <span class="round-tab">
                                      <i class="glyphicon glyphicon-user"></i>
                                  </span>
                              </a>
                          </li>
                          <li role="presentation" class="disabled">
                              <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Guardian">
                                  <span class="round-tab">
                                      <i class="glyphicon glyphicon-user"></i>
                                  </span>
                              </a>
                          </li>

                          <li role="presentation" class="disabled">
                              <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Emergency">
                                  <span class="round-tab">
                                      <i class="fa fa-phone"></i>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </div>

                  @if(count($errors)>0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif

                  @if(session()->has('message'))
                    <div class="alert alert-danger">
                      {{session()->get('message')}}
                    </div>
                  @endif

                  <form role="form" method="post" class="bodybackground" action="{{route('stdRegestation')}}">
                      <div class="tab-content">
                          <div class="tab-pane active" role="tabpanel" id="step1">
                              <div class="step33 flable">
                                  <div class="row">
                                      <h2 class="text">Student Details</h2>
                                      <br>
                                      <div class="col-md-6">
                                          <label for="exampleInputEmail1">Admission No</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Admission No" name="admNo">
                                      </div>
                                      <div class="col-md-6">
                                          <label for="exampleInputEmail1">Admission Date</label>
                                          <input id="date" type="date" class="form-control" name="addDate">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <label for="exampleInputEmail1">Name with initials</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name with initials" name="fullName">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <label for="exampleInputEmail1">Surname</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Surname" name="surname">
                                      </div>
                                      <div class="col-md-6">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="fname">
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
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Distance to school" name="far" style="width: 92%;">
                                          <label style="float:right;margin-top:-30px;">Km</label>
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
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="mPhone">
                                      </div>
                                      <div class="col-md-6">
                                          <label for="exampleInputEmail1">Land Number</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="lPhone">
                                      </div>
                                  </div>
                              </div>
                              <br>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-primary next-step rebotton">Save and continue</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step2">
                              <div class="step33 flable">
                                  <div class="step_21">
                                      <!-- father's details -->
                                      <div class="row">
                                          <h2 class="text">Parents Details</h2>
                                          <br>
                                          <h3 style="color: #001f4d;">Father's Details</h3>
                                          <br>
                                          <div class="col-md-6">
                                              <label for="exampleInputEmail1">Father's name</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="fathName">
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
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">NIC Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIC Number" name="fathNIC"
                                            style="width: 94%;"><label style="float:right;margin-top:-30px;">V</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Old Boys</label>
                                            <div class="row">
                                                <div class="col-md-3 col-xs-3">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="fatOld" id="inlineRadio2" value="YES"> YES
                                                    </label>
                                                </div>
                                                <div class="col-md-9 col-xs-9">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="fatOld" id="inlineRadio3" value="NO"> NO
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <label for="exampleInputEmail1">Permanent Addresse</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="fathPAddress">
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <label for="exampleInputEmail1">Work's Place Address</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="fathJobAddress">
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <label for="exampleInputEmail1">Email Address</label>
                                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Addresse" name="fathEmail">
                                          </div>

                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label for="exampleInputEmail1">Mobile Number</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="fathMNo">
                                          </div>
                                          <div class="col-md-6">
                                              <label for="exampleInputEmail1">Work's Place</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="fathJobNo">
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
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="motName">
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
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">NIC Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIC Number" name="mothNIC"
                                            style="width: 94%;"><label style="float:right;margin-top:-30px;">V</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Old Boys</label>
                                            <div class="row">
                                                <div class="col-md-3 col-xs-3">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="mothOld" id="inlineRadio2" value="Old Boys"> YES
                                                    </label>
                                                </div>
                                                <div class="col-md-9 col-xs-9">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="mothOld" id="inlineRadio3" value="---"> NO
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <label for="exampleInputEmail1">Permanent Addresse</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="motPAddress">
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <label for="exampleInputEmail1">Work's Place Address</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="motJobAddress">
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1">Email Address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Addresse" name="fathEmail">
                                        </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label for="exampleInputEmail1">Mobile Number</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="motMNo">
                                          </div>
                                          <div class="col-md-6">
                                              <label for="exampleInputEmail1">Work's Place</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="motJobNo">
                                          </div>
                                      </div>
                                      <!-- mother's Detailse -->

                                      <br>

                                  </div>
                                  <div class="step-22">

                                  </div>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                  <li><button style="margin-right:10px;" type="button" class="btn btn-primary btn-info-full next-step rebotton">Save and continue</button></li>
                              </ul>
                          </div>

                                      <!-- Guardian's Detailse -->
                          <div class="tab-pane" role="tabpanel" id="step3">
                              <div class="step33 flable">
                                  <div class="row">
                                      <h2 class="text">Guardian's Detailses</h2>
                                      <br>
                                      <div class="col-md-6">
                                          <label for="exampleInputEmail1">Guardian's name</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="guaName">
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
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">NIC Number</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIC Number" name="guaNIC"
                                        style="width: 94%;"><label style="float:right;margin-top:-30px;">V</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Old Boys</label>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-3">
                                                <label class="radio-inline">
                                                    <input type="radio" name="guaOld" id="inlineRadio2" value="Old Boys"> YES
                                                </label>
                                            </div>
                                            <div class="col-md-9 col-xs-9">
                                                <label class="radio-inline">
                                                    <input type="radio" name="guaOld" id="inlineRadio3" value="---"> NO
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <label for="exampleInputEmail1">Permanent Addresse</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="guaPAddress">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <label for="exampleInputEmail1">Work's Place Address</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="guaJobAddress">
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Addresse" name="fathEmail">
                                    </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <label for="exampleInputEmail1">Mobile Number</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="guaMNo">
                                      </div>
                                      <div class="col-md-6">
                                          <label for="exampleInputEmail1">Work's Place</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="guaJobNo">
                                      </div>
                                  </div>
                                      <!-- Guardian's Detailse -->

                                  <br>

                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                  <li><button type="button" class="btn btn-primary btn-info-full next-step rebotton">Save and continue</button></li>
                              </ul>
                          </div>


                                      <!-- Emergency Notices's Detailse -->
                          <div class="tab-pane" role="tabpanel" id="complete">
                              <div class="step33 flable">
                                  <div class="row">
                                      <h2 class="text">Emergency Notices</h2>
                                      <br>
                                      <div class="col-md-6">
                                          <label for="exampleInputEmail1">Name</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="emeName">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <label for="exampleInputEmail1">Family Member in School</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Family Member 1" name="emeMember1"><br>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Family Member 2" name="emeMember2"><br>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Family Member 3" name="emeMember3">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <label for="exampleInputEmail1">Permanent Addresse</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="emePAddress">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <label for="exampleInputEmail1">Work's Place Address</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Addresse" name="emeJobAddress">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <label for="exampleInputEmail1">Mobile Number</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="emeMNo">
                                      </div>
                                      <div class="col-md-6">
                                          <label for="exampleInputEmail1">Work's Place</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="emeJobNo">
                                      </div>
                                  </div>
                                      <!-- Emergency Notices's Detailse -->

                                  <br>

                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="submit" class="btn btn-primary btn-info-full next-step rebotton">Submit</button></li>
                              </ul>

                          </div>
                          {{ csrf_field() }}
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </section>
         </div>
      </div>
      <div class="col-md-2"></div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

      <script type="text/javascript">
          $(document).ready(function () {
              //Initialize tooltips
              $('.nav-tabs > li a[title]').tooltip();

              //Wizard
              $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

                  var $target = $(e.target);

                  if ($target.parent().hasClass('disabled')) {
                      return false;
                  }
              });

              $(".next-step").click(function (e) {

                  var $active = $('.wizard .nav-tabs li.active');
                  $active.next().removeClass('disabled');
                  nextTab($active);

              });
              $(".prev-step").click(function (e) {

                  var $active = $('.wizard .nav-tabs li.active');
                  prevTab($active);

              });
          });

          function nextTab(elem) {
              $(elem).next().find('a[data-toggle="tab"]').click();
          }
          function prevTab(elem) {
              $(elem).prev().find('a[data-toggle="tab"]').click();
          }


          //according menu

          $(document).ready(function()
          {
              //Add Inactive Class To All Accordion Headers
              $('.accordion-header').toggleClass('inactive-header');

              //Set The Accordion Content Width
              var contentwidth = $('.accordion-header').width();
              $('.accordion-content').css({});

              //Open The First Accordion Section When Page Loads
              $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
              $('.accordion-content').first().slideDown().toggleClass('open-content');

              // The Accordion Effect
              $('.accordion-header').click(function () {
                  if($(this).is('.inactive-header')) {
                      $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
                      $(this).toggleClass('active-header').toggleClass('inactive-header');
                      $(this).next().slideToggle().toggleClass('open-content');
                  }

                  else {
                      $(this).toggleClass('active-header').toggleClass('inactive-header');
                      $(this).next().slideToggle().toggleClass('open-content');
                  }
              });

              return false;
          });
      </script>
@endsection
