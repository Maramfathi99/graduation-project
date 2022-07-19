@extends('front.layout.app')
@section('content')
    <main>

        <section class="chat my-5 px-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 py-3 div-color" >
                        <div class="mb-3 img-user">
                            <img src="{{ asset('./front/images/user.jpg')}}" alt="">
                        </div>
                        <h3 class=" text-center mb-4 text-white">Abeer Emad</h3>
                        <div class=" d-flex justify-content-start my-3 mt-3">
                            <p class=" bg-light p-3 font-weight-bold"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, ratione?</p>
                        </div>
                        <div class=" d-flex justify-content-end my-3">
                            <p class=" bg-light p-3 ml-5 font-weight-bold"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, ratione?</p>
                        </div>
                        <div class=" d-flex justify-content-end my-3">
                            <p class=" bg-light p-3 ml-5 font-weight-bold  w-25">ok</p>
                        </div>
                        <div class=" d-flex justify-content-start my-3">
                            <p class=" bg-light p-3 font-weight-bold"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, ratione?</p>
                        </div>
                        <div class=" d-flex justify-content-start my-3">
                            <p class=" bg-light p-3 font-weight-bold"> amet consectetur adipisicing elit. Aliquam, ratione?</p>
                        </div>
                    </div>


                </div>
            </div>
        </section>



    </main>
@endsection
