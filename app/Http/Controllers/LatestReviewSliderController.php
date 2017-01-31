<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateLatestReviewSliderImageRequest;
use App\LatestReviewSlider;
use App\Http\Requests\LatestReviewSliderImageEditRequest;
class LatestReviewSliderController extends Controller
{
    use ManagesImages;
    public function __construct()
    {

        $this->setImageDefaultsFromConfig('LatestReviewSlider');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $thumbnailPath = $this->thumbnailPath;
        $LatestReviews = LatestReviewSlider::paginate(10);
        return view('latest-review-slider.index', compact('LatestReviews', 'thumbnailPath'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('latest-review-slider.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CreateLatestReviewSliderImageRequest $request)
    {

        //create new instance of model to save from form
        $slug = str_slug($request->get('book_name'), "-");


        $LatestReview = new LatestReviewSlider([
            'book_name'         =>$request->get('book_name'),
            'slug'                     =>$slug,
            'author'                 =>$request->get('author'),
            'book_description'  =>$request->get('book_description'),   
            'book_review'          =>$request->get('book_review'),
            'library_name'         =>$request->get('library_name'),
            'library_address'      =>$request->get('library_address'),
            'library_contact'       =>$request->get('library_contact'),
            'image_name'=> $request->get('image_name'),
            'image_extension'   => $request->file('image')->getClientOriginalExtension(),
            ]);


        
        // save model
        $LatestReview->save();

        
        // get instance of file
        $file = $this->getUploadedFile();
        // pass in the file and the model
        $this->saveImageFiles($file, $LatestReview);
        alert()->success('Congrats!', 'Book Image And Thumbnail Created!');
        return redirect()->route('latest-review-slider.index', [$LatestReview]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $LatestReview = LatestReviewSlider::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        return view('latest-review-slider.show', compact('LatestReview', 'thumbnailPath', 'imagePath'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $LatestReview = LatestReviewSlider::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        return view('latest-review-slider.edit', compact('LatestReview', 'thumbnailPath'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, LatestReviewSliderImageEditRequest $request)
    {
        $LatestReview = LatestReviewSlider::findOrFail($id);
        $this->setUpdatedModelValues($request, $LatestReview);
        // if file, we have additional requirements before saving
        if ($this->newFileIsUploaded()) {
            $this->deleteExistingImages($LatestReview);
            $this->setNewFileExtension($request, $LatestReview);
        }
        $LatestReview->update([
            'book_name'         =>$request->input('book_name'),
            'author'                 =>$request->input('author'),
            'book_description'  =>$request->input('book_description'),   
            'book_review'          =>$request->input('book_review'),
            'library_name'         =>$request->input('library_name'),
            'library_address'      =>$request->input('library_address'),
            'library_contact'       =>$request->input('library_contact')
            ]); 
        
        $LatestReview->save();
        // check for file, if new file, overwrite existing file
        if ($this->newFileIsUploaded()){
            $file = $this->getUploadedFile();
            $this->saveImageFiles($file, $LatestReview);
        }
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        alert()->success('Congrats!', 'Book edited!');
        return view('latest-review-slider.show', compact('LatestReview', 'thumbnailPath', 'imagePath'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $LatestReview = LatestReviewSlider::findOrFail($id);
        $this->deleteExistingImages($LatestReview);
        LatestReviewSlider::destroy($id);
        alert()->error('Notice', 'image deleted!');
        return redirect()->route('latest-review-slider.index');
    }
    /**
     * @param EditImageRequest $request
     * @param $marketingImage
     */
    private function setNewFileExtension(LatestReviewSliderImageEditRequest $request, $LatestReview)
    {
        $LatestReview->image_extension = $request->file('image')->getClientOriginalExtension();
    }
    /**
     * @param EditImageRequest $request
     * @param $marketingImage
     */
    private function setUpdatedModelValues(LatestReviewSliderImageEditRequest $request, $LatestReview)
    {

    }
}