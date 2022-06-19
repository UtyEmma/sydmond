<x-layout.index-2>
    <x-title>About | Sydmond Foundation</x-title>
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('site/img/about.jpg')}}" media="(min-width: 992px)"/>
                <img class="img--bg" src="{{asset('site/img/about.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Donation</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">{{env('APP_NAME')}}</span>
                                <h1 class="promo-primary__title"><span>About</span><br/><span>Organization</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-us start-->
        <section class="section about-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5">
                        <div class="img-box"><img class="img--layout" src="{{asset('site/img/about_layout-reverse.png')}}" alt="img"/>
                            <div class="img-box__img"><img class="img--bg" src="{{asset('site/img/about_2.png')}}" alt="img"/></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 offset-xl-1">
                        <h2 class="heading__title">About Us</h2>
                        <div class="heading heading--primary"><span class="heading__pre-title">{!! $about->vision ?? 'Helping less privileged, children and elderly.' !!}</span>
                        </div>
                        {!! $about->about ?? "Sydmond Foundation is all about empowering, improving and inspiring hope of individuals especially the underprivileged people, children and elderly.
                        We discover the children, save the Child, give them hope to attain her destiny.
                        " !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- about-us end-->
        <!-- about us style-2 start-->
        <section class="section about-us about-us--style-2 no-padding-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h4 class="about-us__subtitle">{!! $about->mission ?? "To help improve and inspire hope of individuals and improve quality care for the underprivileged people particularly children and elderly." !!}</h4>
                        {!! $about->history ?? "Sydmond foundation was established on 28th February, 2010 with the sole aim of empowering, improving and inspiring hope of individual especially under privilege people, children and elderly.
                        The foundation was registered in 2012 with corporate affairs commission (CAC). In has gone a long way in bringing and carrying the needs of the underprivileged by providing them with their basic needs, supporting the children academically as they are the future of the people and world at large.
                        " !!}
                    </div>
                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                        <div class="about-us__text-aside">Our Mission</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us style-2 end-->
        <!-- team start-->
        <section class="section team">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading heading--primary"><span class="heading__pre-title">Team</span>
                            <h2 class="heading__title no-margin-bottom"><span>Meet</span> <span>our Team</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- iteam start-->
                        <div class="team-item team-item--rounded">
                            <ul class="team-item__socials">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                            <div class="team-item__img-holder">
                                <img class="img--layout" src="{{asset('site/img/team_1.png')}}" alt="layout"/>
                                <div class="team-item__img">
                                    <img class="img--bg" src="{{asset('site/img/team_1.jpg')}}" alt="teammate"/>
                                </div>
                            </div>
                            <div class="team-item__description">
                                <div class="team-item__name">Chris Patt</div>
                                <div class="team-item__position">Ceo/Founder</div>
                            </div>
                        </div>
                        <!-- iteam end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center"><a class="button button--primary" href="volunteer-opportunities">Become our volunteer</a></div>
                </div>
            </div>
        </section>
        <!-- team end-->
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
                            </div>
                        </div>
                        <!-- donors slider end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- donors end-->
    </main>
</x-layout.index-2>
