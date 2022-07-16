@extends('app')
@section('title','Партіот.ua')
@section('content')
    <section class="way">
        <div class="container">
            <div class="flex">
                <a href="{{route('general')}}" class="text_way hover_line">
                    {{__('main.general')}}
                </a>
                <i class="fa-solid fa-arrow-right-long icon_way"></i>
                <a href="{{route('news')}}" class="text_way hover_line">
                    {{__('main.news_foot')}}

                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="flex flex-column align-items-center">
                <div class="name">
                    @lang('main.news')
                </div>
                <hr class="hr_name">
            </div>

        </div>
    </section>
    <section class="all_news">
        <div class="container">
            <div class="news_desktop">
                <div class="row ">
                    @foreach($news as $key=>$new)
                        @if($key%2==0)

                    <div class="col-md-6 col-lg-5 flex align-items-center" style="margin-bottom: 70px">
                        <img src="{{$new->photos[0]->photo}}" alt="" style="width:100%">
                    </div>
                    <div class="col-md-6 col-lg-7 flex flex-column justify-content-between" style="margin-bottom: 70px">
                        <a href="{{route('new', $new->id)}}" class="general_text_news text_align_left">{{$new->__('name')}}

                        </a>
                        <div class="text_news text_align_left">{{$new->__('description')}}

                        </div>
                        <div class="date_news text_align_left">@if(App::getLocale()==='uk')
                                {{str_replace($month_en, $month_ukr,DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i '))}}
                            @else
                                {{DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i ')}}

                            @endif


                        </div>
                    </div>
                    <hr class="hr_news">
                        @else
                    <div class="col-md-6 col-lg-7 flex flex-column justify-content-between" style="margin-bottom: 70px">
                        <a href="{{route('new', $new->id)}}" class="general_text_news text_align_right">{{$new->__('name')}}

                        </a>
                        <div class="text_news text_align_right">{{$new->__('description')}}

                        </div>
                        <div class="date_news text_align_right">@if(App::getLocale()==='uk')
                                {{str_replace($month_en, $month_ukr,DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i '))}}
                            @else
                                {{DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i ')}}

                            @endif


                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 flex align-items-center" style="margin-bottom: 70px">
                        <img src="{{$new->photos[0]->photo}}" alt="" style="width:100%">
                    </div>

                    <hr class="hr_news">
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="news_medium">
                <div class="row">
                    @foreach($news as $key=>$new)
                        @if($key%2==0)
                    <div class="col-md-5">
                        <img src="{{$new->photos[0]->photo}}" alt="" style="width:100%">

                    </div>
                    <div class="col-md-7">
                        <a href="{{route('new', $new->id)}}" class="general_text_news text_align_left">
                            {{$new->__('name')}}
                        </a>
                    </div>
                    <div class="col-md-12">
                        <div class="text_news ">
                            {{$new->__('description')}}
                        </div>
                        <div class="date_news ">
                            @if(App::getLocale()==='uk')
                                {{str_replace($month_en, $month_ukr,DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i '))}}
                            @else
                                {{DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i ')}}

                            @endif

                        </div>

                    </div>
                    <hr class="hr_news">
                        @else

                    <div class="col-md-7 text_align_right">
                        <a href="{{route('new', $new->id)}}" class="general_text_news text_align_right">
                            {{$new->__('name')}}
                        </a>
                    </div>
                    <div class="col-md-5">
                        <img src="{{$new->photos[0]->photo}}" alt="" style="width:100%">

                    </div>
                    <div class="col-md-12">
                        <div class="text_news text_align_right">
                            {{$new->__('description')}}

                        </div>
                        <div class="date_news text_align_right">
                            @if(App::getLocale()==='uk')
                                {{str_replace($month_en, $month_ukr,DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i '))}}
                            @else
                                {{DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i ')}}

                            @endif
                        </div>

                    </div>
                            <hr class="hr_news">
                        @endif
                    @endforeach


                </div>
            </div>
            <div class="news_phone row">
                @foreach($news as $new)
                <div class="col-12 flex align-items-center" style="margin-bottom: 30px">
                    <img src="{{$new->photos[0]->photo}}" alt="" style="width:100%">
                </div>

                <div class="col-12 flex flex-column justify-content-between">
                    <a href="{{route('new', $new->id)}}" class="general_text_news text_align_left_new">
                        {{$new->__('name')}}
                    </a>
                    <div class="text_news text_align_left_new">
                       {{$new->__('description')}}
                    </div>
                    <div class="date_news text_align_left_new">
                        @if(App::getLocale()==='uk')
                            {{str_replace($month_en, $month_ukr,DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i '))}}
                        @else
                            {{DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i ')}}

                        @endif
                    </div>
                </div>
                    <hr class="hr_news"/>
                @endforeach
            </div>

        </div>
    </section>
    <section>
        <div class="container flex  justify-content-center">
            @for($c=1; $c<=round(count($all_news)/2); $c++)
            <a href="./news?page={{$c}}" class="pages">
                {{$c}}
            </a>
            @endfor
{{--            <a href="./news?page=2" class="pages">--}}
{{--                2--}}
{{--            </a>--}}
{{--            <a href="./news?page=3" class="pages">--}}
{{--                3--}}
{{--            </a>--}}
{{--            <a href="./news?page=4" class="pages">--}}
{{--                4--}}
{{--            </a>--}}

        </div>
    </section>
@endsection
