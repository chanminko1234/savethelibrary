<?php
namespace App\Http\Controllers;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateLibraryImageRequest;
use App\LibrarySlider;
use App\Http\Requests\EditImageRequest;
class LibrarySliderController extends Controller
{
    use ManagesImages;
    public function __construct()
    {

        $this->setImageDefaultsFromConfig('marketingImage');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $thumbnailPath = $this->thumbnailPath;
        $LibrySliderImage = LibrarySlider::paginate(5);
        return view('library-slider.index', compact('LibrySliderImage', 'thumbnailPath'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('library-slider.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CreateLibraryImageRequest $request)
    {      
        //create new instance of model to save from form
        
        $slug = str_slug($request->get('library_name'), "-");

        $LibrySliderImage = new LibrarySlider([
            'library_name'      =>$request->get('library_name'),
            'library_slug'      =>$slug,
            'library_address'   =>$request->get('library_address'),
            'library_contact'   =>$request->get('library_contact'),
            'library_description' =>$request->get('library_description'),
            'image_name'        => $request->get('image_name'),
            'image_extension'   => $request->file('image')->getClientOriginalExtension(),
            'is_active'         => $request->get('is_active'),
            'is_featured'       => $request->get('is_featured')
            ]);
        // save model
        $LibrySliderImage->save();
        // get instance of file
        $file = $this->getUploadedFile();
        // pass in the file and the model
        $this->saveImageFiles($file, $LibrySliderImage);
        alert()->success('Congrats!', 'Book Image And Thumbnail Created!');
        return redirect()->route('library-slider.show', [$LibrySliderImage]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $LibrySliderImage = LibrarySlider::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        return view('library-slider.show', compact('LibrySliderImage', 'thumbnailPath', 'imagePath'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $LibrySliderImage = LibrarySlider::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        return view('marketing-image.edit', compact('LibrySliderImage', 'thumbnailPath'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, EditImageRequest $request)
    {
        $LibrySliderImage = LibrarySlider::findOrFail($id);
        $this->setUpdatedModelValues($request, $LibrySliderImage);
        // if file, we have additional requirements before saving
        if ($this->newFileIsUploaded()) {
            $this->deleteExistingImages($LibrySliderImage);
            $this->setNewFileExtension($request,$LibrySliderImage);
        }
        $LibrySliderImage->save();
        // check for file, if new file, overwrite existing file
        if ($this->newFileIsUploaded()){
            $file = $this->getUploadedFile();
            $this->saveImageFiles($file,$LibrySliderImage);
        }
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        alert()->success('Congrats!', 'Book edited!');
        return view('library-slider.show', compact('LibrySliderImage', 'thumbnailPath', 'imagePath'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $LibrySliderImage = LibrarySlider::findOrFail($id);
        $this->deleteExistingImages($LibrySliderImage);
        LibrarySlider::destroy($id);
        alert()->error('Notice', 'image deleted!');
        return redirect()->route('library-slider.index');
    }
    /**
     * @param EditImageRequest $request
     * @param $marketingImage
     */
    private function setNewFileExtension(EditImageRequest $request,$LibrySliderImage)
    {
        $LibrySliderImage->image_extension = $request->file('image')->getClientOriginalExtension();
    }
    /**
     * @param EditImageRequest $request
     * @param $marketingImage
     */
    private function setUpdatedModelValues(EditImageRequest $request,$LibrySliderImage)
    {
        $LibrySliderImage->is_active = $request->get('is_active');
        $LibrySliderImage->is_featured = $request->get('is_featured');
    }
}