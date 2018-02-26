<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    //Admin all Exams
    public function exam()
    {
      return view('exam/examView');
    }
}
