<x-layout.index-2>
    <x-title>Contact Us | Sydmond Foundation</x-title>

    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('site/img/contacts.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('site/img/contacts.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Contact Us</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">{{env('SITE_NAME')}}</span>
                                <h1 class="promo-primary__title"><span>Contacts</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section start-->
        <section class="section contacts">
            <div class="container">
                <div class="row offset-margin">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="{{asset('site/img/icon_1-1.png')}}" alt="img"/>
                                <svg class="icon icon-item__icon icon--red">
                                    <use xlink:href="#location-pin"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <p>{{env('SITE_ADDRESS')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="{{asset('site/img/icon_2-2.png')}}" alt="img"/>
                                <svg class="icon icon-item__icon icon--orange">
                                    <use xlink:href="#phone-call"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <p>
                                    <a class="icon-item__link" href="tel:{{env('SITE_PHONE')}}">{{env('SITE_PHONE')}}</a>,
                                    <a class="icon-item__link" href="tel:{{env('SITE_PHONE_TWO')}}">{{env('SITE_PHONE_TWO')}}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="{{asset('site/img/icon_3-3.png')}}" alt="img"/>
                                <svg class="icon icon-item__icon icon--green">
                                    <use xlink:href="#envelope"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <p>
                                    <a class="icon-item__link" href="mailto:{{env('SITE_EMAIL')}}">{{env('SITE_EMAIL')}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-item">
                            <div class="icon-item__img"><img class="img--layout" src="{{asset('site/img/icon_4-4.png')}}" alt="img"/>
                                <svg class="icon icon-item__icon icon--blue">
                                    <use xlink:href="#share"></use>
                                </svg>
                            </div>
                            <div class="icon-item__text">
                                <!-- socials start-->
                                <ul class="socials">
                                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li class="socials__item"><a class="socials__link socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                                <!-- socials end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end-->
        <!-- contacts start-->
        <section class="section contacts no-padding-top">
            <div class="contacts-wrapper">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-6">
                            <small class="text-danger">@if(session('error')) {{session('error')}} @endif</small>
                            <small class="text-success">@if(session('success')) {{session('success')}} @endif</small>
                            <form class="form message-form" action="/contact" method="POST">
                                @csrf
                                <h6 class="form__title">Send Message</h6><span class="form__text">* The following info is required</span>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input class="form__field" type="text" name="name" placeholder="Your Name *" required="required"/>
                                        <x-errors name="name" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form__field" type="email" name="email" placeholder="Your Email Address*" required="required"/>
                                        <x-errors name="email" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form__field" type="tel" name="phone" placeholder="Your Phone Number"/>
                                        <x-errors name="phone" />
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form__message form__field" name="message" placeholder="Message"></textarea>
                                        <x-errors name="message" />
                                    </div>
                                    <div class="col-12">
                                        <button class="form__submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="contacts-wrapper__map" id="map" data-api-key="AIzaSyD5ES8GFHrarPhIVpDhFDea6fPtga0Wy4Y" data-longitude="-73.935242" data-latitude="40.730610" data-marker="img/marker.png"></div>
            </div>
        </section>
        <!-- contacts end-->
        <!-- bottom bg start-->
        <section class="bottom-background">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-background__img"><img src="{{asset('site/img/bottom-bg.png')}}" alt="img"/></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- bottom bg end-->
    </main>
</x-layout.index-2>
