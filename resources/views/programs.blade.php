<x-layout.index-2>
    <x-title>{{$program->title}} | Sydmond Foundation</x-title>
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('site/img/volunteer.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('site/img/volunteer.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Programs</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title"><?php print $siteName;?></span>
                                <h1 class="promo-primary__title"><span></span> <span>{{$program->title}}</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section start-->
        <section class="section team-member no-padding-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5">
                        <div class="img-box"><img class="img--layout" src="{{asset('site/img/about_layout-reverse.png')}}" alt="img"/>
                            <div class="img-box__img"><img class="img--bg" src="{{asset($program->image)}}" alt="img"/></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 offset-xl-1">
                        <div class="heading heading--primary"><span class="heading__pre-title">{{$program->subtitle}}</span>
                            <h2 class="heading__title"><span>{{$program->title}}</span></h2>

                            <div>
                                {!! $program->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
