<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();
        return view('categories.categories',compact('categories'));
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
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ],[

            'category_name.required' =>'يرجى ادخال اسم القسم',
            'category_name.unique' =>'اسم القسم مسجل مسبقا',

        ]);

        category::create([
            'category_name' => $request->category_name,


        ]);
        session()->flash('Add', 'تم اضافة القسم بنجاح ');
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $this->validate($request, [

            'category_name' => 'required|max:255|unique:categories,category_name,'.$id,
        ],[

            'category_name.required' =>'يرجي ادخال اسم القسم',
            'category_name.unique' =>'اسم القسم مسجل مسبقا',

        ]);

        $categories = category::find($id);
        $categories->update([
            'category_name' => $request->category_name,

        ]);

        session()->flash('edit','تم تعديل القسم بنجاج');
        return redirect('/categories');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        category::find($id)->delete();
        session()->flash('delete','تم حذف القسم بنجاح');
        return redirect('/categories');
    }
}
