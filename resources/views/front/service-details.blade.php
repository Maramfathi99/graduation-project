@extends('front.layout.app')
@section('content')
    <main>

        <section class="my-3 maintenance text-white">
            <div class=" container">
                <div class="row">
                    <div class="col-md-12 mb-2 mt-3">
                        <h4 class="fav-color">Maintenance Of Electrical Networks</h4>
                    </div>
                    <div class="col-md-7 mr-4 p-3  mt-3 div-color" id="index-div">
                        <div class="item-maintenance">
                            <div class="item-maintenance-img mb-3">
                                <img src="{{ asset('./front/images/img4.jpg')}}" class=" w-100" alt="">
                            </div>
                            <div class="item-maintenance-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptate in expedita vel tenetur
                                    fuga odio libero dolores rerum dignissimos, quasi deleniti ex neque repellendus, odit pariatur?
                                    Deserunt, natus dicta.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ml-4 mb-3 p-3 ">
                        <div class="row pt-4 div-color" >
                            <div class="col-md-12 mb-3">
                                <div class="item-serviceCard">
                                    <div class="item-serviceCard-text">
                                        <h4>Service Card</h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item-serviceCard">
                                    <div class="item-serviceCard-text">
                                        <p>Reviews</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item-serviceCard">
                                    <div class="item-serviceCard-text">
                                        <span><i class="fas fa-star color-3 pb-1  " ></i><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3"></i><i class="fas fa-star color-fa-star"></i><i class="fas fa-star color-fa-star" ></i> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item-serviceCard">
                                    <div class="item-serviceCard-text">
                                        <p>Service Price </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item-serviceCard">
                                    <div class="item-serviceCard-text">
                                        <span>1000$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item-serviceCard">
                                    <div class="item-serviceCard-text">
                                        <p>Response Speed</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item-serviceCard">
                                    <div class="item-serviceCard-text">
                                        <span>Five Hours </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <div class="item-serviceCard">
                                    <div class="item-serviceCard-text">
                                        <h4>Service Owner</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="item-serviceCard">
                                    <div class="mb-1 img-user">
                                        <img src="{{ asset('./front/images/user.jpg')}}" class=" w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 my-auto">
                                <div class="item-serviceCard ">
                                    <div class="item-serviceCard-text">
                                        <p class="m-0">Abeer Emad Aljorani</p>
                                        <span>0599999999999</span>
                                    </div>



                                </div>
                            </div>

                            <div class="col-md-12 div-color p-4 mt-4">
                                <hr>
                                <h4>Share The Service</h4>

                                <div class=" mx-3 mt-4">
                                    <a class="icon" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="icon" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a class="icon" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <br>
                                    <div class=" mt-2 ml-4 pl-2">

                                        <a class="icon" href=""><i class="fas fa-phone-alt"></i></a>
                                        <a href="" class="icon"><i class="fab fa-snapchat-ghost"></i></a>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="my-5 btns ">
            <div class=" container justify-content-center text-center">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url('/' . $page='front.chat') }}" class=" btn btn-info-2 mr-2">Communication</a>
                        <a href="{{ url('/' . $page='front.appointments') }}" class=" btn btn-info-2">Appointment Booking</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
