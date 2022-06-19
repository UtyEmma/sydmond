        <!-- testimonials style-2 start-->
        <section class="section testimonials--style-2">
            <div class="testimonials--style-2__bg jarallax">
                <picture>
                    <source srcset="{{asset('site/img/testimonials_2.jpg')}}" media="(min-width: 992px)"/><img class="jarallax-img" src="{{asset('img/testimonials_2.jpg')}}" alt="img"/>
                </picture>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="heading heading--primary"><span class="heading__pre-title">Testimonials</span>
                            <h2 class="heading__title"><span>What People</span><br/><span>Says About Us</span></h2>
                        </div>
                        <!-- slider nav start-->
                        <div class="slider__nav testimonials-style-2__nav">
                            <div class="slider__arrows">
                                <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </div>
                                <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <!-- slider nav end-->
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonials-slider testimonials-slider--style-2">
                            @forelse ($testimonials as $testimonial)
                                <div class="testimonials-slider__item">
                                    <div class="testimonials-slider__icon">“</div>
                                    <div class="testimonials-slider__text">
                                        <p>{!! $testimonial->message !!}</p>
                                        <div class="testimonials-slider__author"><span class="testimonials-slider__name">{{$testimonial->name}}, </span><span class="testimonials-slider__position">{{$testimonial->occupation}}</span></div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials style-2 end-->
