<x-layout.index-2>
    <x-title>Blog Post | Sydmond Foundation</x-title>
    <main class="main">
        <section class="promo-primary">
            <div class="" style="position: absolute; left: 0; right: 0; bottom: 0; top: 0; background: rgba(0, 0, 0, 0.808);"></div>
            <picture>
                <source srcset="{{asset($post->image)}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset($post->image)}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Compassion</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title"><?php print $siteName;?></span>
                                <h1 class="promo-primary__title"><span>{{$post->title}}</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog post start-->
        <section class="section blog-post">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="blog-post__top">
                            <div class="blog-post__img"><img class="img--bg" src="{{asset($post->image)}}" alt="img"/></div>
                            <div class="blog-post__description">
                                <div class="row">
                                    <div class="col-6"><span class="blog-post__name">{{$post->author}}</span></div>
                                    <div class="col-6 text-right"><span class="blog-post__date">{{Date::parse($post->date)->format('jS, M Y')}}</span><span>
                                        {{-- <svg class="icon">
                                            <use xlink:href="#comment"></use>
                                        </svg> 5</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="blog-post__title">{{$post->title}}</h5>

                        <div>
                            {!! $post->content !!}
                        </div>

                        <div class="blog-post__details">
                            <div class="row align-items-center">
                                <div class="col-lg-3 text-center text-lg-left"><span class="blog-post__name">{{$post->author}}</span></div>
                                <div class="col-lg-6 text-center">
                                    <div class="tags">
                                        @if ($post->tags)
                                            @forelse (json_decode($post->tags) as $tag)
                                                <a class="blog-post__tag" href="#">#{{$tag}}</a>
                                            @empty
                                            @endforelse
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="blog-post__socials">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-lg-3">


                        @if ($recent->isNotEmpty())
                            <h6 class="blog-post__title">Recent Posts</h6>
                            <div class="recent-posts">
                                @forelse ($recent as $post)
                                    <div class="recent-posts__item">
                                        <div class="recent-posts__item-img"><img class="img--bg" src="{{asset($post->image)}}" alt="img"/></div>
                                        <div class="recent-posts__item-description"><a class="recent-posts__item-link" href="{{$post->slug}}">{{$post->title}}</a><span class="recent-posts__item-value"></span>{{Date::parse($post->date)->format('jS, M Y')}}</div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        @endif

                        <h6 class="blog-post__title">Tags</h6>
                        <div class="tags">
                            @if ($post->tags)
                                @forelse (json_decode($post->tags) as $tag)
                                    <a class="tags__item" href="#">{{ucfirst($tag)}}</a>
                                @empty
                                @endforelse
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog post end-->
        <!-- section start-->
        <section class="section background--brown">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-12">
                        <div class="heading heading--primary">
                            <h2 class="heading__title no-margin-bottom"><span>Suggested</span> <span>for you</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row offset-margin">
                    @forelse ($suggested as $post)
                        @include('components.blog.post-one')
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
        <!-- section end-->
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
