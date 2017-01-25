<?php

namespace App;
use App\Traits\ShowsImages;
use Illuminate\Database\Eloquent\Model;

class LibrarySlider extends Model
{     
	use ShowsImages;
    //
	protected $fillable = [
	'library_name',
	'library_slug',
	'library_description',
	'library_address',
	'library_contact',
	'image_extension'
	];
}
