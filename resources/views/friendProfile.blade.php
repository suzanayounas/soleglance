@extends('layouts.main')

@section('content')
<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-body profile-page p-0">
                        <div class="profile-header profile-info">
                            <div class="cover-container">
                                <img src="../assets/images/page-img/profile-bg1.jpg" alt="profile-bg"
                                    class="rounded img-fluid">
                                <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                                    <li><a href="javascript:void();"><i class="ri-pencil-line"></i></a></li>
                                    <li><a href="javascript:void();"><i class="ri-settings-4-line"></i></a></li>
                                </ul>
                            </div>
                            <div class="user-detail text-center mb-3">
                                <div class="profile-img">
                                    <img src="../assets/images/user/11.png" alt="profile-img"
                                        class="avatar-130 img-fluid" />
                                </div>
                                <div class="profile-detail">
                                    <h3 class="">{{$name}}</h3>
                                </div>
                            </div>
                            <div
                                class="profile-info p-4 d-flex align-items-center justify-content-between position-relative">
                                <div class="social-links">
                                 <!--   <ul
                                        class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                        <li class="text-center pr-3">
                                            <a href="#"><img src="../assets/images/icon/08.png"
                                                    class="img-fluid rounded" alt="facebook"></a>
                                        </li>
                                        <li class="text-center pr-3">
                                            <a href="#"><img src="../assets/images/icon/09.png"
                                                    class="img-fluid rounded" alt="Twitter"></a>
                                        </li>
                                        <li class="text-center pr-3">
                                            <a href="#"><img src="../assets/images/icon/10.png"
                                                    class="img-fluid rounded" alt="Instagram"></a>
                                        </li>
                                        <li class="text-center pr-3">
                                            <a href="#"><img src="../assets/images/icon/11.png"
                                                    class="img-fluid rounded" alt="Google plus"></a>
                                        </li>
                                        <li class="text-center pr-3">
                                            <a href="#"><img src="../assets/images/icon/12.png"
                                                    class="img-fluid rounded" alt="You tube"></a>
                                        </li>
                                        <li class="text-center pr-3">
                                            <a href="#"><img src="../assets/images/icon/13.png"
                                                    class="img-fluid rounded" alt="linkedin"></a>
                                        </li>
                                    </ul>-->
                                </div>
                                <div class="social-info">
                                    <ul
                                        class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                        <li class="text-center pl-3">
                                           <br></br>
                                        </li>
                                        <li class="text-center pl-3">
                                        <br></br>
                                        </li>
                                        <li class="text-center pl-3">
                                        <br></br>  
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="iq-card-title">About</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="list-inline p-0 m-0">
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="ri-user-line pr-3 font-size-20"></i>
                                    <p class="mb-0">Web Developer</p>
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="ri-git-repository-line pr-3 font-size-20"></i>
                                    <p class="mb-0">Success in slowing economic activity.</p>
                                </li>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="ri-map-pin-line pr-3 font-size-20"></i>
                                    <p class="mb-0">USA</p>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="ri-heart-line pr-3 font-size-20"></i>
                                    <p class="mb-0">Single</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="iq-card">
                       <!-- <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Photos</h4>
                            </div>
                           
                        </div>
                        <div class="iq-card-body">
                            <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img
                                            src="../assets/images/page-img/g1.jpg" alt="gallary-image"
                                            class="img-fluid" /></a></li>
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img
                                            src="../assets/images/page-img/g2.jpg" alt="gallary-image"
                                            class="img-fluid" /></a></li>
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img
                                            src="../assets/images/page-img/g3.jpg" alt="gallary-image"
                                            class="img-fluid" /></a></li>
                                <li class="col-md-4 col-6 pl-2 pr-0"><a href="javascript:void();"><img
                                            src="../assets/images/page-img/g4.jpg" alt="gallary-image"
                                            class="img-fluid" /></a></li>
                                <li class="col-md-4 col-6 pl-2 pr-0"><a href="javascript:void();"><img
                                            src="../assets/images/page-img/g5.jpg" alt="gallary-image"
                                            class="img-fluid" /></a></li>
                                <li class="col-md-4 col-6 pl-2 pr-0"><a href="javascript:void();"><img
                                            src="../assets/images/page-img/g6.jpg" alt="gallary-image"
                                            class="img-fluid" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Friends</h4>
                            </div>
                          
                        </div>
                       <div class="iq-card-body">
                            <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();">
                                        <img src="../assets/images/user/05.jpg" alt="gallary-image"
                                            class="img-fluid" /></a>
                                    <h6 class="mt-2">Anna Rexia</h6>
                                </li>
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();"><img src="../assets/images/user/06.jpg"
                                            alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Tara Zona</h6>
                                </li>
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();"><img src="../assets/images/user/07.jpg"
                                            alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Polly Tech</h6>
                                </li>
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();"><img src="../assets/images/user/08.jpg"
                                            alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Bill Emia</h6>
                                </li>
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();"><img src="../assets/images/user/09.jpg"
                                            alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Moe Fugga</h6>
                                </li>
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();"><img src="../assets/images/user/10.jpg"
                                            alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Hal Appeno </h6>
                                </li>
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                    <a href="javascript:void();"><img src="../assets/images/user/07.jpg"
                                            alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Zack Lee</h6>
                                </li>
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                    <a href="javascript:void();"><img src="../assets/images/user/06.jpg"
                                            alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Terry Aki</h6>
                                </li>
                                <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                    <a href="javascript:void();"><img src="../assets/images/user/05.jpg"
                                            alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Greta Life</h6>
                                </li>
                            </ul>
                        </div>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="col-sm-12">
                    @if(auth()->user()->id == $id)
                    <div id="post-modal-data" class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Create Post</h4>
                            </div>
                        </div>
                        <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                            <div class="d-flex align-items-center">
                                <div class="user-img">
                                    <img src="../assets/images/user/1.jpg" alt="userimg"
                                        class="avatar-60 rounded-circle">
                                </div>
                                <form class="post-text ml-3 w-100" action="javascript:void();">
                                    <input type="text" class="form-control rounded"
                                        placeholder="Write something here..." style="border:none;">
                                </form>
                            </div>
                            <hr>
                            <ul class="post-opt-block d-flex align-items-center list-inline m-0 p-0">
                                <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img
                                        src="../assets/images/small/07.png" alt="icon" class="img-fluid"> Photo/Video
                                </li>
                              <!--  <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img
                                        src="../assets/images/small/08.png" alt="icon" class="img-fluid"> Tag Friend
                                </li>
                                <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img
                                        src="../assets/images/small/09.png" alt="icon" class="img-fluid">
                                    Feeling/Activity</li>
                                <li class="iq-bg-primary rounded p-2 pointer">
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" id="post-option" data-toggle="dropdown">
                                                <i class="ri-more-fill"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option"
                                                style="">
                                                <a class="dropdown-item" href="#">Check in</a>
                                                <a class="dropdown-item" href="#">Live Video</a>
                                                <a class="dropdown-item" href="#">Gif</a>
                                                <a class="dropdown-item" href="#">Watch Party</a>
                                                <a class="dropdown-item" href="#">Play with Friend</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                            </ul>
                        </div>
                        <div class="modal fade" id="post-modal" tabindex="-1" role="dialog"
                            aria-labelledby="post-modalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                                class="ri-close-fill m-0"></i></button>
                                    </div>
                                    <form action="{{route('post-submit')}}" id="postForm" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center">
                                                <div class="user-img">
                                                    <img src="../assets/images/user/1.jpg" alt="userimg"
                                                        class="avatar-60 rounded-circle img-fluid">

                                                </div>
                                                <input type="text" class="form-control rounded"
                                                    placeholder="Write something here..." name="post_content"
                                                    style="border:none;" required>
                                            </div>
                                            <hr>
                                            <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                <li class="col-md-6 mb-3">
                                                    <div class="iq-bg-primary rounded p-2 pointer mr-3">
                                                        <label for="file-input" class="custom-file-upload">
                                                            <img src="../assets/images/small/07.png" alt="icon"
                                                                class="img-fluid"> Photo/Video
                                                        </label>
                                                        <input type="file" id="file-input" name="file-input"
                                                            style="display:none;">
                                                    </div>
                                                </li>

                                                <li class="col-md-6 mb-3">
                                                    <div class="iq-bg-primary rounded p-2 pointer mr-3"><a
                                                            href="#"></a><img src="../assets/images/small/08.png"
                                                            alt="icon" class="img-fluid"> Tag Friend</div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="iq-bg-primary rounded p-2 pointer mr-3"><a
                                                            href="#"></a><img src="../assets/images/small/09.png"
                                                            alt="icon" class="img-fluid"> Feeling/Activity</div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="iq-bg-primary rounded p-2 pointer mr-3"><a
                                                            href="#"></a><img src="../assets/images/small/10.png"
                                                            alt="icon" class="img-fluid"> Check in</div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="iq-bg-primary rounded p-2 pointer mr-3"><a
                                                            href="#"></a><img src="../assets/images/small/11.png"
                                                            alt="icon" class="img-fluid"> Live Video</div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="iq-bg-primary rounded p-2 pointer mr-3"><a
                                                            href="#"></a><img src="../assets/images/small/12.png"
                                                            alt="icon" class="img-fluid"> Gif</div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="iq-bg-primary rounded p-2 pointer mr-3"><a
                                                            href="#"></a><img src="../assets/images/small/13.png"
                                                            alt="icon" class="img-fluid"> Watch Party</div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                    <div class="iq-bg-primary rounded p-2 pointer mr-3"><a
                                                            href="#"></a><img src="../assets/images/small/14.png"
                                                            alt="icon" class="img-fluid"> Play with Friends</div>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class="other-option">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="user-img mr-3">
                                                            <img src="../assets/images/user/1.jpg" alt="userimg"
                                                                class="avatar-60 rounded-circle img-fluid">
                                                        </div>
                                                        <h6>Your Story</h6>
                                                    </div>
                                                    <div class="iq-card-post-toolbar">
                                                        <div class="dropdown">
                                                            <!-- <span class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                role="button">
                                                                <span class="btn btn-primary">Friends</span>
                                                            </span> -->
                                                            <span class="btn btn-primary">
                                                                <select name="visibility_type" id="postvisibility"
                                                                    style="background:none;border:none">
                                                                    >
                                                                    <option value="public">Public</option>
                                                                    <option value="friends">Friends</option>
                                                                    <!-- <option value="">Friends Except</option> -->
                                                                    <option value="onlyme">Only Me</option>
                                                                </select>
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">


                                                                <a class="dropdown-item p-3" href="#">
                                                                    <div class="d-flex align-items-top">
                                                                        <div class="icon font-size-20"><i
                                                                                class="ri-save-line"></i></div>
                                                                        <div class="data ml-2">
                                                                            <h6>Public</h6>
                                                                            <p class="mb-0">Anyone on or off Facebook
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item p-3" href="#">
                                                                    <div class="d-flex align-items-top">
                                                                        <div class="icon font-size-20"><i
                                                                                class="ri-close-circle-line"></i></div>
                                                                        <div class="data ml-2">
                                                                            <h6>Friends</h6>
                                                                            <p class="mb-0"> Your Friend on facebook
                                                                            </p>

                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item p-3" href="#">
                                                                    <div class="d-flex align-items-top">
                                                                        <div class="icon font-size-20"><i
                                                                                class="ri-user-unfollow-line"></i></div>
                                                                        <div class="data ml-2">
                                                                            <h6>Friends except</h6>
                                                                            <p class="mb-0">Don't show to some friends
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class="dropdown-item p-3" href="#">
                                                                    <div class="d-flex align-items-top">
                                                                        <div class="icon font-size-20"><i
                                                                                class="ri-notification-line"></i></div>
                                                                        <div class="data ml-2">
                                                                            <h6>Only Me</h6>
                                                                            <p class="mb-0">Only me</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary d-block w-100 mt-3">Post</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endif
                    </div>
                    @foreach($posts as $post)
                    <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <div class="user-post-data">
                                    <div class="d-flex flex-wrap">
                                        <div class="media-support-user-img mr-3">
                                            <img class="rounded-circle img-fluid" src="../assets/images/user/03.jpg"
                                                alt="">
                                        </div>
                                        <div class="media-support-info mt-2">
                                            <h5 class="mb-0 d-inline-block"><a href="#" class="">{{$post->name}}</a>
                                            </h5>
                                            <p class="mb-0 d-inline-block">Added New Image in a Post</p>
                                            <p class="mb-0 text-primary">{{ \Carbon\Carbon::parse($post->post_date)->diffForHumans() }}</p>
                                        </div>
                                        <div class="iq-card-post-toolbar">
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="postdata-5" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" role="button">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu m-0 p-0" aria-labelledby="postdata-5">
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <div class="icon font-size-20"><i class="ri-save-line"></i>
                                                            </div>
                                                            <div class="data ml-2">
                                                                <h6>Save Post</h6>
                                                                <p class="mb-0">Add this to your saved items</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <div class="icon font-size-20"><i
                                                                    class="ri-close-circle-line"></i></div>
                                                            <div class="data ml-2">
                                                                <h6>Hide Post</h6>
                                                                <p class="mb-0">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <div class="icon font-size-20"><i
                                                                    class="ri-user-unfollow-line"></i></div>
                                                            <div class="data ml-2">
                                                                <h6>Unfollow User</h6>
                                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <div class="icon font-size-20"><i
                                                                    class="ri-notification-line"></i></div>
                                                            <div class="data ml-2">
                                                                <h6>Notifications</h6>
                                                                <p class="mb-0">Turn on notifications for this post</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p>{{$post->post_content}}</p>
                                </div>
                                <div class="user-post">
                                    @if (strpos($post->media_type, 'image') !== false)
                                    <a href="javascript:void();"><img src="{{ asset($post->media_url) }}"
                                            alt="post-image" class="img-fluid rounded w-100"></a>
                                    @elseif (strpos($post->media_type, 'video') !== false)
                                    <video class="img-fluid rounded w-100" controls>
                                        <source src="{{ asset($post->media_url) }}" type="{{ $post->media_type }}">
                                        Your browser does not support HTML5 video.
                                    </video>
                                    @endif
                                </div>
                                <div class="comment-area mt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="like-block position-relative d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="like-data">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            <img src="../assets/images/icon/01.png" class="img-fluid"
                                                                alt="">
                                                        </span>
                                                        <div class="dropdown-menu">
                                                            <a class="ml-2 mr-2" href="#" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Like"><img
                                                                    src="../assets/images/icon/01.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Love"><img
                                                                    src="../assets/images/icon/02.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Happy"><img
                                                                    src="../assets/images/icon/03.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="HaHa"><img
                                                                    src="../assets/images/icon/04.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Think"><img
                                                                    src="../assets/images/icon/05.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Sade"><img
                                                                    src="../assets/images/icon/06.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" data-toggle="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Lovely"><img
                                                                    src="../assets/images/icon/07.png" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="total-like-block ml-2 mr-3">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            140 Likes
                                                        </span>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="total-comment-block">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="button">
                                                        20 Comment
                                                    </span>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Max Emum</a>
                                                        <a class="dropdown-item" href="#">Bill Yerds</a>
                                                        <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                        <a class="dropdown-item" href="#">Tara Misu</a>
                                                        <a class="dropdown-item" href="#">Midge Itz</a>
                                                        <a class="dropdown-item" href="#">Sal Vidge</a>
                                                        <a class="dropdown-item" href="#">Other</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="share-block d-flex align-items-center feather-icon mr-3">
                                            <a href="javascript:void();"><i class="ri-share-line"></i>
                                                <span class="ml-1">99 Share</span></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <ul class="post-comments p-0 m-0">
                                        <li class="mb-2">
                                            <div class="d-flex flex-wrap">
                                                <div class="user-img">
                                                    <img src="../assets/images/user/02.jpg" alt="userimg"
                                                        class="avatar-35 rounded-circle img-fluid">
                                                </div>
                                                <div class="comment-data-block ml-3">
                                                    <h6>Monty Carlo</h6>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center comment-activity">
                                                        <a href="javascript:void();">like</a>
                                                        <a href="javascript:void();">reply</a>
                                                        <a href="javascript:void();">translate</a>
                                                        <span> 5 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-wrap">
                                                <div class="user-img">
                                                    <img src="../assets/images/user/03.jpg" alt="userimg"
                                                        class="avatar-35 rounded-circle img-fluid">
                                                </div>
                                                <div class="comment-data-block ml-3">
                                                    <h6>Paul Molive</h6>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                    <div class="d-flex flex-wrap align-items-center comment-activity">
                                                        <a href="javascript:void();">like</a>
                                                        <a href="javascript:void();">reply</a>
                                                        <a href="javascript:void();">translate</a>
                                                        <span> 5 min </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3"
                                        action="javascript:void(0);">
                                        <input type="text" class="form-control rounded">
                                        <div class="comment-attagement d-flex">
                                            <a href="javascript:void();"><i class="ri-link mr-3"></i></a>
                                            <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                                            <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection