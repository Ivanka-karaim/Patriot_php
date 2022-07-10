@extends('app')
@section('title','Партіот.ua')
@section('content')
    <section class="way">
        <div class="container">
            <div class="flex">
                <a href="/" class="text_way hover_line">
                    Головна
                </a>
                <i class="fa-solid fa-arrow-right-long icon_way"></i>
                <a href="/" class="text_way hover_line">
                    Новини

                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="flex flex-column align-items-center">
                <div class="name">
                    НОВИНИ
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
                        <a href="{{route('new', $new->id)}}" class="general_text_news text_align_left">{{$new->name}}

                        </a>
                        <div class="text_news text_align_left">{{$new->description}}

                        </div>
                        <div class="date_news text_align_left">{{$new->date}}

                        </div>
                    </div>
                    <hr class="hr_news">
                        @else
                    <div class="col-md-6 col-lg-7 flex flex-column justify-content-between" style="margin-bottom: 70px">
                        <a href="{{route('new', $new->id)}}" class="general_text_news text_align_right">{{$new->name}}

                        </a>
                        <div class="text_news text_align_right">{{$new->description}}

                        </div>
                        <div class="date_news text_align_right">{{$new->date}}

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
                    <div class="col-md-5">
                        <img src="img/Photo_new.png" alt="" style="width:100%">

                    </div>
                    <div class="col-md-7">
                        <a href="/" class="general_text_news text_align_left">
                            ЯК ДІЯТИ В УМОВАХ ЗАТЯЖНОЇ ВІЙНИ РФ З УКРАЇНОЮ. ОГЛЯД ЗАХІДНОЇ АНАЛІТИКИ
                        </a>
                    </div>
                    <div class="col-md-12">
                        <div class="text_news ">
                            Війна росії з Україною спонукає американських, британських та світових аналітиків вже зараз готувати рекомендації по корегуванню воєнних доктрин США та країн НАТО. Адже дослідники розуміють, що москва – головна небезпека для цивілізованого світу.
                        </div>
                        <div class="date_news ">
                            24 червня 2022, 08:39
                        </div>

                    </div>
                    <hr class="hr_news">

                    <div class="col-md-7 text_align_right">
                        <a href="/" class="general_text_news text_align_right">
                            ЯК ДІЯТИ В УМОВАХ ЗАТЯЖНОЇ ВІЙНИ РФ З УКРАЇНОЮ. ОГЛЯД ЗАХІДНОЇ АНАЛІТИКИ
                        </a>
                    </div>
                    <div class="col-md-5">
                        <img src="img/Photo_new.png" alt="" style="width:100%">

                    </div>
                    <div class="col-md-12">
                        <div class="text_news text_align_right">
                            Війна росії з Україною спонукає американських, британських та світових аналітиків вже зараз готувати рекомендації по корегуванню воєнних доктрин США та країн НАТО. Адже дослідники розуміють, що москва – головна небезпека для цивілізованого світу.
                        </div>
                        <div class="date_news text_align_right">
                            24 червня 2022, 08:39
                        </div>

                    </div>


                </div>
            </div>
            <div class="news_phone row">
                <div class="col-12 flex align-items-center" style="margin-bottom: 30px">
                    <img src="img/Photo_new.png" alt="" style="width:100%">
                </div>
                <div class="col-12 flex flex-column justify-content-between">
                    <a href="/" class="general_text_news text_align_left_new">
                        ЯК ДІЯТИ В УМОВАХ ЗАТЯЖНОЇ ВІЙНИ РФ З УКРАЇНОЮ. ОГЛЯД ЗАХІДНОЇ АНАЛІТИКИ
                    </a>
                    <div class="text_news text_align_left_new">
                        Війна росії з Україною спонукає американських, британських та світових аналітиків вже зараз готувати рекомендації по корегуванню воєнних доктрин США та країн НАТО. Адже дослідники розуміють, що москва – головна небезпека для цивілізованого світу.
                    </div>
                    <div class="date_news text_align_left_new">
                        24 червня 2022, 08:39
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container flex  justify-content-center">
            <a href="./news?page=1" class="pages">
                1
            </a>
            <a href="./news?page=2" class="pages">
                2
            </a>
            <a href="./news?page=3" class="pages">
                3
            </a>
            <a href="./news?page=4" class="pages">
                4
            </a>

        </div>
    </section>
@endsection
