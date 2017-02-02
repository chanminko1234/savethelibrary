<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use App\CategoryForLibrary;

use Redirect;


class LibraryCategoryController extends Controller

{

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function manageCategory()

    {

        $categories = CategoryForLibrary::where('parent_id', '=', 0)->get();

        $allCategories = CategoryForLibrary::pluck('title','id')->all();

        return view('library-category.index',compact('categories','allCategories'));

    }


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function addCategory(Request $request)

    {

        $this->validate($request, [

                'title' => 'required',

            ]);

        $input = $request->all();

        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];

        

        CategoryForLibrary::create($input);

        return back()->with('success', 'New Category added successfully.');

    }

    public function edit($id){

    $category=CategoryForLibrary::findOrFail($id);

    return view('library-category.edit', compact('category'));

    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'title' => 'required']);
        $category = CategoryForLibrary::findOrFail($id);
        $category->update(['title' => $request->title
          ]);
        alert()->success('Congrats!', 'category edited!');
        return Redirect::to('backend/library-category');
    }

      public function destroy($id)
    { 
        CategoryForLibrary::destroy($id);
        alert()->error('Notice', 'category deleted!');
     
        return Redirect::to('backend/library-category');
    }


}