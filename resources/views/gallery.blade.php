<x-layout.index-2>
    <x-title>Gallery | Sydmond Foundation</x-title>

    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('site/img/typography.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('site/img/typography.jpg')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Gallery</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title"><?php print $siteName;?></span>
                                <h1 class="promo-primary__title"><span>In</span> <span>Photos</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery start-->
        <section class="section gallery">
            <div class="row no-gutters gallery-masonry">
                @forelse ($gallery as $image)
                    <div class="col-6 col-md-4 gallery-masonry__item category_1">
                        <a class="gallery-masonry__img gallery-masonry__item--height-2" href="{{asset($image->image)}}" data-fancybox="gallery"><img class="img--bg" src="{{asset($image->image)}}" alt="img"/>
                            <h6 class="gallery-masonry__description">
                                {{$image->title}}
                                <p style="font-size: 14px; font-weight: normal;">{{$image->description}}</p>
                            </h6>
                        </a>
                    </div>
                @empty
                    <x-notfound item="Images" />
                @endforelse
            </div>
            <div class="container">
                <div class="mt-4 d-flex justify-content-center">
                    <div>
                        {{$gallery->links()}}
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery end-->
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
