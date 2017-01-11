<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatestReviewController extends Controller
{
    //
	public function index(){
		return view ('latestview.index');
	}
}
