<?php

namespace App\Http\Controllers;

use App\Traits\ManagesImages;
use App\Http\Requests\CreateLibraryImageRequest;
use App\Http\Requests\CreateLatestNewsSliderImageRequest;
use App\Http\Requests\CreateLatestReviewSliderImageRequest;
use App\LatestReviewSlider;
use App\LibrarySlider;
use App\LatestNewsSlider;

class LibraryController extends Controller
{
   use ManagesImages;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thumbnailPath = $this->thumbnailPath;
        $LibrySliderImages = LibrarySlider::latest()->paginate(9);
        $LatestNews = LatestNewsSlider::latest()->paginate(9);
        $LatestReviews = LatestReviewSlider::latest()->paginate(12);
        return view('library.index', compact('LibrySliderImages', 'LatestNews', 'LatestReviews', 'thumbnailPath'));

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
