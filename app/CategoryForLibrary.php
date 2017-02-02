<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class CategoryForLibrary extends Model

{
	protected $table = "catgory_for_libraries";
	
	public $fillable = ['title','parent_id'];


    /**

     * Get the index name for the model.

     *

     * @return string

    */

    public function childs() {

    	return $this->hasMany('App\CategoryForLibrary','parent_id','id') ;

    }

}