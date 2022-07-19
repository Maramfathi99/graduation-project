@extends('front.layout.app')
@section('content')
    <main>

        <section class="faq my-5 px-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h3 class="titel"id="h3">Questions <i class="fas fa-question-circle"></i></h3>
                    </div>
                </div>
                <div class="row justify-content-center" >
                    <div class="col-lg-9  py-4" >
                        <div id="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header" data-toggle="collapse" data-target="#collapse-01">
                                    <h3>Do you charge per hour or per project?</h3>
                                </div>
                                <div class="collapse show" id="collapse-01">
                                    <div class="accordion-body">
                                        <p>Charging per project works better for you and me. You know the price upfront
                                            and I can focus on creating something great without counting the hours.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header collapsed" data-toggle="collapse"
                                     data-target="#collapse-02">
                                    <h3>How often will we be in contact?</h3>
                                </div>
                                <div class="collapse" id="collapse-02" data-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>I promised to keep a healthy relationship with you. If that means a call
                                            every day, cool. If it means keeping in touch through a weekly email
                                            exchange, cool. Whatever works for you. Remember, I'm here to make your life
                                            easier, not more complicated.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header collapsed" data-toggle="collapse"
                                     data-target="#collapse-03">
                                    <h3>Do you hire others to help you?</h3>
                                </div>
                                <div class="collapse" id="collapse-03" data-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>I commit myself wholeheartedly to every project and love working solo. If you
                                            prefer to have your project done at a superhuman pace, then I'll get some
                                            outside help from people I trust.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header collapsed" data-toggle="collapse"
                                     data-target="#collapse-04">
                                    <h3>What if I don't like the end result?</h3>
                                </div>
                                <div class="collapse" id="collapse-04" data-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Our healthy relationship means we'll know where we stand with your idea and
                                            it's direction the whole way through. If at any point, you have a complete
                                            change of mind I will give you a full refund with a smile :)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed" data-toggle="collapse"
                                     data-target="#collapse-05">
                                    <h3>You didn't answer my question.</h3>
                                </div>
                                <div class="collapse" id="collapse-05" data-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>That's ok! I'm always happy to have a chat and discuss what's on your mind,
                                            so feel free to click on one of my social media icons on this page and pop
                                            me a message!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed" data-toggle="collapse"
                                     data-target="#collapse-06">
                                    <h3>You didn't answer my question.</h3>
                                </div>
                                <div class="collapse" id="collapse-06" data-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>That's ok! I'm always happy to have a chat and discuss what's on your mind,
                                            so feel free to click on one of my social media icons on this page and pop
                                            me a message!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed" data-toggle="collapse"
                                     data-target="#collapse-07">
                                    <h3>You didn't answer my question.</h3>
                                </div>
                                <div class="collapse" id="collapse-07" data-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>That's ok! I'm always happy to have a chat and discuss what's on your mind,
                                            so feel free to click on one of my social media icons on this page and pop
                                            me a message!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed" data-toggle="collapse"
                                     data-target="#collapse-08">
                                    <h3>You didn't answer my question.</h3>
                                </div>
                                <div class="collapse" id="collapse-08" data-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>That's ok! I'm always happy to have a chat and discuss what's on your mind,
                                            so feel free to click on one of my social media icons on this page and pop
                                            me a message!</p>
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
@endsection
