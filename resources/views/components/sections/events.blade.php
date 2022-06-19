<!-- events start-->
<section class="section events"><img class="events__bg" src="{{asset('site/img/events_bg.png')}}" alt="img"/>
    <div class="container">
        <div class="row margin-bottom">
            <div class="col-12">
                <div class="heading heading--primary heading--center"><span class="heading__pre-title">Events</span>
                    <h2 class="heading__title"><span>{{env('SITE_NAME')}} Holds</span> <span>for You</span></h2>
                    <p class="no-margin-bottom">Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish</p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($events as $event)
                <div class="col-md-6 col-lg-4">
                    <div class="event-item">
                        <div class="event-item__img"><img class="img--bg" src="{{asset($event->image)}}" alt="img"/></div>
                        <div class="event-item__content">
                            <h6 class="event-item__title"><a href="/events/{{$event->slug}}">{{$event->title}}</a></h6>
                            <p>{{$event->location}}</p>
                            <p><strong>{{Date::parse($event->startdate)->format('F, jS')}},</strong>
                                {{Date::parse($event->startdate)->format('h:i A') }}

                                -

                                <strong>{{Date::parse($event->enddate)->format('F, jS')}},</strong>
                                {{Date::parse($event->enddate)->format('h:i A') }}</p>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse
        </div>
        <div class="row">
            <div class="col-12 text-center"><a class="button button--primary" href="/events">View all events</a></div>
        </div>
    </div>
</section>
<!-- events end-->
