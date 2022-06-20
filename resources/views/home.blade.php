<x-layout.index >
    <x-title>Welcome to Sydmond Foundation</x-title>
    <main class="main">
        <!-- promo start-->
        <section class="promo">
            <div class="promo-slider">
                <div class="promo-slider__item promo-slider__item--style-1">
                    <picture>
                        <source srcset="{{asset('site/img/promo_1.jpg')}}" media="(min-width: 835px)"/>
                        <source srcset="{{asset('site/img/834promo_1.jpg')}}" media="(min-width: 376px)"/>
                        <img class="img--bg" src="{{asset('site/img/375promo_1.jpg')}}" alt="img"/>
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>We help all people in need</span> <span>around the world.</span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                        </div>
                                        <div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="/about">Discover</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo-slider__item promo-slider__item--style-2">
                    <picture>
                        <source srcset="{{asset('site/img/promo_2.jpg')}}" media="(min-width: 835px)"/>
                        <source srcset="{{asset('site/img/834promo_2.jpg')}}" media="(min-width: 376px)"/>
                        <img class="img--bg" src="{{asset('site/img/375promo_2.jpg')}}" alt="img"/>
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>Our Helping</span><br/><span>around the world.</span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                        </div>
                                        <div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo-slider__item promo-slider__item--style-3">
                    <picture>
                        <source srcset="{{asset('site/img/promo_3.jpg')}}" media="(min-width: 835px)"/>
                        <source srcset="{{asset('site/img/834promo_3.jpg')}}" media="(min-width: 376px)"/>
                        <img class="img--bg" src="{{asset('site/img/375promo_3.jpg')}}" alt="img"/>
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>{{env('SITE_NAME')}} Volounteers</span><br/><span>Around the world.</span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                        </div>
                                        <div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- promo socials start-->
            <ul class="promo-socials">
                <li class="promo-socials__item"><a class="promo-socials__link" href="{{env('INSTAGRAM')}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="promo-socials__item"><a class="promo-socials__link" href="{{env('TWITTER')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="promo-socials__item"><a class="promo-socials__link" href="{{env('FACEBOOK')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
            <!-- promo socials end-->
            <!-- promo pannel start-->
            <div class="promo-pannel"><a class="anchor promo-pannel__anchor" href="#about"> <span>Scroll Down</span></a>
                <div class="promo-pannel__video"><img class="img--bg" src="{{asset('site/img/video_block.jpg')}}" alt="image"/><a class="video-trigger" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><span>Watch our video</span><i class="fa fa-play" aria-hidden="true"></i></a></div>
                <div class="promo-pannel__phones">
                    <p class="promo-pannel__title">Phone numbers</p><a class="promo-pannel__link" href="tel:{{env('SITE_PHONE')}}">{{env('SITE_PHONE')}}</a><a class="promo-pannel__link" href="tel:{{env('SITE_PHONE_TWO')}}">{{env('SITE_PHONE_TWO')}}</a>
                </div>
                <div class="promo-pannel__email">
                    <p class="promo-pannel__title">Email</p><a class="promo-pannel__link" href="mailto:{{env('SITE_EMAIL')}}">{{env('SITE_EMAIL')}}</a>
                </div>
            </div>
            <!-- promo pannel end-->
            <!-- slider nav start-->
            <div class="slider__nav slider__nav--promo">
                <div class="promo-slider__count"></div>
                <div class="slider__arrows">
                    <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <!-- slider nav end-->
        </section>
        <!-- promo end-->
        <!-- about us start-->
        <section class="section about-us" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
                            <h2 class="heading__title">{!! $content->vision ?? '' !!}</h2>
                        </div>
                        <p>{!! $content->about ?? "" !!}</p><a class="button button--primary" href="/about">Learn More</a>
                    </div>
                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                        <div class="info-box">
                            <img class="img--layout" src="{{asset('site/img/about_layout.png')}}" alt="img"/>
                            <img class="img--bg" src="{{asset('site/img/about-us.jpg')}}" alt="img"/>
                            <h4 class="info-box__title">Join our volunteer team</h4>
                            <p>You too can join us to make a difference whereever you are</p><a class="info-box__link" href="/volunteer-opportunities">Become a volounteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us end-->

        @include('components.sections.projects')

        @if ($events->count())
            @include('components.sections.events')
        @endif

        <section class="section text-section"><img class="text-section__bg" src="{{asset('site/img/text-section.png')}}" alt="img"/>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-section__heading">Volunteer</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
                        <h3 class="text-section__title">Delivering help and hope <br/>to children through sponsorship.</h3>
                        <a class="button button--primary" href="/volunteer-opportunities">Become a Volunteer</a>
                    </div>
                </div>
            </div>
        </section>

        @if ($testimonials->count())
            @include('components.sections.testimonials')
        @endif

        <!-- blog start-->
        @if ($posts->isNotEmpty())
            <section class="section blog"><img class="blog__bg" src="{{asset('site/img/blog_bg.png')}}" alt="img"/>
                <div class="container">
                    <div class="row margin-bottom">
                        <div class="col-12">
                            <div class="heading heading--primary heading--center"><span class="heading__pre-title">News</span>
                                <h2 class="heading__title no-margin-bottom"><span>{{env('SITE_NAME')}}</span> <span>Blog</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row offset-margin">
                        @include('components.blog.blog-content')
                    </div>
                </div>
            </section>
            <!-- blog end-->
        @endif
        <!-- donors start-->
        <section class="section donors">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-12">
                        <div class="heading heading--primary heading--center"><span class="heading__pre-title">Donors</span>
                            <h2 class="heading__title no-margin-bottom"><span>Who Help</span> <span>Us</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- donors slider start-->
                        <div class="slider-holder">
                            <div class="donors-slider donors-slider--style-1">
                                <div class="donors-slider__item">
                                    <div class="donors-slider__img"><img src="{{asset('site/img/donor_1.png')}}" alt="donor"/></div>
                                </div>
                                <div class="donors-slider__item">
                                    <div class="donors-slider__img"><img src="{{asset('site/img/donor_2.png')}}" alt="donor"/></div>
                                </div>
                                <div class="donors-slider__item">
                                    <div class="donors-slider__img"><img src="{{asset('site/img/donor_3.png')}}" alt="donor"/></div>
                                </div>
                                <div class="donors-slider__item">
                                    <div class="donors-slider__img"><img src="{{asset('site/img/donor_4.png')}}" alt="donor"/></div>
                                </div>
                            </div>
                        </div>
                        <!-- donors slider end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- donors end-->

        <!-- subscribe start-->
        <section class="subscribe">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-4">
                        <h2 class="subscribe__title">Subscribe.</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="subscribe-form" action="javascript:void(0);">
                            <input class="subscribe-form__input" type="email" name="email" placeholder="Enter your E-mail" required="required"/>
                            <input class="subscribe-form__submit" type="submit" value="Submit"/>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe end-->
    </main>
</x-layout.index>
