<header class="header">
    <div class="container">
        <div class="panelTop">
            {!! Form::open(array('url' => 'search', 'method' => 'get')) !!}
                <div class="boxSearch">
                    <input type="text" name="q" placeholder="Nội dung tìm kiếm">
                </div>
            {!! Form::close() !!}

            <ul class="navSocial pc">
                <li>
                    <a href="#" class="fb">Facebook</a>
                </li>
                <li><a href="#" class="yu">Youtube</a></li>
            </ul>
        </div>
        <a href="#" title="Menu" class="sp btnMenu" id="btnMenu">Menu</a>
    </div>
    <div class="headerNav">
        <div class="navGlobal">
            <div class="container">
                <ul id="navGlobal" class="navGlobal pc clearFix">
                    <li><a href="{{url('/')}}" class="{{($page == 'index') ? 'current' : ''}}">Trang chủ</a></li>

                    @foreach ($headerCategories as $k => $headerCategory)
                        <li>
                            <a class="{{(isset($page) && ($page == $headerCategory->slug || in_array($page, $headerCategory->subCategories->lists('slug')->all()))) ? 'active' : ''}}" href="{{url($headerCategory->slug)}}">{{$headerCategory->name}}</a>
                            @if ($headerCategory->subCategories->count() > 0)
                                <ul class="hasSub">
                                    @foreach ($headerCategory->subCategories as $childCategory)
                                        <li><a class="{{(isset($page) && $page == $childCategory->slug) ? 'current' : ''}}" href="{{url($childCategory->slug)}}">{{$childCategory->name}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                        @if ($k == 0)
                            <li>
                                <a class="{{(isset($page) && $page == 'product') ? 'current' : ''}}" href="{{url('product')}}" title="">Sản phẩm</a>
                            </li>
                        @endif
                    @endforeach

                    <li>
                        <a class="{{(isset($page) && $page == 'video') ? 'current' : ''}}" href="{{url('video')}}" title="">Video</a>
                    </li>
                    <li>
                        <a class="{{(isset($page) && $page == 'phan-phoi') ? 'current' : ''}}" href="{{url('phan-phoi')}}" title="">Điểm bán</a>
                    </li>
                    <li>
                        <a class="{{(isset($page) && $page == 'lien-he') ? 'current' : ''}}" href="{{url('lien-he')}}" title="">Liên hệ</a>
                    </li>
                </ul>
                <h1>
                    <a href="{{url('/')}}" class="logo" title="logo">
                        <img src="{{url('frontend/imgs/logo.png')}}" alt="Logo" width="211" height="67">
                    </a>
                </h1>
            </div>
        </div>
    </div>
</header>

<section class="boxBanner">
    <div class="boxSlider">
        <div class="owl-carousel" id="slideHomepage">
            @foreach ($headerIndexBanners as $banner)
                <div class="item">
                    <a class="thumb" href="{{$banner->url}}" title="">
                        <img src="{{url('files/'.$banner->image)}}"/>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>