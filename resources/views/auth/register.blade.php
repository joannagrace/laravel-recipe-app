@extends('main')

@section('content')

<section name="title-header">
    <div class="container">   
        <div class="titles">
            <h1 class="text-center">User Register</h1>
        </div>
    </div>
</section>

<section class="reg-form">
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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="register-form">
                            <input placeholder="Name" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus><br/>
                            @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                            <input placeholder="Email Address" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required><br/>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required><br/>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required><br/>
                            <i class="fas fa-question-circle"></i><p class="text-right"> <a href="{{route('login')}}">Already Have Account</a></p>
                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
