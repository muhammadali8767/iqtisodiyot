@extends('layouts.main')

@section('content')

<div class="col-12 order-sm-0 order-lg-0">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h2 class="section-title">
                Biz bilan bog'laning
            </h2>
        </div>
    </div>
    <div class="row">
        @include('layouts.components.contact_form')
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 news-card">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <div class="card-body p-0">
                            <div class="at-vizitka">
                                <h6>Telefon: <a href="tel:+998672253261"> +998 (67) 225-32-61</a>
                                </h6>
                                <h6>Elektron pochta: <a
                                        href="mailTo:sirdaryo@mineconomy.uz"> sirdaryo@mineconomy.uz</a>
                                </h6>
                                <h6>Facebook: <a
                                        href="https://www.facebook.com/sirdeconomy">https://www.facebook.com/sirdeconomy</a>
                                </h6>
                                <h6>Instagram: <a
                                        href="https://www.instagram.com/sirdeconomy.uz/">https://www.instagram.com/sirdeconomy.uz/</a>
                                </h6>
                                <h6>Telegram: <a
                                        href="https://t.me/sirdeconomy">https://t.me/sirdeconomy</a>
                                </h6>
                                <h6>YouTube: <a
                                        href="https://www.youtube.com/channel/UCJrg-jweIdz7zwcZdvzTJXQ">https://www.youtube.com/channel/UCJrg-jweIdz7zwcZdvzTJXQ</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="card__for__info p-0">
                            <div class="card__for__info-img">
                                <img src="/front/img/gerb.png" class="img-fluid" alt="Photo error">
                            </div>
                            <a href="#"
                                class="card__for__info-link card__for__info-link-absolute axborot-xizmati-link">O'zbekiston
                                Onlayn axborot xizmati
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d194504.56780926773!2d68.65654729403833!3d40.383725485089805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssirdaryo%20viloyati%20shahar%20xokimiyat!5e0!3m2!1sen!2s!4v1658837718941!5m2!1sen!2s"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection


