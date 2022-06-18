<div class="col-md-6 col-lg-7 col-xl-8">
    <div class="blog-item blog-item--style-2"><img class="img--bg" src="{{asset($post->image)}}" alt="img"/>
        <div class="blog-item__content">
            {{-- <span class="blog-item__badge" style="background-color: #2EC774;">Education</span> --}}
            <h6 class="blog-item__title"><a href="/news/{{$post->slug}}">{{$post->title}}</a></h6>
            <p>{{Str::words($post->excerpt, 30)}}</p>
        </div>
        <div class="blog-item__details"><span class="blog-item__date">{{Date::parse($post->date)->format('jS, M Y')}}</span><span>
            {{-- <svg class="icon">
                <use xlink:href="#comment"></use>
            </svg> 501</span></div> --}}
    </div>
</div>
