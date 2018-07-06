@extends('main')

@section('content')

<section name="homebanner">
    <div>
        <img src="{{url("images/sub_header.png")}}" alt="" class="wdth-100">
    </div>
    <div class="container">   
        <div class="titles">
            <h1 class="text-center">Recent Products</h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>
        </div>
    </div>
</section>

<section class="recent-products">
    <div class="container">
    <div class="row">
        <div class="col-md-3 border product-border">
            <div class="product">
                <img src="{{url("images/01.jpg")}}" alt="">
                <h3 class="text-center">Raspberry</h3>
                <ul class="list-inline text-center" >
                        <li class="list-inline-item"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                        <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                        <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                        <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                </ul>
                <p class="text-center">$45.00</p>
                <button type="button" class="btn btn-primary"><a href=""><i class="fas fa-shopping-cart"></i> Add to Cart</a></button>
            </div>
        </div>
        <div class="col-md-3 border product-border">
                <div class="product">
                    <img src="{{url("images/01.jpg")}}" alt="">
                    <h3 class="text-center">Raspberry</h3>
                    <ul class="list-inline text-center" >
                            <li class="list-inline-item"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                    </ul>
                    <p class="text-center">$45.00</p>
                    <button type="button" class="btn btn-primary"><a href=""><i class="fas fa-shopping-cart"></i> Add to Cart</a></button>
                </div>
        </div>    
        <div class="col-md-3 border product-border">
                <div class="product">
                    <img src="{{url("images/01.jpg")}}" alt="">
                    <h3 class="text-center">Raspberry</h3>
                    <ul class="list-inline text-center" >
                            <li class="list-inline-item"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                    </ul>
                    <p class="text-center">$45.00</p>
                    <button type="button" class="btn btn-primary"><a href=""><i class="fas fa-shopping-cart"></i> Add to Cart</a></button>
                </div>
        </div>    

        <div class="col-md-3 border product-border">
                <div class="product">
                    <img src="{{url("images/01.jpg")}}" alt="">
                    <h3 class="text-center">Raspberry</h3>
                    <ul class="list-inline text-center" >
                            <li class="list-inline-item"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item active"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="icon"><i class="far fa-star"></i></a></li>
                    </ul>
                    <p class="text-center">$45.00</p>
                    <button type="button" class="btn btn-primary"><a href=""><i class="fas fa-shopping-cart"></i> Add to Cart</a></button>
                </div>
        </div>  
    </div>
    </div>
</section>

<section name="review">
    <div class="container">   
        <div class="titles">
            <h1 class="text-center">Top Review</h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>
        </div>
    </div>
</section>


@endsection