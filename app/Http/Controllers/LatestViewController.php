<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateResourceCenterImageRequest;
use App\ResourceCenterImage;
use App\ResourceCategory;
use App\Author;
class LatestViewController extends Controller
{
    //
	use ManagesImages;
	public function __construct()
	{
		$this->setImageDefaultsFromConfig('resourcecenterImage');
	}
	public function index(){
		$categories=ResourceCategory::all();
		$authors=Author::all();
		$thumbnailPath = $this->thumbnailPath;
		$resourcecenterImages = ResourceCenterImage::latest()->paginate(10);
		return view('resourcecenter.index', compact('resourcecenterImages', 'categories','authors',
			'thumbnailPath'));
	}
}
