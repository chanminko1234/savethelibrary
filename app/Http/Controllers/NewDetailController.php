<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ManagesImages;
use App\Http\Requests\CreateLatestNewsImageRequest;
use App\LatestNews;
class NewDetailController extends Controller
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
        $LatestNews = LatestNews::latest()->paginate(10);
            return view('new_detail.index', compact('LatestNews', 'thumbnailPath'));
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
        $LatestNew = LatestNews::findOrFail($id);
            $thumbnailPath = $this->thumbnailPath;
            $imagePath = $this->imagePath;
            return view('new_detail.index', compact('LatestNew', 'thumbnailPath', 'imagePath'));
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
