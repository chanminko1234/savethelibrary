<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryForLibrary;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateLocationImageRequest;
use App\LocationImage;
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
		$categories = CategoryForLibrary::where('parent_id', '=', 0)->get();

		$allCategories = CategoryForLibrary::pluck('title','id')->all();

		return view('libraries.index',compact('categories', 'locationImages','allCategories', 'thumbnailPath'));

	}
}
