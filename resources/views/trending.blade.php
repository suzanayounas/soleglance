@extends('layouts.main')

@section('content')
    <div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
           <div class="col-lg-6">
              <div class="card card-block card-stretch card-height shadow-none blog-grid">
                 <div class="card-body p-0">
                    <div class="row align-items-center">
                       <div class="col-lg-6">
                          <div class="image-block mt-3">
                             <img src="{{asset('images/blog/b1.jpg')}}" class="img-fluid rounded w-100" alt="blog-img"  loading="lazy">
                          </div>
                       </div>
                       <div class="col-lg-6">
                          <div class="blog-description shadow-none p-3 text-center">
                             <div class="date mb-1"><a href="#" tabindex="-1">4 Month ago</a></div>
                             <h5 class="mb-2">Containing coronavirus spread comes</h5>
                             <div class="group-smile mt-4 d-flex flex-wrap align-items-center justify-content-between position-right-side">
                                <div class="iq-media-group">
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/01.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/02.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/03.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/04.png')}}" alt=""  loading="lazy">
                                   </a>
                                </div>
                                <div class="comment d-flex align-items-center"><i class="material-symbols-outlined me-2 md-18">chat_bubble_outline</i>7 comments</div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-6">
              <div class="card card-transparent card-block card-stretch card-height blog-grid blog-single">
                 <div class="card-body p-0 position-relative">
                    <div class="image-block">
                       <img src="{{asset('images/blog/03.jpg')}}" class="img-fluid rounded w-100" alt="blog-img">
                    </div>
                    <div class="blog-description p-3">
                       <div class="date"><a href="#" tabindex="-1">3 Month ago</a></div>
                       <h5 class="mb-2">Containing coronavirus spread comes</h5>
                       <div class="d-flex align-items-center justify-content-between position-right-side">
                          <div class="like d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18">thumb_up</i>20 like</div>
                          <div class="comment d-flex align-items-center"><i class="material-symbols-outlined me-2 md-18">chat_bubble_outline</i>351 comments</div>
                          <div class="share d-flex align-items-center"><span class="material-symbols-outlined pe-2 md-18">share</span>share</div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-6">
              <div class="card card-transparent card-block card-stretch card-height blog-grid blog-single">
                 <div class="card-body p-0 position-relative">
                    <div class="image-block">
                       <img src="{{asset('images/blog/04.jpg')}}" class="img-fluid rounded w-100" alt="blog-img"  loading="lazy">
                    </div>
                    <div class="blog-description p-3">
                       <div class="date"><a href="#" tabindex="-1">3 Month ago</a></div>
                       <h5 class="mb-2">Containing coronavirus spread comes</h5>
                       <div class="d-flex align-items-center justify-content-between position-right-side">
                          <div class="like d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18">thumb_up</i>20 like</div>
                          <div class="comment d-flex align-items-center"><i class="material-symbols-outlined me-2 md-18">chat_bubble_outline</i>351 comments</div>
                          <div class="share d-flex align-items-center"><span class="material-symbols-outlined pe-2 md-18">share</span>share</div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-6">
              <div class="card card-block card-stretch card-height shadow-none blog-grid">
                 <div class="card-body p-0">
                    <div class="row align-items-center">
                       <div class="col-lg-6">
                          <div class="blog-description shadow-none p-3 text-center">
                             <div class="date mb-1"><a href="#" tabindex="-1">4 Month ago</a></div>
                             <h5 class="mb-2">Containing coronavirus spread comes</h5>
                             <div class="group-smile mt-4 d-flex flex-wrap align-items-center justify-content-between position-right-side">
                                <div class="iq-media-group">
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/01.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/02.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/03.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/07.png')}}" alt=""  loading="lazy">
                                   </a>
                                </div>
                          <div class="comment d-flex align-items-center"><i class="material-symbols-outlined me-2 md-18">chat_bubble_outline</i>7 comments</div>
                             </div>
                          </div>
                       </div>
                       <div class="col-lg-6">
                          <div class="image-block mt-3">
                             <img src="{{asset('images/blog/b2.jpg')}}" class="img-fluid rounded w-100" alt="blog-img">
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-6">
              <div class="card card-block card-stretch card-height shadow-none blog-grid">
                 <div class="card-body p-0">
                    <div class="row align-items-center">
                       <div class="col-lg-6">
                          <div class="image-block mt-3">
                             <img src="{{asset('images/blog/b3.jpg')}}" class="img-fluid rounded w-100" alt="blog-img"  loading="lazy"> 
                          </div>
                       </div>
                       <div class="col-lg-6">
                          <div class="blog-description shadow-none p-3 text-center">
                             <div class="date mb-1"><a href="#" tabindex="-1">4 Month ago</a></div>
                             <h5 class="mb-2">Containing coronavirus spread comes</h5>
                             <div class="group-smile mt-4 d-flex flex-wrap align-items-center justify-content-between position-right-side">
                                <div class="iq-media-group">
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/01.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/02.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/03.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/07.png')}}" alt=""  loading="lazy">
                                   </a>
                                </div>
                          <div class="comment d-flex align-items-center"><i class="material-symbols-outlined me-2 md-18">chat_bubble_outline</i>7 comments</div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-6">
              <div class="card card-transparent card-block card-stretch card-height blog-grid blog-single">
                 <div class="card-body p-0 position-relative">
                    <div class="image-block">
                       <img src="{{asset('images/blog/01.jpg')}}" class="img-fluid rounded w-100" alt="blog-img">
                    </div>
                    <div class="blog-description p-3">
                       <div class="date"><a href="#" tabindex="-1">3 Month ago</a></div>
                       <h5 class="mb-2">Containing coronavirus spread comes</h5>
                       <div class="d-flex align-items-center justify-content-between position-right-side">
                          <div class="like d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18">thumb_up</i>20 like</div>
                          <div class="comment d-flex align-items-center"><i class="material-symbols-outlined me-2 md-18">chat_bubble_outline</i>351 comments</div>
                          <div class="share d-flex align-items-center"><span class="material-symbols-outlined pe-2 md-18">share</span>share</div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-6">
              <div class="card card-transparent card-block card-stretch card-height blog-grid blog-single">
                 <div class="card-body p-0 position-relative">
                    <div class="image-block">
                       <img src="{{asset('images/blog/03.jpg')}}" class="img-fluid rounded w-100" alt="blog-img"  loading="lazy">
                    </div>
                    <div class="blog-description p-3">
                       <div class="date"><a href="#" tabindex="-1">3 Month ago</a></div>
                       <h5 class="mb-2">Containing coronavirus spread comes</h5>
                       <div class="d-flex align-items-center justify-content-between position-right-side">
                          <div class="like d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18">thumb_up</i>20 like</div>
                          <div class="comment d-flex align-items-center"><i class="material-symbols-outlined me-2 md-18">chat_bubble_outline</i>351 comments</div>
                          <div class="share d-flex align-items-center"><span class="material-symbols-outlined pe-2 md-18">share</span>share</div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-6">
              <div class="card card-block card-stretch card-height shadow-none blog-grid">
                 <div class="card-body p-0">
                    <div class="row align-items-center">
                       <div class="col-lg-6">
                          <div class="blog-description shadow-none p-3 text-center">
                             <div class="date mb-1"><a href="#" tabindex="-1">4 Month ago</a></div>
                             <h5 class="mb-2">Containing coronavirus spread comes</h5>
                             <div class="group-smile mt-4 d-flex flex-wrap align-items-center justify-content-between position-right-side">
                                <div class="iq-media-group">
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/01.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/02.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/03.png')}}" alt=""  loading="lazy">
                                   </a>
                                   <a href="#" class="iq-media">
                                   <img class="img-fluid rounded-circle" src="{{asset('images/icon/07.png')}}" alt="" loading="lazy">
                                   </a>
                                </div>
                          <div class="comment d-flex align-items-center"><i class="material-symbols-outlined me-2 md-18">chat_bubble_outline</i>7 comments</div>
                             </div>
                          </div>
                       </div>
                       <div class="col-lg-6">
                          <div class="image-block mt-3">
                             <img src="{{asset('images/blog/b4.jpg')}}" class="img-fluid rounded w-100" alt="blog-img" loading="lazy">
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