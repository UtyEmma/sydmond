<!-- projects start-->
        <section class="section projects no-padding-top no-padding-bottom">
            <div class="container">
                <div class="row align-items-end margin-bottom">
                    <div class="col-lg-9">
                        <div class="heading heading--primary"><span class="heading__pre-title">What we Do</span>
                            <h2 class="heading__title"><span>{{env('SITE_NAME')}}</span> <span>Key Areas</span></h2>
                            {{-- <p class="no-margin-bottom">Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish </p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters projects-masonry">
                @php
                    $count = 1;
                @endphp
                @foreach ($programs as $program)
                    @if ($count === 1)
                        <div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--vertical">
                            <div class="projects-masonry__img">
                                <img class="img--bg" src="{{asset($program->image)}}" alt="img"/>
                                <div class="position-absolute" style="top: 0; right: 0; left: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 0;"></div>
                            </div>
                            <div class="projects-masonry__text" style="background-color: #2EC774;">
                                <div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #49C2DF;">{{$program->subtitle}}</span>
                                    <h3 class="projects-masonry__title"> <a href="/programs/{{$program->slug}}">{{$program->title}} </a></h3>
                                    <p>{!! Str::words($program->content, 10) !!}</p>
                                </div>
                            </div>
                        </div>
                    @elseif ($count === 2)
                        <div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
                            <div class="projects-masonry__img"><img class="img--bg" src="{{asset($program->image)}}" alt="img"/>
                                <div class="position-absolute" style="top: 0; right: 0; left: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 0;"></div>
                            </div>
                            <div class="projects-masonry__text" style="background-color: #9BC35E;">
                                <div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F36F8F;">{{$program->subtitle}}</span>
                                    <h3 class="projects-masonry__title"> <a href="/programs/{{$program->slug}}">{{$program->title}} </a></h3>
                                    <p>{!! Str::words($program->content, 10) !!}</p>
                                </div>
                            </div>
                        </div>
                    @elseif ($count === 3)
                        <div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--primary">
                            <div class="projects-masonry__img"><img class="img--bg" src="{{asset($program->image)}}" alt="img"/>
                                <div class="position-absolute" style="top: 0; right: 0; left: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 0;"></div>
                                <div class="projects-masonry__inner" style="z-index: 11;"><span class="projects-masonry__badge" style="background: #F8AC3A;">{{$program->subtitle}}</span>
                                    <h3 class="projects-masonry__title"> <a href="/programs/{{$program->slug}}">{{$program->title}} </a></h3>
                                    <p>{!! Str::words($program->content, 10) !!}</p>
                                </div>
                            </div>
                        </div>
                    @elseif ($count === 4)
                        <div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                            <div class="projects-masonry__img">
                                <div class="position-absolute" style="top: 0; right: 0; left: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 0;"></div>
                                <img class="img--bg" src="{{asset($program->image)}}" alt="img"/>
                                <div class="projects-masonry__inner" style="z-index: 11;"><span class="projects-masonry__badge" style="background: #2EC774;">{{$program->subtitle}}</span>
                                    <h3 class="projects-masonry__title"> <a href="/programs/{{$program->slug}}">{{$program->title}}</a></h3>
                                    <p>{!! Str::words($program->content, 10) !!}</p>
                                </div>
                            </div>
                        </div>
                    @elseif ($count === 5)
                        <div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
                            <div class="projects-masonry__img">
                                <img class="img--bg" src="{{asset($program->image)}}" alt="img"/>
                                <div class="position-absolute" style="top: 0; right: 0; left: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 0;"></div>
                            </div>
                            <div class="projects-masonry__text" style="background-color: #E78F51;">
                                <div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #2EC774;">{{$program->subtitle}}</span>
                                    <h3 class="projects-masonry__title"> <a href="/programs/{{$program->slug}}">{{$program->title}} </a></h3>
                                    <p>{!! Str::words($program->content, 10) !!}</p>
                                </div>
                            </div>
                        </div>
                    @elseif ($count === 6)
                        <div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                            <div class="projects-masonry__img">

                                <div class="position-absolute" style="top: 0; right: 0; left: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 0;"></div>
                                <img class="img--bg" src="{{asset($program->image)}}" alt="img"/>
                                <div class="projects-masonry__inner" style="z-index: 11;"><span class="projects-masonry__badge" style="background: #F36F8F;">{{$program->subtitle}}</span>
                                    <h3 class="projects-masonry__title"> <a href="/programs/{{$program->slug}}">{{$program->title}} </a></h3>
                                    <p>{!! Str::words($program->content, 10) !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{ $count++}}
                @endforeach
            </div>
        </section>
