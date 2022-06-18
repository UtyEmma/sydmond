<x-layout.index-2>
    <x-title>Frequently Asked Questions | Sydmond Foundation</x-title>
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('site/img/volunteer.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('site/img/volunteer.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Compassion</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">{{env('APP_NAME')}}</span>
                                <h1 class="promo-primary__title"><span>Frequently Asked Questions</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq start-->
        <section class="section faq">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-12">
                        <div class="heading heading--primary"><span class="heading__pre-title">Faq</span>
                            <h2 class="heading__title no-margin-bottom"><span>General</span> <span>Questions</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        @forelse ($faqs as $faq)
                            <div class="accordion accordion--primary">
                                <div class="accordion__title-block">
                                    <h6 class="accordion__title">{{$faq->question}}</h6>
                                    <span class="accordion__close"></span>
                                </div>
                                <div class="accordion__text-block">
                                    <p>{!! $faq->content !!}</p>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="faq-aside"><img class="img--bg" src="{{asset('site/img/about-us.jpg')}}" alt="img"/>
                            <h5 class="faq-aside__title">Any Question?</h5>
                            <p>Send us a quick Message and we will respond to your query.</p>
                            <a class="faq-aside__link" href="/contact">ASk Question</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq end-->
        <!-- bottom bg start-->
        <section class="bottom-background background--brown">
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
