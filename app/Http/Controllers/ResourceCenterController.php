<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateResourceCenterImageRequest;
use App\ResourceCenterImage;
use App\Http\Requests\EditResourceImageRequest;

class ResourceCenterController extends Controller
{
    use ManagesImages;
    public function __construct()
    {
        $this->setImageDefaultsFromConfig('resourcecenterImage');
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
        $resourcecenterImages = ResourceCenterImage::paginate(10);
        return view('resourcecenter-image.index', compact('resourcecenterImages',
            'thumbnailPath'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('resourcecenter-image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateResourceCenterImageRequest $request)
    {
        //
        $slug = str_slug($request->get('book_name'), "-");
        $resourcecenterImage = new ResourceCenterImage([
            'book_name'=> $request->get('book_name'),
            'slug'                     =>$slug,
            'category_name'=>$request->get('category_name'),
            'image_extension'=> $request->file('image')
            ->getClientOriginalExtension(),
            'download'=>$request->get('download')
            ]);
// save model
        $resourcecenterImage->save();
// get instance of file
        $file = $this->getUploadedFile();
// pass in the file and the model
        $this->saveImageFiles($file, $resourcecenterImage);
        alert()->success('Congrats!', 'Resource Center Image And Thumbnail Created!');
        return redirect()->route('resourcecenter-image.index', [$resourcecenterImage]);
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
        $resourcecenterImage = ResourceCenterImage::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        return view('resourcecenter-image.view', compact('resourcecenterImage',
            'thumbnailPath',
            'imagePath'));
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
        $resourcecenterImage = ResourceCenterImage::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        return view('resourcecenter-image.edit', compact('resourcecenterImage',
            'thumbnailPath'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, EditResourceImageRequest $request)
    {
        $resourcecenterImage = ResourceCenterImage::findOrFail($id);
        $this->setUpdatedModelValues($request, $resourcecenterImage);
        // if file, we have additional requirements before saving
        if ($this->newFileIsUploaded()) {
            $this->deleteExistingImages($resourcecenterImage);
            $this->setNewFileExtension($request, $resourcecenterImage);
        }

        $resourcecenterImage->update([
            'book_name' => $request->input('book_name'),
            'category_name' => $request->input('category_name')
            ]); 

        $resourcecenterImage->save();
// check for file, if new file, overwrite existing file
        if ($this->newFileIsUploaded()){
            $file = $this->getUploadedFile();
            $this->saveImageFiles($file, $resourcecenterImage);
        }
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;
        alert()->success('Congrats!', 'image edited!');
        return view('resourcecenter-image.view', compact('resourcecenterImage',
            'thumbnailPath',
            'imagePath'));
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
        $resourcecenterImage = ResourceCenterImage::findOrFail($id);
        $this->deleteExistingImages($resourcecenterImage);
        ResourceCenterImage::destroy($id);
        alert()->error('Notice', 'image deleted!');
        return redirect()->route('resourcecenter-image.index');
    }
    /**
* @param EditImageRequest $request
* @param $resourcecenterImage
*/
private function setNewFileExtension(EditResourceImageRequest $request, $resourcecenterImage)
{
    $resourcecenterImage->image_extension = $request->file('image')
    ->getClientOriginalExtension();
}
private function setUpdatedModelValues(EditResourceImageRequest $request, $resourcecenterImages)
{

}
}
