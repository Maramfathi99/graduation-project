<header>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/' . $page='#') }}"><img class=" w-20"
                                                  src="{{ asset('./front/images/Screenshot_2022-05-13_150014-removebg-preview.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 ml-auto">
                    <ul class="navbar-nav mr-auto">
                        <li class=" mr-3 mt-1 icon-nav"><a href="{{ url('/' . $page='front.messages') }}" class="color-3"><i class="fas fa-envelope"></i></a>
                        </li>
                        <li class=" mr-3 mt-1 icon-nav"><a href="{{ url('/' . $page='front.notifications') }}" class="color-3"><i class="fas fa-bell"></i></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                <i class="color-3 mr-3 mt-1 icon-nav fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/' . $page='tech-profile') }}"><i class="color-4 mr-2 icon-nav fas fa-user"></i> My Profile</a>
                            </div>
                        </li>

                    </ul>
                </form>
            </div>
        </div>
    </nav>
</header>
