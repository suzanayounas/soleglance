<?php

$postController = new \App\Http\Controllers\PostController;
?>
@extends('layouts.main')
@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                
                @foreach($friends as $friend)
                @if($friend->pivot->status == "accepted")
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg2.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/05.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4><a href="{{route('user-profile',['name'=>strtolower(str_replace(' ', '', $postController->getUserName($friend->id)->name)),'id'=>$postController->getUserName($friend->id)->id])}}">{{$friend->name}}</a></h4>
                                                    <h6>@designer</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                 <!--
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg1.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/06.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Paul Molive</a></h4>
                                                    <h6>@developer</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg4.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/07.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Anna Mull</a></h4>
                                                    <h6>@designer</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg5.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/08.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Paige Turner</a></h4>
                                                    <h6>@tester</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg6.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/09.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Bob Frapples</a></h4>
                                                    <h6>@developer</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg7.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/10.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Barb Ackue</a></h4>
                                                    <h6>@grapfics</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg8.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/13.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Greta Life</a></h4>
                                                    <h6>@fashion</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg9.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/14.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Ira Membrit</a></h4>
                                                    <h6>@designer</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg1.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/15.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Pete Sariya</a></h4>
                                                    <h6>@designer</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg2.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/16.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Monty Carlo</a></h4>
                                                    <h6>@designer</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg5.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/17.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Ed Itorial</a></h4>
                                                    <h6>@testen</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg8.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/18.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Paul Issy</a></h4>
                                                    <h6>@r&d</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg7.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/19.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Rick Shaw</a></h4>
                                                    <h6>@coder</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg9.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/07.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Ben Effit</a></h4>
                                                    <h6>@designer</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg4.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/08.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Justin Case</a></h4>
                                                    <h6>@designer</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                            <div class="profile-header-image">
                                <div class="cover-container">
                                    <img src="../assets/images/page-img/profile-bg2.jpg" alt="profile-bg" class="rounded img-fluid w-100">
                                </div>
                                <div class="profile-info p-4">
                                    <div class="user-detail">
                                        <div class="d-flex flex-wrap justify-content-between align-items-start">
                                            <div class="profile-detail d-flex">
                                                <div class="profile-img pr-4">
                                                    <img src="../assets/images/user/09.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                                                </div>
                                                <div class="user-data-block">
                                                    <h4 class=""><a href="friend-profile.html">Aaron Ottix</a></h4>
                                                    <h6>@designer</h6>
                                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
@endsection
