<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;
use Storage;
use PDF;



class HomeController extends Controller
{

    public function __construct()
    {
        //  app('App\Http\Controllers\GlobalController')->SetGlobeData();
        //  $this->middleware('auth0.authenticate');
        $this->middleware('auth');
      //$this->middleware(['auth', 'verified']);
    }

    public function view_pdf(){
        return view('home/view_pdf');
    }

    public function view_profile(Request $request)
    {
           
        try{
            $data = $request->all();
            
            if(isset($data)){
                $email = $data['email'];
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    //Valid email! 
                    throw new Exception("Error Email Format");
                }
                
            }
            else{
                return "Error Processing Request. Empty Data.";
            }
                
                
            //$user_data = DB::connection('dax')->table('users')->where('email', strtolower($email))->get(); 
            
            $users = DB::table('users')->where('email', strtolower($email))->limit(1)->get();
            //$users_data = DB::query("select * from users where email = '".strtolower($email."'"));
            //$user_data = $users_data->get();

            if(!isset($users))
                throw new Exception("Error Empty User Array");

            $user_id = $users[0]->id;
            $user_name = $users[0]->name;
            $user_email = $users[0]->email;

            $assets = DB::table('da_asset')->where('asset_user_ref_id',$user_id)->count();
            $profile_pic_name = DB::table('da_files')->select('file_name','file_path')->where('user_id', $user_id)->get();

            if(!isset($assets) || !isset($profile_pic_name))
                throw new Exception("Error Empty Asset or File Array");

            $file_name = $profile_pic_name[0]->file_name;
            $file_path = $profile_pic_name[0]->file_path;
            
            $user_data = array();
            $user_data['name'] = $user_name;
            $user_data['file_name'] = $file_name;
            $user_data['file_path'] = $file_path;
            $user_data['total_asset'] = $assets;
            
            return view('home/view_profile',['user_data' => $user_data]);
        }
        catch(Exception $e){
            $message = $e->getMessage();
            $code = $e->getCode();       
            $string = $e->__toString(); 

            return 'Error, Exception Message: '.$message.' ||  Exception Code: '.$code;
            //view('home/view_profile')->with('failed', 

        }
       // return response()->json($user_data);

        // return [
        //     "status" => 1,
        //     "data" => $user_data
        // ];
    }

    public function edit_profile()
    {
        return view('home/edit_profile');
    }

    public function validate_edit_profile(Request $request)
    {
        $data = $request->except('_token');
        $user_id = $request->session()->get('user_id');
        $email = $request->session()->get('email');
        $update_data =[];

        foreach($data as $key => $value){
            $update_data += [$key => $value];
        } 
        // dd($data);
        // dd($update_data);
  
        User::where('id', $user_id)
        ->where('email', $email)
        ->update($data);

        return redirect()->route('profile', ['email'=>$email] )->with('success', 'Registration Completed, Please check your mailbox for login.');
    }

    public function asset_created()
    {
        return view('home/view_asset_created');
    }


    public function asset_owned()
    {

        return view('home/view_asset_owned');
    }


    public function asset_listed()
    {

        return view('home/view_asset_listed');
    }

    public function collection()
    {

        return view('home/view_collection');
    }

}