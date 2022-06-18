<x-layout.index-2>
    <x-title>Events Details | Sydmond Foundation</x-title>

    <main class="main">
        <section class="promo-primary">
            <div class="" style="position: absolute; left: 0; right: 0; bottom: 0; top: 0; background: rgba(0, 0, 0, 0.808);"></div>
            <picture >
                <source srcset="{{asset($event->image)}}" media="(min-width: 992px)"/>
                <img class="img--bg" src="{{asset($event->image)}}" alt="img"/>
            </picture>

            <div class="promo-primary__description"> <span>Event</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title"><?php print $siteName;?></span>
                                <h1 class="promo-primary__title"><span>{{$event->title}}</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- article start-->
        <section class="section article"><img class="article__bg" src="{{asset('site/img/events_inner-bg.png')}}" alt="img"/>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <div class="article__img"><img src="{{asset($event->image)}}" alt="img"/></div>

                        <div class="upcoming-item">
                            <div class="upcoming-item__body" style="max-width: 100% !important;">
                                <div class="upcoming-item__description mx-auto" >
                                    <h6 class="upcoming-item__title"><a href="/events/{{$event->slug}}">{{$event->title}}</a></h6>
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

                        <div>
                            {!! $event->content !!}
                        </div>

                        <div class="mt-4">
                            <h6>Tags</h6>
                            <div>
                                @if ($event->tags)
                                    @forelse (json_decode($event->tags) as $tag)
                                        <span class="p-2 px-4 button button--primary  mr-3">{{$tag}}</span>
                                    @empty
                                    @endforelse
                                @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- article end-->
        <!-- additional events start-->
        <section class="section additional-events no-padding-top no-padding-bottom">
            <div class="row no-gutters">
                <div class="col-md-6">
                    @if($previous)
                        <div class="additional-event"><a class="additional-event__img" href="/events/{{$previous->slug}}"><img class="img--bg" src="{{asset($previous->image)}}" alt="img"/>
                        <div class="additional-event__text"><span></span><span>{{$previous->title}}</span></div></a></div>
                    @endif
                </div>
                <div class="col-md-6">
                    @if($next)
                        <div class="additional-event"><a class="additional-event__img" href="/events/{{$next->slug}}"><img class="img--bg" src="{{asset($next->image)}}" alt="img"/>
                        <div class="additional-event__text"><span></span><span>{{$next->title}}</span></div></a></div>
                    @endif
                </div>
            </div>
        </section>
        <!-- additional events end-->
    </main>
</x-layout.index-2>
