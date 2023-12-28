@extends('layouts.main')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-body chat-page p-0">
                            <div class="chat-data-block">
                                <div class="row">
                                    <div class="col-lg-3 chat-data-left scroller">
                                        <div class="chat-search pt-3 pl-3">
                                            <div class="d-flex align-items-center">
                                                <div class="chat-profile mr-3">
                                                    <img src="../assets/images/user/1.jpg" alt="chat-user" class="avatar-60 ">
                                                </div>
                                                <div class="chat-caption">
                                                    <h5 class="mb-0">Bni Jordan</h5>
                                                    <p class="m-0">Web Designer</p>
                                                </div>
                                                <button type="submit" class="close-btn-res p-3"><i class="ri-close-fill"></i></button>
                                            </div>
                                            <div id="user-detail-popup" class="scroller">
                                                <div class="user-profile">
                                                    <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                    <div class="user text-center mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="../assets/images/user/1.jpg" alt="avatar">
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Bni Jordan</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Web Designer</p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="user-detail text-left mt-4 pl-4 pr-4">
                                                        <h5 class="mt-4 mb-4">About</h5>
                                                        <p>It is long established fact that a reader will be distracted bt the reddable.</p>
                                                        <h5 class="mt-3 mb-3">Status</h5>
                                                        <ul class="user-status p-0">
                                                            <li class="mb-1"><i class="ri-checkbox-blank-circle-fill text-success pr-1"></i><span>Online</span></li>
                                                            <li class="mb-1"><i class="ri-checkbox-blank-circle-fill text-warning pr-1"></i><span>Away</span></li>
                                                            <li class="mb-1"><i class="ri-checkbox-blank-circle-fill text-danger pr-1"></i><span>Do Not Disturb</span></li>
                                                            <li class="mb-1"><i class="ri-checkbox-blank-circle-fill text-light pr-1"></i><span>Offline</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-searchbar mt-4">
                                                <div class="form-group chat-search-data m-0">
                                                    <input type="text" class="form-control round" id="chat-search" placeholder="Search">
                                                    <i class="ri-search-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-sidebar-channel scroller mt-4 pl-3">
                                            <h5 class="">Public Channels</h5>
                                            <ul class="iq-chat-ui nav flex-column nav-pills">
                                                <li>
                                                    <a  data-toggle="pill" href="#chatbox1">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar mr-2">
                                                                <img src="../assets/images/user/05.jpg" alt="chatuserimage" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <div class="chat-sidebar-name">
                                                                <h6 class="mb-0">Team Discussions</h6>
                                                                <span>Lorem Ipsum is</span>
                                                            </div>
                                                            <div class="chat-meta float-right text-center mt-2 mr-1">
                                                                <div class="chat-msg-counter bg-primary text-white">20</div>
                                                                <span class="text-nowrap">05 min</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="pill" href="#chatbox2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar mr-2">
                                                                <img src="../assets/images/user/06.jpg" alt="chatuserimage" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <div class="chat-sidebar-name">
                                                                <h6 class="mb-0">Announcement</h6>
                                                                <span>This Sunday we</span>
                                                            </div>
                                                            <div class="chat-meta float-right text-center mt-2 mr-1">
                                                                <div class="chat-msg-counter bg-primary text-white">10</div>
                                                                <span class="text-nowrap">10 min</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <h5 class="mt-3">Private Channels</h5>
                                            <ul class="iq-chat-ui nav flex-column nav-pills">
                                                <li>
                                                    <a  data-toggle="pill" href="#chatbox3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar mr-2">
                                                                <img src="../assets/images/user/07.jpg" alt="chatuserimage" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-warning"></i></span>
                                                            </div>
                                                            <div class="chat-sidebar-name">
                                                                <h6 class="mb-0">Designer</h6>
                                                                <span>There are many </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="pill" href="#chatbox4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar mr-2">
                                                                <img src="../assets/images/user/08.jpg" alt="chatuserimage" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <div class="chat-sidebar-name">
                                                                <h6 class="mb-0">Developer</h6>
                                                                <span>passages of Lorem</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="pill" href="#chatbox5">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar mr-2">
                                                                <img src="../assets/images/user/09.jpg" alt="chatuserimage" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-info"></i></span>
                                                            </div>
                                                            <div class="chat-sidebar-name">
                                                                <h6 class="mb-0">Testing Team</h6>
                                                                <span>Lorem Ipsum used</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <h5 class="mt-3">Direct Message</h5>
                                            <ul class="iq-chat-ui nav flex-column nav-pills">
                                                <li>
                                                    <a  data-toggle="pill" href="#chatbox6">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar mr-2">
                                                                <img src="../assets/images/user/10.jpg" alt="chatuserimage" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-dark"></i></span>
                                                            </div>
                                                            <div class="chat-sidebar-name">
                                                                <h6 class="mb-0">Paul Molive</h6>
                                                                <span>translation by</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="pill" href="#chatbox7">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar mr-2">
                                                                <img src="../assets/images/user/05.jpg" alt="chatuserimage" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <div class="chat-sidebar-name">
                                                                <h6 class="mb-0">Paige Turner</h6>
                                                                <span>Lorem Ipsum which</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="pill" href="#chatbox8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar mr-2">
                                                                <img src="../assets/images/user/06.jpg" alt="chatuserimage" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-primary"></i></span>
                                                            </div>
                                                            <div class="chat-sidebar-name">
                                                                <h6 class="mb-0">Barb Ackue</h6>
                                                                <span>simply random text</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="pill" href="#chatbox9">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar mr-2">
                                                                <img src="../assets/images/user/07.jpg" alt="chatuserimage" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-danger"></i></span>
                                                            </div>
                                                            <div class="chat-sidebar-name">
                                                                <h6 class="mb-0">Maya Didas</h6>
                                                                <span> but also the leap</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a  data-toggle="pill" href="#chatbox10">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar mr-2">
                                                                <img src="../assets/images/user/08.jpg" alt="chatuserimage" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-warning"></i></span>
                                                            </div>
                                                            <div class="chat-sidebar-name">
                                                                <h6 class="mb-0">Monty Carlo</h6>
                                                                <span>Contrary to popular</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 chat-data p-0 chat-data-right">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="default-block" role="tabpanel">
                                                <div class="chat-start">
                                                    <span class="iq-start-icon text-primary"><i class="ri-message-3-line"></i></span>
                                                    <button id="chat-start" class="btn bg-white mt-3">Start
                                                        Conversation!</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chatbox1" role="tabpanel">
                                                <div class="chat-head">
                                                    <header class="d-flex justify-content-between align-items-center bg-white pt-3 pr-3 pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="sidebar-toggle">
                                                                <i class="ri-menu-3-line"></i>
                                                            </div>
                                                            <div class="avatar chat-user-profile m-0 mr-3">
                                                                <img src="../assets/images/user/05.jpg" alt="avatar" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <h5 class="mb-0">Team Discussions</h5>
                                                        </div>
                                                        <div class="chat-user-detail-popup scroller">
                                                            <div class="user-profile text-center">
                                                                <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                                <div class="user mb-4">
                                                                    <a class="avatar m-0">
                                                                        <img src="../assets/images/user/05.jpg" alt="avatar">
                                                                    </a>
                                                                    <div class="user-name mt-4">
                                                                        <h4>Bni Jordan</h4>
                                                                    </div>
                                                                    <div class="user-desc">
                                                                        <p>Cape Town, RSA</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="chatuser-detail text-left mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Bni Name:</div>
                                                                        <div class="col-6 col-md-6 text-right">Bni</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Tel:</div>
                                                                        <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                                        <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Gender:</div>
                                                                        <div class="col-6 col-md-6 text-right">Male</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Language:</div>
                                                                        <div class="col-6 col-md-6 text-right">Engliah</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-header-icons d-flex">
                                                            <a href="javascript:void();" class="chat-icon-phone iq-bg-primary">
                                                                <i class="ri-phone-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-video iq-bg-primary">
                                                                <i class="ri-vidicon-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-delete iq-bg-primary">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <span class="dropdown iq-bg-primary">
                                                   <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer pr-0" id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                   <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton02">
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                   </span>
                                                   </span>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="chat-content scroller">
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:45</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>How can we help? We're here for you! 😄</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/05.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:48</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Hey John, I am looking for the best admin template.</p>
                                                                <p>Could you please help me to find it out? 🤔</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:49</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Absolutely!</p>
                                                                <p>Soleglance Dashboard is the responsive bootstrap 4 admin template.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/05.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:52</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Looks clean and fresh UI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:53</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Thanks, from ThemeForest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/05.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:54</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>I will purchase it for sure. 👍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:56</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Okay Thanks..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer p-3 bg-white">
                                                    <form class="d-flex align-items-center"  action="javascript:void(0);">
                                                        <div class="chat-attagement d-flex">
                                                            <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                                            <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                                        </div>
                                                        <input type="text" class="form-control mr-3" placeholder="Type your message">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chatbox2" role="tabpanel">
                                                <div class="chat-head">
                                                    <header class="d-flex justify-content-between align-items-center bg-white pt-3  pl-3 pr-3 pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="sidebar-toggle">
                                                                <i class="ri-menu-3-line"></i>
                                                            </div>
                                                            <div class="avatar chat-user-profile m-0 mr-3">
                                                                <img src="../assets/images/user/06.jpg" alt="avatar" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <h5 class="mb-0">Announcement</h5>
                                                        </div>
                                                        <div class="chat-user-detail-popup scroller" >
                                                            <div class="user-profile text-center">
                                                                <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                                <div class="user mb-4">
                                                                    <a class="avatar m-0">
                                                                        <img src="../assets/images/user/06.jpg" alt="avatar">
                                                                    </a>
                                                                    <div class="user-name mt-4">
                                                                        <h4>Mark Jordan</h4>
                                                                    </div>
                                                                    <div class="user-desc">
                                                                        <p>Atlanta, USA</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="chatuser-detail text-left mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Bni Name:</div>
                                                                        <div class="col-6 col-md-6 text-right">Mark</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Tel:</div>
                                                                        <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                                        <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Gender:</div>
                                                                        <div class="col-6 col-md-6 text-right">Female</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Language:</div>
                                                                        <div class="col-6 col-md-6 text-right">Engliah</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-header-icons d-flex">
                                                            <a href="javascript:void();" class="chat-icon-phone">
                                                                <i class="ri-phone-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-video">
                                                                <i class="ri-vidicon-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <span class="dropdown">
                                                   <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                   <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                   </span>
                                                   </span>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="chat-content scroller">
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:45</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>How can we help? We're here for you! 😄</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/06.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:48</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Hey John, I am looking for the best admin template.</p>
                                                                <p>Could you please help me to find it out? 🤔</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:49</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Absolutely!</p>
                                                                <p>Soleglance Dashboard is the responsive bootstrap 4 admin template.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/06.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:52</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Looks clean and fresh UI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:53</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Thanks, from ThemeForest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/06.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:54</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>I will purchase it for sure. 👍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:56</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Okay Thanks..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer p-3 bg-white">
                                                    <form class="d-flex align-items-center"  action="javascript:void(0);">
                                                        <div class="chat-attagement d-flex">
                                                            <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                                            <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                                        </div>
                                                        <input type="text" class="form-control mr-3" placeholder="Type your message">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chatbox3" role="tabpanel">
                                                <div class="chat-head">
                                                    <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="sidebar-toggle">
                                                                <i class="ri-menu-3-line"></i>
                                                            </div>
                                                            <div class="avatar chat-user-profile m-0 mr-3">
                                                                <img src="../assets/images/user/07.jpg" alt="avatar" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <h5 class="mb-0">Designer</h5>
                                                        </div>
                                                        <div class="chat-user-detail-popup scroller">
                                                            <div class="user-profile text-center">
                                                                <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                                <div class="user mb-4">
                                                                    <a class="avatar m-0">
                                                                        <img src="../assets/images/user/07.jpg" alt="avatar">
                                                                    </a>
                                                                    <div class="user-name mt-4">
                                                                        <h4>Paige Turner</h4>
                                                                    </div>
                                                                    <div class="user-desc">
                                                                        <p>Cape Town, RSA</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="chatuser-detail text-left mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Bni Name:</div>
                                                                        <div class="col-6 col-md-6 text-right">pai</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Tel:</div>
                                                                        <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                                        <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Gender:</div>
                                                                        <div class="col-6 col-md-6 text-right">Male</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Language:</div>
                                                                        <div class="col-6 col-md-6 text-right">Engliah</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-header-icons d-flex">
                                                            <a href="javascript:void();" class="chat-icon-phone">
                                                                <i class="ri-phone-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-video">
                                                                <i class="ri-vidicon-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <span class="dropdown">
                                                   <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                   <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                   </span>
                                                   </span>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="chat-content scroller">
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:45</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>How can we help? We're here for you! 😄</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/07.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:48</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Hey John, I am looking for the best admin template.</p>
                                                                <p>Could you please help me to find it out? 🤔</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:49</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Absolutely!</p>
                                                                <p>Soleglance Dashboard is the responsive bootstrap 4 admin template.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/07.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:52</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Looks clean and fresh UI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:53</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Thanks, from ThemeForest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/07.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:54</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>I will purchase it for sure. 👍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:56</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Okay Thanks..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer p-3 bg-white">
                                                    <form class="d-flex align-items-center"  action="javascript:void(0);">
                                                        <div class="chat-attagement d-flex">
                                                            <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                                            <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                                        </div>
                                                        <input type="text" class="form-control mr-3" placeholder="Type your message">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chatbox4" role="tabpanel">
                                                <div class="chat-head">
                                                    <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="sidebar-toggle">
                                                                <i class="ri-menu-3-line"></i>
                                                            </div>
                                                            <div class="avatar chat-user-profile m-0 mr-3">
                                                                <img src="../assets/images/user/08.jpg" alt="avatar" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <h5 class="mb-0">Developer</h5>
                                                        </div>
                                                        <div class="chat-user-detail-popup scroller">
                                                            <div class="user-profile text-center">
                                                                <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                                <div class="user mb-4">
                                                                    <a class="avatar m-0">
                                                                        <img src="../assets/images/user/08.jpg" alt="avatar">
                                                                    </a>
                                                                    <div class="user-name mt-4">
                                                                        <h4>Barb Ackue</h4>
                                                                    </div>
                                                                    <div class="user-desc">
                                                                        <p>Cape Town, RSA</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="chatuser-detail text-left mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Bni Name:</div>
                                                                        <div class="col-6 col-md-6 text-right">Babe</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Tel:</div>
                                                                        <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                                        <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Gender:</div>
                                                                        <div class="col-6 col-md-6 text-right">Feale</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Language:</div>
                                                                        <div class="col-6 col-md-6 text-right">Engliah</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-header-icons d-flex">
                                                            <a href="javascript:void();" class="chat-icon-phone">
                                                                <i class="ri-phone-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-video">
                                                                <i class="ri-vidicon-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <span class="dropdown">
                                                   <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                   <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                   </span>
                                                   </span>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="chat-content scroller">
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:45</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>How can we help? We're here for you! 😄</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:48</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Hey John, I am looking for the best admin template.</p>
                                                                <p>Could you please help me to find it out? 🤔</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:49</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Absolutely!</p>
                                                                <p>Soleglance Dashboard is the responsive bootstrap 4 admin template.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:52</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Looks clean and fresh UI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:53</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Thanks, from ThemeForest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:54</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>I will purchase it for sure. 👍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:56</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Okay Thanks..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer p-3 bg-white">
                                                    <form class="d-flex align-items-center"  action="javascript:void(0);">
                                                        <div class="chat-attagement d-flex">
                                                            <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                                            <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                                        </div>
                                                        <input type="text" class="form-control mr-3" placeholder="Type your message">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chatbox5" role="tabpanel">
                                                <div class="chat-head">
                                                    <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="sidebar-toggle">
                                                                <i class="ri-menu-3-line"></i>
                                                            </div>
                                                            <div class="avatar chat-user-profile m-0 mr-3">
                                                                <img src="../assets/images/user/09.jpg" alt="avatar" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <h5 class="mb-0">Testing Team</h5>
                                                        </div>
                                                        <div class="chat-user-detail-popup scroller">
                                                            <div class="user-profile text-center">
                                                                <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                                <div class="user mb-4">
                                                                    <a class="avatar m-0">
                                                                        <img src="../assets/images/user/09.jpg" alt="avatar">
                                                                    </a>
                                                                    <div class="user-name mt-4">
                                                                        <h4>Peta Saireya</h4>
                                                                    </div>
                                                                    <div class="user-desc">
                                                                        <p>Cape Town, RSA</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="chatuser-detail text-left mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Bni Name:</div>
                                                                        <div class="col-6 col-md-6 text-right">Pet</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Tel:</div>
                                                                        <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                                        <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Gender:</div>
                                                                        <div class="col-6 col-md-6 text-right">Female</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Language:</div>
                                                                        <div class="col-6 col-md-6 text-right">Engliah</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-header-icons d-flex">
                                                            <a href="javascript:void();" class="chat-icon-phone">
                                                                <i class="ri-phone-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-video">
                                                                <i class="ri-vidicon-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <span class="dropdown">
                                                   <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                   <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3">
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                   </span>
                                                   </span>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="chat-content scroller">
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:45</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>How can we help? We're here for you! 😄</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/09.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:48</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Hey John, I am looking for the best admin template.</p>
                                                                <p>Could you please help me to find it out? 🤔</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:49</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Absolutely!</p>
                                                                <p>Soleglance Dashboard is the responsive bootstrap 4 admin template.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/09.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:52</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Looks clean and fresh UI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:53</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Thanks, from ThemeForest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/09.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:54</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>I will purchase it for sure. 👍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:56</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Okay Thanks..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer p-3 bg-white">
                                                    <form class="d-flex align-items-center"  action="javascript:void(0);">
                                                        <div class="chat-attagement d-flex">
                                                            <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                                            <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                                        </div>
                                                        <input type="text" class="form-control mr-3" placeholder="Type your message">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chatbox6" role="tabpanel">
                                                <div class="chat-head">
                                                    <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="sidebar-toggle">
                                                                <i class="ri-menu-3-line"></i>
                                                            </div>
                                                            <div class="avatar chat-user-profile m-0 mr-3">
                                                                <img src="../assets/images/user/10.jpg" alt="avatar" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <h5 class="mb-0">Paul Molive</h5>
                                                        </div>
                                                        <div class="chat-user-detail-popup scroller">
                                                            <div class="user-profile text-center">
                                                                <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                                <div class="user mb-4">
                                                                    <a class="avatar m-0">
                                                                        <img src="../assets/images/user/10.jpg" alt="avatar">
                                                                    </a>
                                                                    <div class="user-name mt-4">
                                                                        <h4>Paul Molive</h4>
                                                                    </div>
                                                                    <div class="user-desc">
                                                                        <p>Cape Town, RSA</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="chatuser-detail text-left mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Bni Name:</div>
                                                                        <div class="col-6 col-md-6 text-right">Pau</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Tel:</div>
                                                                        <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                                        <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Gender:</div>
                                                                        <div class="col-6 col-md-6 text-right">Male</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Language:</div>
                                                                        <div class="col-6 col-md-6 text-right">Engliah</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-header-icons d-flex">
                                                            <a href="javascript:void();" class="chat-icon-phone">
                                                                <i class="ri-phone-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-video">
                                                                <i class="ri-vidicon-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <span class="dropdown">
                                                   <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                   <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4">
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                   </span>
                                                   </span>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="chat-content scroller">
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:45</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>How can we help? We're here for you! 😄</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/10.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:48</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Hey John, I am looking for the best admin template.</p>
                                                                <p>Could you please help me to find it out? 🤔</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:49</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Absolutely!</p>
                                                                <p>Soleglance Dashboard is the responsive bootstrap 4 admin template.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/10.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:52</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Looks clean and fresh UI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:53</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Thanks, from ThemeForest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/10.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:54</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>I will purchase it for sure. 👍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:56</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Okay Thanks..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer p-3 bg-white">
                                                    <form class="d-flex align-items-center"  action="javascript:void(0);">
                                                        <div class="chat-attagement d-flex">
                                                            <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                                            <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                                        </div>
                                                        <input type="text" class="form-control mr-3" placeholder="Type your message">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chatbox7" role="tabpanel">
                                                <div class="chat-head">
                                                    <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="sidebar-toggle">
                                                                <i class="ri-menu-3-line"></i>
                                                            </div>
                                                            <div class="avatar chat-user-profile m-0 mr-3">
                                                                <img src="../assets/images/user/05.jpg" alt="avatar" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <h5 class="mb-0">Paige Turner</h5>
                                                        </div>
                                                        <div class="chat-user-detail-popup scroller">
                                                            <div class="user-profile text-center">
                                                                <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                                <div class="user mb-4">
                                                                    <a class="avatar m-0">
                                                                        <img src="../assets/images/user/05.jpg" alt="avatar">
                                                                    </a>
                                                                    <div class="user-name mt-4">
                                                                        <h4>Paige Turner</h4>
                                                                    </div>
                                                                    <div class="user-desc">
                                                                        <p>Cape Town, RSA</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="chatuser-detail text-left mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Bni Name:</div>
                                                                        <div class="col-6 col-md-6 text-right">Pai</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Tel:</div>
                                                                        <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                                        <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Gender:</div>
                                                                        <div class="col-6 col-md-6 text-right">Feale</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Language:</div>
                                                                        <div class="col-6 col-md-6 text-right">Engliah</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-header-icons d-flex">
                                                            <a href="javascript:void();" class="chat-icon-phone">
                                                                <i class="ri-phone-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-video">
                                                                <i class="ri-vidicon-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <span class="dropdown">
                                                   <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                   <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                   </span>
                                                   </span>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="chat-content scroller">
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:45</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>How can we help? We're here for you! 😄</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/05.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:48</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Hey John, I am looking for the best admin template.</p>
                                                                <p>Could you please help me to find it out? 🤔</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:49</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Absolutely!</p>
                                                                <p>Soleglance Dashboard is the responsive bootstrap 4 admin template.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/05.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:52</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Looks clean and fresh UI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:53</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Thanks, from ThemeForest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/05.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:54</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>I will purchase it for sure. 👍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:56</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Okay Thanks..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer p-3 bg-white">
                                                    <form class="d-flex align-items-center"  action="javascript:void(0);">
                                                        <div class="chat-attagement d-flex">
                                                            <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                                            <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                                        </div>
                                                        <input type="text" class="form-control mr-3" placeholder="Type your message">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chatbox8" role="tabpanel">
                                                <div class="chat-head">
                                                    <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="sidebar-toggle">
                                                                <i class="ri-menu-3-line"></i>
                                                            </div>
                                                            <div class="avatar chat-user-profile m-0 mr-3">
                                                                <img src="../assets/images/user/06.jpg" alt="avatar" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <h5 class="mb-0">Barb Ackue</h5>
                                                        </div>
                                                        <div class="chat-user-detail-popup scroller">
                                                            <div class="user-profile text-center">
                                                                <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                                <div class="user mb-4">
                                                                    <a class="avatar m-0">
                                                                        <img src="../assets/images/user/06.jpg" alt="avatar">
                                                                    </a>
                                                                    <div class="user-name mt-4">
                                                                        <h4>Barb Ackue</h4>
                                                                    </div>
                                                                    <div class="user-desc">
                                                                        <p>Cape Town, RSA</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="chatuser-detail text-left mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Bni Name:</div>
                                                                        <div class="col-6 col-md-6 text-right">Babe</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Tel:</div>
                                                                        <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                                        <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Gender:</div>
                                                                        <div class="col-6 col-md-6 text-right">Female</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Language:</div>
                                                                        <div class="col-6 col-md-6 text-right">Engliah</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-header-icons d-flex">
                                                            <a href="javascript:void();" class="chat-icon-phone">
                                                                <i class="ri-phone-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-video">
                                                                <i class="ri-vidicon-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <span class="dropdown">
                                                   <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                   <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                   </span>
                                                   </span>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="chat-content scroller">
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:45</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>How can we help? We're here for you! 😄</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/06.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:48</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Hey John, I am looking for the best admin template.</p>
                                                                <p>Could you please help me to find it out? 🤔</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:49</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Absolutely!</p>
                                                                <p>Soleglance Dashboard is the responsive bootstrap 4 admin template.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/06.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:52</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Looks clean and fresh UI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:53</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Thanks, from ThemeForest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/06.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:54</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>I will purchase it for sure. 👍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:56</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Okay Thanks..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer p-3 bg-white">
                                                    <form class="d-flex align-items-center"  action="javascript:void(0);">
                                                        <div class="chat-attagement d-flex">
                                                            <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                                            <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                                        </div>
                                                        <input type="text" class="form-control mr-3" placeholder="Type your message">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chatbox9" role="tabpanel">
                                                <div class="chat-head">
                                                    <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="sidebar-toggle">
                                                                <i class="ri-menu-3-line"></i>
                                                            </div>
                                                            <div class="avatar chat-user-profile m-0 mr-3">
                                                                <img src="../assets/images/user/07.jpg" alt="avatar" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <h5 class="mb-0">Maya Didas</h5>
                                                        </div>
                                                        <div class="chat-user-detail-popup scroller">
                                                            <div class="user-profile text-center">
                                                                <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                                <div class="user mb-4">
                                                                    <a class="avatar m-0">
                                                                        <img src="../assets/images/user/07.jpg" alt="avatar">
                                                                    </a>
                                                                    <div class="user-name mt-4">
                                                                        <h4>Maya Didas</h4>
                                                                    </div>
                                                                    <div class="user-desc">
                                                                        <p>Cape Town, RSA</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="chatuser-detail text-left mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Bni Name:</div>
                                                                        <div class="col-6 col-md-6 text-right">Babe</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Tel:</div>
                                                                        <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                                        <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Gender:</div>
                                                                        <div class="col-6 col-md-6 text-right">Male</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Language:</div>
                                                                        <div class="col-6 col-md-6 text-right">Engliah</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-header-icons d-flex">
                                                            <a href="javascript:void();" class="chat-icon-phone">
                                                                <i class="ri-phone-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-video">
                                                                <i class="ri-vidicon-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <span class="dropdown">
                                                   <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                   <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                   </span>
                                                   </span>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="chat-content scroller">
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:45</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>How can we help? We're here for you! 😄</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/07.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:48</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Hey John, I am looking for the best admin template.</p>
                                                                <p>Could you please help me to find it out? 🤔</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:49</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Absolutely!</p>
                                                                <p>Soleglance Dashboard is the responsive bootstrap 4 admin template.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/07.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:52</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Looks clean and fresh UI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:53</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Thanks, from ThemeForest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/07.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:54</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>I will purchase it for sure. 👍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:56</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Okay Thanks..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer p-3 bg-white">
                                                    <form class="d-flex align-items-center"  action="javascript:void(0);">
                                                        <div class="chat-attagement d-flex">
                                                            <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                                            <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                                        </div>
                                                        <input type="text" class="form-control mr-3" placeholder="Type your message">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chatbox10" role="tabpanel">
                                                <div class="chat-head">
                                                    <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="sidebar-toggle">
                                                                <i class="ri-menu-3-line"></i>
                                                            </div>
                                                            <div class="avatar chat-user-profile m-0 mr-3">
                                                                <img src="../assets/images/user/08.jpg" alt="avatar" class="avatar-50 ">
                                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                            </div>
                                                            <h5 class="mb-0">Monty Carlo</h5>
                                                        </div>
                                                        <div class="chat-user-detail-popup scroller">
                                                            <div class="user-profile text-center">
                                                                <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                                <div class="user mb-4">
                                                                    <a class="avatar m-0">
                                                                        <img src="../assets/images/user/08.jpg" alt="avatar">
                                                                    </a>
                                                                    <div class="user-name mt-4">
                                                                        <h4>Monty Carlo</h4>
                                                                    </div>
                                                                    <div class="user-desc">
                                                                        <p>Cape Town, RSA</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="chatuser-detail text-left mt-4">
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Bni Name:</div>
                                                                        <div class="col-6 col-md-6 text-right">Babe</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Tel:</div>
                                                                        <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                                        <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Gender:</div>
                                                                        <div class="col-6 col-md-6 text-right">Female</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-6 col-md-6 title">Language:</div>
                                                                        <div class="col-6 col-md-6 text-right">Engliah</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-header-icons d-flex">
                                                            <a href="javascript:void();" class="chat-icon-phone">
                                                                <i class="ri-phone-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-video">
                                                                <i class="ri-vidicon-line"></i>
                                                            </a>
                                                            <a href="javascript:void();" class="chat-icon-delete">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <span class="dropdown">
                                                   <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                   <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton8">
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                   <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                   </span>
                                                   </span>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="chat-content scroller">
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:45</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>How can we help? We're here for you! 😄</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:48</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Hey John, I am looking for the best admin template.</p>
                                                                <p>Could you please help me to find it out? 🤔</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:49</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Absolutely!</p>
                                                                <p>Soleglance Dashboard is the responsive bootstrap 4 admin template.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:52</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Looks clean and fresh UI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:53</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Thanks, from ThemeForest.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:54</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>I will purchase it for sure. 👍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat">
                                                        <div class="chat-user">
                                                            <a class="avatar m-0">
                                                                <img src="../assets/images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                                            </a>
                                                            <span class="chat-time mt-1">6:56</span>
                                                        </div>
                                                        <div class="chat-detail">
                                                            <div class="chat-message">
                                                                <p>Okay Thanks..</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer p-3 bg-white">
                                                    <form class="d-flex align-items-center"  action="javascript:void(0);">
                                                        <div class="chat-attagement d-flex">
                                                            <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                                            <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                                        </div>
                                                        <input type="text" class="form-control mr-3" placeholder="Type your message">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
