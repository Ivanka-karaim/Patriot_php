@extends('app')
@section('title','Партіот.ua')
@section('content')
    <section class="way">
        <div class="container">
            <div class="flex">
                <a href="{{route('general')}}" class="text_way hover_line">
                    Головна
                </a>
                <i class="fa-solid fa-arrow-right-long icon_way"></i>
                <a href="{{route('fond')}}" class="text_way hover_line">
                    Про фонд

                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="flex flex-column align-items-center">
                <div class="name">
                    ПРО ФОНД
                </div>
                <hr class="hr_name">
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <img src="/img/GENERAL.png" alt="" style="margin-top: 100px">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    Підтримайте наші благодійну організацію
                </div>
            </div>
        </div>
    </section>
@endsection
