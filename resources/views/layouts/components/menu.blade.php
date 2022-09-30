<div class="col-1 col-lg-12 px-0 order-1 order-lg-3">
    <nav class="header__navbar">
        <div class="container-fluid px-0">
            <button class="d-block d-lg-none header__navbar-bars">
                <i class="fad fa-bars text-white"></i>
            </button>
            <div class="header__menu-list ">
                <ul class="my-header__menu-list">
                    <li class="header__menu-item">
                        <a href="{{ route('page', 'boshqarma-haqida-umumiy-malumotlar') }}" class="header__menu-link">@lang("menu.BOSHQARMA HAQIDA")</a>
                        <ul class="header__menu-dropdown">
                            <li>
                                <a href="{{ route('page', 'boshqarma-haqida-umumiy-malumotlar') }}">@lang("menu.Umumiy ma'lumotlar")</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('page', 'sirdaryo-viloyati-iqtisodiy-taraqqiyot-va-kambagallikni-qisqartirish-bosh-boshqarmasida-vakant-lavozimlarga-qoyilgan-malaka-talablari') }}">@lang("menu.Umumiy ma'lumotlar")</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('page', 'boshqarma-vazifa-va-funksiyalari') }}">@lang("menu.Bosh boshqarma asosiy vazifalari")</a>
                            </li>
                            <li>
                                <a href="{{ route('page', 'sirdaryo-viloyati-iqtisodiy-taraqqiyot-va-kambagallikni-qisqartirish-bosh-boshqarmasining-faoliyatini-tashkil-etish-togrisida-nizom') }}">@lang("menu.NIZOM")</a>
                            </li>
                            <li>
                                <a href="{{ route('page', 'rahbariyat') }}">@lang("menu.Rahbariyat")</a>
                            </li>
                            <li>
                                <a href="{{ route('page', 'tarkibiy-tuzilma-royxati') }}">@lang("menu.Tarkibiy tuzilma")</a>
                            </li>
                            <li>
                                <a href="{{ route('category', 'bosh-ish-orinlari') }}">@lang("menu.Bo'sh ish o'rinlari")</a>
                            </li>
                            <li>
                                <a href="{{ route('page', 'sirdaryo-viloyati-iqtisodiy-taraqqiyot-va-kambagallikni-qisqartirish-bosh-boshqarmasida-vakant-lavozimlarga-qoyilgan-malaka-talablari') }}">@lang("menu.vakant-talablari")</a>
                            </li>
                            <li>
                                <a href="{{ route('category', 'korrupsiyaga-qarshi-kurashish') }}">@lang("menu.Korrupsiyaga qarshi kurashish")</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">@lang("menu.NORMATIV HUQUQIY HUJJATLAR")</a>
                        <ul class="header__menu-dropdown">
                            <li>
                                <a href="{{ route('category', 'ozbekiston-respublikasi-qonunlari') }}">@lang("menu.O'zbekiston Respublikasi Qonunlari")</a>
                            </li>
                            <li>
                                <a href="{{ route('category', 'ozbekiston-respublikasi-prezidenti-farmonlari-qarorlari-va-farmoyishlari') }}">@lang("menu.O'zbekiston Respublikasi Prezidenti farmonlari, qarorlari va farmoyishlari")</a>
                            </li>
                            <li>
                                <a href="{{ route('category', 'ozbekiston-respublikasi-vazirlar-mahkamasi-qaror-va-farmoyishlari') }}">@lang("menu.O'zbekiston Respublikasi Vazirlar Mahkamasi qaror va farmoyishlari")</a>
                            </li>
                            <li>
                                <a href="{{ route('page', '2017-2021-yillar-uchun-qabul-qilingan-dasturlar') }}">@lang("menu.2017-2021 yillar uchun qabul qilingan dasturlar")</a>
                            </li>
                            <li>
                                <a href="{{ route('page', 'davlat-dasturlari') }}">@lang("menu.Davlat dasturlari")</a>
                            </li>
                            <li>
                                <a href="{{ route('category', 'korrupsiyaga-qarshi-kurashish-boyicha-qabul-qilingan-hujjatlar') }}">@lang("menu.Korrupsiyaga qarshi kurashish bo'yicha qabul qilingan hujjatlar")</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__menu-item">
                        <a href="{{ route('contact') }}" class="header__menu-link">@lang("menu.ALOQALAR")</a>
                        <ul class="header__menu-dropdown">
                            <li>
                                <a href="{{ route('page','rahbariyat-bolim-boshliqlari') }}">@lang("menu.Rahbariyat bo'limlari")</a>
                            </li>
                            <li>
                                <a href="{{ route('page','hududiy-bolinmalar-qabul-kunlari') }}">@lang("menu.Hududiy bo'limlar")</a>
                            </li>
                            <li>
                                <a href="{{ route('page','rahbariyat-qabul-kunlari') }}">@lang("menu.Rahbariyat qabul kunlari")</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">@lang("menu.MATBUOT UCHUN")</a>
                        <ul class="header__menu-dropdown">
                            <li>
                                <a href="{{ route('page','axborot-xizmati') }}">@lang("menu.Axborot xizmati")</a>
                            </li>
                            <li>
                                <a href="{{ route('main') }}">@lang("menu.Bosh boshqarma yangiliklari")</a>
                            </li>

                            <li>
                                <a href="{{ route('category', 'elonlar-va-tenderlar') }}">@lang("menu.E'lonlar va tenderlar")</a>
                            </li>
                            <li>
                                <a href="#">@lang("menu.Ochiq ma'lumotlar")</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">@lang("menu.VIRTUAL QABULXONA")</a>
                        <ul class="header__menu-dropdown">
                            <li>
                                <a href="https://pm.gov.uz/oz">@lang("menu.O'zbekiston Respublikasi Prezidenti virtual qabulxonasi")</a>
                            </li>
                            <li>
                                <a href="https://business.gov.uz/?&lang=uz">@lang("menu.O'zbekiston Respublikasi Bosh vazirning tadbirkorlar murojaatlarini ko'rib chiqish qabulxonalari")</a>
                            </li>
                            <li>
                                <a href="https://my.gov.uz/oz">@lang("menu.Yagona interaktiv Davlat xizmatlari portali")</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">@lang("menu.QAYTA ALOQA")</a>
                        <ul class="header__menu-dropdown">
                            <li>
                                <a href="https://pm.gov.uz/">@lang("menu.Jismoniy va yuridik shaxslar murojaatlari")</a>
                            </li>
                            <li>
                                <a href="{{ route('page', 'jismoniy-va-yuridik-shaxslarning-murojaatlari-bilan-ishlash-tartibi-togrisidagi-nizom') }}">@lang("menu.Jismoniy va yuridik shaxslarning murojaatlari bilan ishlash tartibi to'g'risidagi NIZOMI")</a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="http://naveconomy.uz/uz/aloqa/37-zhismoniy-va-yuridik-shahslarning-murozhaatlari-bilan-ishlash-tartibi-trisidagi-nizom.html">@lang("menu.Jismoniy va yuridik shaxslarning murojaatlari bilan ishlash tartibi to'g'risidagi NIZOMI")</a>-->
                            <!--</li>-->
                            <li><a href="https://my.gov.uz">@lang("menu.Faoliyat sohasiga oid aholi va tadbirkorlik sub'ektlari tomonidan tez-tez beriladigan savollarga javoblar") </a>
                            </li>
                            <a href="tel: +998672350395">@lang("menu.Ishonch telefoni") +998 (67) 235-03-95</a>
                    </li>
                    <li>
                        <a href="https://my.gov.uz">@lang("menu.Veb-sayt xaritasi")</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>
