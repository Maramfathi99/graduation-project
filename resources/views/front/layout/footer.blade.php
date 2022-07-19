<footer class="mt-5 py-5  text-white">
    <div class=" container">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3 d-flex">
                    <a  href="{{ url('/' . $page='front.index') }}"> <img src="{{ asset('./front/images/Screenshot_2022-05-13_150014-removebg-preview.png')}}" class="w-75" alt="">
                    </a>
                </div>
                <div class="item-cont-foter-text">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque totam nulla placeat quaerat
                        minus
                        possimus magnam qui, quam iusto voluptatem similique dolores voluptas dicta quae ipsa.
                        Impedit ullam quasi
                        qui!</p>
                </div>
            </div>
            <div class="col-md-4 mt-5 pl-5 item-cont-foter-text2 ">
                <a href="{{ url('/' . $page='front.index') }}" class="text-white"><h5>Services Provided </h5></a>
                <a href="{{ url('/' . $page='front.about') }}" class="text-white"><h5>About Services Provided </h5>
                </a>
                <a href="{{ url('/' . $page='front.common-questions') }}" class="text-white"><h5>Common Question</h5></a>

            </div>
            <div class="col-md-4 my-auto item-cont-foter-text2">
                <h5>Follow Us On</h5>

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
</footer>
