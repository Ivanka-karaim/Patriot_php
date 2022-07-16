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
                <a href="{{route('fond')}}" class="text_way hover_line">
                    {{ucfirst(strtolower(__('main.fond')))}}

                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="flex flex-column align-items-center">
                <div class="name">
                    @lang('main.fond')
                </div>
                <hr class="hr_name">
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <img class="general_photo" src="{{$info_fond->photo_1}}" alt="" style="width:100%; margin-top: 50px;">
            <div class="save_fond">
            <div class="row">
                <div class="col-md-5" >
                    <div class="flex justify-content-center" style="width:100%">
                    <img src="{{$info_fond->photo_2}}" alt="" class="qr_fond">
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="save_fond_text">
                    @lang('main.support_fond')
                    </div>
                </div>

            </div>
            </div>
            <div class="text_new text_new_bord">{{$info_fond->__('text_general')}}</div>
            <div class="text_new">{{$info_fond->__('text_all')}}

            </div>
        </div>
    </section>
@endsection
