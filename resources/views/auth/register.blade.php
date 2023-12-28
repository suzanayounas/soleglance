@extends('layouts.app')

@section('content')
    <section class="sign-in-page">
        <div id="container-inside">
            <div id="circle-small"></div>
            <div id="circle-medium"></div>
            <div id="circle-large"></div>
            <div id="circle-xlarge"></div>
            <div id="circle-xxlarge"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-md-6 text-center pt-5">
                    <div class="sign-in-detail text-white">
                        <a class="sign-in-logo mb-5" href="index.html"><h1>Solo Glance</h1></a>
                        <div class="sign-slider overflow-hidden ">
                            <ul class="swiper-wrapper list-inline m-0 p-0 ">
                                <li class="swiper-slide">
                                    <img src="../assets/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Find new friends</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content.</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Sign Up</h1>
                        <p>Enter your email address and password to access admin panel.</p>

                        <form method="POST" class="mt-4" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Your Full Name</label>
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}"
                                       placeholder="Enter Name"
                                       autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail2">Email address</label>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Enter Email"
                                       name="email" value="{{ old('email') }}"
                                       autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       placeholder="Password" autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="form-check d-inline-block mt-2 pt-1">
                                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a
                                            href="{{url('/login')}}">Log In</a></span>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Sign Up</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
