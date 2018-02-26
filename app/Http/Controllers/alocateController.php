<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\User;
use App\ClassData;

// student classes 6
use App\class6A; use App\Class6B; use App\Class6C; use App\Class6D; use App\Class6E;
use App\Class6F; use App\Class6G; use App\Class6H; use App\Class6I; use App\Class6J;

// student classes 7
use App\Class7A; use App\Class7B; use App\Class7C; use App\Class7D; use App\Class7E;
use App\Class7F; use App\Class7G; use App\Class7H; use App\Class7I; use App\Class7J;

// student classes 8
use App\Class8A; use App\Class8B; use App\Class8C; use App\Class8D; use App\Class8E;
use App\Class8F; use App\Class8G; use App\Class8H; use App\Class8I; use App\Class8J;

// student classes 9
use App\Class9A; use App\Class9B; use App\Class9C; use App\Class9D; use App\Class9E;
use App\Class9F; use App\Class9G; use App\Class9H; use App\Class9I; use App\Class9J;

//grade heade
use App\Section;
use App\Temporarily;

class alocateController extends Controller
{
  // student view page
  public function studentAllocateview()
  {
    $year = date('Y');
    $years = [];

    for ($year--; $year > date('Y') - 7; $year--) {
      $years[] = $year;
    }

    return view('studentAllocate\studentAllocate',['years'=>$years]);
  }

  // teacher view page
  public function teacherAllocateview()
  {
    return view('teacherAllocate\teacherAllocate');
  }

