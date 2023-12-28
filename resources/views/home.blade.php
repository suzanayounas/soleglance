@extends('layouts.main')

@section('content')
    <div id="content-page" class="content-page">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @include('message')

                    <div class="iq-card">
                        <div class="iq-card-body p-0">
                            <div class="iq-edit-list">
                                <ul class="iq-edit-profile d-flex nav nav-pills">
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                            Personal Information
                                        </a>
                                    </li>
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                            Change Password
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-edit-list-data">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Personal Information</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <form action="{{route('update-profile', $userID)}}" method="post"
                                              enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            @method('PUT')

                                            <div class="form-group row align-items-center">
                                                <div class="col-md-12">
                                                    <div class="profile-img-edit">
                                                        <img class="profile-pic" width="200" height="150"
                                                             src="{{showImage($userInfo->photo , 'profile')}}"
                                                             alt="profile-pic">
                                                        <div class="p-image">
                                                            <i class="ri-pencil-line upload-button"></i>
                                                            <input class="file-upload" type="file" name="photo"
                                                                   value="{{$userInfo->photo ?? ''}}" accept="image/*"/>
                                                        </div>
                                                        @if ($errors->has('photo'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('photo') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            {{--                                            <div class="form-group row align-items-center">--}}
                                            {{--                                                <div class="col-md-12">--}}

                                            {{--                                                    <div class="profile-img-edit">--}}
                                            {{--                                                        <img class="profile-pic" width="200" height="150"--}}
                                            {{--                                                             src="{{showImage($userInfo->photo , 'profile')}}"--}}
                                            {{--                                                             alt="profile-pic">--}}
                                            {{--                                                        <div class="p-image">--}}
                                            {{--                                                            <span class="material-symbols-outlined">Edit</span>--}}
                                            {{--                                                            <input class="" type="file" name="photo"--}}
                                            {{--                                                                   value="{{$userInfo->photo ?? ''}}"--}}
                                            {{--                                                                   accept="image/*"/>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        @if ($errors->has('photo'))--}}
                                            {{--                                                            <span--}}
                                            {{--                                                                class="text-danger">{{ $errors->first('photo') }}</span>--}}
                                            {{--                                                        @endif--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class=" row align-items-center">
                                                <div class="form-group col-sm-6">
                                                    <label for="first_name">First Name:</label>
                                                    <input type="text" class="form-control" id="first_name"
                                                           name="first_name" value="{{$userInfo->first_name}}">
                                                    @if ($errors->has('first_name'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('first_name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="last_name">Last Name:</label>
                                                    <input type="text" class="form-control" id="last_name"
                                                           name="last_name" value="{{$userInfo->last_name}}">
                                                    @if ($errors->has('last_name'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('last_name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="user_name">User Name:</label>
                                                    <input type="text" class="form-control" id="user_name"
                                                           name="user_name"
                                                           value="{{auth()->user()->name ?? $userInfo->user->name}}">
                                                    @if ($errors->has('user_name'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('user_name') }}</span>
                                                    @endif
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <label for="email">Email:</label>
                                                    <input type="text" class="form-control" id="email" name="email"
                                                           value="{{auth()->user()->email ?? $userInfo->user->email}}">
                                                    @if ($errors->has('email'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <label class="d-block">Gender:</label>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio6" name="gender" value="m"
                                                               class="custom-control-input" {{($userInfo->gender == 'm') ? 'checked' : ''}}>
                                                        <label class="custom-control-label" for="customRadio6">
                                                            Male </label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio7" name="gender" value="f"
                                                               class="custom-control-input" {{($userInfo->gender == 'f') ? 'checked' : ''}}>
                                                        <label class="custom-control-label" for="customRadio7">
                                                            Female </label>
                                                    </div>
                                                    @if ($errors->has('gender'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('gender') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="dob">Date Of Birth:</label>
                                                    <input type="date" class="form-control" id="dob" name="dob"
                                                           value="{{$userInfo->dob}}">
                                                    @if ($errors->has('dob'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('dob') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Marital Status:</label>
                                                    <select class="form-control" name="martial_status"
                                                            id="exampleFormControlSelect1">
                                                        <option
                                                            value="Single" {{($userInfo->martial_status == 'Single') ? 'selected' : ''}}>
                                                            Single
                                                        </option>
                                                        <option
                                                            value="Married" {{($userInfo->martial_status == 'Married') ? 'selected' : ''}}>
                                                            Married
                                                        </option>
                                                        <option
                                                            value="Widowed" {{($userInfo->martial_status == 'Widowed') ? 'selected' : ''}}>
                                                            Widowed
                                                        </option>
                                                        <option
                                                            value="Divorced" {{($userInfo->martial_status == 'Divorced') ? 'selected' : ''}}>
                                                            Divorced
                                                        </option>
                                                        <option
                                                            value="Separated" {{($userInfo->martial_status == 'Separated') ? 'selected' : ''}}>
                                                            Separated
                                                        </option>

                                                    </select>
                                                    @if ($errors->has('martial_status'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('martial_status') }}</span>
                                                    @endif
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <label for="country">Country:</label>
                                                    <input type="text" class="form-control" id="country" name="country"
                                                           value="{{$userInfo->country}}"
                                                           placeholder="Enter Country Name">
                                                    @if ($errors->has('country'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('country') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="state">State:</label>
                                                    <input type="text" class="form-control" id="state" name="state"
                                                           value="{{$userInfo->state}}" placeholder="Enter State Name">
                                                    @if ($errors->has('state'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('state') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="city">City:</label>
                                                    <input type="text" class="form-control" id="city" name="city"
                                                           value="{{$userInfo->city}}" placeholder="Enter City Name">
                                                    @if ($errors->has('city'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('city') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <label>Address:</label>
                                                    <textarea class="form-control" name="address" rows="5"
                                                              style="line-height: 22px;">{{$userInfo->address}}</textarea>
                                                    @if ($errors->has('address'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('address') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Change Password</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <form action="{{route('change-password', $userID)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="oldpassword">Current Password:</label>
                                                <input type="password" required class="form-control" id="oldpassword"
                                                       name="oldpassword" placeholder="Old Password">
                                                @if ($errors->has('oldpassword'))
                                                    <span class="text-danger">{{ $errors->first('oldpassword') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="password">New Password:</label>
                                                <input type="password" required class="form-control" id="password"
                                                       name="password" placeholder="New Password">
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Verify Password:</label>
                                                <input type="password" required class="form-control" id="password"
                                                       name="password_confirmation" placeholder="Repeat Password">
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Change</button>
                                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="row">--}}
            {{--                <div class="col-lg-12">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body p-0">--}}
            {{--                            <div class="iq-edit-list">--}}
            {{--                                <ul class="iq-edit-profile row nav nav-pills">--}}
            {{--                                    <li class="col-md-3 p-0">--}}
            {{--                                        <a class="nav-link active" data-bs-toggle="pill" href="#personal-information">--}}
            {{--                                            Personal Information--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}
            {{--                                    <li class="col-md-3 p-0">--}}
            {{--                                        <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">--}}
            {{--                                            Change Password--}}
            {{--                                        </a>--}}
            {{--                                    </li>--}}

            {{--                                </ul>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-12">--}}
            {{--                    @include('message')--}}
            {{--                    <div class="iq-edit-list-data">--}}
            {{--                        <div class="tab-content">--}}
            {{--                            <div class="tab-pane fade active show" id="personal-information" role="tabpanel">--}}
            {{--                                <div class="card">--}}
            {{--                                    <div class="card-header d-flex justify-content-between">--}}
            {{--                                        <div class="header-title">--}}
            {{--                                            <h4 class="card-title">Personal Information</h4>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="card-body">--}}
            {{--                                        <form action="{{route('update-profile', $userID)}}" method="post"--}}
            {{--                                              enctype="multipart/form-data">--}}
            {{--                                            {{ csrf_field() }}--}}
            {{--                                            @method('PUT')--}}


            {{--                                            <div class="form-group row align-items-center">--}}
            {{--                                                <div class="col-md-12">--}}

            {{--                                                    <div class="profile-img-edit">--}}
            {{--                                                        <img class="profile-pic" width="200" height="150"--}}
            {{--                                                             src="{{showImage($userInfo->photo , 'profile')}}"--}}
            {{--                                                             alt="profile-pic">--}}
            {{--                                                        <div class="p-image">--}}
            {{--                                                            <span class="material-symbols-outlined">Edit</span>--}}
            {{--                                                            <input class="" type="file" name="photo"--}}
            {{--                                                                   value="{{$userInfo->photo ?? ''}}"--}}
            {{--                                                                   accept="image/*"/>--}}
            {{--                                                        </div>--}}
            {{--                                                        @if ($errors->has('photo'))--}}
            {{--                                                            <span--}}
            {{--                                                                class="text-danger">{{ $errors->first('photo') }}</span>--}}
            {{--                                                        @endif--}}
            {{--                                                    </div>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                            <div class=" row align-items-center">--}}
            {{--                                                <div class="form-group col-sm-6">--}}
            {{--                                                    <label for="first_name">First Name:</label>--}}
            {{--                                                    <input type="text" class="form-control" id="first_name"--}}
            {{--                                                           name="first_name" value="{{$userInfo->first_name}}">--}}
            {{--                                                    @if ($errors->has('first_name'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('first_name') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}
            {{--                                                <div class="form-group col-sm-6">--}}
            {{--                                                    <label for="last_name">Last Name:</label>--}}
            {{--                                                    <input type="text" class="form-control" id="last_name"--}}
            {{--                                                           name="last_name" value="{{$userInfo->last_name}}">--}}
            {{--                                                    @if ($errors->has('last_name'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('last_name') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}
            {{--                                                <div class="form-group col-sm-6">--}}
            {{--                                                    <label for="user_name">User Name:</label>--}}
            {{--                                                    <input type="text" class="form-control" id="user_name"--}}
            {{--                                                           name="user_name"--}}
            {{--                                                           value="{{auth()->user()->name ?? $userInfo->user->name}}">--}}
            {{--                                                    @if ($errors->has('user_name'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('user_name') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}

            {{--                                                <div class="form-group col-sm-6">--}}
            {{--                                                    <label for="email">Email:</label>--}}
            {{--                                                    <input type="text" class="form-control" id="email" name="email"--}}
            {{--                                                           value="{{auth()->user()->email ?? $userInfo->user->email}}">--}}
            {{--                                                    @if ($errors->has('email'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('email') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}

            {{--                                                <div class="form-group col-sm-6">--}}
            {{--                                                    <label class="d-block">Gender:</label>--}}
            {{--                                                    <div class="custom-control custom-radio custom-control-inline">--}}
            {{--                                                        <input type="radio" id="customRadio6" name="gender" value="m"--}}
            {{--                                                               class="custom-control-input" {{($userInfo->gender == 'm') ? 'checked' : ''}}>--}}
            {{--                                                        <label class="custom-control-label" for="customRadio6">--}}
            {{--                                                            Male </label>--}}
            {{--                                                    </div>--}}
            {{--                                                    <div class="custom-control custom-radio custom-control-inline">--}}
            {{--                                                        <input type="radio" id="customRadio7" name="gender" value="f"--}}
            {{--                                                               class="custom-control-input" {{($userInfo->gender == 'f') ? 'checked' : ''}}>--}}
            {{--                                                        <label class="custom-control-label" for="customRadio7">--}}
            {{--                                                            Female </label>--}}
            {{--                                                    </div>--}}
            {{--                                                    @if ($errors->has('gender'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('gender') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}
            {{--                                                <div class="form-group col-sm-6">--}}
            {{--                                                    <label for="dob">Date Of Birth:</label>--}}
            {{--                                                    <input type="date" class="form-control" id="dob" name="dob"--}}
            {{--                                                           value="{{$userInfo->dob}}">--}}
            {{--                                                    @if ($errors->has('dob'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('dob') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}
            {{--                                                <div class="form-group col-sm-6">--}}
            {{--                                                    <label>Marital Status:</label>--}}
            {{--                                                    <select class="form-control" name="martial_status"--}}
            {{--                                                            id="exampleFormControlSelect1">--}}
            {{--                                                        <option--}}
            {{--                                                            value="Single" {{($userInfo->martial_status == 'Single') ? 'selected' : ''}}>--}}
            {{--                                                            Single--}}
            {{--                                                        </option>--}}
            {{--                                                        <option--}}
            {{--                                                            value="Married" {{($userInfo->martial_status == 'Married') ? 'selected' : ''}}>--}}
            {{--                                                            Married--}}
            {{--                                                        </option>--}}
            {{--                                                        <option--}}
            {{--                                                            value="Widowed" {{($userInfo->martial_status == 'Widowed') ? 'selected' : ''}}>--}}
            {{--                                                            Widowed--}}
            {{--                                                        </option>--}}
            {{--                                                        <option--}}
            {{--                                                            value="Divorced" {{($userInfo->martial_status == 'Divorced') ? 'selected' : ''}}>--}}
            {{--                                                            Divorced--}}
            {{--                                                        </option>--}}
            {{--                                                        <option--}}
            {{--                                                            value="Separated" {{($userInfo->martial_status == 'Separated') ? 'selected' : ''}}>--}}
            {{--                                                            Separated--}}
            {{--                                                        </option>--}}

            {{--                                                    </select>--}}
            {{--                                                    @if ($errors->has('martial_status'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('martial_status') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}

            {{--                                                <div class="form-group col-sm-6">--}}
            {{--                                                    <label for="country">Country:</label>--}}
            {{--                                                    <input type="text" class="form-control" id="country" name="country"--}}
            {{--                                                           value="{{$userInfo->country}}"--}}
            {{--                                                           placeholder="Enter Country Name">--}}
            {{--                                                    @if ($errors->has('country'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('country') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}
            {{--                                                <div class="form-group col-sm-6">--}}
            {{--                                                    <label for="state">State:</label>--}}
            {{--                                                    <input type="text" class="form-control" id="state" name="state"--}}
            {{--                                                           value="{{$userInfo->state}}" placeholder="Enter State Name">--}}
            {{--                                                    @if ($errors->has('state'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('state') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}
            {{--                                                <div class="form-group col-sm-6">--}}
            {{--                                                    <label for="city">City:</label>--}}
            {{--                                                    <input type="text" class="form-control" id="city" name="city"--}}
            {{--                                                           value="{{$userInfo->city}}" placeholder="Enter City Name">--}}
            {{--                                                    @if ($errors->has('city'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('city') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}
            {{--                                                <div class="form-group col-sm-12">--}}
            {{--                                                    <label>Address:</label>--}}
            {{--                                                    <textarea class="form-control" name="address" rows="5"--}}
            {{--                                                              style="line-height: 22px;">{{$userInfo->address}}</textarea>--}}
            {{--                                                    @if ($errors->has('address'))--}}
            {{--                                                        <span--}}
            {{--                                                            class="text-danger">{{ $errors->first('address') }}</span>--}}
            {{--                                                    @endif--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>--}}
            {{--                                            <button type="reset" class="btn iq-bg-danger">Cancel</button>--}}
            {{--                                        </form>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="tab-pane fade" id="chang-pwd" role="tabpanel">--}}
            {{--                                <div class="card">--}}
            {{--                                    <div class="card-header d-flex justify-content-between">--}}
            {{--                                        <div class="iq-header-title">--}}
            {{--                                            <h4 class="card-title">Change Password</h4>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="card-body">--}}
            {{--                                        <form action="{{route('change-password', $userID)}}" method="post">--}}
            {{--                                            @csrf--}}
            {{--                                            @method('PUT')--}}
            {{--                                            <div class="form-group">--}}
            {{--                                                <label for="oldpassword">Current Password:</label>--}}
            {{--                                                <input type="password" required class="form-control" id="oldpassword"--}}
            {{--                                                       name="oldpassword" placeholder="Old Password">--}}
            {{--                                                @if ($errors->has('oldpassword'))--}}
            {{--                                                    <span class="text-danger">{{ $errors->first('oldpassword') }}</span>--}}
            {{--                                                @endif--}}
            {{--                                            </div>--}}
            {{--                                            <div class="form-group">--}}
            {{--                                                <label for="password">New Password:</label>--}}
            {{--                                                <input type="password" required class="form-control" id="password"--}}
            {{--                                                       name="password" placeholder="New Password">--}}
            {{--                                                @if ($errors->has('password'))--}}
            {{--                                                    <span class="text-danger">{{ $errors->first('password') }}</span>--}}
            {{--                                                @endif--}}
            {{--                                            </div>--}}
            {{--                                            <div class="form-group">--}}
            {{--                                                <label for="password">Verify Password:</label>--}}
            {{--                                                <input type="password" required class="form-control" id="password"--}}
            {{--                                                       name="password_confirmation" placeholder="Repeat Password">--}}
            {{--                                                @if ($errors->has('password'))--}}
            {{--                                                    <span class="text-danger">{{ $errors->first('password') }}</span>--}}
            {{--                                                @endif--}}
            {{--                                            </div>--}}
            {{--                                            <button type="submit" class="btn btn-primary mr-2">Change</button>--}}
            {{--                                            <button type="reset" class="btn iq-bg-danger">Cancel</button>--}}
            {{--                                        </form>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
@endsection
