<x-layout.index-2>
    <x-title>Partners & Donors | Sydmond Foundation</x-title>

    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('site/img/donors.jpg')}}" media="(min-width: 992px)"/>
                <img class="img--bg" src="{{asset('site/img/donors.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Our Donors</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title"><?php print $siteName;?></span>
                                <h1 class="promo-primary__title"><span>Partners</span> <span>& Donors</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if ($donors->count())
            @include('components.sections.donors')
        @endif

        <!-- info start-->
        <section class="section info no-padding-top">
            <div class="container">
                <div class="row align-items-start margin-bottom">
                    <div class="col-xl-5">
                        <div class="heading heading--primary"><span class="heading__pre-title">Who we work with</span>
                            <h2 class="heading__title"><span>Our</span> <span>Partners & Donors</span></h2>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1">
                        <div class="row offset-margin">
                            <div class="col-12 col-md-6 text-md-left text-center">
                                <div class="counter-item counter-item--style-3">
                                    <div class="counter-item__top">
                                        <h6 class="counter-item__title">Funds raise</h6>
                                    </div>
                                    <div class="counter-item__lower"><span class="js-counter">{{$donation/1000 + 20}}</span><span>k+</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="info__img"><img class="img--layout" src="{{asset('site/img/info_img-layout.png')}}" alt="img"/><img src="{{asset('site/img/info_img.png')}}" alt="img"/></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- info end-->

        <!-- text section start-->
        <section class="section text-section text-section--style-2"><img class="text-section__bg-left" src="{{asset('site/img/text-section_left.png')}}" alt="img"/><img class="text-section__bg-right" src="{{asset('site/img/text-section_right.png')}}" alt="img"/>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-section__heading">Thank You</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
                        <h3 class="text-section__title">To all our donors, <br/>partners and volunteers</h3>
                        {{-- <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- text section end-->
    </main>
</x-layout.index-2>
