<?php

namespace App;

use App\Traits\ShowsImages;
use Illuminate\Database\Eloquent\Model;

class LocationImage extends Model
{
    //
	use ShowsImages;

	protected $fillable=[
	'library_name',
	'slug',
	'library_address',
	'library_town',
	'contact_name',
	'contact_no',
	'email',
	'facebook',
	'library_location',
	'date',
	'library_description',
	'city_id',
	'services',
	'image_name',
	'image_extension'
	];
}
