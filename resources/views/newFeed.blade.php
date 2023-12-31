<?php

$postController = new \App\Http\Controllers\PostController;
?>
@extends('layouts.main')
@section('content')
<style>
.custom-file-upload {
    cursor: pointer;
}
</style>
<div id="content-page" class="content-page">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 row m-0 p-0">
                <div class="col-sm-12">
                    @if (Session::has('success'))
                    <div class="alert alert-success " role="alert">
                        {{Session::get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
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
                    <div id="post-modal-data" class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Create Post</h4>
                            </div>
                        </div>
                        <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                            <div class="d-flex align-items-center">
                                <div class="user-img">
                                    <img src="{{showImage(Auth()->user()->userInfo->photo , 'profile')}}" alt="userimg"
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

                                       
                                            </ul>
                                            <hr>
                                            <div class="other-option">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="user-img mr-3">
                                                            <img src="{{showImage(Auth()->user()->userInfo->photo , 'profile')}}" alt="userimg"
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
                </div>

                @foreach($posts as $post)
                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="user-post-data">
                                <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                        <img class="rounded-circle img-fluid" src="{{showImage(Auth()->user()->userInfo->photo , 'profile')}}" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                        <h5 class="mb-0 d-inline-block"><a
                                                href="{{route('user-profile',['name'=>strtolower(str_replace(' ', '', $postController->getUserName($post->user_id)->name)),'id'=>$postController->getUserName($post->user_id)->id])}}"
                                                class="">{{$post->name}}</a></h5>
                                        <p class="mb-0 d-inline-block">Added New Image in a Post</p>
                                        <p class="mb-0 text-primary">
                                            {{ \Carbon\Carbon::parse($post->post_date)->diffForHumans() }}</p>
                                    </div>
                                   <!-- <div class="iq-card-post-toolbar">
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
                                    </div>-->
                                </div>
                            </div>
                            <div class="mt-3">
                                <p>{{$post->post_content}}</p>
                            </div>
                            <div class="user-post">
                                @if (strpos($post->media_type, 'image') !== false)
                                <a href="javascript:void();"><img src="{{ asset($post->media_url) }}" alt="post-image"
                                        class="img-fluid rounded w-100"></a>
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
                                                <form action="{{route('post-reaction')}}" method="post"
                                                    id="reaction-form">
                                                    @csrf
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            <img src="../assets/images/icon/01.png" class="img-fluid"
                                                                alt="">
                                                        </span>
                                                        <div class="dropdown-menu">
                                                            <a class="ml-2 mr-2" href="#" onclick="submitForm('like')"
                                                                data-toggle="tooltip" data-placement="top" title=""
                                                                data-original-title="Like"><img
                                                                    src="../assets/images/icon/01.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" onclick="submitForm('love')"
                                                                data-toggle="tooltip" data-placement="top" title=""
                                                                data-original-title="Love"><img
                                                                    src="../assets/images/icon/02.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" onclick="submitForm('happy')"
                                                                data-toggle="tooltip" data-placement="top" title=""
                                                                data-original-title="Happy"><img
                                                                    src="../assets/images/icon/03.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" onclick="submitForm('haha')"
                                                                data-toggle="tooltip" data-placement="top" title=""
                                                                data-original-title="HaHa"><img
                                                                    src="../assets/images/icon/04.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" onclick="submitForm('think')"
                                                                data-toggle="tooltip" data-placement="top" title=""
                                                                data-original-title="Think"><img
                                                                    src="../assets/images/icon/05.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" onclick="submitForm('sade')"
                                                                data-toggle="tooltip" data-placement="top" title=""
                                                                data-original-title="Sade"><img
                                                                    src="../assets/images/icon/06.png" class="img-fluid"
                                                                    alt=""></a>
                                                            <a class="mr-2" href="#" onclick="submitForm('lovely')"
                                                                data-toggle="tooltip" data-placement="top" title=""
                                                                data-original-title="Lovely"><img
                                                                    src="../assets/images/icon/07.png" class="img-fluid"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <!-- Hidden input fields for the reaction values -->
                                                    <input type="hidden" name="reaction_type" id="reaction-type"
                                                        value="">
                                                    <input type="hidden" name="post_id" id="post_id"
                                                        value="{{$post->id}}">
                                                    <input type="hidden" name="user_id" id="user_id"
                                                        value="{{Auth::user()->id}}">
                                                </form>
                                                <script>
                                                function submitForm(reaction) {
                                                    document.getElementById('reaction-type').value = reaction;
                                                    document.getElementById('post_id').value;
                                                    document.getElementById('user_id').value;
                                                    document.getElementById('reaction-form').submit();
                                                }
                                                </script>

                                            </div>
                                            <div class="total-like-block ml-2 mr-3">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="button">
                                                        @if($post->total_likes > 0)
                                                        {{ $post->total_likes }}
                                                        <img src="../assets/images/icon/01.png"
                                                            class="img-fluid reaction-icon" alt="like">
                                                        @endif
                                                        @if($post->total_loves > 0)
                                                        {{ $post->total_loves }}
                                                        <img src="../assets/images/icon/02.png"
                                                            class="img-fluid reaction-icon" alt="love">
                                                        @endif
                                                        @if($post->total_happys > 0)
                                                        {{ $post->total_happys }}
                                                        <img src="../assets/images/icon/03.png"
                                                            class="img-fluid reaction-icon" alt="happy">
                                                        @endif
                                                        @if($post->total_hahas > 0)
                                                        {{ $post->total_hahas }}
                                                        <img src="../assets/images/icon/04.png"
                                                            class="img-fluid reaction-icon" alt="haha">
                                                        @endif
                                                        @if($post->total_thinks > 0)
                                                        {{ $post->total_thinks }}
                                                        <img src="../assets/images/icon/05.png"
                                                            class="img-fluid reaction-icon" alt="think">
                                                        @endif
                                                        @if($post->total_sades > 0)
                                                        {{ $post->total_sades }}
                                                        <img src="../assets/images/icon/06.png"
                                                            class="img-fluid reaction-icon" alt="sade">
                                                        @endif
                                                        @if($post->total_lovely > 0)
                                                        {{ $post->total_lovely }}
                                                        <img src="../assets/images/icon/07.png"
                                                            class="img-fluid reaction-icon" alt="lovely">
                                                        @endif
                                                    </span>
                                                    <div class="dropdown-menu">
                                                        @foreach($post->all_user_reactions as $reaction)
                                                        <a class="dropdown-item"
                                                            href="{{route('user-profile',['name'=>strtolower(str_replace(' ', '', $postController->getUserName($reaction->user_id)->name)),'id'=>$postController->getUserName($reaction->user_id)->id])}}">
                                                            @if($postController->getUserName($reaction->user_id)->name == Auth::user()->name) By You @else{{ $postController->getUserName($reaction->user_id)->name  }} @endif
                                                        </a>
                                                        @endforeach
                                                    </div>
                                                    <style>
                                                    .reaction-icon {
                                                        width: 18px;
                                                        height: 19px;
                                                        margin-right: -10px;
                                                        position: relative;
                                                        z-index: 2;
                                                    }

                                                    .reaction-icon:first-child {
                                                        margin-right: 0;
                                                    }

                                                    .reaction-icon+.reaction-icon {
                                                        margin-right: -5px;
                                                        z-index: 1;
                                                    }
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                      <!--  <div class="total-comment-block">
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
                                        </div>-->
                                    </div>
                                 <!--   <div class="share-block d-flex align-items-center feather-icon mr-3">
                                        <a href="javascript:void();"><i class="ri-share-line"></i>
                                            <span class="ml-1">99 Share</span></a>
                                    </div>-->
                                </div>
                                <hr>
                             <!--   <ul class="post-comments p-0 m-0">
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
                                </ul>-->
                              <!--  <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                    <input type="text" class="form-control rounded">
                                    <div class="comment-attagement d-flex">
                                        <a href="javascript:void();"><i class="ri-link mr-3"></i></a>
                                        <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                                        <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                                    </div>
                                </form>-->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--
                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="user-post-data">
                                <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                        <img class="rounded-circle img-fluid" src="../assets/images/user/01.jpg" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                        <h5 class="mb-0 d-inline-block"><a href="#" class="">{{$post->name}}</a></h5>
                                        <p class="mb-0 d-inline-block">Add New Post</p>
                                        <p class="mb-0 text-primary">{{$post->created_at}}</p>
                                    </div>
                                    <div class="iq-card-post-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                            </span>
                                            <div class="dropdown-menu m-0 p-0">
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
                                <div class="d-flex">
                                    <div class="col-md-6">
                                        <a href="javascript:void();"><img src="../assets/images/page-img/p2.jpg"
                                                alt="post-image" class="img-fluid rounded w-100"></a>
                                    </div>
                                    <div class="col-md-6 row m-0 p-0">
                                        <div class="col-sm-12">
                                            <a href="javascript:void();"><img src="../assets/images/page-img/p1.jpg"
                                                    alt="post-image" class="img-fluid rounded w-100"></a>
                                        </div>
                                        <div class="col-sm-12 mt-3">
                                            <a href="javascript:void();"><img src="../assets/images/page-img/p3.jpg"
                                                    alt="post-image" class="img-fluid rounded w-100"></a>
                                        </div>
                                    </div>
                                </div>
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
                                <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
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
                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="user-post-data">
                                <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                        <img class="rounded-circle img-fluid" src="../assets/images/user/04.jpg" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                        <h5 class="mb-0 d-inline-block"><a href="#" class="">Ira Membrit</a></h5>
                                        <p class="mb-0 d-inline-block">Update her Status</p>
                                        <p class="mb-0 text-primary">6 hour ago</p>
                                    </div>
                                    <div class="iq-card-post-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                            </span>
                                            <div class="dropdown-menu m-0 p-0">
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                                    commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac
                                    massa sed rhoncus</p>
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
                                <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
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
                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="post-item">
                                <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                        <img class="rounded-circle img-fluid" src="../assets/images/user/1.jpg" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                        <h5 class="mb-0 d-inline-block"><a href="#" class="">Bni Cyst</a></h5>
                                        <p class="ml-1 mb-0 d-inline-block">Changed Profile Picture</p>
                                        <p class="mb-0">3 day ago</p>
                                    </div>
                                    <div class="iq-card-post-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                            </span>
                                            <div class="dropdown-menu m-0 p-0">
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
                            <div class="user-post text-center">
                                <a href="javascript:void();"><img src="../assets/images/page-img/p5.jpg"
                                        alt="post-image" class="img-fluid rounded w-100 mt-3"></a>
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
                                <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
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
                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <div class="user-post-data">
                                <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                        <img class="rounded-circle img-fluid" src="../assets/images/user/02.jpg" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                        <h5 class="mb-0 d-inline-block"><a href="#" class="">Paige Turner</a></h5>
                                        <p class="mb-0 d-inline-block">Added New Video in his Timeline</p>
                                        <p class="mb-0 text-primary">1 day ago</p>
                                    </div>
                                    <div class="iq-card-post-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                            </span>
                                            <div class="dropdown-menu m-0 p-0">
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                                    commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac
                                    massa sed rhoncus</p>
                            </div>
                            <div class="user-post">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/j_GsIanLxZk?rel=0" allowfullscreen></iframe>
                                </div>
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
                                <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
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
                </div> -->
            </div>
       <!--     <div class="col-lg-4">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Stories</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <ul class="media-story m-0 p-0">
                            <li class="d-flex mb-4 align-items-center">
                                <i class="ri-add-line font-size-18"></i>
                                <div class="stories-data ml-3">
                                    <h5>Creat Your Story</h5>
                                    <p class="mb-0">time to story</p>
                                </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center active">
                                <img src="../assets/images/page-img/s2.jpg" alt="story-img"
                                    class="rounded-circle img-fluid">
                                <div class="stories-data ml-3">
                                    <h5>Anna Mull</h5>
                                    <p class="mb-0">1 hour ago</p>
                                </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center">
                                <img src="../assets/images/page-img/s3.jpg" alt="story-img"
                                    class="rounded-circle img-fluid">
                                <div class="stories-data ml-3">
                                    <h5>Ira Membrit</h5>
                                    <p class="mb-0">4 hour ago</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <img src="../assets/images/page-img/s1.jpg" alt="story-img"
                                    class="rounded-circle img-fluid">
                                <div class="stories-data ml-3">
                                    <h5>Bob Frapples</h5>
                                    <p class="mb-0">9 hour ago</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block mt-3">See All</a>
                    </div>
                </div>
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Events</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                                    style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="ri-file-download-fill mr-2"></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <ul class="media-story m-0 p-0">
                            <li class="d-flex mb-4 align-items-center ">
                                <img src="../assets/images/page-img/s4.jpg" alt="story-img"
                                    class="rounded-circle img-fluid">
                                <div class="stories-data ml-3">
                                    <h5>Web Workshop</h5>
                                    <p class="mb-0">1 hour ago</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <img src="../assets/images/page-img/s5.jpg" alt="story-img"
                                    class="rounded-circle img-fluid">
                                <div class="stories-data ml-3">
                                    <h5>Fun Events and Festivals</h5>
                                    <p class="mb-0">1 hour ago</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Upcoming Birthday</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <ul class="media-story m-0 p-0">
                            <li class="d-flex mb-4 align-items-center">
                                <img src="../assets/images/user/01.jpg" alt="story-img"
                                    class="rounded-circle img-fluid">
                                <div class="stories-data ml-3">
                                    <h5>Anna Sthesia</h5>
                                    <p class="mb-0">Today</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <img src="../assets/images/user/02.jpg" alt="story-img"
                                    class="rounded-circle img-fluid">
                                <div class="stories-data ml-3">
                                    <h5>Paul Molive</h5>
                                    <p class="mb-0">Tomorrow</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Suggested Pages</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown"
                                    aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01"
                                    style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="ri-file-download-fill mr-2"></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <ul class="suggested-page-story m-0 p-0 list-inline">
                            <li class="mb-3">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="../assets/images/page-img/42.png" alt="story-img"
                                        class="rounded-circle img-fluid avatar-50">
                                    <div class="stories-data ml-3">
                                        <h5>Iqonic Studio</h5>
                                        <p class="mb-0">Lorem Ipsum</p>
                                    </div>
                                </div>
                                <img src="../assets/images/small/img-1.jpg" class="img-fluid rounded"
                                    alt="Responsive image">
                                <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i>
                                        Like Page</a></div>
                            </li>
                            <li class="">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="../assets/images/page-img/42.png" alt="story-img"
                                        class="rounded-circle img-fluid avatar-50">
                                    <div class="stories-data ml-3">
                                        <h5>Cakes & Bakes </h5>
                                        <p class="mb-0">Lorem Ipsum</p>
                                    </div>
                                </div>
                                <img src="../assets/images/small/img-2.jpg" class="img-fluid rounded"
                                    alt="Responsive image">
                                <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i>
                                        Like Page</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>-->
            <div class="col-sm-12 text-center">
                <img src="../assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
            </div>
        </div>
    </div>
</div>

@endsection