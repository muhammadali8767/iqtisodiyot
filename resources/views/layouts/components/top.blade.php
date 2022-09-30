<div class="col-11 col-lg-3 order-0 ps-0 ps-lg-3">
    <a href="{{ route('main') }}" class="header-logo">
        <img src="/front/img/Gerb-clean.png" alt="Brand Image" loading="lazy">
        <span>
            @lang("menu.logo")
        </span>
    </a>
</div>
<div class="col-12 col-lg-9 px-0 order-2 order-lg-2">
    <div class="header__links">
        <a href="#" class="header__links-link d-none d-sm-block">
            <i class="fas fa-map-marker-alt"></i>
            @lang("menu.location")
        </a>
        <a href="#" class="header__links-link me-auto">
            <i class="fas fa-phone-alt"></i>
            (67) 235-03-95
        </a>
        <a href="#" class="header__links-link d-none d-sm-block">
            <i class="fas fa-envelope"></i>
            sirdaryo@mineconomy.uz <br>

        </a>
        <a href="https://www.youtube.com/channel/UCJrg-jweIdz7zwcZdvzTJXQ" class="header__links-messenger">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="https://t.me/sirdeconomy" class="header__links-messenger">
            <i class="fab fa-telegram-plane"></i>
        </a>
        <a href="https://www.facebook.com/sirdeconomy/" class="header__links-messenger">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/sirdeconomy.uz/" class="header__links-messenger">
            <i class="fab fa-instagram"></i>
        </a>

        <button class="header__links-searchBtn">
            <i class="fas fa-search"></i>
        </button>
        <div class="dropdown">
            <button class="btn header__links-langBtn dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/front/img/lang_{{ app()->getLocale() }}.png" alt="Uzb flag logo">
                @switch(app()->getLocale())
                    @case('en')
                        Eng
                    @break

                    @case('ru')
                        Rus
                    @break

                    @default
                        Uzb
                    @break
                @endswitch

            </button>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @if (app()->getLocale() != 'uz')
                    <li><a class="dropdown-item" href="?locale=uz"><img src="/front/img/lang_uz.png"
                                alt="Uzb flag logo">Uzb</a></li>
                @endif
                @if (app()->getLocale() != 'ru')
                    <li><a class="dropdown-item" href="?locale=ru"><img src="/front/img/lang_ru.png"
                                alt="Uzb flag logo">Rus</a></li>
                @endif
                @if (app()->getLocale() != 'en')
                    <li><a class="dropdown-item" href="?locale=en"><img src="/front/img/lang_en.png"
                                alt="Uzb flag logo">Eng</a></li>
                @endif
            </ul>
        </div>
        @auth
            @role('admin')
            <div class="m-1">
                <a href="{{ route('homeAdmin') }}" class="btn btn-info">Админка</a>

            </div>
            @endrole
            <div class="m-1">
                <ul class="navbar-nav ml-auto">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">Выход</button>
                    </form>
                </ul>
            </div>
        @endauth
    </div>
</div>
