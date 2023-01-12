<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


class MidmanController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */

    public function checkstart(Request $request){
        if(Auth::user()){
            if(Auth::user()->email_verified==1){
                     return redirect()->route('initate');
            }
            else if (Auth::user()->email_verified==null) {
                return redirect()->route('error_verify');
            }
        } else {
            return redirect()->route('landing');
        }
    }


    public function dbcheck(){
        $user_email = Auth::user()->email;
        $user_verify = Auth::user()->email_verified;
        $user_id = Auth::id();

        $getuser = DB::table('da_user')
        ->where('authid',$user_id)
        ->where('email',$user_email)
        ->get();

        $new_data = array(
            'authid' => Auth::id(),
            'name' => Auth::user()->name,
            'lastname' => Auth::user()->nickname,
            'phone' => '00-0000-0000',
            'email' => Auth::user()->email,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'is_verify' => 1,
            'is_active' =>1,
        );

        if ($getuser->isEmpty()) {
            if($user_verify){
                $runuser = DB::table('da_user')->insert($new_data);
                if ($runuser){
                    return redirect()->route('landing');
                } else {
                    return redirect()->route('error_verify');
                }
            }
        } else if (!$getuser->isEmpty()){
            return redirect()->route('landing');
        }
    }

 public function error_verify(){
    if(Auth::user()){
        if(Auth::user()->email_verified==null) {
            return view('auth/not_verified');
            }
        }
    }
}
