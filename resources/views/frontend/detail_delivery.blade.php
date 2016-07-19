@extends('frontend')

@section('content')
    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li>
                        <a href="{{url('/')}}">Trang chủ</a>
                    </li>
                    <li><a href="{{url('phan-phoi')}}">Phân phối</a></li>
                    <li class="active">Phân phối chi tiết</li>
                </ul>
                <div class="boxDetail">
                    <h2 class="titlePost">
                        {{config('delivery')['city'][$delivery->city]}}
                    </h2>
                    {!! $delivery->content !!}
                    @foreach ($middleIndexBanner as $banner)
                        <div class="boxAdv">
                            <a href="{{$banner->url}}">
                                <img src="{{url('files', $banner->image)}}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>
@endsection
