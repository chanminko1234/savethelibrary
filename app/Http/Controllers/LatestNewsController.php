<?php

namespace App\Http\Controllers;

use App\Traits\ManagesImages;
use App\Http\Requests\CreateLatestNewsImageRequest;
use App\LatestNews;
use App\Http\Requests\LatestNewsImageEditRequest;

class LatestNewsController extends Controller
{
    use ManagesImages;
    public function __construct()
    {

        $this->setImageDefaultsFromConfig('LatestNewsImage');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $thumbnailPath = $this->thumbnailPath;
        $LatestNews = LatestNews::paginate(5);
        return view('latest-news.index', compact('LatestNews', 'thumbnailPath'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('latest-news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLatestNewsImageRequest $request)
    {
        //
       $slug = str_slug($request->get('news_title'), "-");



       $LatestNew = new LatestNews([
        'news_title'      =>$request->get('news_title'),
        'slug'           => $slug,
        'news_description'  =>$request->get('news_description'),
        'date'   =>$request->get('date'),
        'time'   =>$request->get('time'),
        'location' =>$request->get('location'),
        'contact'  =>$request->get('contact'),
        'image_name'        => $request->get('image_name'),
        'image_extension'   => $request->file('image')->getClientOriginalExtension(),
        ]);
        // save model
       $LatestNew->save();
        // get instance of file
       $file = $this->getUploadedFile();
        // pass in the file and the model
       $this->saveImageFiles($file, $LatestNew);
       alert()->success('Congrats!', 'Latest News Created!');
       return redirect()->route('latest-news.index', [$LatestNew]);
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
      $LatestNew = LatestNews::findOrFail($id);
      $thumbnailPath = $this->thumbnailPath;
      $imagePath = $this->imagePath;
      return view('latest-news.show', compact('LatestNew', 'thumbnailPath', 'imagePath'));
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
        $LatestNew = LatestNews::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        return view('latest-news.edit', compact('LatestNew', 'thumbnailPath'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, LatestNewsImageEditRequest $request)
    {
        //
     $LatestNew = LatestNews::findOrFail($id);
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
    return view('latest-news.show', compact('LatestNew', 'thumbnailPath', 'imagePath'));
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
       $LatestNew = LatestNews::findOrFail($id);
       $this->deleteExistingImages($LatestNew);
       LatestNews::destroy($id);
       alert()->error('Notice', 'image deleted!');
       return redirect()->route('latest-news.index');
   }
   /**
     * @param EditImageRequest $request
     * @param $LatestNew
     */
   private function setNewFileExtension(LatestNewsImageEditRequest $request,$LatestNew)
   {
    $LatestNew->image_extension = $request->file('image')->getClientOriginalExtension();
}
    /**
     * @param EditImageRequest $request
     * @param $LatestNew
     */
    private function setUpdatedModelValues(LatestNewsImageEditRequest $request,$LatestNew)
    {
    }
}