  // studentAllocateClass
    public function studentAllocateClass(Request $request)
      {
        // student id validate
          $this->validate($request, [
            'stuId'   => 'numeric',
          ],[
              'stuId.numeric' => 'The registration number must be a number.',
            ]);

          $position = '';
          $results  = DB::table('users')
              ->select(DB::raw("*"))
              ->where('admition', '=', $request->input('stuId'))
              ->get();
          foreach ($results as $result){
            $position = $result->position;
          }

          $table = new User();
          $grade= $request->input('section') . $request->input('poshition');
          DB::table('users')
              ->where('admition', $request->input('stuId'))
              ->update(['current_class' => $grade,'current_year' =>date('Y')]);

          if ($position=="student") {

            if ($request->input('section')=="6") {

              if ($request->input('poshition')=="-A") {

                $table1 = new Class6A();


                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 6-A class');

              } elseif ($request->input('poshition')=="-B") {

                $table1 = new Class6B();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 6-B class');

              } elseif ($request->input('poshition')=="-C") {

                $table1 = new Class6C();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 6-C class');

              } elseif ($request->input('poshition')=="-D") {

                $table1 = new Class6D();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 6-D class');

              } elseif ($request->input('poshition')=="-E") {

                $table1 = new Class6E();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 6-E class');

              } elseif ($request->input('poshition')=="-F") {

                $table1 = new Class6F();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 6-F class');

              } elseif ($request->input('poshition')=="-G") {

                $table1 = new Class6G();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 6-G class');

              } elseif ($request->input('poshition')=="-H") {

                $table1 = new Class6H();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 6-H class');

              } elseif ($request->input('poshition')=="-I") {

                $table1 = new Class6I();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 6-I class');

              } elseif ($request->input('poshition')=="-J") {

                $table1 = new Class6J();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 6-J class');

              } else {
                # code...
              }

              //grade 7
            } elseif ($request->input('section')=="7") {

              if ($request->input('poshition')=="-A") {

                $table1 = new Class7A();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 7-A class');

              } elseif ($request->input('poshition')=="-B") {

                $table1 = new Class7B();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 7-B class');

              } elseif ($request->input('poshition')=="-C") {

                $table1 = new Class7C();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 7-C class');

              } elseif ($request->input('poshition')=="-D") {

                $table1 = new Class7D();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 7-D class');

              } elseif ($request->input('poshition')=="-E") {

                $table1 = new Class7E();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 7-E class');

              } elseif ($request->input('poshition')=="-F") {

                $table1 = new Class7F();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 7-F class');

              } elseif ($request->input('poshition')=="-G") {

                $table1 = new Class7G();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 7-G class');

              } elseif ($request->input('poshition')=="-H") {

                $table1 = new Class7H();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 7-H class');

              } elseif ($request->input('poshition')=="-I") {

                $table1 = new Class7I();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 7-I class');

              } elseif ($request->input('poshition')=="-J") {

                $table1 = new Class7J();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 7-J class');

              } else {
                # code...
              }

              //grade 8
            } elseif ($request->input('section')=="8") {

              if ($request->input('poshition')=="-A") {

                $table1 = new Class8A();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 8-A class');

              } elseif ($request->input('poshition')=="-B") {

                $table1 = new Class8B();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 8-B class');

              } elseif ($request->input('poshition')=="-C") {

                $table1 = new Class8C();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 8-C class');

              } elseif ($request->input('poshition')=="-D") {

                $table1 = new Class8D();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 8-D class');

              } elseif ($request->input('poshition')=="-E") {

                $table1 = new Class8E();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 8-E class');

              } elseif ($request->input('poshition')=="-F") {

                $table1 = new Class8F();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 8-F class');

              } elseif ($request->input('poshition')=="-G") {

                $table1 = new Class8G();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 8-G class');

              } elseif ($request->input('poshition')=="-H") {

                $table1 = new Class8H();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 8-H class');

              } elseif ($request->input('poshition')=="-I") {

                $table1 = new Class8I();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 8-I class');

              } elseif ($request->input('poshition')=="-J") {

                $table1 = new Class8J();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 8-J class');

              } else {
                # code...
              }

              //grade 9
            } elseif ($request->input('section')=="9") {
              if ($request->input('poshition')=="-A") {

                $table1 = new Class9A();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 9-A class');

              } elseif ($request->input('poshition')=="-B") {

                $table1 = new Class9B();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 9-B class');

              } elseif ($request->input('poshition')=="-C") {

                $table1 = new Class9C();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 9-C class');

              } elseif ($request->input('poshition')=="-D") {

                $table1 = new Class9D();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 9-D class');

              } elseif ($request->input('poshition')=="-E") {

                $table1 = new Class9E();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 9-E class');

              } elseif ($request->input('poshition')=="-F") {

                $table1 = new Class9F();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 9-F class');

              } elseif ($request->input('poshition')=="-G") {

                $table1 = new Class9G();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 9-G class');

              } elseif ($request->input('poshition')=="-H") {

                $table1 = new Class9H();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 9-H class');

              } elseif ($request->input('poshition')=="-I") {

                $table1 = new Class9I();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 9-I class');

              } elseif ($request->input('poshition')=="-J") {

                $table1 = new Class9J();

                $date = date('Y');
                $table1->year        =$date;
                $table1->student     =$request->input('stuId');
                $table1->section     =$request->input('section');

                $table1->save();
                return redirect()->route('studentAllocate')->with('message','This student allocate to 9-J class');

              } else {
                # code...
              }
            }
          }else{
            return redirect()->route('studentAllocate')->with('message','This is not a student');
          }
      }

