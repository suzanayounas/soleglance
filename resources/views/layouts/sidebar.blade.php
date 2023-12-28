<!-- Sidebar  -->
<div class="iq-sidebar">
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                @if(auth()->user()->role_id == 2)

                <li>
                    <a href="{{route('home')}}" class=" "><i class="ri-home-2-line"></i></i><span>Newsfeed</span></a>
                </li>
                <li>
                    <a href="{{route('profile')}}" class=" "><i class="ri-user-line"></i><span>Profile</span></a>
                </li>
                <li>
                    <a href="#friend" class="  collapsed" data-toggle="collapse" aria-expanded="false">
                    <i class="ri-group-line"></i>
                 <span>Friends</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="friend" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li>
                        <li>
                            <a href="{{route('friend-list')}}" class=" "><i class="ri-file-list-line"></i></i><span>Friend Lists</span></a>
                        </li>
                        <li>
                            <!-- <a href="{{route('friend-profile')}}" class=" "><i class="ri-user-follow-line"></i></i><span>Friend Profile</span></a> -->
                        </li>
                        <li>
                            <a href="{{route('friend-request')}}" class=" "><i class="ri-user-add-line"></i><span>Friend Request</span></a>
                        </li>

                    </ul>
                </li>


                <li>
                    <a href="{{route('notification')}}" class=" "><i
                            class="las la-bell"></i><span>Notification</span></a>
                </li>


                <li>
                    <a href="{{route('chat')}}" class=" "><i class="ri-chat-1-line"></i></i><span>Chat</span></a>
                </li>

                <li>
                    <a href="{{route('sentiments')}}" class=" "><i class="ri-pie-chart-line"></i><span>Sentiments</span></a>
                </li>
                
                <li>
                    <a href="{{route('trendings')}}" class=" "><i class="ri-bar-chart-line"></i><span>Trendings</span></a>
                </li>
                @endif

                @if(auth()->user()->role_id == 1)

                    <li>
                        <a href="{{route('admin')}}" class=" "><i class="ri-dashboard-line"></i><span>Admin</span></a>
                    </li>
                    <li>
                    <a href="{{route('home')}}" class=" "><i class="ri-home-2-line"></i></i><span>Newsfeed</span></a>
                </li>
                <li>
                    <a href="{{route('profile')}}" class=" "><i class="ri-user-line"></i><span>Profile</span></a>
                </li>
                <li>
                    <a href="#friend" class="  collapsed" data-toggle="collapse" aria-expanded="false">
                    <i class="ri-group-line"></i>
                 <span>Friends</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="friend" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li>
                        <li>
                            <a href="{{route('friend-list')}}" class=" "><i class="ri-file-list-line"></i></i><span>Friend Lists</span></a>
                        </li>
                       
                        <li>
                            <a href="{{route('friend-request')}}" class=" "><i class="ri-user-add-line"></i><span>Friend Request</span></a>
                        </li>

                    </ul>
                </li>


                <li>
                    <a href="{{route('notification')}}" class=" "><i
                            class="las la-bell"></i><span>Notification</span></a>
                </li>


                <li>
                    <a href="{{route('chat')}}" class=" "><i class="ri-chat-1-line"></i></i><span>Chat</span></a>
                </li>
                <li>
                    <a href="{{route('trendings')}}" class=" "><i class="ri-bar-chart-line"></i><span>Trendings</span></a>
                </li>
                @endif


            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
