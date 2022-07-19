<!doctype html>
<html lang="en">
@include('front.layout.style')

<body class="sign-up-as">
<main >
    <section class="sign-up my-4">
        <div class=" container">
            <div class="row justify-content-center">
                <div class=" col-md-6 text-center">
                    <div class="box">
                        <img src="{{ asset('./front/images/LOGO.png')}}" alt="">
                        <div >
                            <div class="m-t p-3 text-white">
                                <h3>Sign Up As</h3>
                                <a href="{{ url('/' . $page='front.sign-up-tech') }}" class="btn-1 px-5 btn">Technical</a>
                                <a href="{{ url('/' . $page='front.sign-up-customer') }}" class="btn-1 px-5 btn">Customer</a>
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

</html>
