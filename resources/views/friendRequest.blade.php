@extends('layouts.main')
@section('content')
<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            @if (Session::has('success'))
                    <div class="alert alert-success " role="alert">
                        {{Session::get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if (Session::has('error'))
                    <div class="alert alert-warning " role="alert">
                        {{Session::get('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Friend Request</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <ul class="request-list list-inline m-0 p-0">

                            @foreach($friendRequests as $request)
                            <li class="d-flex align-items-center">
                                <div class="user-img img-fluid"><img src="../assets/images/user/05.jpg" alt="story-img"
                                        class="rounded-circle avatar-40"></div>
                                <div class="media-support-info ml-3">
                                    <h6>{{$request->name}}</h6>
                                    <p class="mb-0">40 friends</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <form action="{{route('acceptFriendRequest', ['friendId' => $request->id])}}"
                                        method="POST">
                                        @csrf
                                        
                                        <button type="submit" class="mr-3 btn btn-primary rounded">Confirm</button>
                                    </form>
                                    <form action="{{route('rejectFriendRequest', ['friendId' => $request->id])}}"
                                        method="POST">
                                        @csrf
                                        <button type="submit" class="mr-3 btn btn-secondary rounded">Delete
                                            Request</button>
                                       
                                    </form>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!-- <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">People You May Know</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="request-list m-0 p-0">
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/15.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Jen Youfelct</h6>
                                        <p class="mb-0">4  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/16.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Cooke Edoh</h6>
                                        <p class="mb-0">20  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/17.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Earl E. Riser</h6>
                                        <p class="mb-0">30  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/05.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Cliff Diver</h6>
                                        <p class="mb-0">5  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/06.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Joyce Tick</h6>
                                        <p class="mb-0">17  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/07.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Vinny Gret</h6>
                                        <p class="mb-0">50  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/08.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Paul Samic</h6>
                                        <p class="mb-0">6  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/09.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Gustav Wind</h6>
                                        <p class="mb-0">14  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/10.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Minnie Strone</h6>
                                        <p class="mb-0">16  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/11.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Ray Volver</h6>
                                        <p class="mb-0">9  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/12.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Indy Nile</h6>
                                        <p class="mb-0">6  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="user-img img-fluid"><img src="../assets/images/user/13.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                    <div class="media-support-info ml-3">
                                        <h6>Jen Trification</h6>
                                        <p class="mb-0">42  friends</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void();" class="mr-3 btn btn-primary rounded"><i class="ri-user-add-line"></i>Add Friend</a>
                                        <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Remove</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
</div>
@endsection