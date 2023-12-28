<!-- TOP Nav Bar -->
<?php 

$user = Auth::user();
$notifications = $user->notifications;

// dd($notifications);

$friendRequest = Auth::user()
    ->unreadNotifications
    ->where('type', 'App\Notifications\FriendRequestNotification')
    ->where('notifiable_type', 'App\Models\User');

// dd($friendRequest);

$postController = new \App\Http\Controllers\PostController;
?>
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex justify-content-between">
                <a href="{{route('home')}}">
                    <img src="../assets/images/logo.png" class="img-fluid" alt="">
                    <span>Soleglance</span>
                </a>
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                    </div>
                </div>
            </div>
            <div class="iq-search-bar">
                <form action="{{route('search')}}" class="searchbox" method="get">
                    <input type="text" name="search" class="text search-input" placeholder="Type here to search...">
                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    <div id="search-suggestions"></div>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">
                    @if(auth()->user()->role_id == 2)
                    <li>
                        <a href="{{route('user-profile',['name'=>strtolower(str_replace(' ', '', Auth()->user()->name)),'id'=>Auth()->user()->id])}}" class="  d-flex align-items-center">
                            <img src="{{showImage(Auth()->user()->userInfo->photo , 'profile')}}"
                                class="img-fluid rounded-circle mr-3" alt="user">
                            <div class="caption">
                                 <h6 class="mb-0 line-height">{{Auth()->user()->name}}</h6>       
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home')}}" class="  d-flex align-items-center">
                            <i class="ri-home-line"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="search-toggle  " href="#"><i class="ri-group-line"></i></a>
                        <div class="iq-sub-dropdown iq-sub-dropdown-large">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">Friend Request<small
                                                class="badge  badge-light float-right pt-1">{{$friendRequest->count()}}</small>
                                        </h5>
                                    </div>

                                    @foreach($friendRequest as $request)
                                    <div class="iq-friend-request">
                                        <div
                                            class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="../assets/images/user/01.jpg"
                                                        alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <!-- <h6 class="mb-0 ">Jaques Amole</h6> -->
                                                    <p class="mb-0">{{$request->data['message']}}</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <form
                                                    action="{{route('acceptFriendRequest', ['friendId' => $request->data['send_id']])}}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="mr-3 btn btn-primary rounded">Confirm</button>
                                                </form>

                                                <form
                                                    action="{{route('rejectFriendRequest',['friendId' => $request->data['send_id']])}}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="mr-3 btn btn-secondary rounded">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <!-- <div class="iq-friend-request">
                                        <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Lucy Tania</h6>
                                                    <p class="mb-0">12  friends</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iq-friend-request">
                                        <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Manny Petty</h6>
                                                    <p class="mb-0">3  friends</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iq-friend-request">
                                        <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Marsha Mello</h6>
                                                    <p class="mb-0">15  friends</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                                <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="text-center">
                                        <a href="{{route('friend-request')}}" class="mr-3 btn text-primary">View More
                                            Request</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="search-toggle  ">
                            <div id="lottie-beil"></div>
                            <span class="bg-danger dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <a href="{{route('notification')}}">
                                            <h5 class="mb-0 text-white">All Notifications<small
                                                    class="badge  badge-light float-right pt-1">{{$notifications->count()}}</small>
                                            </h5>
                                        </a>
                                    </div>

                                    @foreach ($notifications as $notification)
                                        @if($notification->type == "App\Notifications\NewPostNotification")
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="../assets/images/user/02.jpg"
                                                            alt="">
                                                    </div>
                                                    @if($notification->data['user_id'] == Auth::id())
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Your new post is publish</h6>
                                                        <small
                                                            class="float-right font-size-12">({{ $notification->created_at->diffForHumans() }})</small>
                                                        <p class="mb-0">
                                                            {{ $postController->getUserName($notification->data['user_id'])->name }}
                                                        </p>
                                                    </div>
                                                    @else
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">New post is publish</h6>
                                                        <small
                                                            class="float-right font-size-12">({{ $notification->created_at->diffForHumans() }})</small>
                                                        <p class="mb-0">
                                                            {{ $postController->getUserName($notification->data['user_id'])->name }}
                                                        </p>
                                                    </div>
                                                    @endif
                                                </div>
                                            </a>
                                        @elseif($notification->type == "App\Notifications\AcceptedFriendNotification")
                                        <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="../assets/images/user/02.jpg"
                                                            alt="">
                                                    </div>
                                                    
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Accepted {{ $postController->getUserName($notification->data['sender_id'])->name }} request</h6>
                                                        <small
                                                            class="float-right font-size-12">({{ $notification->created_at->diffForHumans() }})</small>
                                                        <!-- <p class="mb-0">
                                                            {{ $postController->getUserName($notification->data['sender_id'])->name }}
                                                        </p> -->
                                                    </div>
                                                   
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                    <!-- 
                                    <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New customer is join</h6>
                                                <small class="float-right font-size-12">Just Now</small>
                                                <p class="mb-0">95 MB</p>
                                            </div>
                                        </div>
                                    </a>
                                     
                                    <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Two customer is left</h6>
                                                <small class="float-right font-size-12">2 days ago</small>
                                                <p class="mb-0">Cyst Bni</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                <small class="float-right font-size-12">3 days ago</small>
                                                <p class="mb-0">Cyst Bni</p>
                                            </div>
                                        </div>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="search-toggle  ">
                            <div id="lottie-mail"></div>
                            <span class="bg-primary count-mail"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">All Messages<small
                                                class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/01.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Bni Emma Watson</h6>
                                                <small class="float-left font-size-12">13 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/02.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                <small class="float-left font-size-12">20 Apr</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/03.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Why do we use it?</h6>
                                                <small class="float-left font-size-12">30 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/04.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Variations Passages</h6>
                                                <small class="float-left font-size-12">12 Sep</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/05.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                <small class="float-left font-size-12">5 Dec</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    @endif
                    @if(auth()->user()->role_id == 1)
                    <li>
                        <a href="{{route('admin')}}" class="  d-flex align-items-center">
                            <img src="{{showImage(Auth()->user()->userInfo->photo , 'profile')}}"
                                class="img-fluid rounded-circle mr-3" alt="user">
                            <div class="caption">
                                <h6 class="mb-0 line-height">{{Auth()->user()->name}}</h6>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin')}}" class="  d-flex align-items-center">
                            <i class="ri-home-line"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="search-toggle  ">
                            <div id="lottie-beil"></div>
                            <span class="bg-danger dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">All Notifications<small
                                                class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/01.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                <small class="float-right font-size-12">Just Now</small>
                                                <p class="mb-0">95 MB</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/02.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New customer is join</h6>
                                                <small class="float-right font-size-12">5 days ago</small>
                                                <p class="mb-0">Cyst Bni</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/03.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Two customer is left</h6>
                                                <small class="float-right font-size-12">2 days ago</small>
                                                <p class="mb-0">Cyst Bni</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../assets/images/user/04.jpg"
                                                    alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                <small class="float-right font-size-12">3 days ago</small>
                                                <p class="mb-0">Cyst Bni</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                </ul>
                <ul class="navbar-list">
                    <li>
                        <a href="#" class="search-toggle   d-flex align-items-center">
                            <i class="ri-arrow-down-s-fill"></i>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3 line-height">
                                        <h5 class="mb-0 text-white line-height">Hello {{auth()->user()->name}}</h5>
                                        <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="{{route('profile')}}" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-file-user-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">My Profile</h6>
                                                <p class="mb-0 font-size-12">View personal profile details.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="iq-sub-card iq-bg-info-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-info">
                                                <i class="ri-account-box-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Account settings</h6>
                                                <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card iq-bg-danger-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-danger">
                                                <i class="ri-lock-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Privacy Settings</h6>
                                                <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                        <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" role="button">Sign out<i
                                                class="ri-login-box-line ml-2"></i></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- TOP Nav Bar END -->