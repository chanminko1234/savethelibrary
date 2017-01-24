<?php

namespace App;
use App\Traits\ShowsImages;
use Illuminate\Database\Eloquent\Model;

class ResourceCenterImage extends Model
{
	use ShowsImages;
    //
	protected $fillable = ['image_name',
	'slug',
	'category_name',
	'image_extension',
	'download'
	];
}
