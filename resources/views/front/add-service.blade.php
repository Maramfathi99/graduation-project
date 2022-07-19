@extends('front.layout.app')

@section('content')
    <main>
        <section class=" my-5 add-service">
            <div class=" container">
                <div class="row justify-content-center">

                    <div class=" col-md-7 ">
                        <div class="row shadow-lg rounded p-4  text-white div-color" >
                            <div class="col-md-12 mb-4">
                                <h2 class=" text-center">Add Service </h2>
                                <hr >
                            </div>
                            <div class="col-md-12">
                                <label class="size_label">Service Title </label>
                                <input type="text" class="w-100">
                            </div>
                            <div class="col-md-6">
                                <select name="" id="" class=" w-100 mt-4 py-1 size_label">
                                    <option value="" >category</option>
                                </select>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label class="size_label">Service Description </label>
                                <textarea name="" id="" class=" w-100"></textarea>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="size_label">Service Image</label>
                                <input type="file" name="" id="">
                            </div>
                            <div class="col-md-12">
                                <label class="size_label">Service Price</label>
                                <input type="text" class="w-100">
                            </div>
                            <div class="col-md-12 d-flex mt-4 justify-content-center">
                                <button class="btn-1 px-5 btn">Add Service</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection