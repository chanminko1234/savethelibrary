<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateLatestNewsImageRequest;
use App\LatestNews;
class LatestController extends Controller
{
    //
	use ManagesImages;
	public function __construct()
	{

		$this->setImageDefaultsFromConfig('LatestNewsImage');


	}
	public function index(){
		$thumbnailPath = $this->thumbnailPath;
		$LatestNews = LatestNews::latest()->paginate(10);
		return view('latest.index', compact('LatestNews', 'thumbnailPath'));
	}
}