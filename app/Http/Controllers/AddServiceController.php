<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\service;
use Illuminate\Http\Request;

class AddServiceController extends Controller
{
    public function index()
    {
        $services = service::all();
        $categories =Category::all();
        return view('front.add-service',compact('services','categories'));
    }
    public function create()
    {
        return view('front.add-service');

    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title'=>'required|max:50|string',
            'category'=>'max:50|string',
            'description'=>'required|max:255|string',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'price'=>'required|max:50|string',
        ]);

        if($request->photo){
            $photoName = $request->photo->store("public/images");
            $photoName = $request->photo->hashName();
            $validatedData['photo'] = $photoName;
        }

        service::create($validatedData);
        return redirect('/');

    }

}
