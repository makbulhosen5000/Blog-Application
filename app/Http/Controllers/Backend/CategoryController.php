<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //__constructor__//
    public function __construct()
    {
        $this->middleware('auth');
    }

    //__category index function__//
    public function index()
    {
        
        $allCategory = Category::all();
        return view('backend.category.index',compact('allCategory'));
    }

    //_category create function_//
    public function create()
    {
        return view('backend.category.create');
    }

   //_category store function_//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);
      
        $storeCategory = new Category();
        $storeCategory->category_name = $request->category_name;
        $storeCategory->category_slug = Str::of($request->category_name)->slug('-');
        $storeCategory->save();
        return redirect()->back()->with('success','Data Inserted Successfully');
        
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
        $categoryEdit = Category::find($id);
        return view('backend.category.edit',compact('categoryEdit'));
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

        $updateCategory = Category::find($id);
        $updateCategory->category_name = $request->category_name;
        $updateCategory->category_slug = Str::of($request->category_name)->slug('-');
        $updateCategory->update();
        return redirect()->back()->with('success','Data Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Category::destroy($id);
        $destroyCategory = Category::find($id);
        $destroyCategory->delete();
        return redirect()->route('categories.index')->with('success','Data Deleted Successfully');
    }
}
