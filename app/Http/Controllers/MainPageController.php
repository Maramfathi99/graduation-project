<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        $services = service::all();
        return view('front.index',compact('services'));
    }

}
