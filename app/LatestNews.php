<?php

namespace App;
use App\Traits\ShowsImages;

use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
	use ShowsImages;
    //

	protected $fillable = [
	'news_title',
	'slug',
	'news_description',
	'date',
	'time',
	'contact',
	'location',
	'image_extension',
	'image_name'];
}
