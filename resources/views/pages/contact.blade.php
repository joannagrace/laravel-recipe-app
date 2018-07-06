@extends('main')


@section('content')

<section name="contactbanner">
        <div class="title-page">
            <img src="{{url('images/header-bg.jpg')}}" alt="" class="filter">
        </div>
</section>

<section name="contact">
    <div class="contact-details">
        <div class="container">
            <div class="send-us">
                <h1 class="text-center">Send Us an Message</h1>
            </div>
            <div class="contact-details">
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vulputate, leo vel malesuada tincidunt,<br/> purus nunc tristique erat, at elementum tellus mi nec mi. Nunc rutrum ullamcorper blandit.</p>
            </div>
            <div class="contact-form">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name"><br/>
                        <input type="email" class="form-control" placeholder="Email"><br/>
                        <input type="text" class="form-control" placeholder="Subject"><br/>
                        <textarea name="" id="" class="form-control msg" placeholder="Message"></textarea><br/>
                        <button type="button" class="btn btn-primary">Send Now</button>
                    </div>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
    </div>
</section>



@endsection