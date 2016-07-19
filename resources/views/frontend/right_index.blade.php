<div class="layoutRight">
    <div class="boxVideo">
        <h3 class="globalTitle">
            Góc Video
        </h3>
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
                                <h3>
                                    <a href="{{url('video/'.$video->slug)}}">{{$video->title}}</a>
                                </h3>
                                <p class="view">{{$video->views}} lượt xem</p>
                              </div>
                        @endforeach
                @endif
            </div>
        @endif
    </div>
</div>