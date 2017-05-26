<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $messages=DB::table('messages')->get();
    	return view('admin.dashboard')->with(['messages'=>$messages]);
    }

    public function experience()
    {
    	return view('admin.dashboard');
    }

    public function education()
    {

    }

    public function addresse()
    {

    }

    
}
