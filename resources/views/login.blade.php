<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <title>{{ $title }}</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('img/header.jpg') }}" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be
                    Verified</p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on
                    this platform.</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Sign In</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" name='email'
                                value="{{ old('email') }}" placeholder="Email address">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" name='password'
                                placeholder="Password">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                        Me</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="{{ asset('img/logo_google.jpg') }}"
                                style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                    </div>
                    <div class="row">
                        <small>Don't have account? <a href="{{ route('register') }}">Sign Up</a></small>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
