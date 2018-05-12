<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\olResult;
use App\SubjectGroup;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdvancedExam extends Controller
{
    public function insertOlResult(Request $request)
    {
      //check istudent in registered
      if (isset($_POST['olIn'])||isset($_POST['alIn'])) {

        $index= $request->input('index');
        $regNo= $request->input('reg');

        $result  = DB::table('users')
            ->select(DB::raw("*"))
            ->where('admition', '=', $regNo)
            ->where('position', '=', 'student')
            ->where('current_class', 'LIKE','11%')
            ->get();

        $tenp  = DB::table('ol_results')
            ->select(DB::raw("*"))
            ->where('year', '=', date('Y')-1)
            ->where('admNo', '=', $regNo)
            ->orWhere('indexNo', '=', $index)
            ->get();

            //check student registered
        if ($result->isEmpty()) {
          return redirect()->route('alOlExam')->with('message','This student is not registered or O/L class');
          // check student result exists
        }elseif (!$tenp->isEmpty()) {
          return redirect()->route('alOlExam')->with('message','This student result is exists');
        }else {
          return view('exam/olResultInsert',['results'=>$result,'index'=>$index]);
        }
        //insert ol result
      }elseif(isset($_POST['buttonOlResult'])) {
        $index= $request->input('index');
        $regNo= $request->input('regNo');

        $table = new olResult();

        $table->admNo         =$request->input('regNo');
        $table->indexNo       =$request->input('index');
        $table->year          =date('Y')-1;
        $table->maths	        =$request->input('maths');
        $table->science        =$request->input('science');
        $table->religion	    =$request->input('religion');
        $table->sinhala	      =$request->input('sinhala');
        $table->english	      =$request->input('english');
        $table->history	      =$request->input('history');
        $table->subjectGroup1	=$request->input('subgGroup1');
        $table->subjectGroup2	=$request->input('subgGroup2');
        $table->subjectGroup3	=$request->input('subgGroup3');

        $table->save();
        return redirect()->route('alOlExam')->with('message','Student result insert successful');

        //view ol result
      }elseif (isset($_POST['searchOl'])) {

        $index= $request->input('index');

        $result  = DB::table('ol_results')
            ->select(DB::raw("*"))
            ->where('admNo', '=', $index)
            ->orWhere('indexNo', '=', $index)
            ->get();


        $user  = DB::table('users')
            ->select(DB::raw("*"))
            ->where('admition', '=', $index)
            ->where('position', '=', 'student')
            ->where('current_class', 'LIKE','11%')
            ->get();

            // result not result table and student not user table
        if ($result->isEmpty() && $user->isEmpty()) {
          return redirect()->route('alOlExam')->with('message','This student is not registered');
          // check result in the table
        }elseif ($result->isEmpty() && !$user->isEmpty()) {
          return redirect()->route('alOlExam')->with('message','Your result is not in the tabal');
          // oll data in the table
        }else {
          return view('exam/advancedResultView',['results'=>$result,'users'=>$user]);
        }

        //update ol result page view
      }elseif (isset($_POST['updateOlView'])) {

        $index= $request->input('index');

        $result  = DB::table('ol_results')
            ->select(DB::raw("*"))
            ->where('admNo', '=', $index)
            ->orWhere('indexNo', '=', $index)
            ->get();


        $user  = DB::table('users')
            ->select(DB::raw("*"))
            ->where('admition', '=', $index)
            ->where('position', '=', 'student')
            ->where('current_class', 'LIKE','11%')
            ->get();

            // result not result table and student not user table
        if ($result->isEmpty() && $user->isEmpty()) {
          return redirect()->route('alOlExam')->with('message','This student is not registered');
          // check result in the table
        }elseif ($result->isEmpty() && !$user->isEmpty()) {
          return redirect()->route('alOlExam')->with('message','This student result is not in the tabal');
          // oll data in the table
        }else {
          return view('exam/advancedResultOlUpdateView',['results'=>$result,'users'=>$user]);
        }

        //update ol result
      }elseif (isset($_POST['updateOlResult'])) {

        $update = [
          'indexNo'       =>$request->input('index'),
          'year'          =>date('Y')-1,
          'maths'	        =>$request->input('maths'),
          'science'       =>$request->input('science'),
          'religion'	    =>$request->input('religion'),
          'sinhala'	      =>$request->input('sinhala'),
          'english'	      =>$request->input('english'),
          'history'	      =>$request->input('history'),
          'subjectGroup1'	=>$request->input('subgGroup1'),
          'subjectGroup2'	=>$request->input('subgGroup2'),
          'subjectGroup3'	=>$request->input('subgGroup3'),
        ];

        DB::table('ol_results')
            ->where('admNo', '=', $request->input('regNo'))
            ->update($update);

        return redirect()->route('alOlExam')->with('message','Update is successful');
        //delete student result
      }elseif (isset($_POST['deleteOlResult'])) {

        DB::table('ol_results')
        ->where('indexNo', '=', $request->input('index'))
        ->delete();

        return redirect()->route('alOlExam')->with('message','Delete is successful');
      }

    }

    //view analysis page
    public function olAlAnalysis()
    {

        $year = date('Y');
        return view('exam/analysisOlAl',['year'=>$year]);
    }

    //view analysis add data
    public function olAlAnalysisAddData(Request $request)
    {
      //view analysis ol view
      if (isset($_POST['analysisOL'])) {

        $results  = DB::table('subject_groups')
            ->select(DB::raw("*"))
            ->where('year', '=', date('Y')-1)
            ->get();
        if ($results->isEmpty()) {
          return view('exam/analysisResultAddOL');
        }else {
          return redirect()->route('viewOlAlAnalysis')->with('message','Result is Exists.');
        }
      // update view analysis ol
      }elseif (isset($_POST['updateAnalysisOL'])) {

        $results  = DB::table('subject_groups')
            ->select(DB::raw("*"))
            ->where('year', '=', $request->input('year'))
            ->get();

        return view('exam/analysisResultAddOL',['results'=>$results]);
      //add ol result analysis
      }elseif (isset($_POST['addAnalysisOLResult'])) {

          $table = new SubjectGroup();

          $table->year		         =date('Y')-3;

          $table->geogrophyA	         =$request->input('geogrophy_A');
          $table->geogrophyB	         =$request->input('geogrophy_B');
          $table->geogrophyC           =$request->input('geogrophy_C');
          $table->geogrophyS	         =$request->input('geogrophy_S');
          $table->geogrophyF           =$request->input('geogrophy_F');

          $table->citizenshipA         =$request->input('citizenshipEducation_A');
          $table->citizenshipB         =$request->input('citizenshipEducation_B');
          $table->citizenshipC         =$request->input('citizenshipEducation_C');
          $table->citizenshipS         =$request->input('citizenshipEducation_S');
          $table->citizenshipF         =$request->input('citizenshipEducation_F');

          $table->entrepreneushipA     =$request->input('entrepreneushipStudies_A');
          $table->entrepreneushipB     =$request->input('entrepreneushipStudies_B');
          $table->entrepreneushipC     =$request->input('entrepreneushipStudies_C');
          $table->entrepreneushipS     =$request->input('entrepreneushipStudies_S');
          $table->entrepreneushipF     =$request->input('entrepreneushipStudies_F');

          $table->bisinuessA           =$request->input('business_A');
          $table->bisinuessB           =$request->input('business_B');
          $table->bisinuessC           =$request->input('business_C');
          $table->bisinuessS           =$request->input('business_S');
          $table->bisinuessF           =$request->input('business_F');

          $table->tamilA               =$request->input('tamil_A');
          $table->tamilB               =$request->input('tamil_B');
          $table->tamilC               =$request->input('tamil_C');
          $table->tamilS               =$request->input('tamil_S');
          $table->tamilF               =$request->input('tamil_F');

          $table->musicA               =$request->input('music_A');
          $table->musicB               =$request->input('music_B');
          $table->musicC               =$request->input('music_C');
          $table->musicS               =$request->input('music_S');
          $table->musicF               =$request->input('music_F');

          $table->artA                 =$request->input('art_A');
          $table->artB                 =$request->input('art_B');
          $table->artC                 =$request->input('art_C');
          $table->artS                 =$request->input('art_S');
          $table->artF                 =$request->input('art_F');

          $table->dancingA             =$request->input('dancing_A');
          $table->dancingB             =$request->input('dancing_B');
          $table->dancingC             =$request->input('dancing_C');
          $table->dancingS             =$request->input('dancing_S');
          $table->dancingF             =$request->input('dancing_F');

          $table->sinhalaLitA          =$request->input('sinhalaLit_A');
          $table->sinhalaLitB          =$request->input('sinhalaLit_B');
          $table->sinhalaLitC          =$request->input('sinhalaLit_C');
          $table->sinhalaLitS          =$request->input('sinhalaLit_S');
          $table->sinhalaLitF          =$request->input('sinhalaLit_F');

          $table->englishLitA          =$request->input('englishLit_A');
          $table->englishLitB          =$request->input('englishLit_B');
          $table->englishLitC          =$request->input('englishLit_C');
          $table->englishLitS          =$request->input('englishLit_S');
          $table->englishLitF          =$request->input('englishLit_F');

          $table->ICTA                 =$request->input('ICT_A');
          $table->ICTB                 =$request->input('ICT_B');
          $table->ICTC                 =$request->input('ICT_C');
          $table->ICTS                 =$request->input('ICT_S');
          $table->ICTF                 =$request->input('ICT_F');

          $table->AFTA                 =$request->input('AFT_A');
          $table->AFTB                 =$request->input('AFT_B');
          $table->AFTC                 =$request->input('AFT_C');
          $table->AFTS                 =$request->input('AFT_S');
          $table->AFTF                 =$request->input('AFT_F');

          $table->DC_A                 =$request->input('DC_A');
          $table->DC_B                 =$request->input('DC_B');
          $table->DC_C                 =$request->input('DC_C');
          $table->DC_S                 =$request->input('DC_S');
          $table->DC_F                 =$request->input('DC_F');

          $table->DM_A                 =$request->input('DM_A');
          $table->DM_B                 =$request->input('DM_B');
          $table->DM_C                 =$request->input('DM_C');
          $table->DM_S                 =$request->input('DM_S');
          $table->DM_F                 =$request->input('DM_F');

          $table->DEE_A                =$request->input('DEE_A');
          $table->DEE_B                =$request->input('DEE_B');
          $table->DEE_C                =$request->input('DEE_C');
          $table->DEE_S                =$request->input('DEE_S');
          $table->DEE_F                =$request->input('DEE_F');

          $table->craftsA              =$request->input('artCrafts_A');
          $table->craftsB              =$request->input('artCrafts_B');
          $table->craftsC              =$request->input('artCrafts_C');
          $table->craftsS              =$request->input('artCrafts_S');
          $table->craftsF              =$request->input('artCrafts_F');

          $table->HE_A                 =$request->input('HE_A');
          $table->HE_B                 =$request->input('HE_B');
          $table->HE_C                 =$request->input('HE_C');
          $table->HE_S                 =$request->input('HE_S');
          $table->HE_F                 =$request->input('HE_F');

          $table->HEE_A                =$request->input('HEE_A');
          $table->HEE_B                =$request->input('HEE_B');
          $table->HEE_C                =$request->input('HEE_C');
          $table->HEE_S                =$request->input('HEE_S');
          $table->HEE_F                =$request->input('HEE_F');

          $table->CME_A                =$request->input('CME_A');
          $table->CME_B                =$request->input('CME_B');
          $table->CME_C                =$request->input('CME_C');
          $table->CME_S                =$request->input('CME_S');
          $table->CME_F                =$request->input('CME_F');

          $table->CME_A                =$request->input('CME_A');
          $table->CME_B                =$request->input('CME_B');
          $table->CME_C                =$request->input('CME_C');
          $table->CME_S                =$request->input('CME_S');
          $table->CME_F                =$request->input('CME_F');


          $table->save();
          return redirect()->route('viewOlAlAnalysis')->with('message',' Result is Insert successfully.');
        }
        elseif (isset($_POST['updateAnalysisOLResult'])) {

          $update = [

            'geogrophyA'	         =>$request->input('geogrophy_A'),
            'geogrophyB'	         =>$request->input('geogrophy_B'),
            'geogrophyC'           =>$request->input('geogrophy_C'),
            'geogrophyS'	         =>$request->input('geogrophy_S'),
            'geogrophyF'           =>$request->input('geogrophy_F'),

            'citizenshipA'         =>$request->input('citizenshipEducation_A'),
            'citizenshipB'         =>$request->input('citizenshipEducation_B'),
            'citizenshipC'         =>$request->input('citizenshipEducation_C'),
            'citizenshipS'         =>$request->input('citizenshipEducation_S'),
            'citizenshipF'         =>$request->input('citizenshipEducation_F'),

            'entrepreneushipA'     =>$request->input('entrepreneushipStudies_A'),
            'entrepreneushipB'     =>$request->input('entrepreneushipStudies_B'),
            'entrepreneushipC'     =>$request->input('entrepreneushipStudies_C'),
            'entrepreneushipS'     =>$request->input('entrepreneushipStudies_S'),
            'entrepreneushipF'     =>$request->input('entrepreneushipStudies_F'),

            'bisinuessA'           =>$request->input('business_A'),
            'bisinuessB'           =>$request->input('business_B'),
            'bisinuessC'           =>$request->input('business_C'),
            'bisinuessS'           =>$request->input('business_S'),
            'bisinuessF'           =>$request->input('business_F'),

            'tamilA'               =>$request->input('tamil_A'),
            'tamilB'               =>$request->input('tamil_B'),
            'tamilC'               =>$request->input('tamil_C'),
            'tamilS'               =>$request->input('tamil_S'),
            'tamilF'               =>$request->input('tamil_F'),

            'musicA'               =>$request->input('music_A'),
            'musicB'               =>$request->input('music_B'),
            'musicC'               =>$request->input('music_C'),
            'musicS'               =>$request->input('music_S'),
            'musicF'               =>$request->input('music_F'),

            'artA'                 =>$request->input('art_A'),
            'artB'                 =>$request->input('art_B'),
            'artC'                 =>$request->input('art_C'),
            'artS'                 =>$request->input('art_S'),
            'artF'                 =>$request->input('art_F'),

            'dancingA'             =>$request->input('dancing_A'),
            'dancingB'             =>$request->input('dancing_B'),
            'dancingC'             =>$request->input('dancing_C'),
            'dancingS'             =>$request->input('dancing_S'),
            'dancingF'             =>$request->input('dancing_F'),

            'sinhalaLitA'          =>$request->input('sinhalaLit_A'),
            'sinhalaLitB'          =>$request->input('sinhalaLit_B'),
            'sinhalaLitC'          =>$request->input('sinhalaLit_C'),
            'sinhalaLitS'          =>$request->input('sinhalaLit_S'),
            'sinhalaLitF'          =>$request->input('sinhalaLit_F'),

            'englishLitA'          =>$request->input('englishLit_A'),
            'englishLitB'          =>$request->input('englishLit_B'),
            'englishLitC'          =>$request->input('englishLit_C'),
            'englishLitS'          =>$request->input('englishLit_S'),
            'englishLitF'          =>$request->input('englishLit_F'),

            'ICTA'                 =>$request->input('ICT_A'),
            'ICTB'                 =>$request->input('ICT_B'),
            'ICTC'                 =>$request->input('ICT_C'),
            'ICTS'                 =>$request->input('ICT_S'),
            'ICTF'                 =>$request->input('ICT_F'),

            'AFTA'                 =>$request->input('AFT_A'),
            'AFTB'                 =>$request->input('AFT_B'),
            'AFTC'                 =>$request->input('AFT_C'),
            'AFTS'                 =>$request->input('AFT_S'),
            'AFTF'                 =>$request->input('AFT_F'),

            'DC_A'                 =>$request->input('DC_A'),
            'DC_B'                 =>$request->input('DC_B'),
            'DC_C'                 =>$request->input('DC_C'),
            'DC_S'                 =>$request->input('DC_S'),
            'DC_F'                 =>$request->input('DC_F'),

            'DM_A'                 =>$request->input('DM_A'),
            'DM_B'                 =>$request->input('DM_B'),
            'DM_C'                 =>$request->input('DM_C'),
            'DM_S'                 =>$request->input('DM_S'),
            'DM_F'                 =>$request->input('DM_F'),

            'DEE_A'                =>$request->input('DEE_A'),
            'DEE_B'                =>$request->input('DEE_B'),
            'DEE_C'                =>$request->input('DEE_C'),
            'DEE_S'                =>$request->input('DEE_S'),
            'DEE_F'                =>$request->input('DEE_F'),

            'craftsA'              =>$request->input('artCrafts_A'),
            'craftsB'              =>$request->input('artCrafts_B'),
            'craftsC'              =>$request->input('artCrafts_C'),
            'craftsS'              =>$request->input('artCrafts_S'),
            'craftsF'              =>$request->input('artCrafts_F'),

            'HE_A'                 =>$request->input('HE_A'),
            'HE_B'                 =>$request->input('HE_B'),
            'HE_C'                 =>$request->input('HE_C'),
            'HE_S'                 =>$request->input('HE_S'),
            'HE_F'                 =>$request->input('HE_F'),

            'HEE_A'                =>$request->input('HEE_A'),
            'HEE_B'                =>$request->input('HEE_B'),
            'HEE_C'                =>$request->input('HEE_C'),
            'HEE_S'                =>$request->input('HEE_S'),
            'HEE_F'                =>$request->input('HEE_F'),

            'CME_A'                =>$request->input('CME_A'),
            'CME_B'                =>$request->input('CME_B'),
            'CME_C'                =>$request->input('CME_C'),
            'CME_S'                =>$request->input('CME_S'),
            'CME_F'                =>$request->input('CME_F'),

            'CME_A'                =>$request->input('CME_A'),
            'CME_B'                =>$request->input('CME_B'),
            'CME_C'                =>$request->input('CME_C'),
            'CME_S'                =>$request->input('CME_S'),
            'CME_F'                =>$request->input('CME_F'),
          ];

          DB::table('subject_groups')
              ->where('year', '=', $request->input('year'))
              ->update($update);

          return redirect()->route('viewOlAlAnalysis')->with('message',' Result is Update successfully.');
        }
    }
}
