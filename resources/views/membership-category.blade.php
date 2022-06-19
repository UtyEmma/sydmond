<x-layout.index-2>
    <x-title>Membership Categories | Sydmond Foundation</x-title>
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
                            <div class="align-container__item"><span class="promo-primary__pre-title"><?php print $siteName;?></span>
                                <h1 class="promo-primary__title"><span>Membership</span> <span>Categories</span></h1>
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
                    @forelse ($categories as $category)
                        <div class="col-lg-6 col-xl-6">
                            <div class="heading heading--primary">
                                <h2 class="heading__title"><span>{{$category->category}}</span></h2>

                                <div>
                                    {!! $category->description !!}
                                </div>
                            </div>
                        </div>
                    @empty
                        <h2>Sorry!</h2>
                        <h3>There are no Categories to display</h3>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="bottom-background ">
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
