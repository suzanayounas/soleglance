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
                            <h4 class="card-title">More people</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <ul class="request-list list-inline m-0 p-0">

                            @foreach($results as $user)
                            <li class="d-flex align-items-center">
                                <div class="user-img img-fluid"><img src="../assets/images/user/05.jpg" alt="story-img"
                                        class="rounded-circle avatar-40"></div>
                                <div class="media-support-info ml-3">
                                    <a href="{{route('user-profile',['name'=>strtolower(str_replace(' ', '', $user->name)),'id'=>$user->id])}}"><h6>{{$user->name}}</h6></a>
                                    <p class="mb-0">40 friends</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    @if($user->isFriend == true)
                                        <form action="{{route('unfriendRequest')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="friendID" value="{{$user->id}}">
                                            <button type="submit" class="mr-3 btn btn-primary rounded">Unfriend</button>
                                        </form>                                  
                                    @else
                                        <form action="{{route('sendFriendRequest')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="friendID" value="{{$user->id}}">
                                            <button type="submit" class="mr-3 btn btn-primary rounded">Add Friend</button>
                                        </form>
                                    @endif
                                    <!-- <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a> -->
                                    <!-- <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a> -->
                                </div>
                            </li>
                            @endforeach
                            <!-- <li class="d-block text-center">
                                    <a href="#" class="mr-3 btn">View More Request</a>
                                </li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection