<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Access\Response;

class PresentationController extends Controller
{
    public function index()
    {
    	$exp=DB::table('experience')->get();
    	$edu=DB::table('education')->get();
    	
    	return view('welcome')->with(['education'=>$edu,'experience'=>$exp]);
    }
    
    public function sendContact(Request $request)
    {
    	$name=$request->name;
    }
    
    public function getDownload(){
    	$file= public_path()."/CVTOQUETArmand.pdf";
    	
    	
     return response()->download($file);
    // return redirect('/');   
    }
}
