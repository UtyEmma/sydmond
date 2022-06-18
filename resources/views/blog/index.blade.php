<x-layout.index-2>
    <x-title>Blog | Sydmond Foundation</x-title>
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('site/img/blog.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="img/blog.jpg" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Compassion</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title"><?php print $siteName;?></span>
                                <h1 class="promo-primary__title"><span>Blog</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog start-->
        <section class="section blog background--brown"><img class="blog__bg" src="{{asset('site/img/events_inner-bg.png')}}" alt="img"/>
            <div class="container">
                <div class="row offset-margin">
                    @php
                        $count = 1;
                    @endphp

                    @forelse ($posts as $post)
                        @if ($count === 2 || $count === 3)
                            @include('components.blog.post-two')
                        @else
                            @include('components.blog.post-one')
                        @endif
                        @php
                            $count++;
                        @endphp
                    @empty
                        <div >
                            <h2>Sorry!</h2>
                            <h3>There are no Blog Posts available at this time</h3>
                        </div>
                    @endforelse
                </div>
                <div class="row">
                    <div class="col-12">
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </section>
        <!-- blog end-->
        <!-- bottom bg start-->
        <section class="bottom-background background--brown">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{-- <div class="bottom-background__img"><img src="{{asset('site/img/bottom-bg.png')}}" alt="img"/></div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- bottom bg end-->
    </main>
</x-layout.index-2>
