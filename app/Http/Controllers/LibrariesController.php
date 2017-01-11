<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrariesController extends Controller
{
    //
	public function index(){
		return view ('libraries.index');
	}
}
