@extends('layout.adminmain')

@section('title')
  Teacher Registration
@endsection

@section('body')
<div class="col-md-2"></div>
      <div class="col-md-8">



          <div class="row">
              <section>
              <div class="wizard">
                  <div class="wizard-inner">
                      <div class="connecting-line" style="width:700px;"></div>
                      <ul class="nav nav-tabs bodybackground" role="tablist">

                          <li role="presentation" class="active" style="margin-left:50px;">
                              <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Personal">
                                  <span class="round-tab">
                                      <!-- <i class="glyphicon glyphicon-user"></i> -->
                                      <i class="glyphicon glyphicon-user"></i>
                                  </span>
                              </a>
                          </li>

                          <li role="presentation" class="disabled" style="margin-left:100px;">
                              <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Qualifications">
                                  <span class="round-tab">
                                      <i class="fa fa-graduation-cap"></i>
                                  </span>
                              </a>
                          </li>

                          <li role="presentation" class="disabled" style="margin-left:100px;">
                              <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Emergency">
                                  <span class="round-tab">
                                      <i class="fa fa-phone"></i>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </div>

                  <!-- @if(count($errors)>0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif

                  @if( session()->has('message'))
                    <div class="alert alert-danger">
                      {{ session()->get('message')}}
                    </div>
                  @endif -->

                  <form role="form" method="post" class="bodybackground" action="{{route('stdRegestation')}}">
                      <div class="tab-content">
                          <div class="tab-pane active" role="tabpanel" id="step1">
                              <div class="step33 flable">
                                <div class="row">
                                  <h2 class="text">Teacher Personal Details</h2>
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
                                        <label for="exampleInputEmail1">Name with initials</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name with initials" name="nameIniti">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full Name" name="fullName">
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
                                    <div class="col-md-8">
                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Addresse" name="teaEmail">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleInputEmail1">NIC Number</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIC Number" name="teaNIC"
                                        style="width: 94%;"><label style="float:right;margin-top:-30px;">V</label>
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
                              </div>
                              <br>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-primary next-step rebotton">Save and continue</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step2">
                              <div class="step33 flable">
                                  <div class="step_21">
                                    <!-- Qualifications details -->
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="text">Qualifications</h2>
                                          <br>
                                        </div>
                                      </div>
                                      <div class="row">
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
                                      <!--  -->

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
