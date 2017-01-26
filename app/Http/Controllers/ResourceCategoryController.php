<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResourceCategory;
class ResourceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=ResourceCategory::paginate(10);
        return view ('resourcecategory.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('resourcecategory.create');
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
        $this->validate($request, [
            'category_name' => 'required|min:4'
            ]);
        ResourceCategory::create($request->all());
        alert()->success('Congrats!', 'ResourceCategory Created!');
        return redirect()->to('backend/resourcecategory');

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
        $resourcecategory = ResourceCategory::findOrFail($id);
        return view('resourcecategory.view', compact('resourcecategory'));
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
     $resourcecategory = ResourceCategory::findOrFail($id);
     return view('resourcecategory.edit', compact('resourcecategory'));
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

        $this->validate($request, [
            'category_name' => 'required|min:4']);
        $resourcecategory = ResourceCategory::findOrFail($id);
        $resourcecategory->update(['category_name' => $request->category_name
          ]);
        alert()->success('Congrats!', 'resourcecategory edited!');
        return redirect()->to('backend/resourcecategory');
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
        ResourceCategory::destroy($id);
        alert()->error('Notice', 'resourcecategory deleted!');
        return redirect()->to('backend/resourcecategory');
    }
}
