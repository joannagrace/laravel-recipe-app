@extends('main')

@section('content')

<section name="title-header">
    <div class="container">   
        <div class="titles">
            <h1 class="text-center">User Login</h1>
        </div>
    </div>
</section>

<section class="log-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="store text-center">
                    <h2>WITH OUR APP, YOU CAN</h2><br/>
                    <button type="button" class="btn btn-primary"><i class="fab fa-apple"></i> App Store</button>
                    <button type="button" class="btn btn-primary"><i class="fab fa-android"></i> Google Play</button>
                </div>
            </div>
            
            <div class="col-md-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-form">
                        <input placeholder="Email Address" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <br/>
                        <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        <br/>
                        <i class="fas fa-question-circle"></i><p class="text-right"><a href="{{ route('password.request') }}">Forgot Your Password?</a></p>
                        <button type="submit" class="btn btn-primary">SIGN IN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
