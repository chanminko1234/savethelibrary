<?php

namespace App\Http\Controllers;

use App\Traits\ManagesImages;
use App\Http\Requests\CreateLocationImageRequest;
use App\LocationImage;
use Illuminate\Http\Request;

class LibrariesController extends Controller
{
    //
	use ManagesImages;
	public function __construct(){

		$this->setImageDefaultsFromConfig('locationImage');

	}
	public function index(){
		$thumbnailPath = $this->thumbnailPath;
		$locationImages = LocationImage::latest()->paginate(10);
		return view('libraries.index', compact('locationImages', 'thumbnailPath'));
	}
}
