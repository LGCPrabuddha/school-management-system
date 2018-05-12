<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{

  //result chart
  public function viewStudentRisult()
  {
    $user = Session()->get('user');

    $class = $user->current_class;

    $advance = 0;

    switch ($class) {
        case '6-A':
            $table = 'class6_as';
            break;
        case '6-B':
            $table = 'class6_bs';
            break;
        case '6-C':
            $table = 'class6_cs';
            break;
        case '6-D':
            $table = 'class6_ds';
            break;
        case '6-E':
            $table = 'class6_es';
            break;
        case '6-F':
            $table = 'class6_fs';
            break;
        case '6-G':
            $table = 'class6_gs';
            break;
        case '6-H':
            $table = 'class6_hs';
            break;
        case '6-I':
            $table = 'class6_is';
            break;
        case '6-J':
            $table = 'class6_js';
            break;
        case '7-A':
            $table = 'class7_as';
            break;
        case '7-B':
            $table = 'class7_bs';
            break;
        case '7-C':
            $table = 'class7_cs';
            break;
        case '7-D':
            $table = 'class7_ds';
            break;
        case '7-E':
            $table = 'class7_es';
            break;
        case '7-F':
            $table = 'class7_fs';
            break;
        case '7-G':
            $table = 'class7_gs';
            break;
        case '7-H':
            $table = 'class7_hs';
            break;
        case '7-I':
            $table = 'class7_is';
            break;
        case '7-J':
            $table = 'class7_js';
            break;
        case '8-A':
            $table = 'class8_as';
            break;
        case '8-B':
            $table = 'class8_bs';
            break;
        case '8-C':
            $table = 'class8_cs';
            break;
        case '8-D':
            $table = 'class8_ds';
            break;
        case '8-E':
            $table = 'class8_es';
            break;
        case '8-F':
            $table = 'class8_fs';
            break;
        case '8-G':
            $table = 'class8_gs';
            break;
        case '8-H':
            $table = 'class8_hs';
            break;
        case '8-I':
            $table = 'class8_is';
            break;
        case '8-J':
            $table = 'class8_js';
            break;
        case '9-A':
            $table = 'class9_as';
            break;
        case '9-B':
            $table = 'class9_bs';
            break;
        case '9-C':
            $table = 'class9_cs';
            break;
        case '9-D':
            $table = 'class9_ds';
            break;
        case '9-E':
            $table = 'class9_es';
            break;
        case '9-F':
            $table = 'class9_fs';
            break;
        case '9-G':
            $table = 'class9_gs';
            break;
        case '9-H':
            $table = 'class9_hs';
            break;
        case '9-I':
            $table = 'class9_is';
            break;
        case '9-J':
            $table = 'class9_js';
            break;
        case '10-A':
            $table = 'class10_as';
            $advance = 1;
            break;
        case '10-B':
            $table = 'class10_bs';
            $advance = 1;
            break;
        case '10-C':
            $table = 'class10_cs';
            $advance = 1;
            break;
        case '10-D':
            $table = 'class10_ds';
            $advance = 1;
            break;
        case '10-E':
            $table = 'class10_es';
            $advance = 1;
            break;
        case '10-F':
            $table = 'class10_fs';
            $advance = 1;
            break;
        case '10-G':
            $table = 'class10_gs';
            $advance = 1;
            break;
        case '10-H':
            $table = 'class10_hs';
            $advance = 1;
            break;
        case '10-I':
            $table = 'class10_is';
            $advance = 1;
            break;
        case '10-J':
            $table = 'class10_js';
            $advance = 1;
            break;
        case '11-A':
            $table = 'class11_as';
            $advance = 1;
            break;
        case '11-B':
            $table = 'class11_bs';
            $advance = 1;
            break;
        case '11-C':
            $table = 'class11_cs';
            $advance = 1;
            break;
        case '11-D':
            $table = 'class11_ds';
            $advance = 1;
            break;
        case '11-E':
            $table = 'class11_es';
            $advance = 1;
            break;
        case '11-F':
            $table = 'class11_fs';
            $advance = 1;
            break;
        case '11-G':
            $table = 'class11_gs';
            $advance = 1;
            break;
        case '11-H':
            $table = 'class11_hs';
            $advance = 1;
            break;
        case '11-I':
            $table = 'class11_is';
            $advance = 1;
            break;
        case '11-J':
            $table = 'class11_js';
            $advance = 1;
            break;
        default:
            //code to be executed if n is different from all labels;
    }

    $studentResults = DB::table($table)
        ->select(DB::raw("*"))
        ->where('year', '=', date('Y'))
        ->where('student', '=', $user->admition)
        ->get();

  if ($advance != 1) {

    foreach ($studentResults as $studentResult) {
      $examResults = array(
                          $studentResult->religion1stTerm,$studentResult->sinhala1stTerm,
                          $studentResult->maths1stTerm,
                          $studentResult->seince1stTerm,$studentResult->english1stTerm,
                          $studentResult->history1stTerm,$studentResult->geography1stTerm,
                          $studentResult->citizenStudy1stTerm,$studentResult->it1stTerm,
                          $studentResult->esthetics1stTerm,$studentResult->health1stTerm,
                          $studentResult->tamil1stTerm,$studentResult->practicalTechnology1stTerm,

                          $studentResult->religion2ndTerm,$studentResult->sinhala2ndTerm,
                          $studentResult->maths2ndTerm,
                          $studentResult->seince2ndTerm,$studentResult->english2ndTerm,
                          $studentResult->history2ndTerm,$studentResult->geography2ndTerm,
                          $studentResult->citizenStudy2ndTerm,$studentResult->it2ndTerm,
                          $studentResult->esthetics2ndTerm,$studentResult->health2ndTerm,
                          $studentResult->tamil2ndTerm,$studentResult->practicalTechnology2ndTerm,

                          $studentResult->religion3rdTerm,$studentResult->sinhala3rdTerm,
                          $studentResult->maths3rdTerm,
                          $studentResult->seince3rdTerm,$studentResult->english3rdTerm,
                          $studentResult->history3rdTerm,$studentResult->geography3rdTerm,
                          $studentResult->citizenStudy3rdTerm,$studentResult->it3rdTerm,
                          $studentResult->esthetics3rdTerm,$studentResult->health3rdTerm,
                          $studentResult->tamil3rdTerm,$studentResult->practicalTechnology3rdTerm,
                        );
              }
    return view('student/studentResult9',['examResults'=>$examResults]);
  }else {
    foreach ($studentResults as $studentResult) {
      $examResults = array(
                          $studentResult->religion1stTerm,$studentResult->sinhala1stTerm,
                          $studentResult->maths1stTerm,
                          $studentResult->seince1stTerm,$studentResult->english1stTerm,
                          $studentResult->history1stTerm,$studentResult->grouop1Sub1stTerm,
                          $studentResult->grouop2Sub1stTerm,$studentResult->grouop3Sub1stTerm,

                          $studentResult->religion2ndTerm,$studentResult->sinhala2ndTerm,
                          $studentResult->maths2ndTerm,
                          $studentResult->seince2ndTerm,$studentResult->english2ndTerm,
                          $studentResult->history2ndTerm,$studentResult->grouop1Sub2ndTerm,
                          $studentResult->grouop2Sub2ndTerm,$studentResult->grouop3Sub2ndTerm,

                          $studentResult->religion3rdTerm,$studentResult->sinhala3rdTerm,
                          $studentResult->maths3rdTerm,
                          $studentResult->seince3rdTerm,$studentResult->english3rdTerm,
                          $studentResult->history3rdTerm,$studentResult->grouop1Sub3rdTerm,
                          $studentResult->grouop2Sub3rdTerm,$studentResult->grouop3Sub3rdTerm,
                        );
              }
  }

    return view('student/studentResult10',['examResults'=>$examResults]);
  }

  // student report
  public function studentReport()
  {

    $user = Session()->get('user');

    $class = $user->current_class;

    $advance = 0;

    switch ($class) {
        case '6-A':
            $table = 'class6_as';
            break;
        case '6-B':
            $table = 'class6_bs';
            break;
        case '6-C':
            $table = 'class6_cs';
            break;
        case '6-D':
            $table = 'class6_ds';
            break;
        case '6-E':
            $table = 'class6_es';
            break;
        case '6-F':
            $table = 'class6_fs';
            break;
        case '6-G':
            $table = 'class6_gs';
            break;
        case '6-H':
            $table = 'class6_hs';
            break;
        case '6-I':
            $table = 'class6_is';
            break;
        case '6-J':
            $table = 'class6_js';
            break;
        case '7-A':
            $table = 'class7_as';
            break;
        case '7-B':
            $table = 'class7_bs';
            break;
        case '7-C':
            $table = 'class7_cs';
            break;
        case '7-D':
            $table = 'class7_ds';
            break;
        case '7-E':
            $table = 'class7_es';
            break;
        case '7-F':
            $table = 'class7_fs';
            break;
        case '7-G':
            $table = 'class7_gs';
            break;
        case '7-H':
            $table = 'class7_hs';
            break;
        case '7-I':
            $table = 'class7_is';
            break;
        case '7-J':
            $table = 'class7_js';
            break;
        case '8-A':
            $table = 'class8_as';
            break;
        case '8-B':
            $table = 'class8_bs';
            break;
        case '8-C':
            $table = 'class8_cs';
            break;
        case '8-D':
            $table = 'class8_ds';
            break;
        case '8-E':
            $table = 'class8_es';
            break;
        case '8-F':
            $table = 'class8_fs';
            break;
        case '8-G':
            $table = 'class8_gs';
            break;
        case '8-H':
            $table = 'class8_hs';
            break;
        case '8-I':
            $table = 'class8_is';
            break;
        case '8-J':
            $table = 'class8_js';
            break;
        case '9-A':
            $table = 'class9_as';
            break;
        case '9-B':
            $table = 'class9_bs';
            break;
        case '9-C':
            $table = 'class9_cs';
            break;
        case '9-D':
            $table = 'class9_ds';
            break;
        case '9-E':
            $table = 'class9_es';
            break;
        case '9-F':
            $table = 'class9_fs';
            break;
        case '9-G':
            $table = 'class9_gs';
            break;
        case '9-H':
            $table = 'class9_hs';
            break;
        case '9-I':
            $table = 'class9_is';
            break;
        case '9-J':
            $table = 'class9_js';
            break;
        case '10-A':
            $table = 'class10_as';
            $advance = 1;
            break;
        case '10-B':
            $table = 'class10_bs';
            $advance = 1;
            break;
        case '10-C':
            $table = 'class10_cs';
            $advance = 1;
            break;
        case '10-D':
            $table = 'class10_ds';
            $advance = 1;
            break;
        case '10-E':
            $table = 'class10_es';
            $advance = 1;
            break;
        case '10-F':
            $table = 'class10_fs';
            $advance = 1;
            break;
        case '10-G':
            $table = 'class10_gs';
            $advance = 1;
            break;
        case '10-H':
            $table = 'class10_hs';
            $advance = 1;
            break;
        case '10-I':
            $table = 'class10_is';
            $advance = 1;
            break;
        case '10-J':
            $table = 'class10_js';
            $advance = 1;
            break;
        case '11-A':
            $table = 'class11_as';
            $advance = 1;
            break;
        case '11-B':
            $table = 'class11_bs';
            $advance = 1;
            break;
        case '11-C':
            $table = 'class11_cs';
            $advance = 1;
            break;
        case '11-D':
            $table = 'class11_ds';
            $advance = 1;
            break;
        case '11-E':
            $table = 'class11_es';
            $advance = 1;
            break;
        case '11-F':
            $table = 'class11_fs';
            $advance = 1;
            break;
        case '11-G':
            $table = 'class11_gs';
            $advance = 1;
            break;
        case '11-H':
            $table = 'class11_hs';
            $advance = 1;
            break;
        case '11-I':
            $table = 'class11_is';
            $advance = 1;
            break;
        case '11-J':
            $table = 'class11_js';
            $advance = 1;
            break;
        default:
            //code to be executed if n is different from all labels;
    }

    $studentResults = DB::table($table)
        ->select(DB::raw("*"))
        ->where('year', '=', date('Y'))
        ->where('student', '=', $user->admition)
        ->get();

    $results = DB::table($table)
        ->select(DB::raw("*"))
        ->where('year', '=', date('Y'))
        ->get();

    $max1st = DB::table($table)->select(DB::raw("*"))->where('year', '=', date('Y'))
        ->max('avg1stTerm');

    $max2nd = DB::table($table)->select(DB::raw("*"))->where('year', '=', date('Y'))
        ->max('avg2ndTerm');

    $max3rd = DB::table($table)->select(DB::raw("*"))->where('year', '=', date('Y'))
        ->max('avg3rdTerm');

    $totelStudent = sizeof($results);

    if ($advance != 1) {
      return view('student/studentReport9',['studentResults'=>$studentResults,
                                            'totelStudent'=>$totelStudent,
                                            'max1st'=>$max1st,
                                            'max2nd'=>$max2nd,
                                            'max3rd'=>$max3rd]);
    }else {
      return view('student/studentReport10',['studentResults'=>$studentResults,
                                            'totelStudent'=>$totelStudent,
                                            'max1st'=>$max1st,
                                            'max2nd'=>$max2nd,
                                            'max3rd'=>$max3rd]);
    }
  }

  //view O/L all result pie chart
  public function viewOLResult()
  {
    //get all students O/L results
    $allStudents1  = DB::table('ol_results')
        ->select(DB::raw("*"))
        ->where('year', '=', date('Y')-1)
        ->get();

    $allStudents2  = DB::table('ol_results')
        ->select(DB::raw("*"))
        ->where('year', '=', date('Y')-2)
        ->get();

    $allStudents3  = DB::table('ol_results')
        ->select(DB::raw("*"))
        ->where('year', '=', date('Y')-3)
        ->get();

    //all student face in O/L exam
   $totleStudents1 = sizeof($allStudents1);
   $totleStudents2 = sizeof($allStudents2);
   $totleStudents3 = sizeof($allStudents3);

   $passStudent1=0;
    //check O/L pass students
    foreach ($allStudents1 as $allStudent) {
      $beforePass=0;
      $pass=0;

      if (($allStudent->maths != 'F') && ($allStudent->maths != 'S')) {
        $pass++;
        $beforePass++;
      }elseif ($allStudent->maths != 'F') {
        $beforePass++;
      }

      if (($allStudent->science != 'F') && ($allStudent->science != 'S')) {
        $pass++;
        $beforePass++;
      }elseif ($allStudent->science != 'F') {
        $beforePass++;
      }

      if (($allStudent->religion != 'F') && ($allStudent->religion != 'S')) {
        $pass++;
        $beforePass++;
      }elseif ($allStudent->religion != 'F') {
        $beforePass++;
      }

      if (($allStudent->sinhala != 'F') && ($allStudent->sinhala != 'S')) {
        $pass++;
        $beforePass++;
      }elseif ($allStudent->sinhala != 'F') {
        $beforePass++;
      }

      if (($allStudent->english != 'F') && ($allStudent->english != 'S')) {
        $pass++;
        $beforePass++;
      }elseif ($allStudent->english != 'F') {
        $beforePass++;
      }

      if (($allStudent->history != 'F') && ($allStudent->history != 'S')) {
        $pass++;
        $beforePass++;
      }elseif ($allStudent->history != 'F') {
        $beforePass++;
      }

      if ($allStudent->subjectGroup1 != 'F') {
        $beforePass++;
      }

      if ($allStudent->subjectGroup2 != 'F') {
        $beforePass++;
      }

      if ($allStudent->subjectGroup3 != 'F') {
        $beforePass++;
      }

      if (($pass > 2) && ($beforePass > 5)) {
        $passStudent1++;

      }

    }

    $passStudent2=0;
     //check O/L pass students
     foreach ($allStudents2 as $allStudent) {
       $beforePass=0;
       $pass=0;

       if (($allStudent->maths != 'F') && ($allStudent->maths != 'S')) {
         $pass++;
         $beforePass++;
       }elseif ($allStudent->maths != 'F') {
         $beforePass++;
       }

       if (($allStudent->science != 'F') && ($allStudent->science != 'S')) {
         $pass++;
         $beforePass++;
       }elseif ($allStudent->science != 'F') {
         $beforePass++;
       }

       if (($allStudent->religion != 'F') && ($allStudent->religion != 'S')) {
         $pass++;
         $beforePass++;
       }elseif ($allStudent->religion != 'F') {
         $beforePass++;
       }

       if (($allStudent->sinhala != 'F') && ($allStudent->sinhala != 'S')) {
         $pass++;
         $beforePass++;
       }elseif ($allStudent->sinhala != 'F') {
         $beforePass++;
       }

       if (($allStudent->english != 'F') && ($allStudent->english != 'S')) {
         $pass++;
         $beforePass++;
       }elseif ($allStudent->english != 'F') {
         $beforePass++;
       }

       if (($allStudent->history != 'F') && ($allStudent->history != 'S')) {
         $pass++;
         $beforePass++;
       }elseif ($allStudent->history != 'F') {
         $beforePass++;
       }

       if ($allStudent->subjectGroup1 != 'F') {
         $beforePass++;
       }

       if ($allStudent->subjectGroup2 != 'F') {
         $beforePass++;
       }

       if ($allStudent->subjectGroup3 != 'F') {
         $beforePass++;
       }

       if (($pass > 2) && ($beforePass > 5)) {
         $passStudent2++;

       }

     }


     $passStudent3=0;
      //check O/L pass students
      foreach ($allStudents3 as $allStudent) {
        $beforePass=0;
        $pass=0;

        if (($allStudent->maths != 'F') && ($allStudent->maths != 'S')) {
          $pass++;
          $beforePass++;
        }elseif ($allStudent->maths != 'F') {
          $beforePass++;
        }

        if (($allStudent->science != 'F') && ($allStudent->science != 'S')) {
          $pass++;
          $beforePass++;
        }elseif ($allStudent->science != 'F') {
          $beforePass++;
        }

        if (($allStudent->religion != 'F') && ($allStudent->religion != 'S')) {
          $pass++;
          $beforePass++;
        }elseif ($allStudent->religion != 'F') {
          $beforePass++;
        }

        if (($allStudent->sinhala != 'F') && ($allStudent->sinhala != 'S')) {
          $pass++;
          $beforePass++;
        }elseif ($allStudent->sinhala != 'F') {
          $beforePass++;
        }

        if (($allStudent->english != 'F') && ($allStudent->english != 'S')) {
          $pass++;
          $beforePass++;
        }elseif ($allStudent->english != 'F') {
          $beforePass++;
        }

        if (($allStudent->history != 'F') && ($allStudent->history != 'S')) {
          $pass++;
          $beforePass++;
        }elseif ($allStudent->history != 'F') {
          $beforePass++;
        }

        if ($allStudent->subjectGroup1 != 'F') {
          $beforePass++;
        }

        if ($allStudent->subjectGroup2 != 'F') {
          $beforePass++;
        }

        if ($allStudent->subjectGroup3 != 'F') {
          $beforePass++;
        }

        if (($pass > 2) && ($beforePass > 5)) {
          $passStudent3++;

        }

      }

    return view('student/viewOLResult',['passStudent1'=>$passStudent1,'totleStudents1'=>$totleStudents1,
                                        'passStudent2'=>$passStudent2,'totleStudents2'=>$totleStudents2,
                                        'passStudent3'=>$passStudent3,'totleStudents3'=>$totleStudents3
                                        ]);
  }

  //view O/L result bar chart
  public function viewOLResultBarChart()
  {

    $user = Session()->get('user');


      $year = date('Y')-1;

    //calculate maths risult
    $maths_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('maths', '=', 'A')->get();

    $maths_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('maths', '=', 'B')->get();

    $maths_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('maths', '=', 'C')->get();

    $maths_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('maths', '=', 'S')->get();

    $maths_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('maths', '=', 'F')->get();


    //calculate science risult
    $science_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('science', '=', 'A')->get();

    $science_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('science', '=', 'B')->get();

    $science_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('science', '=', 'C')->get();

    $science_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('science', '=', 'S')->get();

    $science_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('science', '=', 'F')->get();


    //calculate religion risult
    $religion_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('religion', '=', 'A')->get();

    $religion_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('religion', '=', 'B')->get();

    $religion_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('religion', '=', 'C')->get();

    $religion_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('religion', '=', 'S')->get();

    $religion_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('religion', '=', 'F')->get();

    //calculate sinhala risult
    $sinhala_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('sinhala', '=', 'A')->get();

    $sinhala_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('sinhala', '=', 'B')->get();

    $sinhala_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('sinhala', '=', 'C')->get();

    $sinhala_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('sinhala', '=', 'S')->get();

    $sinhala_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('sinhala', '=', 'F')->get();


    //calculate english risult
    $english_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('english', '=', 'A')->get();

    $english_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('english', '=', 'B')->get();

    $english_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('english', '=', 'C')->get();

    $english_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('english', '=', 'S')->get();

    $english_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('english', '=', 'F')->get();


    //calculate history risult
    $history_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('history', '=', 'A')->get();

    $history_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('history', '=', 'B')->get();

    $history_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('history', '=', 'C')->get();

    $history_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('history', '=', 'S')->get();

    $history_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('history', '=', 'F')->get();


    //calculate subjectGroup1 risult
    $subjectGroup1_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup1', '=', 'A')->get();

    $subjectGroup1_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup1', '=', 'B')->get();

    $subjectGroup1_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup1', '=', 'C')->get();

    $subjectGroup1_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup1', '=', 'S')->get();

    $subjectGroup1_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup1', '=', 'F')->get();


    //calculate subjectGroup2 risult
    $subjectGroup2_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup2', '=', 'A')->get();

    $subjectGroup2_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup2', '=', 'B')->get();

    $subjectGroup2_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup2', '=', 'C')->get();

    $subjectGroup2_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup2', '=', 'S')->get();

    $subjectGroup2_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup2', '=', 'F')->get();


    //calculate subjectGroup3 risult
    $subjectGroup3_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup3', '=', 'A')->get();

    $subjectGroup3_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup3', '=', 'B')->get();

    $subjectGroup3_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup3', '=', 'C')->get();

    $subjectGroup3_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup3', '=', 'S')->get();

    $subjectGroup3_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup3', '=', 'F')->get();


    //calculate maths risult
    $maths_A = sizeof($maths_A); $maths_B = sizeof($maths_B); $maths_C = sizeof($maths_C);
    $maths_S = sizeof($maths_S); $maths_F = sizeof($maths_F);

    //calculate science risult
    $science_A = sizeof($science_A); $science_B = sizeof($science_B); $science_C = sizeof($science_C);
    $science_S = sizeof($science_S); $science_F = sizeof($science_F);

    //calculate religion risult
    $religion_A = sizeof($religion_A); $religion_B = sizeof($religion_B); $religion_C = sizeof($religion_C);
    $religion_S = sizeof($religion_S); $religion_F = sizeof($religion_F);

    //calculate sinhala risult
    $sinhala_A = sizeof($sinhala_A); $sinhala_B = sizeof($sinhala_B); $sinhala_C = sizeof($sinhala_C);
    $sinhala_S = sizeof($sinhala_S); $sinhala_F = sizeof($sinhala_F);

    //calculate english risult
    $english_A = sizeof($english_A); $english_B = sizeof($english_B); $english_C = sizeof($english_C);
    $english_S = sizeof($english_S); $english_F = sizeof($english_F);

    //calculate history risult
    $history_A = sizeof($history_A); $history_B = sizeof($history_B); $history_C = sizeof($history_C);
    $history_S = sizeof($history_S); $history_F = sizeof($history_F);

    //calculate subjectGroup1 risult
    $subjectGroup1_A = sizeof($subjectGroup1_A); $subjectGroup1_B = sizeof($subjectGroup1_B); $subjectGroup1_C = sizeof($subjectGroup1_C);
    $subjectGroup1_S = sizeof($subjectGroup1_S); $subjectGroup1_F = sizeof($subjectGroup1_F);

    //calculate subjectGroup2 risult
    $subjectGroup2_A = sizeof($subjectGroup2_A); $subjectGroup2_B = sizeof($subjectGroup2_B); $subjectGroup2_C = sizeof($subjectGroup2_C);
    $subjectGroup2_S = sizeof($subjectGroup2_S); $subjectGroup2_F = sizeof($subjectGroup2_F);

    //calculate subjectGroup3 risult
    $subjectGroup3_A = sizeof($subjectGroup3_A); $subjectGroup3_B = sizeof($subjectGroup3_B); $subjectGroup3_C = sizeof($subjectGroup3_C);
    $subjectGroup3_S = sizeof($subjectGroup3_S); $subjectGroup3_F = sizeof($subjectGroup3_F);

    $results = array('maths_A'=>$maths_A,'maths_B'=>$maths_B,'maths_C'=>$maths_C,'maths_S'=>$maths_S,'maths_F'=>$maths_F,
                    'science_A'=>$science_A,'science_B'=>$science_B,'science_C'=>$science_C,'science_S'=>$science_S,'science_F'=>$science_F,
                    'religion_A'=>$religion_A,'religion_B'=>$religion_B,'religion_C'=>$religion_C,'religion_S'=>$religion_S,'religion_F'=>$religion_F,
                    'sinhala_A'=>$sinhala_A,'sinhala_B'=>$sinhala_B,'sinhala_C'=>$sinhala_C,'sinhala_S'=>$sinhala_S,'sinhala_F'=>$sinhala_F,
                    'english_A'=>$english_A,'english_B'=>$english_B,'english_C'=>$english_C,'english_S'=>$english_S,'english_F'=>$english_F,
                    'history_A'=>$history_A,'history_B'=>$history_B,'history_C'=>$history_C,'history_S'=>$history_S,'history_F'=>$history_F,
                    'subjectGroup1_A'=>$subjectGroup1_A,'subjectGroup1_B'=>$subjectGroup1_B,'subjectGroup1_C'=>$subjectGroup1_C,'subjectGroup1_S'=>$subjectGroup1_S,'subjectGroup1_F'=>$subjectGroup1_F,
                    'subjectGroup2_A'=>$subjectGroup2_A,'subjectGroup2_B'=>$subjectGroup2_B,'subjectGroup2_C'=>$subjectGroup2_C,'subjectGroup2_S'=>$subjectGroup2_S,'subjectGroup2_F'=>$subjectGroup2_F,
                    'subjectGroup3_A'=>$subjectGroup3_A,'subjectGroup3_B'=>$subjectGroup3_B,'subjectGroup3_C'=>$subjectGroup3_C,'subjectGroup3_S'=>$subjectGroup3_S,'subjectGroup3_F'=>$subjectGroup3_F
                    );


      return view('student/viewOLrisultBarChart',['results'=>$results]);

  }

  //set extra O/L data
  public function extraData()
  {

    $years = [];

    for ($year=date('Y')-2; $year > date('Y') - 5; $year--) {
      $years[] = $year;
    }
    return view('student/extraResultOL',['years'=>$years]);
  }

  public function getExtraData(Request $request)
  {

    $user = Session()->get('user');

    $year = $request->input('year');


    //calculate maths risult
    $maths_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('maths', '=', 'A')->get();

    $maths_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('maths', '=', 'B')->get();

    $maths_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('maths', '=', 'C')->get();

    $maths_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('maths', '=', 'S')->get();

    $maths_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('maths', '=', 'F')->get();


    //calculate science risult
    $science_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('science', '=', 'A')->get();

    $science_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('science', '=', 'B')->get();

    $science_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('science', '=', 'C')->get();

    $science_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('science', '=', 'S')->get();

    $science_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('science', '=', 'F')->get();


    //calculate religion risult
    $religion_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('religion', '=', 'A')->get();

    $religion_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('religion', '=', 'B')->get();

    $religion_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('religion', '=', 'C')->get();

    $religion_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('religion', '=', 'S')->get();

    $religion_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('religion', '=', 'F')->get();

    //calculate sinhala risult
    $sinhala_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('sinhala', '=', 'A')->get();

    $sinhala_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('sinhala', '=', 'B')->get();

    $sinhala_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('sinhala', '=', 'C')->get();

    $sinhala_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('sinhala', '=', 'S')->get();

    $sinhala_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('sinhala', '=', 'F')->get();


    //calculate english risult
    $english_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('english', '=', 'A')->get();

    $english_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('english', '=', 'B')->get();

    $english_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('english', '=', 'C')->get();

    $english_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('english', '=', 'S')->get();

    $english_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('english', '=', 'F')->get();


    //calculate history risult
    $history_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('history', '=', 'A')->get();

    $history_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('history', '=', 'B')->get();

    $history_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('history', '=', 'C')->get();

    $history_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('history', '=', 'S')->get();

    $history_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('history', '=', 'F')->get();


    //calculate subjectGroup1 risult
    $subjectGroup1_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup1', '=', 'A')->get();

    $subjectGroup1_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup1', '=', 'B')->get();

    $subjectGroup1_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup1', '=', 'C')->get();

    $subjectGroup1_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup1', '=', 'S')->get();

    $subjectGroup1_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup1', '=', 'F')->get();


    //calculate subjectGroup2 risult
    $subjectGroup2_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup2', '=', 'A')->get();

    $subjectGroup2_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup2', '=', 'B')->get();

    $subjectGroup2_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup2', '=', 'C')->get();

    $subjectGroup2_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup2', '=', 'S')->get();

    $subjectGroup2_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup2', '=', 'F')->get();


    //calculate subjectGroup3 risult
    $subjectGroup3_A = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup3', '=', 'A')->get();

    $subjectGroup3_B = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup3', '=', 'B')->get();

    $subjectGroup3_C = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup3', '=', 'C')->get();

    $subjectGroup3_S = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup3', '=', 'S')->get();

    $subjectGroup3_F = DB::table('ol_results')->select(DB::raw("*"))->where('year', '=', $year)
              ->where('subjectGroup3', '=', 'F')->get();


    //calculate maths risult
    $maths_A = sizeof($maths_A); $maths_B = sizeof($maths_B); $maths_C = sizeof($maths_C);
    $maths_S = sizeof($maths_S); $maths_F = sizeof($maths_F);

    //calculate science risult
    $science_A = sizeof($science_A); $science_B = sizeof($science_B); $science_C = sizeof($science_C);
    $science_S = sizeof($science_S); $science_F = sizeof($science_F);

    //calculate religion risult
    $religion_A = sizeof($religion_A); $religion_B = sizeof($religion_B); $religion_C = sizeof($religion_C);
    $religion_S = sizeof($religion_S); $religion_F = sizeof($religion_F);

    //calculate sinhala risult
    $sinhala_A = sizeof($sinhala_A); $sinhala_B = sizeof($sinhala_B); $sinhala_C = sizeof($sinhala_C);
    $sinhala_S = sizeof($sinhala_S); $sinhala_F = sizeof($sinhala_F);

    //calculate english risult
    $english_A = sizeof($english_A); $english_B = sizeof($english_B); $english_C = sizeof($english_C);
    $english_S = sizeof($english_S); $english_F = sizeof($english_F);

    //calculate history risult
    $history_A = sizeof($history_A); $history_B = sizeof($history_B); $history_C = sizeof($history_C);
    $history_S = sizeof($history_S); $history_F = sizeof($history_F);

    //calculate subjectGroup1 risult
    $subjectGroup1_A = sizeof($subjectGroup1_A); $subjectGroup1_B = sizeof($subjectGroup1_B); $subjectGroup1_C = sizeof($subjectGroup1_C);
    $subjectGroup1_S = sizeof($subjectGroup1_S); $subjectGroup1_F = sizeof($subjectGroup1_F);

    //calculate subjectGroup2 risult
    $subjectGroup2_A = sizeof($subjectGroup2_A); $subjectGroup2_B = sizeof($subjectGroup2_B); $subjectGroup2_C = sizeof($subjectGroup2_C);
    $subjectGroup2_S = sizeof($subjectGroup2_S); $subjectGroup2_F = sizeof($subjectGroup2_F);

    //calculate subjectGroup3 risult
    $subjectGroup3_A = sizeof($subjectGroup3_A); $subjectGroup3_B = sizeof($subjectGroup3_B); $subjectGroup3_C = sizeof($subjectGroup3_C);
    $subjectGroup3_S = sizeof($subjectGroup3_S); $subjectGroup3_F = sizeof($subjectGroup3_F);

    $results = array('maths_A'=>$maths_A,'maths_B'=>$maths_B,'maths_C'=>$maths_C,'maths_S'=>$maths_S,'maths_F'=>$maths_F,
                    'science_A'=>$science_A,'science_B'=>$science_B,'science_C'=>$science_C,'science_S'=>$science_S,'science_F'=>$science_F,
                    'religion_A'=>$religion_A,'religion_B'=>$religion_B,'religion_C'=>$religion_C,'religion_S'=>$religion_S,'religion_F'=>$religion_F,
                    'sinhala_A'=>$sinhala_A,'sinhala_B'=>$sinhala_B,'sinhala_C'=>$sinhala_C,'sinhala_S'=>$sinhala_S,'sinhala_F'=>$sinhala_F,
                    'english_A'=>$english_A,'english_B'=>$english_B,'english_C'=>$english_C,'english_S'=>$english_S,'english_F'=>$english_F,
                    'history_A'=>$history_A,'history_B'=>$history_B,'history_C'=>$history_C,'history_S'=>$history_S,'history_F'=>$history_F,
                    'subjectGroup1_A'=>$subjectGroup1_A,'subjectGroup1_B'=>$subjectGroup1_B,'subjectGroup1_C'=>$subjectGroup1_C,'subjectGroup1_S'=>$subjectGroup1_S,'subjectGroup1_F'=>$subjectGroup1_F,
                    'subjectGroup2_A'=>$subjectGroup2_A,'subjectGroup2_B'=>$subjectGroup2_B,'subjectGroup2_C'=>$subjectGroup2_C,'subjectGroup2_S'=>$subjectGroup2_S,'subjectGroup2_F'=>$subjectGroup2_F,
                    'subjectGroup3_A'=>$subjectGroup3_A,'subjectGroup3_B'=>$subjectGroup3_B,'subjectGroup3_C'=>$subjectGroup3_C,'subjectGroup3_S'=>$subjectGroup3_S,'subjectGroup3_F'=>$subjectGroup3_F
                    );


    return view('student/viewExtraData',['results'=>$results,'year'=>$year]);
  }

  //
  public function groupSubjectResult(Request $request)
  {

    $year = $request->input('year');

    $subjectGroups = DB::table('subject_groups')->select(DB::raw("*"))
                      ->where('year', '=', $year)->get();

    return view('student/groupSubjectResultView',['subjectGroups'=>$subjectGroups,'year'=>$year]);
  }

  public function studentProfile()
  {
    return view('student/studentDetails');
  }

}
