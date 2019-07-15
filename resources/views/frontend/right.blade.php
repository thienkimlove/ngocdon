<div class="layoutRight">
    <div class="boxAdv">
        <a href="#">
            <img src="{{url('frontend/imgs/temp/contact.jpg')}}" alt="">
        </a>
    </div>
    <div class="boxAdv">
        <a href="{{url('phan-phoi')}}">
            <img src="{{url('frontend/imgs/temp/dis.jpg')}}" alt="">
        </a>
    </div>
    @if ($page != 'video')
       <div class="boxVideo">
        <h4 class="globalTitle">
            Góc Video
        </h4>
        @if ($featureVideos->count() > 0)
            <div class="listVideo">
                @if ($firstVideo = $featureVideos->shift())
                    <div class="videoScreen">
                        <iframe width="100%" height="200" src="{{$firstVideo->url}}" frameborder="0" allowfullscreen></iframe>
                    </div>
                @endif
                @if ($featureVideos->count() > 0)
                    @foreach ($featureVideos as $video)
                        <div class="item">
                            <a href="{{url('video/'.$video->slug)}}" class="thumb">
                                <img src="{{url('img/cache/105x62', $video->image)}}" alt="">
                            </a>
                            <h4>
                                <a href="{{url('video/'.$video->slug)}}">{{$video->title}}</a>
                            </h4>
                            <p class="view">{{$video->views}} lượt xem</p>
                        </div>
                    @endforeach
                @endif
            </div>
        @endif
    </div>
    @endif
    <div class="boxSocial">
        <div class="Social">
<div class="fb-page" data-href="https://www.facebook.com/D&#x1b0;&#x1ee1;ng-Ng&#x1ecd;c-&#x110;&#x1a1;n-1332775490068114" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/D&#x1b0;&#x1ee1;ng-Ng&#x1ecd;c-&#x110;&#x1a1;n-1332775490068114" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/D&#x1b0;&#x1ee1;ng-Ng&#x1ecd;c-&#x110;&#x1a1;n-1332775490068114">Dưỡng Ngọc Đơn</a></blockquote></div>
        </div>
    </div>
    @if ($rightNews && !in_array($page, ['lien-he', 'phan-phoi']))
        <div class="boxNews" id="sidebar">
        <h3 class="globalTitle">
            Tin nổi bật
        </h3>
        <div class="listNews">
            @foreach ($rightNews as $post)
                <div class="item clearFix">
                    <a href="{{url($post->slug.'.html')}}" class="thumb">
                        <img src="{{url('img/cache/105x62', $post->image)}}" alt="">
                    </a>
                    <h4>
                        <a href="{{url($post->slug.'.html')}}">{{$post->title}}</a>
                    </h4>
                </div>
            @endforeach
        </div>
    </div>
    @endif
</div>