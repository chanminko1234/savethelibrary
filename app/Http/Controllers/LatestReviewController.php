<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Author;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateImageRequest;
use App\MarketingImage;
class LatestReviewController extends Controller
{
    //
	use ManagesImages;
	public function __construct()
	{

		$this->setImageDefaultsFromConfig('marketingImage');


	}
	public function index(){
		$thumbnailPath = $this->thumbnailPath;
		$marketingImages = MarketingImage::latest()->paginate(5);
		$categories=Category::all();
		$authors=Author::all();
		return view ('latestview.index', compact('categories', 'marketingImages', 'authors', 'thumbnailPath'));
	}
}
