<?php

namespace App;
use App\Traits\ShowsImages;
use Illuminate\Database\Eloquent\Model;

class MarketingImage extends Model
{     
	use ShowsImages;
    //
	protected $fillable = [
	'book_name',
	'slug',
	'author',
	'category',
	'book_description',
	'book_review',
	'library_name',
	'library_address',
	'library_contact',
	'is_active',
	'is_featured',
	'image_name',
	'image_extension'];
	public function showActiveStatus($is_active)
	{

		return $is_active == 1 ? 'Yes' : 'No';

	}

	public function showFeaturedStatus($is_featured)
	{

		return $is_featured == 1 ? 'Yes' : 'No';

	}
}
