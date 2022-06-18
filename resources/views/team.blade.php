<x-layout.index-2>
    <x-title>Team | Sydmond Foundation</x-title>
    <main class="main">
        <section class="promo-primary promo-primary--elements">
            <picture>
                <source srcset="{{asset('site/img/alerts.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('site/img/alerts.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Our Team</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                                <h1 class="promo-primary__title"><span>Team</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section elements">
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <h4 class="elements__title">Our Team Members</h4>
                    </div>
                </div>
                <div class="row">
                    @forelse ($team as $team_member)
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="team-item team-item--rounded">
                                <ul class="team-item__socials">
                                    <li class="item--active"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="team-item__img-holder"><img class="img--layout" src="{{asset('site/img/team_1.png')}}" alt="layout"/>
                                    <div class="team-item__img"><img class="img--bg" src="{{asset($team_member->image)}}" alt="teammate"/></div>
                                </div>
                                <div class="team-item__description">
                                    <div class="team-item__name">{{$team_member->name}}</div>
                                    <div class="team-item__position">{{$team_member->role}}</div>
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </section>
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
