@extends('frontend')

@section('content')
    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li>
                        <a href="{{url('/')}}">Trang chủ</a>
                    </li>
                    <li class="active">{{$category->name}}</li>
                </ul>
                @if ($featurePost)
                    <div class="boxDetail">
                        <div class="topNews">
                            <p>
                                <img src="{{url('img/cache/656x270', $featurePost->image)}}" alt="">
                            </p>
                            <h2 class="titlePost">
                               {{$featurePost->title}}
                            </h2>
                            <p>
                                {{$featurePost->desc}}
                            </p>
                            <div class="viewDetail clearFix">
                                <div class="date">
                                    <span class="datePost">{{$featurePost->updated_at->format('D/m/Y')}}</span>
                                    <span> {{$featurePost->views}} lượt xem</span>
                                </div>
                                <a href="{{url($featurePost->slug.'.html')}}" class="viewMore">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="boxNews">
                    <div class="listNews">
                        @foreach ($posts as $post)
                          <div class="item clearFix">
                            <a href="{{url($post->slug.'.html')}}" class="thumb">
                                <img src="{{url('img/cache/275x200', $post->image)}}" alt="">
                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}">{{$post->title}}</a>
                            </h3>
                            <p>{{$post->desc}}</p>
                            <div class="viewDetail clearFix">
                                <div class="date">
                                    <span class="datePost">{{$post->updated_at->format('D/m/Y')}}</span>
                                    <span> {{$post->views}} lượt xem</span>
                                </div>
                                <a href="{{url($post->slug.'.html')}}" class="viewMore">Xem thêm</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="boxPaging">
                    @include('pagination.default', ['paginate' => $posts])
                </div><!--//news-list-->
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection