<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GlobalController extends Controller
{

    public function SetGlobeData(){

            // $settings= DB::table('ci_settings')->limit(1)->get();
            // foreach ($settings as $set){
            //     session()->put('engine_on',1);
            //     session()->put('product_code',$set->product_code);
            //     session()->put('order_code',$set->order_code);
            //     session()->put('information_code',$set->information_code);
            //     session()->put('storefront_code',$set->storefront_code);
            //     session()->put('payment_code',$set->payment_code);
            //     session()->put('server_url',$set->server_url);
            //     session()->put('apps_url',$set->apps_url);
            //     session()->put('system_notice_title',$set->system_notice_title);
            //     session()->put('system_notice_content',$set->system_notice_content);
            //     session()->put('system_version',$set->system_version);
            //     session()->put('company_name',$set->company_name);
            //     session()->put('homepage_video',$set->homepage_video);
            //     session()->put('system_name',$set->system_name);
            //     session()->put('system_intro_text',$set->system_intro_text);
            // }


    }

}
