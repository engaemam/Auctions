<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auction;
class HomeController extends Controller
{
    //


    public function home(){
        $auctions=Auction::where('admin_status','1')->get()->take(6);
    	return view('home',compact(['auctions']));
    }

    public function about(){
    	return view('about');
    }

    public function contact(){
    	return view('contact');
    }


    
}
