<!doctype html>
<html lang="en">
@include('front.layout.style')

<body class="sign-up-as">


<main>

    <section class="sign-up-Customer">
        <div class=" container">
            <div class="row justify-content-center">
                <div class=" col-md-6 text-center">
                    <div class=" box div-color">
                        <img src="{{ asset('./front/images/LOGO.png')}}" alt="">
                        <div class="box-2">
                            <div class="m-t p-3">
                                <h3 class="fav-color mt-3">Sign Up As Customer</h3>
                            </div>
                            <form action="" class=" px-5 mt-1 form-technical">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="user name">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="email">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="password" placeholder="password">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="password" placeholder="comfirm password">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="number" placeholder="phone">
                                    </div>
                                    <div class="col-md-12">
                                        <a href="categories.html" class="btn-1 px-5 btn">Sign Up</a>
                                        <p class=" mt-3 fav-color">already have an account? <a href="{{ url('/' . $page='front.login') }}" class=" color-3">Login</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>



</main>

@include('front.layout.script')

</body>

</html>
