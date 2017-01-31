<?php

namespace App;
use App\Traits\ShowsImages;
use Illuminate\Database\Eloquent\Model;

class LatestNewsSlider extends Model
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
	public function user()
	{
		return $this->belongsTo('App\User');  
	}
}
