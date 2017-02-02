<?php

namespace App;

use App\Traits\ShowsImages;
use Illuminate\Database\Eloquent\Model;

class LocationImage extends Model
{
    //
	use ShowsImages;

	protected $fillable=[
	'image_name',
	'location_name',
	'location_slug',
	'location_desc',
	'location_address',
	'location_content',
	'location_review',
	'image_extension'
	];
}
