<?php

namespace App;
use App\Traits\ShowsImages;
use Illuminate\Database\Eloquent\Model;

class LatestReviewSlider extends Model
{     
	use ShowsImages;
    //
	protected $fillable = [
	'book_name',
	'slug',
	'author',
	'book_description',
	'book_review',
	'library_name',
	'library_address',
	'library_contact',
	'image_name',
	'image_extension'];
	
}
