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
                <div class="name_new">{{$new->name}}

                </div>
                <hr class="hr_name_new">
                <div class="flex justify-content-between" style="width:90%">
                    <div class="date_and_author">{{$new->date}}

                    </div>
                    <div class="date_and_author text_align_right_new">{{$new->author}}

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <img class="img_new_width" src="{{$new->photos[0]->photo}}" alt="">
            <div class="text_new text_new_bord">{{$new->description}}


            </div>
            <div class="text_new">{{$new->text}}

            </div>
{{--            <div class="text_new">--}}
{{--                10 комплексів — це 20 літаків PD-2 і 10 автівок-наземних станцій, переобладнаних у пересувні командні пункти управління.--}}

{{--                Нагадаємо, PD-2 — це багатоцільові, найперше, розвідувальні безпілотні комплекси вітчизняного виробництва. Розроблені українськими «UkrSpecSystems», вони не просто зконструйовані нашими — вони буквально зроблені в Україні. Ці безпілотники — одні з кількох БПЛА українського виробництва з радіусом польотів у понад 200 кілометрів. PD-2 має двигун внутрішнього згоряння, відтак, у порівнянні з електричними літаками, долає значно більші дистанції. Сумарна протяжність маршруту PD-2 (на одному баку) може сягати 1000 і більше кілометрів. Для взлету PD-2 не потрібен аеродром. Ці БПЛА мають шасі і злітають вертикально.--}}
{{--            </div>--}}
{{--            <img class="img_new_width" src="img/Photo_new.png" alt="">--}}
{{--            <div class="text_new">--}}
{{--                PD-2 може працювати у повітрі до 12 годин. БПЛА обладнані якісним цільовим навантаженням. Їхні камери мають п’ятикратний оптичний зум на тепловізорі і збільшення на денній камері до 30 крат. Що це дає? PD-2 може чітко визначати координати об’єктів у кадрі на відстані понад 5 кілометрів--}}

{{--                Безпілотник використовує військові стандарти зв’язку з псевдовипадковим перелаштуванням робочої частоти (ППРЧ), максимально захищений від дії ворожого РЕБу, і це робить його стійким до подавлення як навігації, так і каналів керування. Також PD-2 автоматично відслідковують переміщення цілей. Якщо, скажімо, російський танк буде рухатися у кадрі — камера БПЛА автоматично може рухатися за ним.--}}
{{--            </div>--}}
        </div>
    </section>
@endsection
