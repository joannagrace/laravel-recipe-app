@extends('main')

@section('content')


<section name="review">
    <div class="container">   
        <div class="titles">
            <h1 class="text-center">User Login</h1>
        </div>
    </div>
</section>

<section name="login-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="store">
                    <h2>WITH OUR APP, YOU CAN</h2><br/>
                    <button type="button" class="btn btn-primary"><i class="fab fa-apple"></i>App Store</button>
                    <button type="button" class="btn btn-primary"><i class="fab fa-android"></i>Google Play</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact">
                    <input type="text" class="form-control" placeholder="Username"><br/>
                    <input type="password" class="form-control" placeholder="Password"><br/>
                        <i class="fas fa-question-circle"></i><p>  Forgot Password?</p>
                    <button>SIGN IN</button>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection