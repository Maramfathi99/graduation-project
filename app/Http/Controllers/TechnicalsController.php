<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\serviceProvider;
use Illuminate\Http\Request;

class TechnicalsController extends Controller
{
    public function index()
    {
        $technical = serviceProvider::all();
        return view('technicals.technicals',compact('technical'));
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        serviceProvider::find($id)->delete();
        session()->flash('delete','تم حذف مقدم الخدمة بنجاح');
        return redirect('/admin/technicals');
    }
}
