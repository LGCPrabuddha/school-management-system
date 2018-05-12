<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notice;
use App\photoGallery;
use App\videoGallery;
use App\wellcomeNews;

use Illuminate\Support\Facades\DB;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Input;


class NewsController extends Controller
{
    public function newsView()
    {
      return view('media/news');
    }

    //insert niws in notice table
    public function insertNews(Request $request)
    {

      $table = new notice();

      $table->title        =$request->input('title');
      $table->detail       =$request->input('summernote');

      $table->save();



      return redirect()->route('admlog')->with('message','Notice create is successfully');
    }

    //notice deletePage
    public function noticeDelete($id)
    {
      DB::table('notices')
      ->where('id', '=', $id)
      ->delete();

      return redirect()->route('admlog')->with('message','Notice delete is successfully');
    }

    //notice updata view
    public function noticeUpdateView($id)
    {
      //get data
      $data = DB::table('notices')->where('id', '=', $id)->first();
      return view('media/updateNotice',compact('data'));
    }

    public function noticeUpdate(Request $request)
    {
      DB::table('notices')
      ->where('id','=',$request['id'])
      ->update([
        'title'=>$request['title'],
        'detail'=>$request['summernote']
      ]);

      return redirect()->route('admlog')->with('message','Notice update is successfully');
    }

    public function smsPage()
    {
      return view('media/smsCreate');
    }

    public function smsSend(Request $request)
    {

      $text = 'Massage...! '.$request->input('massege').' ...media unit(wns)...';

      Nexmo::message()->send([
          'to'   => '94712756786',
          'from' => '0011',
          'text' => $text
      ]);

      // $nexmo = app('Nexmo\Client');
      //
      // $nexmo->message()->send([
      //     'to'   => '94712756786',
      //     'from' => 'test',
      //     'text' => $text
      // ]);

      // $username = "94712756786";///Your Username
      // $password = "123456";///Your Password
      // $mobile = "94716131767";///Recepient Mobile Number
      // $sender = "test";
      // $message = $text;
      //
      // ////sending sms
      //
      // //$post = "&sender=".$sender."&mobile=".$mobile."&message=".$message."";
      // $url = "http://bulksms.com.pk/api/sms.php?username=".$username."&password=".$password."&mobile=".$mobile."&sender=".$sender."&message=".$message."";
      // $ch = curl_init();
      // $timeout = 30; // set to zero for no timeout
      // curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
      // curl_setopt($ch, CURLOPT_URL,$url);
      // curl_setopt($ch, CURLOPT_POST, 1);
      // curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
      // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
      // $result = curl_exec($ch);
      //
      // return $result;
      return redirect()->route('smsPage')->with('message','Massage send is successfully');
    }

    //gallery upload page view
    public function insertGallery()
    {
      return view('admin/galleryInsert');
    }
    // gallery upload
    public function uploadImeges(Request $request)
    {

      if (isset($_POST["submitImages"])) {
        if (Input::hasFile('file')) {
          // code...
          $title =$request->input('title');
          $temp = $title."_";
          foreach ($request->file as $file) {
            $fileName = $file->getClientOriginalName();
            $fileName = $temp.$fileName;
            $file->move('uploads',$fileName);

            //save image to database
            $fileName = "uploads/".$fileName;
            $table = new photoGallery();
            $table->title        =$title;
            $table->photoId      =$fileName;
            $table->save();
          }
        }
      }elseif (isset($_POST["submitVideos"])) {
        $table = new videoGallery();
        $table->title        =$request->input('title');
        $table->videoLink    =$request->input('videoLink');
        $table->save();
      }
        return redirect()->route('galleryInsert')->with('message','Massage send is successfully');
    }

    public function wellcomeNews()
    {
      $newsLast = DB::table('wellcome_news')->orderBy('id', 'desc')->take(1)->get();

      return view('media/wellcomeNews',['newsLast'=>$newsLast]);
    }

    public function insertWellcomeNew(Request $request)
    {


      if (isset($_POST["wellcomeNewssubmit"])) {
        if (Input::hasFile('file')) {
          // code...
          $title =$request->input('title');
          $temp = $title."_";
            $file = Input::file('file');
            $fileName = $file->getClientOriginalName();
            $fileName = $temp.$fileName;
            $file->move('news',$fileName);

            //save image to database
            $fileName = "news/".$fileName;
            $table = new wellcomeNews();
            $table->title        =$title;
            $table->news         =$request->input('news');
            $table->photoId      =$fileName;
            $table->save();
        }
        return redirect()->route('wellcomeNews')->with('message','News submit is successfully');

      }elseif (isset($_POST["wellcomeNewsDelete"])) {
        DB::table('wellcome_news')
        ->where('id', '=', $request->input('newsId'))
        ->delete();

        return redirect()->route('wellcomeNews')->with('message','News delete is successfully');
      }
    }


}
