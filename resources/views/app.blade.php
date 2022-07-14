<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link type="Image/x-icon" href="/img/icon.png" rel="icon">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/bootstrap/bootstrap-grid.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Mulish:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&family=Oswald:wght@300;400;500&family=Rubik&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="container head">
        <div>
            <img class="logo" src="/img/Logo.png" alt="">
        </div>
        <div class="menu">
            <nav>
                <ul  class="header__menu">
                    <li>
                        <a href="{{route('fond')}}">ПРО ФОНД</a>
                    </li>
                    <li>
                        <a href="{{route('news')}}">НОВИНИ</a>
                    </li>
                </ul>
            </nav>
            <div class="contacts_min">
                <a class="number hover_blue_yellow">
                    +38 (068) 505 96 50
                </a>
                <div class="icons">
                    <a class="icon hover_blue_yellow" href="https://www.facebook.com/profile.php?id=100040310163390" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a class="icon hover_blue_yellow" href="https://instagram.com/arkonsklo?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a class="icon hover_blue_yellow" href="https://t.me/+380685059650" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                    <a class="icon hover_blue_yellow" href="https://wa.me/380685059650" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

                </div>


            </div>
        </div>
        <div class="flex align-items-center">
            <button  class="box_support hover_tin open_pop_up">
                Підтримати
            </button>
            <div class="contacts">
                <a class="number hover_blue_yellow">
                    +38 (068) 505 96 50
                </a>
                <div class="icons">
                    <a class="icon hover_blue_yellow" href="https://www.facebook.com/profile.php?id=100040310163390" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a class="icon hover_blue_yellow" href="https://instagram.com/arkonsklo?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a class="icon hover_blue_yellow" href="https://t.me/+380685059650" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                    <a class="icon hover_blue_yellow" href="https://wa.me/380685059650" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

                </div>
            </div>
            <div class="mobile">
                <div class="menu-burger__header">
                <span>
                </span>
                </div>
            </div>
        </div>

    </div>

</header>
<main>
    <div class="pop_up" id="pop_up">
        <div class="pop_up_container">
            <div class="pop_up_body" id="pop_up_body">
                <div style="display:flex; flex-direction: column; align-items:center;">
                    <h3>Відскануйте Q-r код та зробіть добро</h3>
                    <button id="pop_up_ok" onclick="closePop('pop_up')">Ок</button>
                    <div class="pop_up_close" id="pop_up_close" onclick="closePop('pop_up')">&#10006
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</main>
<footer>
    <div class="footer_one">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="emblem" src="/img/emblem.png" alt="">
                    <div class="general_text_mobile">
                        Патріот.ua
                    </div>
                    <div class="text_mobile">
                        Благодійна організація
                    </div>

                        <div class="foot_icon icons">
                            <a class="icon hover_blue_yellow big_icon" href="https://www.facebook.com/profile.php?id=100040310163390" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a class="icon hover_blue_yellow big_icon" href="https://instagram.com/arkonsklo?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a class="icon hover_blue_yellow big_icon" href="https://t.me/+380685059650" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                            <a class="icon hover_blue_yellow big_icon" href="https://wa.me/380685059650" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

                        </div>

                </div>
                <div class="col-md-8">

                    <div class="flex align-items-center justify-content-between">
                        <div class="text_support">
                            Будемо дуже раді Вашій підтримці
                        </div>
                        <button  class="box_support hover_tin open_pop_up">
                            Підтримати
                        </button>
                    </div>
                    <hr class ="hr">

                    <div class="row">
                        <div class="col-md-3">

                            <nav class="footer_menu">
                                <ul>
                                    <li>
                                        <a class="text_footer hover_line" href="{{route('general')}}">Головна</a>
                                    </li>
                                    <li>
                                        <a class="text_footer hover_line" href="{{route('news')}}">Новини</a>
                                    </li>
                                    <li>
                                        <a class="text_footer hover_line" href="{{route('fond')}}">Про нас</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-9">
                            <div class=" flex flex-column">
                                <div class="graph">
                                    пн-пт 10:00-19:00
                                </div>
                                <a href="/" class="text_contacts hover_line">
                                    +38 (068) 505 96 50
                                </a>
                                <a href="/" class="text_contacts hover_line">
                                    +38 (066) 723 64 85
                                </a>
                                <a href="/" class="text_contacts hover_line">
                                    karaimivanna@gmail.com
                                </a>
                                <a href="/" class="text_contacts hover_line">
                                    Львівська обл. м. Броди вул. Руська, 25
                                </a>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="footer_mobile">
        <div class="container">
            <div class="general_text_mobile">
                Патріот.ua
            </div>
            <div class="text_mobile">
                Благодійна організація
            </div>
            <div class=" flex flex-column">
                <div class="graph">
                    пн-пт 10:00-19:00
                </div>
                <a href="/" class="text_contacts hover_line">
                    +38 (068) 505 96 50
                </a>
                <a href="/" class="text_contacts hover_line">
                    +38 (066) 723 64 85
                </a>
                <a href="/" class="text_contacts hover_line">
                    karaimivanna@gmail.com
                </a>
                <a href="/" class="text_contacts hover_line">
                    Львівська обл. м. Броди вул. Руська, 25
                </a>

            </div>

        </div>
    </div>
    <div class="footer_two">
        <div class="container">
            © 2022, Патріот.ua | Благодійна організація
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/1467b92032.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.menu-burger__header').click(function(){
            $('.menu-burger__header').toggleClass('open-menu');
            $('.menu').toggleClass('open-menu');
            $('body').toggleClass('fixed-page');
        });
    });
</script>
<script>
    const openPopUp = document.querySelectorAll('.open_pop_up');
    const popUp = document.getElementById('pop_up');
    for(var i=0; i<openPopUp.length; i++) {
        openPopUp[i].addEventListener('click', function (e) {
            e.preventDefault();
            popUp.classList.add('active');

        });
    }

    function closePop(name){
        const popUp = document.getElementById(name);
        popUp.classList.remove('active');
    }
</script>
</body>
</html>
