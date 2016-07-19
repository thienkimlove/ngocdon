@extends('frontend')

@section('content')

    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li>
                        <a href="{{url('/')}}">Trang chủ</a>
                    </li>
                    <li><a href="{{url('cau-hoi-thuong-gap')}}">Hỏi đáp</a></li>
                    <li class="active">Hỏi đáp chi tiết</li>
                </ul>
                <div class="boxQuestion">
                    <div class="headQuestion clearFix">
                        <a href="{{url('cau-hoi-thuong-gap', $question->slug)}}" class="thumb">
                            <img src="{{url('img/cache/200x200', $question->image)}}" alt="">
                        </a>
                        <h3>
                            {{$question->title}}
                        </h3>
                        <p>
                            Độc giả có thể gửi câu hỏi trực tiếp vào bảng đặt câu hỏi dưới đây, hoặc gửi trực tiếp vào Email:
                            <a href="mailto:tuvansuckhoe.bsdinh@gmail.com">tuvansuckhoe.bsdinh@gmail.com</a>
                            <a href="mailto:tuvanbigbb@gmail.com">tuvanbigbb@gmail.com</a>
                        </p>
                    </div>
                    <!-- //listQuestion -->
                    <article class="item">
                        <h3 class="title-faq"><span>?</span>{{$question->title}}</h3>
                        <div class="content">
                            <p>
                                <span class="question">Câu hỏi:</span>
                                <span>{{$question->question}}</span>
                            </p>
                            <div class="viewDetail clearFix">
                                <div class="date">
                                  <span class="datePost">
                                    {{$question->updated_at->format('D/m/Y')}}
                                  </span>
                                   <span>
                                    {{$question->views}} lượt xem
                                  </span>
                                </div>
                            </div>
                            <p>
                                <h3 class="title-faq">Trả lời</h3>
                                <span>{{$question->answer}}</span>
                            </p>
                        </div>
                    </article>
                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>

@endsection