<div class="col-md-6 col-lg-5 col-xl-4">
    <div class="blog-item blog-item--style-1">
        <div class="blog-item__img">
            <img class="img--bg" src="{{asset($post->image)}}" alt="img"/>
            {{-- <span class="blog-item__badge" style="background-color: #49C2DF;">Water Delivery</span> --}}
        </div>
        <div class="blog-item__content">
            <h6 class="blog-item__title"><a href="/news/{{$post->slug}}">{{$post->title}}</a></h6>
            <p>{{Str::words($post->excerpt, 20)}}</p>
            <div class="blog-item__details"><span class="blog-item__date">{{Date::parse($post->date)->format('jS M, Y')}}</span><span>
                {{-- <svg class="icon">
                    <use xlink:href="#comment"></use>
                </svg> 501</span>--}}
            </div>
        </div>
    </div>
</div>
