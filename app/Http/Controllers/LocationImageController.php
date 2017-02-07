<?php

namespace App\Http\Controllers;

use App\Traits\ManagesImages;
use App\Http\Requests\CreateLocationImageRequest;
use App\LibraryLocation;
use App\LocationImage;
use App\State;
use App\City;
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
        $states = State::get();
        return view('location_image.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLocationImageRequest $request)
    {
        $slug = str_slug($request->get('library_name'), "-");
        //dd($request->file('image')->getClientOriginalExtension());
          //
        $locationImage = new LocationImage([ 
            'library_name' => $request->get('library_name'),
            'slug' => $slug,
            'library_address' => $request->get('library_address'),
            'library_town' => $request->get('library_town') ,
            'contact_name'=> $request->get('contact_name') ,
            'contact_no' => $request->get('contact_no') ,
            'email' => $request->get('email'),
            'facebook' => $request->get('facebook'),
            'library_location' => $request->get('library_location'),
            'date' => $request->get('date'),
            'library_description' => $request->get('library_description'),
            
            'date' => $request->get('date'),
            'services' => $request->get('services'),
            'city_id' => $request->get('city_id'),

            'image_name'        => $request->get('image_name'),
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
            'library_name' => $request->input('library_name'),
            
            'library_address' => $request->input('library_address'),
            'library_town' => $request->input('library_town') ,
            'contact_name'=> $request->input('contact_name') ,
            'contact_no' => $request->input('contact_no') ,
            'email' => $request->input('email'),
            'facebook' => $request->input('facebook'),
            'library_location' => $request->input('library_location'),
            'date' => $request->input('date'),
            'library_description' => $request->input('library_description'),
            
            'date' => $request->input('date'),
            'services' => $request->input('services'),
            'city_id' => $request->input('city_id')
            

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
     * @param f $request
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
