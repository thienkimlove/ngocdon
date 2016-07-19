@extends('frontend')

@section('content')
    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li>
                        <a href="{{url('/')}}">Trang chủ</a>
                    </li>
                    <li class="active">Videos</li>
                </ul>
                <div class="boxMedia">
                    <h3 class="globalTitle">
                        <a href="{{url('video')}}">Video</a>
                    </h3>
                    <div class="hotVideo clearFix">
                        <div class="thumbVideo">
                            <iframe width="100%" height="315" src="{{$mainVideo->url}}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    @foreach ($videos as $video)
                        <article class="item">
                            <a class="thumb" href="" title="">
                                <img src="{{url('img/cache/303x130', $video->image)}}" width="303" height="130" alt=""/>
                            </a>
                            <h3>
                                <a href="{{url('video', $video->slug)}}" title="">{{$video->title}}</a>
                            </h3>
                            <span class="view">{{$video->views}} lượt xem</span>
                        </article>
                    @endforeach
                    <!-- /paging -->
                    <div class="boxPaging">
                        @include('pagination.default', ['paginate' => $videos])
                    </div><!--//news-list-->
                    <div class="clear"></div>
                </div><!--//box-media-->
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection