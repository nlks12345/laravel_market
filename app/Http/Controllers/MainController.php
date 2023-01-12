<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Storage;
use PDF;


class MainController extends Controller
{

  public function landing()
    {
        // $name = session('system_name');
        // $intro = session('system_intro_text');
        // $video_id = session('homepage_video');


        // // GET VIDEO BACKGROUND //
        // $video = DB::table('ci_file_upload')
        //     ->where('ci_file_id', $video_id)
        //     ->get();

        // // GET AVAILABLE LOCATION //
        // $locate = DB::table('ci_locations')
        //     ->where('locate_status', '1')
        //     ->get();
        // return view('world/landing', [
        //     'location' => $locate,
        //     'name' => $name,
        //     'intro' => $intro,
        //     'video' => $video,
        // ]);

        return view('landing');
    }

    public function faq(Request $request){


      

      return view('faq');
    }

    public function display_table_data(Request $request){

      $url = 'http://localhost:3001';
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $url.'/sample_data');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HEADER, false);
      // curl_setopt($ch, CURLOPT_POST, 1);
      // curl_setopt($ch, CURLOPT_POSTFIELDS,
      //       "postvar1=value1&postvar2=value2&postvar3=value3");
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

      $data = curl_exec($curl);
      $result = json_decode($data);
      curl_close($curl);
  
      return response()->view('faq', ['result' => $result->data,'count'=>1], 200);
    }

    public function get_return(Request $request){

      $data = $request->all();

      var_dump($data);
      return response()->view('faq', ['result' => $data,'count'=>1], 200); 

    }

    public function post_data(Request $request){
     
      $string = "hello";
      $secret = "secret";
      $sign = hash_hmac('sha256', $string, $secret);
      $user_id = $request->session()->get('user_id');
      $user_email = $request->session()->get('email');

      $data = $request->all();
     
      // if(!empty($data)){
      //   dd($data);
      // }
      $json_data = '{
        "status" : 200,
        "message" : "success",
        "data":
              {
                "user_id": "'.$user_id.'",
                "user_email": "'.$user_email.'"
              }           
      }';

      $url = 'http://localhost:3001';
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'X-API-KEY: '.$sign,
        'X-API-ID:'.$secret
      ]);

      curl_setopt($curl, CURLOPT_URL, $url.'/faq');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      //curl_setopt($curl, CURLOPT_HEADER, false);
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS,$json_data);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

      $data = curl_exec($curl);
    
      $result = json_decode($data);
      curl_close($curl);

    dd($data);
      
      return response()->view('faq', ['result' => $result,'count'=>1], 200);
    }


}