@extends('frontend')

@section('content')

    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li>
                        <a href="{{url('/')}}">Trang chủ</a>
                    </li>
                    <li class="active">Phân phối</li>
                </ul>

                @foreach ($totalDeliveries as $area => $cities)
                    <div class="title01">{{$area}}</div>
                    <div class="data">
                        @foreach ($cities->chunk(6) as $partCities)
                            <article class="item">
                                @foreach ($partCities as $city)
                                    <a href="{{url('phan-phoi/'. $city->id)}}" title="">{{config('delivery')['city'][$city->city]}}</a>
                                @endforeach
                            </article>
                        @endforeach
                    </div>
                @endforeach


                <div class="boxDist">
                    @foreach ($totalDeliveries as $area => $cities)
                    <div class="data clearFix">
                        <h3><span>{{$area}}</span></h3>
                        @foreach ($cities->chunk(6) as $partCities)
                          <div class="item">
                              @foreach ($partCities as $city)
                                  <a href="{{url('phan-phoi/'. $city->id)}}" title="">{{config('delivery')['city'][$city->city]}}</a>
                              @endforeach
                        </div>
                        @endforeach
                    </div>
                    @endforeach

                </div>
            </div>
           @include('frontend.right')
        </div>
    </section>

@endsection