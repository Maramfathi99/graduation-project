<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\serviceAttachments;
use App\Models\serviceProvider;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = service::all();
        return view('front.service-details',compact('services'));

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
     * @param  \App\Models\serviceAttachments  $serviceAttachments
     * @return \Illuminate\Http\Response
     */
    public function show(serviceAttachments $serviceAttachments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\serviceAttachments  $serviceAttachments
     * @return \Illuminate\Http\Response
     */
    public function edit(serviceAttachments $serviceAttachments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\serviceAttachments  $serviceAttachments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serviceAttachments $serviceAttachments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\serviceAttachments  $serviceAttachments
     * @return \Illuminate\Http\Response
     */
    public function destroy(serviceAttachments $serviceAttachments)
    {
        //
    }
}