  //search all student classes
  public function searchClass(Request $request)
  {
    $class = $request->input('section').$request->input('poshition');

    $year = date('Y');
    $searchYear = $request->input('date');
    $years = [];

    for ($year--; $year > date('Y') - 7; $year--) {
      $years[] = $year;
    }

    if ($request->input('section')=="6") {

      if ($request->input('poshition')=="-A") {

        // Sets the parameters from the get request to the variables.


        $result = DB::table('class6_as')
           -> join ('stu_regs','class6_as.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-B") {

        $date = date('Y');

        $result = DB::table('class6_bs')
           -> join ('stu_regs','class6_bs.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-C") {

        $date = date('Y');

        $result = DB::table('class6_cs')
           -> join ('stu_regs','class6_cs.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-D") {

        $date = date('Y');

        $result = DB::table('class6_ds')
           -> join ('stu_regs','class6_ds.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-E") {
        $date = date('Y');

        $result = DB::table('class6_es')
           -> join ('stu_regs','class6_es.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-F") {
        $date = date('Y');

        $result = DB::table('class6_fs')
           -> join ('stu_regs','class6_fs.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-G") {

        $date = date('Y');

        $result = DB::table('class6_gs')
           -> join ('stu_regs','class6_gs.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-H") {

        $date = date('Y');

        $result = DB::table('class6_hs')
           -> join ('stu_regs','class6_hs.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-I") {

        $date = date('Y');

        $result = DB::table('class6_is')
           -> join ('stu_regs','class6_is.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-J") {

        $date = date('Y');

        $result = DB::table('class6_js')
           -> join ('stu_regs','class6_js.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      }

    } elseif ($request->input('section')=="7") {

      if ($request->input('poshition')=="-A") {

        // Sets the parameters from the get request to the variables.
        $date = date('Y');

        $result = DB::table('class7_as')
           -> join ('stu_regs','class7_as.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-B") {

        $date = date('Y');

        $result = DB::table('class7_bs')
           -> join ('stu_regs','class7_bs.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-C") {

        $date = date('Y');

        $result = DB::table('class7_cs')
           -> join ('stu_regs','class7_cs.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-D") {

        $date = date('Y');

        $result = DB::table('class7_ds')
           -> join ('stu_regs','class7_ds.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-E") {
        $date = date('Y');

        $result = DB::table('class7_es')
           -> join ('stu_regs','class7_es.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-F") {
        $date = date('Y');

        $result = DB::table('class7_fs')
           -> join ('stu_regs','class7_fs.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-G") {

        $date = date('Y');

        $result = DB::table('class7_gs')
           -> join ('stu_regs','class7_gs.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-H") {

        $date = date('Y');

        $result = DB::table('class7_hs')
           -> join ('stu_regs','class7_hs.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-I") {

        $date = date('Y');

        $result = DB::table('class7_is')
           -> join ('stu_regs','class7_is.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      } elseif ($request->input('poshition')=="-J") {

        $date = date('Y');

        $result = DB::table('class7_js')
           -> join ('stu_regs','class7_js.student' , '=', 'stu_regs.admNo')
           -> where ('year', $request->input('date'))
           -> get();

        return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


      }

    } elseif ($request->input('section')=="8") {

        if ($request->input('poshition')=="-A") {

          // Sets the parameters from the get request to the variables.
          $date = date('Y');

          $result = DB::table('class8_as')
             -> join ('stu_regs','class8_as.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-B") {

          $date = date('Y');

          $result = DB::table('class8_bs')
             -> join ('stu_regs','class8_bs.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-C") {

          $date = date('Y');

          $result = DB::table('class8_cs')
             -> join ('stu_regs','class8_cs.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-D") {

          $date = date('Y');

          $result = DB::table('class8_ds')
             -> join ('stu_regs','class8_ds.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-E") {
          $date = date('Y');

          $result = DB::table('class8_es')
             -> join ('stu_regs','class8_es.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-F") {
          $date = date('Y');

          $result = DB::table('class8_fs')
             -> join ('stu_regs','class8_fs.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-G") {

          $date = date('Y');

          $result = DB::table('class8_gs')
             -> join ('stu_regs','class8_gs.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-H") {

          $date = date('Y');

          $result = DB::table('class8_hs')
             -> join ('stu_regs','class8_hs.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-I") {

          $date = date('Y');

          $result = DB::table('class8_is')
             -> join ('stu_regs','class8_is.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-J") {

          $date = date('Y');

          $result = DB::table('class8_js')
             -> join ('stu_regs','class8_js.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        }


    } elseif ($request->input('section')=="9") {

        if ($request->input('poshition')=="-A") {

          // Sets the parameters from the get request to the variables.
          $date = date('Y');

          $result = DB::table('class9_as')
             -> join ('stu_regs','class9_as.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-B") {

          $date = date('Y');

          $result = DB::table('class9_bs')
             -> join ('stu_regs','class9_bs.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-C") {

          $date = date('Y');

          $result = DB::table('class9_cs')
             -> join ('stu_regs','class9_cs.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-D") {

          $date = date('Y');

          $result = DB::table('class9_ds')
             -> join ('stu_regs','class9_ds.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-E") {
          $date = date('Y');

          $result = DB::table('class9_es')
             -> join ('stu_regs','class9_es.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-F") {
          $date = date('Y');

          $result = DB::table('class9_fs')
             -> join ('stu_regs','class9_fs.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-G") {

          $date = date('Y');

          $result = DB::table('class9_gs')
             -> join ('stu_regs','class9_gs.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-H") {

          $date = date('Y');

          $result = DB::table('class9_hs')
             -> join ('stu_regs','class9_hs.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-I") {

          $date = date('Y');

          $result = DB::table('class9_is')
             -> join ('stu_regs','class9_is.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear]);


        } elseif ($request->input('poshition')=="-J") {

          $date = date('Y');

          $result = DB::table('class9_js')
             -> join ('stu_regs','class9_js.student' , '=', 'stu_regs.admNo')
             -> where ('year', $request->input('date'))
             -> get();

          return view('studentAllocate/studentAllocate',['results'=>$result,'class'=>$class,'years'=>$years,'searchYear'=>$searchYear

        ]);


        }

    }
  }

// view student class data
  public function getStudentData(Request $request)
  {
    $year = date('Y');
    $id = $request->input('id');
    $years = [];

    for ($year--; $year > date('Y') - 7; $year--) {
      $years[] = $year;
    }

    $stdDatas  = DB::table('users')
        ->select(DB::raw("*"))
        ->where('admition', '=', $id)
        ->where('position', '=', 'student')
        ->get();

    return view('studentAllocate/studentAllocate',['stdDatas'=>$stdDatas,'years'=>$years]);
  }

//assing grade head fot grades
  public function headAllocate(Request $request)
  {

    $this->validate($request, [
      //student
      //'id'   => 'required|numeric|unique:sections',
    ]);

    $table1 = new Section();

    $date = date('Y');
    $position = '';
    $teaName = '';

    $id   = $request->input('id');

    $results  = DB::table('users')
        ->select(DB::raw("*"))
        ->where('admition', '=', $id)
        ->get();

    $names  = DB::table('tea_regs')
        ->select(DB::raw("*"))
        ->where('admNo', '=', $id)
        ->get();
    //$date = $result->position;


    foreach ($results as $result){
      $position = $result->position;
    }

    foreach ($names as $name){
      $teaName = $name->fullName;
    }

    if ($position == "teacher") {

      $table1->year	         =date('Y');
      $table1->gradeName     =$request->input('grade');
      $table1->gradeHead     =$teaName;

      $table1->save();
      return redirect()->route('teacherAllocate')->with('message','Allocate successful');
    }else {
      return redirect()->route('teacherAllocate')->with('message','This is not a teacher');
    }

  }

//update grade head
  public function updateHead(Request $request)
  {
    $this->validate($request, [
      //student
      //'id'   => 'required|numeric|unique:sections',
    ]);

    $table1 = new ClassData();

    $date = date('Y');
    $position = '';

    $id    = $request->input('id');

    $results  = DB::table('users')
        ->select(DB::raw("*"))
        ->where('admition', '=', $id)
        ->get();

    //$date = $result->position;


    foreach ($results as $result){
      $position = $result->position;
    }

    $teaName = '';

    $names  = DB::table('tea_regs')
        ->select(DB::raw("*"))
        ->where('admNo', '=', $id)
        ->get();

    foreach ($names as $name){
      $teaName = $name->fullName;
    }



    if ($position == "teacher") {

      DB::table('sections')
            ->where('gradeName','=', $request->input('grade'))
            ->where('year','=', $date)
            ->update(['gradeHead' => $teaName]);

      return redirect()->route('teacherAllocate')->with('message','Update successful');
    }else {
      return redirect()->route('teacherAllocate')->with('message','This is not a teacher');
    }
  }

//assing class teacher for each classes
  public function classTeacherAllocate(Request $request)
  {
    $result='';
    $this->validate($request, [
      //student
      //'id'   => 'required|numeric|unique:sections',
    ]);

    $table1 = new ClassData();

    $date = date('Y');
    $position = '';
    $teaName = '';

    $id    = $request->input('id');
    $class = $request->input('poshition1').$request->input('poshition2');

    $results  = DB::table('users')
        ->select(DB::raw("*"))
        ->where('admition', '=', $id)
        ->get();

    $names  = DB::table('tea_regs')
        ->select(DB::raw("*"))
        ->where('admNo', '=', $id)
        ->get();

    //$date = $result->position;


    foreach ($results as $result){
      $position = $result->position;
    }

    foreach ($names as $name){
      $teaName = $name->fullName;
    }

    if ($position == "teacher") {

      $table1->year	         =date('Y');
      $table1->class         =$class;
      $table1->classTeacher  =$teaName;
      $table1->section       =$request->input('poshition1');

      $table1->save();
      return redirect()->route('teacherAllocate')->with('message','Allocate successful');
      //redirect()->route('studentAllocate');
    }else {
      return redirect()->route('teacherAllocate')->with('message','This is not a teacher');
    }
  }

//update class teachet
  public function updateClassTeacher(Request $request)
  {
    $this->validate($request, [
      //student
      //'id'   => 'required|numeric|unique:sections',
    ]);

    $table1 = new ClassData();

    $date = date('Y');
    $position = '';

    $id    = $request->input('id');
    $class = $request->input('poshition1').$request->input('poshition2');

    $results  = DB::table('users')
        ->select(DB::raw("*"))
        ->where('admition', '=', $id)
        ->get();

    //$date = $result->position;


    foreach ($results as $result){
      $position = $result->position;
    }

    $teaName = '';

    $names  = DB::table('tea_regs')
        ->select(DB::raw("*"))
        ->where('admNo', '=', $id)
        ->get();

    foreach ($names as $name){
      $teaName = $name->fullName;
    }

    if ($position == "teacher") {

      DB::table('class_datas')
            ->where('class','=', $class)
            ->where('year','=', $date)
            ->update(['classTeacher' => $teaName]);

      return redirect()->route('teacherAllocate')->with('message','Update successful');
    }else {
      return redirect()->route('teacherAllocate')->with('message','This is not a teacher');
    }
  }

//assing subClass teacher
  public function subClassTeacherAllocate(Request $request)
  {
    $this->validate($request, [
      //student
      //'id'   => 'required|numeric|unique:sections',
    ]);

    $table1 = new ClassData();

    $date = date('Y');
    $position = '';

    $id    = $request->input('id');
    $class = $request->input('poshition1') . $request->input('poshition2');

    $results  = DB::table('users')
        ->select(DB::raw("*"))
        ->where('admition', '=', $id)
        ->get();

    //$date = $result->position;


    foreach ($results as $result){
      $position = $result->position;
    }

    $teaName = '';

    $names  = DB::table('tea_regs')
        ->select(DB::raw("*"))
        ->where('admNo', '=', $id)
        ->get();

    foreach ($names as $name){
      $teaName = $name->fullName;
    }

    if ($position == "teacher") {

      DB::table('class_datas')
            ->where('class','=', $class)
            ->update(['subClassTeacher' => $teaName]);

      return redirect()->route('teacherAllocate')->with('message','Allocate successful');
    }else {
      return redirect()->route('teacherAllocate')->with('message','This is not a teacher');
    }
  }

  //update subClass teacher
    public function updateSubClassTeacher(Request $request)
    {
      $this->validate($request, [
        //student
        //'id'   => 'required|numeric|unique:sections',
      ]);

      $table1 = new ClassData();

      $date = date('Y');
      $position = '';

      $id    = $request->input('id');
      $class = $request->input('poshition1') . $request->input('poshition2');

      $results  = DB::table('users')
          ->select(DB::raw("*"))
          ->where('admition', '=', $id)
          ->get();

      //$date = $result->position;


      foreach ($results as $result){
        $position = $result->position;
      }

      $teaName = '';

      $names  = DB::table('tea_regs')
          ->select(DB::raw("*"))
          ->where('admNo', '=', $id)
          ->get();

      foreach ($names as $name){
        $teaName = $name->fullName;
      }

      if ($position == "teacher") {

        DB::table('class_datas')
              ->where('class','=', $class)
              ->update(['subClassTeacher' => $teaName]);

        return redirect()->route('teacherAllocate')->with('message','Update successful');
      }else {
        return redirect()->route('teacherAllocate')->with('message','This is not a teacher');
      }
    }

//view grade head
    public function viewHead(Request $request)
    {
      $gradeName = $request->input('grade');
      $id = '';
      $date = date('Y');
      //grade head id
      $data1  = DB::table('sections')
          ->select(DB::raw("*"))
          ->where('year', '=', $date)
          ->where('gradeName', '=', $gradeName)
          ->get();


      foreach ($data1 as $data){
        $id = $data->gradeHead;
      }

      //grade head get data
      $result  = DB::table('tea_regs')
          ->select(DB::raw("*"))
          ->where('admNo', '=', $id)
          ->get();

      return view('teacherAllocate/teacherAllocate',['id'=>$id,'results'=>$result,'gradeName'=>$gradeName]);
      //return view('welcome');

    }

//view class teaccher's
    public function viewClassTeacher(Request $request)
    {
      $gradeName = $request->input('grade');
      $date = date('Y');
      // $id = '';
      // $name = '';

      $result  = DB::table('class_datas')
          ->select(DB::raw("*"))
          ->where('year', '=', $date)
          ->where('section', '=', $gradeName)
          ->get();



      return view('teacherAllocate/teacherAllocate',['results'=>$result,'gradeName'=>$gradeName]);
    }

//delete student in class
    public function deleteStudentClass(Request $request)
    {
      $class = $request->input('class');
      $id = $request->input('id');

      DB::table('users')
          ->where('admition', $id)
          ->update(['current_class' => '---','current_year' =>date('Y')]);


      if ($class == "6-A") {

        DB::table('class6_as')->where('student', '=', $id)->delete();

        return redirect()->route('studentAllocate')->with('message','Delete Successful');


      }elseif ($class == "6-B") {
        # code...
      }
    }

//view 10 grade student insert with selection
    public function viewSelectSubject()
    {
      return view('admin\grade10Allocate');
    }

//inserte student selection subject
  public function insertStudentSubject(Request $request)
  {

    $this->validate($request, [
      'stdId'   => 'numeric',
    ],[
        'stdId.numeric' => 'The registration number must be a number.',
      ]);

    $position = '';
    $results  = DB::table('users')
        ->select(DB::raw("*"))
        ->where('admition', '=', $request->input('stdId'))
        ->get();

    $results1  = DB::table('temporarilies')
        ->select(DB::raw("*"))
        ->where('id', '=', $request->input('stdId'))
        ->get();

    foreach ($results as $result){
      $position = $result->position;
    }

    if ($results1->isEmpty()) {
      if ($position == "student") {

        $table1 = new Temporarily();

        $table1->year	        =date('Y');
        $table1->id           =$request->input('stdId');
        $table1->sub1         =$request->input('subject1');
        $table1->sub2         =$request->input('subject2');
        $table1->sub3         =$request->input('subject3');

        $table1->save();
        return redirect()->route('viewGrade10Subjectselection')->with('message','selection successful');
      }else {
        return redirect()->route('viewGrade10Subjectselection')->with('message','This is not a student');
      }
    }else {
      return redirect()->route('viewGrade10Subjectselection')->with('message','This student is allrady exty');
    }
  }

  public function searchStudentSubject(Request $request)
  {
    $id="";
    $results  = DB::table('temporarilies')
        ->select(DB::raw("*"))
        ->where('year', '=', date('Y'))
        ->where('sub1', '=', $request->input('subject1'))
        ->where('sub2', '=', $request->input('subject2'))
        ->where('sub3', '=', $request->input('subject3'))
        ->get();

    foreach ($results as $result){
      $id = $result->id;
    }

    $result1  = DB::table('users')
        ->select(DB::raw("*"))
        ->where('admition', '=', $id)
        ->get();

    return view('admin\grade10Allocate',['results'=>$result1]);
  }

//view select subject
  public function studentSubject(Request $request)
  {
    $this->validate($request, [
      'stdId'   => 'numeric',
    ],[
        'stdId.numeric' => 'The registration number must be a number.',
      ]);

    $position = '';
    $results  = DB::table('users')
        ->select(DB::raw("*"))
        ->where('admition', '=', $request->input('stdId'))
        ->get();

    $results1  = DB::table('temporarilies')
        ->select(DB::raw("*"))
        ->where('year', '=', date('Y'))
        ->where('id', '=', $request->input('stdId'))
        ->get();

    foreach ($results as $result){
      $position = $result->position;
    }


    if ($position == "student") {
      return view('admin\grade10Allocate',['results'=>$results1]);
    }else {
      return redirect()->route('viewGrade10Subjectselection')->with('message','This is not a student');
    }
  }

//delete grade 9 Subject
  public function deleteStudent9(Request $request)
  {

    $this->validate($request, [
      'id'   => 'numeric',
    ],[
        'id.numeric' => 'The registration number must be a number.',
      ]);

        $id = $request->input('id');
        DB::table('temporarilies')->where('id', '=', $id)->delete();

        return redirect()->route('viewGrade10Subjectselection')->with('message','Delete Successful');

  }

}
