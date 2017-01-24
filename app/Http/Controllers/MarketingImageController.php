<?php
namespace App\Http\Controllers;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateImageRequest;
use App\MarketingImage;
use App\Http\Requests\EditImageRequest;
class MarketingImageController extends Controller
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
        $marketingImages = MarketingImage::paginate(5);
        return view('marketing-image.index', compact('marketingImages', 'thumbnailPath'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marketing-image.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CreateImageRequest $request)
    {
        //create new instance of model to save from form
        $slug = str_slug($request->get('book_name'), "-");

        $marketingImage = new MarketingImage([
            'book_name'         =>$request->get('book_name'),
            'slug'                     =>$slug,
            'author'                 =>$request->get('author'),
            'category'               =>$request->get('category'),
            'book_description'  =>$request->get('book_description'),   
            'book_review'          =>$request->get('book_review'),
            'library_name'         =>$request->get('library_name'),
            'library_address'      =>$request->get('library_address'),
            'library_contact'       =>$request->get('library_contact'),
            'image_name'        => $request->get('image_name'),
            'image_extension'   => $request->file('image')->getClientOriginalExtension(),
            'is_active'         => $request->get('is_active'),
            'is_featured'       => $request->get('is_featured')
            ]);

        // save model
        $marketingImage->save();

        // get instance of file
        $file = $this->getUploadedFile();
        // pass in the file and the model
        $this->saveImageFiles($file, $marketingImage);
        alert()->success('Congrats!', 'Book Image And Thumbnail Created!');
        return redirect()->route('marketing-image.show', [$marketingImage]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marketingImage = MarketingImage::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        return view('marketing-image.show', compact('marketingImage', 'thumbnailPath', 'imagePath'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marketingImage = MarketingImage::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        return view('marketing-image.edit', compact('marketingImage', 'thumbnailPath'));
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
        $marketingImage = MarketingImage::findOrFail($id);
        $this->setUpdatedModelValues($request, $marketingImage);
        // if file, we have additional requirements before saving
        if ($this->newFileIsUploaded()) {
            $this->deleteExistingImages($marketingImage);
            $this->setNewFileExtension($request, $marketingImage);
        }
        
        $marketingImage->save();
        // check for file, if new file, overwrite existing file
        if ($this->newFileIsUploaded()){
            $file = $this->getUploadedFile();
            $this->saveImageFiles($file, $marketingImage);
        }
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        alert()->success('Congrats!', 'Book edited!');
        return view('marketing-image.show', compact('marketingImage', 'thumbnailPath', 'imagePath'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marketingImage = MarketingImage::findOrFail($id);
        $this->deleteExistingImages($marketingImage);
        MarketingImage::destroy($id);
        alert()->error('Notice', 'image deleted!');
        return redirect()->route('marketing-image.index');
    }
    /**
     * @param EditImageRequest $request
     * @param $marketingImage
     */
    private function setNewFileExtension(EditImageRequest $request, $marketingImage)
    {
        $marketingImage->image_extension = $request->file('image')->getClientOriginalExtension();
    }
    /**
     * @param EditImageRequest $request
     * @param $marketingImage
     */
    private function setUpdatedModelValues(EditImageRequest $request, $marketingImage)
    {
        $marketingImage->is_active = $request->get('is_active');
        $marketingImage->is_featured = $request->get('is_featured');
    }
}