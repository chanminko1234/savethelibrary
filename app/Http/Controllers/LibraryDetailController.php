<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateLocationImageRequest;
use App\LocationImage;
class LibraryDetailController extends Controller
{
 use ManagesImages;
 public function __construct(){

    $this->setImageDefaultsFromConfig('locationImage');

}
public function index(){
    $thumbnailPath = $this->thumbnailPath;
    $locationImages = LocationImage::latest()->paginate(10);
    return view('library_detail.index', compact('locationImages', 'thumbnailPath'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       $locationImage = LocationImage::findOrFail($id);

       $thumbnailPath = $this->thumbnailPath;

       $imagePath = $this->imagePath;

       return view ('library_detail.index',compact('locationImage', 'thumbnailPath', 'imagePath'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
