<!doctype html>
<html lang="en">

@include('front.layout.style')

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/' . $page='front.index') }}"><img class=" w-20"
                                                  src="{{ asset('./front/images/Screenshot_2022-05-13_150014-removebg-preview.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/' . $page='front.add-service') }}"><i class="fas fa-plus-circle"></i>
                            Add Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/' . $page='front.appointments') }}"><i class="fas fa-calendar-alt"></i>
                            Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="{{ url('/' . $page='front.resevations-list') }}"><i class="fas fa-clipboard-list"></i> Reservations List</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-auto">
                    <ul class="navbar-nav mr-auto">
                        <li class=" mr-3 mt-1 icon-nav"><a href="{{ url('/' . $page='front.messages') }}" class="color-3"><i class="fas fa-envelope"></i></a>
                        </li>
                        <li class=" mr-3 icon-nav"><a href="{{ url('/' . $page='front.notifications') }}" class="color-3"><i class="fas fa-bell"></i></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                <i class="color-3 icon-nav fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/' . $page='front.tech-profile') }}"><i class="color-4 mr-2 icon-nav fas fa-user"></i> My Profile</a>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
</header>
<main>

    <section class=" text-white">
        <div class=" container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="mb-3 img-user">
                        <img src="{{ asset('./front/images/user.jpg')}}" alt="">
                    </div>
                    <h3 class=" text-center mb-5 color-3" >Abeer Emad Eljorani</h3>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 p-4  div-color">
                            <h3>Brief About Me</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sequi dicta aperiam, perspiciatis nam impedit unde blanditiis saepe veritatis hic voluptatibus magni odio sed est, veniam quas cupiditate voluptates explicabo?</p>
                        </div>
                        <div class="col-md-12 p-4 mt-3 div-color">
                            <h3>My Services</h3>
                            <div class="row">
                                <div class="col-md-3 mt-3">
                                    <div>
                                        <img src="{{ asset('./front/images/img3.jpg')}}" alt="" class=" w-100 ">
                                        <h5>Maintenance of Home electrical networks</h5>
                                        <p class="font-weight-lighter">Network maintenance</p>
                                        <p>Starting form <span class=" color-3 font-weight-bold">300$</span></p>
                                        <span><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3"></i><i class="fas fa-star color-fa-star"></i><i class="fas fa-star color-fa-star" ></i> </span>
                                    </div>

                                </div>
                                <div class="col-md-3 mt-3">
                                    <div>
                                        <img src="{{ asset('./front/images/img3.jpg')}}" alt="" class=" w-100 ">
                                        <h5>Maintenance of Home electrical networks</h5>
                                        <p class="font-weight-lighter">Network maintenance</p>
                                        <p>Starting form <span class=" color-3 font-weight-bold">300$</span></p>
                                        <span><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3"></i><i class="fas fa-star color-fa-star"></i><i class="fas fa-star color-fa-star" ></i> </span>
                                    </div>

                                </div>
                                <div class="col-md-3 mt-3">
                                    <div>
                                        <img src="{{ asset('./front/images/img3.jpg')}}" alt="" class=" w-100  ">
                                        <h5>Maintenance of Home electrical networks</h5>
                                        <p class="font-weight-lighter">Network maintenance</p>
                                        <p>Starting form <span class=" color-3 font-weight-bold">300$</span></p>
                                        <span><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3"></i><i class="fas fa-star color-fa-star"></i><i class="fas fa-star color-fa-star" ></i> </span>
                                    </div>

                                </div>
                                <div class="col-md-3 mt-3">
                                    <div>
                                        <img src="{{ asset('./front/images/img3.jpg')}}" alt="" class=" w-100  ">
                                        <h5>Maintenance of Home electrical networks</h5>
                                        <p class="font-weight-lighter">Network maintenance</p>
                                        <p>Starting form <span class=" color-3 font-weight-bold">300$</span></p>
                                        <span><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3"></i><i class="fas fa-star color-fa-star"></i><i class="fas fa-star color-fa-star" ></i> </span>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 ml-4 pl-4   ">
                    <div class="row">
                        <div class="col-md-12 div-color p-4">
                            <h3>Statistics</h3>
                            <div class="row">
                                <div class="col-md-4 col-4">
                                    <p class="p">Reviews</p>
                                </div>
                                <div class="col-md-8 col-8">
                                    <span><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3"></i><i class="fas fa-star color-fa-star"></i><i class="fas fa-star color-fa-star" ></i> </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <p class="pp">Response Speed</p>
                                </div>
                                <div class="col-md-8 col-6">
                                    <p class="pp">Five hours</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <p class="pp">Published Service</p>
                                </div>
                                <div class="col-md-8 col-6">
                                    <p class="pp">5</p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <p class="pp">Data of Registration</p>

                                    <p class="pp">last seen</p>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-12 div-color p-4 mt-4">
                            <h3>Share The Service</h4>
                                <div class=" mx-3 mt-4">
                                    <a class="icon" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="icon" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a class="icon" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
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
        </div>
    </section>

</main>

@include('front.layout.footer')
@include('front.layout.script')

</body>

</html>
