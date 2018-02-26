<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// loggin page
Route::get('logpage',[
  'uses'=>'UserController@getLoggin',
  'as'  => 'logpage'
]);
// student
Route::get('stdlog',[
  'uses'=>'UserController@getStuLog',
  'as'  => 'stdlog'
]);
//teacher
Route::get('tealog',[
  'uses'=>'UserController@getTeaLog',
  'as'  => 'tealog'
]);
//admition
Route::get('admlog',[
  'uses'=>'UserController@getAdmLog',
  'as'  => 'admlog'
]);
//logUote
Route::get('signout',[
  'uses'=>'UserController@logOut',
  'as'  => 'signout'
]);

Route::post('login',[
  'uses'=>'UserController@loginUser',
  'as'  => 'login'
]);
// end login

// admin reg pages

Route::get('stdReg',[
  'uses'=>'AdminController@stdRegPage',
  'as'  => 'stdReg'
]);

Route::get('teaReg',[
  'uses'=>'AdminController@teaRegPage',
  'as'  => 'teaReg'
]);


//stdRegestation
Route::post('stdRegestation',[
  'uses'=>'AdminController@studentReg',
  'as'  => 'stdRegestation'
]);

//teaRegestation
Route::post('teaRegestation',[
  'uses'=>'AdminController@teacherReg',
  'as'  => 'teaRegestation'
]);

//show users search for Admin
Route::get('showUser',[
  'uses'=>'AdminController@showDitals',
  'as'  => 'showUser'
]);

//search data view admin
Route::post('showUserDitels',[
  'uses'=>'AdminController@userDitels',
  'as'  => 'showUserDitels'
]);

//show student upDate for Admin
Route::get('upUserShow',[
  'uses'=>'AdminController@upUser',
  'as'  => 'upUserShow'
]);

//search data for update view admin
Route::post('updateUserDitels',[
  'uses'=>'AdminController@upUserDitels',
  'as'  => 'updateUserDitels'
]);

//update studentReg
Route::post('updateStudentDitels',[
  'uses'=>'AdminController@sudentUpdate',
  'as'  => 'updateStudentDitels'
]);

//update parents
Route::post('updateParentDitels',[
  'uses'=>'AdminController@parentUpdate',
  'as'  => 'updateParentDitels'
]);

//update guardians
Route::post('updateGuardianDitels',[
  'uses'=>'AdminController@guardianUpdate',
  'as'  => 'updateGuardianDitels'
]);

//update emergencies
Route::post('updateEmergenciesDitels',[
  'uses'=>'AdminController@emergencyUpdate',
  'as'  => 'updateEmergenciesDitels'
]);

//update Teacher
Route::post('updateTeacherDitels',[
  'uses'=>'AdminController@teacherUpdate',
  'as'  => 'updateTeacherDitels'
]);

//view student allocate page
Route::get('studentAllocate',[
  'uses'=>'alocateController@studentAllocateview',
  'as'  => 'studentAllocate'
]);

//view teacher allocate page
Route::get('teacherAllocate',[
  'uses'=>'alocateController@teacherAllocateview',
  'as'  => 'teacherAllocate'
]);

//student allocate classes
Route::post('setStudentForClass',[
  'uses'=>'alocateController@studentAllocateClass',
  'as'  => 'setStudentForClass'
]);

//search class all student
Route::post('searchAllStudentInClass',[
  'uses'=>'alocateController@searchClass',
  'as'  => 'searchAllStudentInClass'
]);

//search each student data
Route::post('eachStudentData',[
  'uses'=>'alocateController@getStudentData',
  'as'  => 'eachStudentData'
]);

//Delete student in class
Route::post('classStudentDelete',[
  'uses'=>'alocateController@deleteStudentClass',
  'as'  => 'classStudentDelete'
]);

//grade head Allocate
Route::post('allocateGradehead',[
  'uses'=>'alocateController@headAllocate',
  'as'  => 'allocateGradehead'
]);

//update grade head
Route::post('updateGradehead',[
  'uses'=>'alocateController@updateHead',
  'as'  => 'updateGradehead'
]);

//class teacher Allocate
Route::post('allocateClassTeacher',[
  'uses'=>'alocateController@classTeacherAllocate',
  'as'  => 'allocateClassTeacher'
]);

//update class teacher
Route::post('updateClassTeacher',[
  'uses'=>'alocateController@updateClassTeacher',
  'as'  => 'updateClassTeacher'
]);

//class sub class teacher Allocate
Route::post('allocateSubClassTeacher',[
  'uses'=>'alocateController@subClassTeacherAllocate',
  'as'  => 'allocateSubClassTeacher'
]);

//class sub class teacher Allocate
Route::post('updateSubClassTeacher',[
  'uses'=>'alocateController@updateSubClassTeacher',
  'as'  => 'updateSubClassTeacher'
]);

//view grade head
Route::post('viewGradeHead',[
  'uses'=>'alocateController@viewHead',
  'as'  => 'viewGradeHead'
]);

//view grade head
Route::post('viewClassTeacher',[
  'uses'=>'alocateController@viewClassTeacher',
  'as'  => 'viewClassTeacher'
]);

//view 10 grade student Subject selection
Route::get('viewGrade10Subjectselection',[
  'uses'=>'alocateController@viewSelectSubject',
  'as'  => 'viewGrade10Subjectselection'
]);

//subject selection
Route::post('subjectSelection',[
  'uses'=>'alocateController@insertStudentSubject',
  'as'  => 'subjectSelection'
]);

//select subject view
Route::post('selectSubjectView',[
  'uses'=>'alocateController@searchStudentSubject',
  'as'  => 'selectSubjectView'
]);

//select Detailse
Route::post('subjStudentDetelse',[
  'uses'=>'alocateController@studentSubject',
  'as'  => 'subjStudentDetelse'
]);

//select Detailse
Route::post('studentDelete9',[
  'uses'=>'alocateController@deleteStudent9',
  'as'  => 'studentDelete9'
]);

//admin all exams
Route::get('allExam',[
  'uses'=>'ExamController@exam',
  'as'  => 'allExam'
]);

//->middleware('auth');
