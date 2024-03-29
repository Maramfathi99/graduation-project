<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index(Request $request)
    {
        $q = '';
        if($request->q){
            $q = $request->q;
        }
        $services =service::where("title","like","%$q%")
            ->paginate(30)
            ->appends(['q'=>$q]);
        return view('front.index',compact('services'));
    }

}
