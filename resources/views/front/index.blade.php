@extends('front.layout.app')

@section('content')
<main>

    <section class="my-5">
        <div class=" container">
            <div class="row justify-content-center">
                <div class="col-md-7  mb-4 p-2 search_content">
                    <a class="nav-link dropdown-toggle a_search " href="#" id="navbarDropdownMenuLink " role="button" data-toggle="dropdown" aria-expanded="false"> Services </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach($services as $s)
                        <a class="dropdown-item" href="#">{{$s->title}}</a>
                        @endforeach
                    </div>
                    <input name="q" value="{{request()->q}}" autofocus type="search" class="input-search"  placeholder="Enter your search ...">

                    <a href=""><i class="fas fa-search "></i></a>

                </div>

                <div class="col-md-12 text-center mb-4 ">
                    <h2 class="fav-color"></h2>
                </div>
                @foreach($services as $s)
                    <div class="col-md-3  p-2 ">
<div>
                        @if($s->photo=="")
                            <span>No Photo</span>
                        @else
                            <img style='max-width:250px' src='{{ asset("storage/images/$s->photo")}}' />
                        @endif
</div>
                        <div class="mt-2 item-box-2">
                            <h6 class="fav-color">{{$s->title}}</h6>
                            <h6 class="fav-color">{{$s->serviceProvider->name}}</h6>
                            <span><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3" ></i><i class="fas fa-star color-3"></i><i class="fas fa-star color-fa-star"></i><i class="fas fa-star color-fa-star" ></i> </span>
                        </div>
                </div>
                @endforeach



</div>
            </div>
    </section>

</main>
@endsection






