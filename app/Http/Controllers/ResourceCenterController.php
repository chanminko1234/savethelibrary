<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceCenterController extends Controller
{
    //
	public function index(){
		return view('resourcecenter.index');
	}
}
