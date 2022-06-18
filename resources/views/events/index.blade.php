<x-layout.index-2>
    <x-title>Events | Sydmond Foundation</x-title>

    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('site/img/events.jpg')}}" media="(min-width: 992px)"/>
                <img class="img--bg" src="{{asset('site/img/events.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Our Events</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title"><?php print $siteName;?></span>
                                <h1 class="promo-primary__title"><span>Our</span> <span>Events</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- events inner start-->
        <section class="section events-inner"><img class="events-inner__bg" src="{{asset('site/img/events_inner-bg.png')}}" alt="img"/>
            <div class="container">
                <div class="row offset-30">
                    @forelse ($events as $event)
                    <div class="col-xl-10 offset-xl-1">
                        <div class="upcoming-item">
                            <div class="upcoming-item__date">
                                <span>{{Date::parse($event->startdate)->format('jS')}}</span>
                                <span>{{Date::parse($event->startdate)->format('M, Y')}}</span>
                            </div>
                            <div class="upcoming-item__body">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-xl-4">
                                        <div class="upcoming-item__img"><img class="img--bg" src="{{asset($event->image)}}" alt="img"/></div>
                                    </div>
                                    <div class="col-lg-7 col-xl-8">
                                        <div class="upcoming-item__description">
                                            <h6 class="upcoming-item__title"><a href="/events/{{$event->slug}}">{{$event->title}}</a></h6>
                                            <p>{{$event->excerpt}}</p>
                                            <div class="upcoming-item__details">
                                                <p>
                                                    <svg class="icon">
                                                        <use xlink:href="#clock"></use>
                                                    </svg>
                                                    <strong>{{Date::parse($event->startdate)->format('F, jS')}},</strong>
                                                    {{Date::parse($event->startdate)->format('h:i A') }}

                                                    -

                                                    <strong>{{Date::parse($event->enddate)->format('F, jS')}},</strong>
                                                    {{Date::parse($event->enddate)->format('h:i A') }}
                                                </p>
                                                @if ($event->location)
                                                    <p>
                                                        <svg class="icon">
                                                            <use xlink:href="#placeholder"></use>
                                                        </svg> <strong>{{$event->location}}</strong>
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- pagination start-->

                        {{$events->links()}}

                        <!-- pagination end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- events inner end-->
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
