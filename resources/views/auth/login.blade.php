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
                        <a class="sign-in-logo mb-5" href="#"><h1>SoleGlance</h1></a>
                        <div class="sign-slider overflow-hidden ">
                            <ul  class="swiper-wrapper list-inline m-0 p-0 ">
                                <li class="swiper-slide">
                                    <img src="../assets/images/login/1.png" class="img-fluid mb-4" alt="logo" loading="lazy">
                                    <h4 class="mb-1 text-white">Find new friends</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
                    <div class="sign-in-from">
                        <h3 class="mb-0">Welcome Back!</h3>
                        <p>Login to SoleGlance</p>
                        @include('message')
                        <form class="mt-4" method="post" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input type="email" required name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                 <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="form-check d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Sign in</button>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Don't have an account?
                                    <a href="{{url('register')}}">Sign up</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
