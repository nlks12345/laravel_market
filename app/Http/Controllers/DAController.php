<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Asset;
use App\Models\AssetCollection;

use Carbon\Carbon; 

use Storage;
use PDF;
use Mail;
use Session;
use Exception;



class DAController extends Controller
{

  public function __construct()
  {
    //   app('App\Http\Controllers\GlobalController')->SetGlobeData();
       // $this->middleware('auth0.authenticate');
  }

  public function asset_create()
  {
    $asset_collection = AssetCollection::all();
    
    
    return view('dasset/create',['collections' => $asset_collection]);
  }

  public function validate_asset_create(Request $request)
  {
    $data = $request->except('token');
    
    // $request->validate([
    //   'upload_asset'    => 'required|email',
    //   'asset_category'  => 'required',
    //   'asset_name'      => 'required'
    // ]);

    if(isset($data)){  
      if(!isset($data['tnc_check'])){
          return back()->with('failed','Please make sure you have agreed with the T&C');
      }else{

            $asset = new Asset;
            $asset_collection = new AssetCollection;
           
            $data = $request->all();

            $user_id = $request->session()->get('user_id');
            $user_email = $request->session()->get('user_email');
            $collection_id = $data['collection_id'];

            $asset_sku = $this->generateRandomString();
            $todaydate = Carbon::now();
           // $asset = Asset::where('user_ref_id', $user_id);
         //   $asset = Asset::where('user_ref_id', $collection_id);
       //   dd($asset);
           // $users = DB::table('users')->where('email', strtolower($email))->limit(1)->get();
            //->where('email', $email);
  
            if(isset($data)){
              if($request->file('upload_asset'))
              {

                  $upload_asset = $data['upload_asset']->getClientOriginalName();
                  $asset_name  = $data['asset_name'];
                  $asset_sku = $asset_sku;
                  $asset_create_date = $todaydate;
                  $asset_price     = $data['asset_price'];
                 // $asset_quantity     = $data['asset_quantity'];
                  $asset_category     = $data['asset_category'];
                  $asset_description       = $data['asset_description'];
                  $asset_img        = $upload_asset;
                  $asset_deliverable    = 1;
                  $asset_deliverable_shipping    = 1;
                  $asset_loyalty_fee    = 2;
                  $asset_collection_ref_id    = $collection_id;
                  $asset_user_ref_id    = $user_id;
                  $asset_owner_ref_id    = $user_id;
                  $asset_status    = 1; 

                  $asset->asset_sku = $asset_sku;
                  $asset->asset_name = $asset_name;
                  $asset->asset_create_date = $asset_create_date;
                  $asset->asset_quantity = 1;
                  $asset->asset_price = $asset_price;
                  $asset->asset_category =$asset_category;
                  $asset->asset_description = $asset_description;
                  $asset->asset_img = $asset_img;
                  $asset->asset_deliverable =1;
                  $asset->asset_deliverable_shipping =1;
                  $asset->asset_loyalty_fee = 2;
                  $asset->asset_collection_ref_id  =$asset_collection_ref_id;
                  $asset->asset_user_ref_id = $asset_user_ref_id;
                  $asset->asset_owner_ref_id = $asset_owner_ref_id;
                  $asset->asset_status  = 1;
                  $asset_create = $asset->save();
                  $asset_id = $asset->id;
                
                  return redirect()->route('asset_create')->with('success','Your Asset Created Successfully');
              }
                  
                
            }
          }
      }
    
  }

  public function validate_collection_create(Request $request)
  { 
    // $request->validate([
    //   'upload_asset'    => 'required|email',
    //   'asset_category'  => 'required',
    //   'asset_name'      => 'required'
    // ]);

    $asset_collection = new AssetCollection;
            
    $data = $request->all();
    $user_id = $request->session()->get('user_id');
   
    if(isset($data))
    {  
      $collection_name  = $data['collection_name'];
      $collection_desc = $data['collection_desc'];
      $collection_link     = $data['collection_link'];

      if($request->file('upload_collection'))
      {
        $collection_banner_img = $data['upload_collection']->getClientOriginalName(); 
        $file_size = $request->file('upload_collection')->getSize();
        $file_ext =  $request->file('upload_collection')->extension();
        $file_path = $request->file('upload_collection')->move(public_path('uploads/profile'), $collection_banner_img); 
        
        // $exist_asset_collection = AssetCollection::where('user_ref_id', $user_id)
        // ->where('collection_name',$collection_name);
        $exist_asset_collection = DB::table('da_collection')
        ->where('user_ref_id', $user_id)
        ->where('collection_name',$collection_name)
        ->limit(1)->get();
        

        if(isset($exist_asset_collection[0])){
          return 'Collection Exist Already.';
        }
        else{
          $asset_collection->collection_name = $collection_name;
          $asset_collection->collection_desc = $collection_desc;
          $asset_collection->collection_link = $collection_link;
          $asset_collection->collection_banner_img = $collection_banner_img;
          $asset_collection->user_ref_id = $user_id;
          $collection_creation = $asset_collection->save();
          $collection_id = $asset_collection->id;

          return redirect()->route('asset_create')->with('success','Your Collection Created Successfully');
        }

      }         
    }
  }

  public function generateRandomString($length = 5) 
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

}