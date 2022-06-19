<x-layout.index-2>
    <x-title>Membership Application | Sydmond Foundation</x-title>
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
                                <h1 class="promo-primary__title"><span>Membership </span> <span>Application</span></h1>
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
                    <div class="col-lg-12">
                        <div class="heading heading--primary"><span class="heading__pre-title">Community a Officer – Mr Charity</span>
                            <h2 class="heading__title"><span>Application Form</span></h2>
                            <form class="form user-form" action="/membership-apply"  method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input class="form__field" type="text" name="name" placeholder="First Name"/>
                                        <input class="form__field" type="email" name="email" placeholder="E-mail"/>
                                        <input class="form__field" type="tel" name="phone" placeholder="Phone Number"/>
                                    </div>
                                    <input type="text" value="member" name="type" readonly hidden>
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
                </div>
            </div>
        </section>

        <section class="bottom-background background--brown">
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
