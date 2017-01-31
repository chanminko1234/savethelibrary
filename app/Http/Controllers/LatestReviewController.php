<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
		return view('latestview.index', compact('marketingImages', 'thumbnailPath'));
	}
}
