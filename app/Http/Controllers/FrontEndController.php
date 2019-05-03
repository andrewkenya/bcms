<?php



namespace App\Http\Controllers;

use App\Setting;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
       
          $title = Setting::first()->site_name;
           return view('index')->with('title', $title);
		
		
		
    }
}
