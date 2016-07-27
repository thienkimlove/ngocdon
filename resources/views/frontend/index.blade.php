@extends('frontend')

@section('content')
    <section class="boxFeature">
        <div class="container">
            @foreach ($featurePosts as $post)
                <article class="item{{ $post->class  }}">
                    <a href="{{url($post->slug.'.html')}}" class="thumb" title="{{$post->title}}">
                        <img src="{{url('img/cache/285x150', $post->image)}}" alt="{{$post->title}}" width="285" height="150">
                    </a>
                </article>
            @endforeach
        </div>
    </section>
    <section class="boxTabs">
        <div class="container">
            <div id="horizontalTab">
                <ul class="navTabs clearFix">
                    @foreach ($topIndexCategory as $k => $category)
                    <li>
                        <a href="#tab0{{$k+1}}" title="{{$category->name}}">{{$category->name}}</a>
                    </li>
                    @endforeach
                </ul>
                @foreach ($topIndexCategory as $k => $category)
                    <article class="tabContent clearFix" id="tab0{{$k+1}}">
                        @foreach ($category->indexPosts() as $indexPost)
                          <div class="item clearFix">
                            <a href="{{url($indexPost->slug.'.html')}}" class="thumb">
                                <img src="{{url('img/cache/320x225', $indexPost->image)}}" alt="{{$indexPost->title}}" width="320" height="225">
                            </a>
                            <h3>
                                <a href="{{url($indexPost->slug.'.html')}}">{{$indexPost->title}}</a>
                            </h3>
                            <p>
                                {{$indexPost->desc}}
                            </p>
                        </div>
                        @endforeach
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /endboxTabs -->
    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <div class="boxHistory">
                    <div class="globalTitle">
                        Câu chuyện thành công
                    </div>
                    <div class="data owl-carousel" id="slideHistory">
                        @foreach ($secondIndexCategory->indexPosts as $post)
                           <div class="item">
                            <div class="block">
                                <a href="{{url($post->slug.'.html')}}" class="thumbHistory">
                                    <img src="{{url('img/cache/340x225', $post->image)}}" alt="{{$post->title}}" width="340" height="225">
                                </a>
                                <h3>
                                    <a href="{{url($post->slug.'.html')}}">
                                        {{$post->title}}
                                    </a>
                                </h3>
                                <p class="authorPost">
                                    {{$post->author}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <ul class="listAdv clearFix">
                    <li>
                        <a href="{{url('phan-phoi')}}">
                            <img src="{{url('frontend/imgs/temp/contact.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="{{url('lien-he')}}">
                            <img src="{{url('frontend/imgs/temp/dis.jpg')}}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            @include('frontend.right_index')
        </div>
    </section>
@endsection
