<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Storage;
use PDF;


class MarketController extends Controller
{

  public function listing()
    {

        return view('market/listing');
    }

    public function view_asset()
    {

        return view('market/view');
    }


    public function trade_option(){

      return view('market/select-to-sell');
      
    }
    public function trade_new()
    {

        return view('market/trade_new');
    }

    public function trade_inventory()
    {

        return view('market/trade_inventory');
    }

    public function trade_selected()
    {

        return view('market/trade_selected');
    }


}