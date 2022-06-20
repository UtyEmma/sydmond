<!-- donors inner start-->
<section class="section donors-inner"><img class="donors-inner__bg" src="{{asset('site/img/donors_inner.png')}}" alt="img"/>
    <div class="container">
        <div class="row margin-bottom">
            <div class="col-12">
                <div class="heading heading--primary heading--center"><span class="heading__pre-title">Donors</span>
                    <h2 class="heading__title"><span>Who Help</span> <span>Us</span></h2>
                    {{-- <p>Tackling the necessity of safe water for all requires a cooperative and worldwide effort. Many philanthropists have chosen to take action in support of safe water by donating in support of One Drop's projects.</p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- donors slider start-->
                <div class="slider-holder">
                    <div class="donors-slider donors-slider--style-2 offset-margin">

                        @foreach ($donors as $donor)
                            @if ($donor->image)
                                <div class="donors-slider__item">
                                    <div class="donors-slider__img"><img src="{{asset($donor->image)}}" alt="donor"/></div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!-- donors slider end-->
            </div>
        </div>
    </div>
</section>
<!-- donors inner end-->
