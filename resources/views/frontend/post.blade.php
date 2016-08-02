@extends('frontend')

@section('content')

    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li>
                        <a href="{{url('/')}}">Trang chủ</a>
                    </li>
                    <li><a href="{{url($post->category->slug)}}">{{$post->category->name}}</a></li>
                    <li class="active">Tin tức chi tiết</li>
                </ul>
                <div class="boxDetail">
                    <h2 class="titlePost">
                        {{$post->title}}
                    </h2>

                    {!! $post->content !!}
                </div>
                <!-- //listButton -->
                <ul class="listButton clearFix">
                    <li class="ilocal"><a href="{{url('phan-phoi')}}">Xem điểm bán Ngọc Đơn Slim</a></li>
                    <li class="icall"><a href="{{url('lien-he')}}">1900 6482 - 0912 571 190</a></li>
                </ul>
                @foreach ($middleIndexBanner as $banner)
                    <div class="boxAdv">
                        <a href="{{$banner->url}}">
                            <img src="{{url('files', $banner->image)}}" alt="">
                        </a>
                    </div>
                @endforeach
                <!-- //boxOther -->
                <div class="boxOther">
                    <h3 class="titleOther">
                        <a href="#">Tin liên quan</a>
                    </h3>
                    <ul class="listOther" id="listOrther">
                        @foreach ($post->related_posts as $rPost)
                            <li><a href="{{url($rPost->slug.'.html')}}">{{$rPost->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- //boxTag -->
                <div class="boxTags">
                    <span>Từ khóa</span>
                    @foreach ($post->tags as $tag)
                        <a href="{{url('tag/'.$tag->slug)}}" title="">{{$tag->name}}</a>
                    @endforeach
                </div>
                <!-- //boxComment -->
                <div class="boxComment">
                    <h3 class="titleComment">
                        Bình luận
                    </h3>
                    <div class="fb-comments" data-href="{{url($post->slug.'.html')}}" data-numposts="5"></div>
                </div>

                <div class="box-product">
                    <h3 class="title">Bài liên quan</h3>
                    <div class="owl-carousel" id="slide-product">
                        @foreach ($latestNews as $rPost)
                            <div class="item">
                                <a href="{{url($rPost->slug.'.html')}}" title="">
                                    <img src="{{url('img/cache/218x128/'.$rPost->image)}}" width="218" height="128" alt=""/>
                                </a>
                                <h3>
                                    <a href="{{url($rPost->slug.'.html')}}" title="">{{$rPost->title}}</a>
                                </h3>
                            </div>
                        @endforeach
                    </div>
                </div><!--//box-product-->

            </div>
           @include('frontend.right')
        </div>
    </section>

@endsection