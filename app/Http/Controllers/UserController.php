<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DaFile;
use App\Models\UserAddress;
use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;

use DB;
use Mail;
use Session;
use Exception;

use Carbon\Carbon; 
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth', 'verified']);
    }

    public function register()
    {
        return view('user.register');
    }

    public function login($token = null){
        if(!empty($token))
            return view('user.login',['token' => $token]);
        else 
            return view('user.login');
    }

    public function logout()
    {

        Auth::logout();
        
        Session::forget('name');
        Session::forget('email');
        Session::forget('user_id');
        // Session::forget('join_date');
        // Session::forget('phone_number');
        // Session::forget('role_name');
        // Session::forget('avatar');
        // Session::forget('position');
        // Session::forget('department');     
        Session::flush();   

        return redirect('login');
    }

    public function forgot_password(){
        return view('user.forgot_pw');
    }

    public function reset_password($token) { 
        return view('user.reset_pw', ['token' => $token]);
     }

    public function validate_login(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //$credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {   
            $user = Auth::User();

            Session::put('name', $user->name);
            Session::put('email', $user->email);
            Session::put('user_id', $user->id);
            // Session::put('join_date', $user->join_date);
            // Session::put('phone_number', $user->phone_number);
            // Session::put('status', $user->status);
            // Session::put('role_name', $user->role_name);
            // Session::put('avatar', $user->avatar);
            // Session::put('position', $user->position);
            // Session::put('department', $user->department);
     
            if(!($user->verified))
                return back()->with('failed','Account Not Verified Yet');
                
            $request->session()->regenerate();
            return redirect('marketplace/listing');
        }

        session()->flash('message', 'Invalid Credentials');

        session()->flash('type', 'danger');

        return back()->withErrors([
            'password' => 'The provided credentials do not match our records.',
        ])->onlyInput('password');
        
    }

    public function validate_register(Request $request)
    {   
        
        try{

            $request->validate([
                'name'                =>   'required',
                'email'               =>   'required|email|unique:users',
                'password'            =>   'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
                'address'             =>   'required',
                'zipcode'             =>   'required',
                'country'             =>   'required',
                'state'               =>   'required',
                'city'                =>   'required',
                'profileImage'        =>   'mimes:png,jpg,jpeg|max:2048',
    
            ]);

            $user = new User;
            $file = new DaFile;
            $user_address = new UserAddress;
            
            $data = $request->all();

            if(isset($data)){

                $username  = $data['name'];
                $email = $data['email'];
                $password = $data['password'];
                $address     = $data['address'];
                $zipcode     = $data['zipcode'];
                $country     = $data['country'];
                $state       = $data['state'];
                $city        = $data['city'];
                $phone_no    = $data['phone'];
                
                
                if($request->file('profileImage'))
                {
                    // For AWS S3
                    // $filePath = $request->file->storeAs('uploads', $fileName,'s3');
                    // $file->file = '/storage/' . $filePath;
                    // $file-save();

                    //For Local
                    $file_name = $data['profileImage']->getClientOriginalName();
                    $file_size = $request->file('profileImage')->getSize();
                    $file_ext =  $request->file('profileImage')->extension();
                    $file_path = $request->file('profileImage')->move(public_path('uploads/profile'), $file_name);   

                    $user->name = $username;
                    $user->email = $email;
                    $user->password = Hash::make($password);
                    $user->profileImage = $file_name;
                    $user->email_verification_token = Str::random(32);
                    $user_creation = $user->save();
                    $user_id = $user->id;
     
                   if(!empty($user_id)){

                        if(!empty($address) && !empty($zipcode) && !empty($state) && !empty($country) && !empty($city))
                        {
                            $user_address->address = $address;
                            $user_address->zipcode = $zipcode;
                            $user_address->state = $state;
                            $user_address->country = $country;
                            $user_address->city = $city;
                            $user_address->receipent_name = $username;
                            $user_address->phone_no = $phone_no;
                            $user_address->is_default_shipping = 0;
                            $user_address->is_default_billing = 0;
                            $user_address->user_id_ref = $user_id;
                            $address_creation = $user_address->save();

                            // $address_creation = DB::table('da_user_address')->insert([
                            //     'address'               => $address,
                            //     'zipcode'               => $zipcode,
                            //     'state'                 => $state,
                            //     'country'               => $country,
                            //     'city'                  => $city,
                            //     'receipent_name'        => $username,
                            //     'phone_no'              => $phone_no,   
                            //     'is_default_shipping'   => 0,
                            //     'is_default_billing'    => 0,
                            //     'user_id_ref'           => 26
                            // ]);
                                                       
                            if($address_creation)
                            {
                                $file->file_name = $file_name;
                                $file->file_ext  = $file_ext;
                                $file->file_size = $file_size;
                                $file->file_path = $file_path;
                                $file->user_id   = $user_id;
                                $file_creation   = $file->save();

                                if($file_creation){
                                    // Mail::send('mail.login_link', ['token' => $token], function($message) use($request){
                                    //     $message->to($request->email);
                                    //     $message->subject('JUDA NFT Account Login Notification');
                                    // });
                                    \Mail::to($user->email)->send(new VerificationEmail($user));

                                    session()->flash('message', 'Please check your email to activate your account');
                                    
                                    return redirect()->back();
                                }
                                else{

                                    session()->flash('failed', 'User File Creation failed!');
                                    
                                    return redirect()->back();
                                }
                            }
                            else{
                                return 'User Address creation failed!';
                            }
                        }
                        else{
                            return 'User address empty!';
                        }

                    }
                    else{
                        return 'User ID empty!';
                    }
                }
                else{
                    return 'User register failed!';
                }
            }
            else{
                return 'User register failed!';
            }
            
       } 
        catch (Exception $e)
        {
            $message = $e->getMessage();
            $code = $e->getCode();       
            $string = $e->__toString();       

            return redirect('login')->with('failed', 'Error, Exception Message: '.$message); //"/n Exception Code: ".$code."/n Exception String: ".$string);
        }
     
       return redirect('login')->with('success', 'Registration Completed, Please check your mailbox for login.');
    }

    public function validate_forgot_password(Request $request){

        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);

        Mail::send('mail.forgot_pw', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function validate_reset_password(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
                            ->where([
                              'email' => $request->email, 
                              'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect()->route('login')->with('message', 'Your password has been changed!');
    }
}
