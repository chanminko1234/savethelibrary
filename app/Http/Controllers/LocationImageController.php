<?php

namespace App\Http\Controllers;

use App\Traits\ManagesImages;
use App\Http\Requests\CreateLocationImageRequest;
use App\LocationImage;
use App\Http\Requests\EditLocationImageRequest;

class LocationImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use ManagesImages;

    public function __construct(){

        $this->setImageDefaultsFromConfig('locationImage');

    }

    public function index()
    {
        //
        $thumbnailPath = $this->thumbnailPath;
        $locationImages = LocationImage::paginate(10);
        return view('location_image.index', compact('locationImages', 'thumbnailPath'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('location_image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLocationImageRequest $request)
    {
        //dd($request->file('image')->getClientOriginalExtension());
          //
        $locationImage = new LocationImage([ 
            'location_name' => $request->get('location_name'),
            'location_desc' => $request->get('location_desc'),
            'location_address' => $request->get('location_address') ,
            'location_content'=> $request->get('location_content') ,
            'location_review' => $request->get('location_review') ,
            'image_name' => $request->get('image_name'),
            'image_extension' => $request->file('image')->getClientOriginalExtension()
            
            ]);
        //save model
        $locationImage->save();

        //get instance of file

        $file = $this-> getUploadedFile();

        //pass in the file and the model

        $this->saveImageFiles($file, $locationImage);

        alert()->success('Congrats!', 'Marketing Image And Thumbnail Created!');

        return redirect()->route('location_image.index', [$locationImage]);


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

        return view ('location_image.show',compact('locationImage', 'thumbnailPath', 'imagePath'));
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
        $locationImage = LocationImage::findOrFail($id);

        $thumbnailPath = $this->thumbnailPath;

        $imagePath = $this->imagePath;

        return view ('location_image.edit',compact('locationImage', 'thumbnailPath', 'imagePath'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, EditLocationImageRequest $request)
    {
        $locationImage = LocationImage::findOrFail($id);
        $this->setUpdatedModelValues($request, $locationImage);
        // if file, we have additional requirements before saving
        if ($this->newFileIsUploaded()) {
            $this->deleteExistingImages($locationImage);
            $this->setNewFileExtension($request, $locationImage);
        }

        $locationImage->update([
            'location_name'         =>$request->input('location_name'),
            'location_desc'                 =>$request->input('location_desc'),
            'location_address'  =>$request->input('location_address'),   
            'location_review'          =>$request->input('location_review'),
            'location_content'         =>$request->input('location_content'),
            ]); 
        
        $locationImage->save();
        // check for file, if new file, overwrite existing file
        if ($this->newFileIsUploaded()){
            $file = $this->getUploadedFile();
            $this->saveImageFiles($file, $locationImage);
        }
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        alert()->success('Congrats!', 'image edited!');
        return view('location_image.show', compact('locationImage', 'thumbnailPath', 'imagePath'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locationImage = LocationImage::findOrFail($id);
        $this->deleteExistingImages($locationImage);
        locationImage::destroy($id);
        alert()->error('Notice', 'image deleted!');
        return redirect()->route('location_image.index');
    }

     /**
     * @param EditImageRequest $request
     * @param $locationImage
     */
     private function setNewFileExtension(EditLocationImageRequest $request, $locationImage)
     {
        $locationImage->image_extension = $request->file('image')->getClientOriginalExtension();
    }
    /**
     * @param EditImageRequest $request
     * @param $locationImage
     */
    private function setUpdatedModelValues(EditLocationImageRequest $request, $locationImage)
    {
    }

}
