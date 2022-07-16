@extends('app')
@section('title','Партіот.ua')
@section('content')
    <section>
        <div class="container">
            <img class="general_photo" src="img/GENERAL.png" alt="" style="width:100%">
        </div>
    </section>
    <section class="fond">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="flex flex-column justify-content-between">
                        <div class="general_text_fond">
                            @lang('main.for_fond')
                        </div>
                        <div class="text_fond">
                            {{$info_fond->__('text_general')}}
                        </div>
                        <a href="{{route('news')}}" class="detail_fond hover_tin">
                            @lang('main.more')
                        </a>
                    </div>

                </div>
                <div class=" col-lg-6 col-xl-5 flex align-items-center">
                    <img class="img_fond" src="img/Fond.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="fond_phone">
        <div class="container">
            <div class="flex flex-column justify-content-between align-items-center">
                <div class="general_text_fond">
                    @lang('main.for_fond')
                </div>
                <div class="text_fond">
                    {{$info_fond->__('text_general')}}
                </div>

                <img class="img_fond" src="{{$info_fond->photo_2}}" alt="" style="margin: 30px 0;">


                <a href="{{route('fond')}}" class="detail_fond hover_tin">
                    @lang('main.more')
                </a>
            </div>


        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 flex flex-column justify-content-between">
                    <img style="width:100%" src="{{$news[0]->photos[0]->photo}}" alt="">
                    <a href="{{route('new', $news[0]->id)}}" class="general_text_new1 hover_blue_yellow">{{$news[0]->__('name')}}

                    </a>
                    <div class="text_new1">{{$news[0]->__('description')}}

                    </div>
                    <div class="date_new">@if(App::getLocale()==='uk')
                            {{str_replace($month_en, $month_ukr,DateTime::createFromFormat('Y-m-d H:i:s', $news[0]->date)->format('d F Y, H:i '))}}
                        @else
                            {{DateTime::createFromFormat('Y-m-d H:i:s', $news[0]->date)->format('d F Y, H:i ')}}

                        @endif

                    </div>

                </div>
                <div class="hr_new2 hr_news_medium">
                    <hr>
                </div>
                <div class="col-md-6 col-lg-4 flex flex-column justify-content-between">
                    <div>
                        @foreach($news->skip(1) as $new)
                        <div class="new2">
                            <a href="{{route('new', $new->id)}}" class="text_new2 hover_blue_yellow">{{$new->__('name')}}

                            </a>
                            <div class="date_new">@if(App::getLocale()==='uk')
                                    {{str_replace($month_en, $month_ukr,DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i '))}}
                                @else
                                    {{DateTime::createFromFormat('Y-m-d H:i:s', $new->date)->format('d F Y, H:i ')}}

                                @endif
                            </div>
                        </div>
                        <div class="hr_new2">
                            <hr>
                        </div>
{{--                        <div class="new2">--}}
{{--                            <a href="" class="text_new2 hover_blue_yellow">--}}
{{--                                Війна в Україні як урок для США. Огляд західної воєнної аналітики--}}
{{--                            </a>--}}
{{--                            <div class="date_new">--}}
{{--                                24 червня 2022, 08:39--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                        <div class="hr_new2">--}}
{{--                            <hr>--}}
{{--                        </div>--}}
{{--                        <div class="new2">--}}
{{--                            <a href="" class="text_new2 hover_blue_yellow">--}}
{{--                                Війна в Україні як урок для США. Огляд західної воєнної аналітики--}}
{{--                            </a>--}}
{{--                            <div class="date_new">--}}
{{--                                24 червня 2022, 08:39--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="hr_new2">--}}
{{--                            <hr>--}}
{{--                        </div>--}}
{{--                        <div class="new2">--}}
{{--                            <a href="" class="text_new2 hover_blue_yellow">--}}
{{--                                Війна в Україні як урок для США. Огляд західної воєнної аналітики--}}
{{--                            </a>--}}
{{--                            <div class="date_new">--}}
{{--                                24 червня 2022, 08:39--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="hr_new2">--}}
{{--                            <hr>--}}
{{--                        </div>--}}
                        @endforeach
                    </div>
                    <a href="{{route('news')}}" class="detail_news hover_tin">
                        @lang('main.more')
                    </a>

                </div>
            </div>
        </div>
    </section>
    <section class="progress">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3 change_photo change_photo_1">

                    <div class="text_change_photo flex flex-column justify-content-between ">

                        <div>
                            <div class="general_progress">
                                30 000+
                            </div>
                            <div class="add_progress">
                                грн
                            </div>
                        </div>
                        <br>
                        <div class="text_progress">
                            зібрано на потреби армії з початку війни
                        </div>
                    </div>


                </div>
                <div class="col-6 col-lg-3 flex flex-column justify-content-between change_photo change_photo_2">
                    <div>
                        <div class="general_progress">
                            20 500+
                        </div>
                        <div class="add_progress">
                            засобів захисту для військових
                        </div>
                    </div>
                    <br>
                    <div class="text_progress">
                        придбано від початку повномасшабного вторгнення
                    </div>

                </div>
                <div class="col-6 col-lg-3 flex flex-column justify-content-between change_photo change_photo_3">
                    <div>
                        <div class="general_progress">
                            500+
                        </div>
                        <div class="add_progress">
                            одиниць тепловійзійної оптики
                        </div>
                    </div>
                    <br>
                    <div class="text_progress">
                        передано військовим у найдальніші куточки
                    </div>

                </div>
                <div class="col-6 col-lg-3 flex flex-column justify-content-between change_photo change_photo_4">
                    <div>
                        <div class="general_progress">
                            10+
                        </div>
                        <div class="add_progress">
                            автомобілів та  безпілотних систем
                        </div>
                    </div>
                    <br>
                    <div class="text_progress">
                        придбано то доставлено українським військовим
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
