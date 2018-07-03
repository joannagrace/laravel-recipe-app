@extends('main')

@section('content')

<section name="recipebanner">
    <div>
        <img src="{{url('images/header-bg.jpg')}}" alt="">
    </div>
</section>

<section name="recipelists">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col-recipe">
                    <div class="photo-recipe">
                        <img src="{{url('images/recipe1.jpg')}}" alt="">
                    </div>
                    <div class="description">
                        <h3><a href="">Lorem ipsum dolor sit amet</a></h3>
                        <p>Consider now provided laughter boy landlord dashwood. Often voice and the spoke. Noshewing fertile village equally prepare up females.</p>
                        <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection