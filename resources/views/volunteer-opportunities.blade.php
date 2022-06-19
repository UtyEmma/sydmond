<x-layout.index>
    <x-title>Volunteer Opportunities | Sydmond Foundation</x-title>

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
                                <h1 class="promo-primary__title"><span>Become</span> <span>a Volunteer</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section start-->
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5">
                        <div class="img-box"><img class="img--layout" src="{{asset('site/img/about_layout-reverse.png')}}" alt="img"/>
                            <div class="img-box__img"><img class="img--bg" src="{{asset('site/img/img_box-1.jpg')}}" alt="img"/></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 offset-xl-1">
                        <div class="heading heading--primary"><span class="heading__pre-title">What we Do</span>
                            <h2 class="heading__title"><span>We Need</span> <span>Your Help</span></h2>
                        </div>
                        <p>Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet.</p>
                        <p>Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end-->
        <!-- section start-->
        <section class="section forms-section no-padding-top no-padding-bottom">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-lg-6">
                        <div class="heading heading--primary"><span class="heading__pre-title">Fill Form and Beacame Volonteer</span>
                            <h2 class="heading__title"><span>Complete</span> <span>the Form</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p>Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch		</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form class="form user-form" action="/membership-apply"  method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="name" placeholder="First Name"/>
                                    <input class="form__field" type="email" name="email" placeholder="E-mail"/>
                                    <input class="form__field" type="tel" name="phone" placeholder="Phone Number"/>
                                </div>
                                <input type="text" value="volunteer" name="type" hidden readonly>
                                <div class="col-lg-6">
                                    <input class="form__field" type="date" name="dob" placeholder="Date of Birth"/>
                                    <input class="form__field" type="tel" name="address" placeholder="Address"/>
                                    <input class="form__field" name="occupation" placeholder="Occupation" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="form__submit" type="submit">Submit	</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><img class="forms-section__bg" src="{{asset('site/img/volunteer-2.png')}}" alt="img"/>
        </section>
        <!-- section end-->
    </main>
</x-layout.index>
