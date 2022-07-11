@extends('layouts.master')
@section('title')
    الصفحة الرئيسية
@stop
@section('css')

@endsection
@section('page-header')
@endsection
@section('content')

    <!-- Gallery -->
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">

            <img src="{{asset('images/img4.jpg')}}"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
            />

            <img src="{{asset('images/img1.jpg')}}"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Wintry Mountain Landscape"
            />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="{{asset('images/img2.jpg')}}"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Mountains in the Clouds"
            />

            <img src="{{asset('images/img3.jpg')}}"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
            />
        </div>
    </div>


    <!-- Gallery -->
@endsection
@section('js')
@endsection
