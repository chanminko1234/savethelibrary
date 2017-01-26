<?php
namespace App\Http\Controllers;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateLatestNewsSliderImageRequest;
use App\LatestNewsSlider;
use App\Http\Requests\LatestNewsSliderImageEditRequest;
class LatestNewsSliderController extends Controller
{
    use ManagesImages;
    public function __construct()
    {

        $this->setImageDefaultsFromConfig('LatestNewsSliderImage');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $thumbnailPath = $this->thumbnailPath;
        $LatestNews = LatestNewsSlider::paginate(5);
        return view('latest-news-slider.index', compact('LatestNews', 'thumbnailPath'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('latest-news-slider.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CreateLatestNewsSliderImageRequest $request)
    {      
        //create new instance of model to save from form

        $slug = str_slug($request->get('news_title'), "-");



        $LatestNew = new LatestNewsSlider([
            'news_title'      =>$request->get('news_title'),
            'slug'           => $slug,
            'news_description'  =>$request->get('news_description'),
            'date'   =>$request->get('date'),
            'time'   =>$request->get('time'),
            'location' =>$request->get('location'),
            'contact'  =>$request->get('contact'),
            // 'is_active'         => $request->get('is_active'),
            // 'is_featured'       => $request->get('is_featured'),
            'image_name'        => $request->get('image_name'),
            'image_extension'   => $request->file('image')->getClientOriginalExtension(),
            ]);
        // save model
        $LatestNew->save();
        // get instance of file
        $file = $this->getUploadedFile();
        // pass in the file and the model
        $this->saveImageFiles($file, $LatestNew);
        alert()->success('Congrats!', 'Latest News for Slider Created!');
        return redirect()->route('latest-news-slider.index', [$LatestNew]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $LatestNew = LatestNewsSlider::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        return view('latest-news-slider.show', compact('LatestNew', 'thumbnailPath', 'imagePath'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $LatestNew = LatestNewsSlider::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        return view('latest-news-slider.edit', compact('LatestNew', 'thumbnailPath'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, LatestNewsSliderImageEditRequest $request)
    {
        $LatestNew = LatestNewsSlider::findOrFail($id);
        $this->setUpdatedModelValues($request, $LatestNew);
        // if file, we have additional requirements before saving
        if ($this->newFileIsUploaded()) {
            $this->deleteExistingImages($LatestNew);
            $this->setNewFileExtension($request,$LatestNew);
        }
        $LatestNew->update([
           'news_title'      =>$request->input('news_title'),
           'news_description'  =>$request->input('news_description'),
           'date'   =>$request->input('date'),
           'time'   =>$request->input('time'),
           'location' =>$request->input('location'),
           'contact'  =>$request->input('contact')
           ]); 
        $LatestNew->update($request->all());
        // check for file, if new file, overwrite existing file
        if ($this->newFileIsUploaded()){
            $file = $this->getUploadedFile();
            $this->saveImageFiles($file,$LatestNew);
        }
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        alert()->success('Congrats!', 'Library edited!');
        return view('latest-news-slider.show', compact('LatestNew', 'thumbnailPath', 'imagePath'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $LatestNew = LatestNewsSlider::findOrFail($id);
        $this->deleteExistingImages($LatestNew);
        LatestNewsSlider::destroy($id);
        alert()->error('Notice', 'image deleted!');
        return redirect()->route('latest-news-slider.index');
    }
    /**
     * @param EditImageRequest $request
     * @param $marketingImage
     */
    private function setNewFileExtension(LatestNewsSliderImageEditRequest $request,$LatestNew)
    {
        $LatestNew->image_extension = $request->file('image')->getClientOriginalExtension();
    }
    /**
     * @param EditImageRequest $request
     * @param $marketingImage
     */
    private function setUpdatedModelValues(LatestNewsSliderImageEditRequest $request,$LatestNew)
    {
    }
}