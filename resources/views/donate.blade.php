<x-layout.index-2>
    <x-title>Donate | Sydmond Foundation</x-title>
    <main class="main">
        <section class="promo-primary">
            <picture>
                <source srcset="{{asset('site/img/volunteer.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('site/img/donation_img.png')}}" alt="img"/>
            </picture>
            <div class="promo-primary__description"> <span>Donation</span></div>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <div class="align-container">
                            <div class="align-container__item"><span class="promo-primary__pre-title"><?php print $siteName;?></span>
                                <h1 class="promo-primary__title"><span></span> <span>Donate</span></h1>
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
                    <div class="col-lg-6 col-xl-6">
                        <div class="heading heading--primary"><span class="heading__pre-title">What we Do</span>
                            <h2 class="heading__title"><span>We Need</span> <span>Your Help</span></h2>
                        </div>
                        <p>Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p>
                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet.</p>
                        <p>Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch</p>
                    </div>

                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                        <div class="heading heading--primary"><span class="heading__pre-title">Support us through your donation</span>
                            <h2 class="heading__title"><span>Make an Online</span><span> Donation</span></h2>
                        </div>
                        <small class="text-danger">@if(session('error')) {{session('error')}} @endif</small>
                        <small class="text-success">@if(session('success')) {{session('success')}} @endif</small>
                        <form class="form user-form" action="/donate/pay" method="POST">
                            @csrf
                            <div class="row">
                                <input class="form__field" required type="text" name="name" placeholder="First Name"/>
                                <x-errors name="name" />
                                <input class="form__field" type="email" name="email" placeholder="E-mail"/>
                                <x-errors name="email" />
                                <input class="form__field" type="tel"  name="phone" placeholder="Phone Number"/>
                                <x-errors name="phone" />

                                <input class="form__field" type="number" name="amount" required placeholder="Amount (NGN)"/>
                                <x-errors name="amount" />
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="form__submit" type="submit">Donate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end-->
    </main>
</x-layout.index-2>
