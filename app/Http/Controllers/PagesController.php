<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function settings(){
    	 $first = '';
    	 $last = '';
    	 return view('pages.settings', compact('first', 'last'));
    }
}
