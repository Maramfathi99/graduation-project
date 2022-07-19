<!doctype html>
<html lang="en">

@include('front.layout.style')
<body class="sign-up-as">
<main>
    <div class=" container">
        <div class="row justify-content-center">
            <div class=" col-md-5 text-center  ">
                <div class=" box ">
                    <img src="{{ asset('./front/images/LOGO.png')}}" alt="">
                    <div class="box-2">
                        <div class="m-t p-3">
                            <h3 class=" fav-color ">Forget Password</h3>
                        </div>
                        <form action="" class=" px-5 mt-1 form-technical">
                            <div class="row ">
                                <div class="col-md-12 text-dark font-weight-bold ">
                                    <p>We will send you an email to reset your password</p>
                                </div>
                                <div class="col-md-12 pb-4">
                                    <input type="email" placeholder="Enter email">
                                    <a href="#" class="btn-1 px-5 btn">Send</a>
                                </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </section>


</main>
@include('front.layout.script')

</body>
