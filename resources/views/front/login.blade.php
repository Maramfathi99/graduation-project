<!doctype html>
<html lang="en">

@include('front.layout.style')

<body class="sign-up-as">
<main>
    <section class="login ">
        <div class=" container">
            <div class="row justify-content-center">
                <div class=" col-md-5 text-center ">
                    <div class=" box mt-1">
                        <img src="{{ asset('./front/images/LOGO.png')}}" alt="">
                        <div class="box-2">
                            <div class="m-t p-3">
                                <h3 class="fav-color mt-3">Login</h3>
                            </div>
                            <form action="" class=" px-5 form-technical">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="User Name">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="password" placeholder="Password">
                                        <span style="float: right; "> <a href="{{ url('/' . $page='front.forget-password') }}" class=" color-3">Forgot password?</a>
                                </span>


                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="btn-1 px-5 btn ">Login</a>
                                        <p class=" mt-3 fav-color">dont have an account? <a href="{{ url('/' . $page='front.sign-up-tech') }}" class=" color-3">Sign Up</a></p>

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
