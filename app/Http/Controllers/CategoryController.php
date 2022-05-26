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
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ],[
            'category_name.required' =>'يرجى ادخال اسم القسم',
            'photo.required' =>'يرجى ادخال صورة القسم',
            'category_name.unique' =>'اسم القسم مسجل مسبقا',

        ]);
        if($request->photo){
            $photoName = $request->photo->store("public/images");
            $photoName = $request->photo->hashName();
            $validatedData['photo'] = $photoName;
        }
        category::create($validatedData);
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


        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:255'.$id,
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg'.$id,
        ],[
            'category_name.required' =>'يرجى ادخال اسم القسم',
            'photo.required' =>'يرجى ادخال صورة القسم',
            'category_name.unique' =>'اسم القسم مسجل مسبقا',
        ]);
        if($request->photo){
            $photoName = $request->photo->store("public/images");
            $photoName = $request->photo->hashName();
            $validatedData['photo'] = $photoName;
        }
        $categories = category::find($id);
        $categories->update($validatedData);

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
