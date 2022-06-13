<!-- aside dropdown start-->
<div class="aside-dropdown">
    <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
        <div class="aside-dropdown__item d-lg-none d-block">
            <ul class="aside-menu">
                <li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active">
                    <ul class="aside-menu__sub-list">
                        <li class="item--active"><a href="./"><span>Home</span></a></li>
                    </ul>
                </li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="about"><span>About</span></a></li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="faq"><span>FAQs</span></a></li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="gallery"><span>Gallery</span></a></li>
                <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>News/Event</span></a>
                    <ul class="aside-menu__sub-list">
                        <li><a href="new"><span>News</span></a></li>
                        <li><a href="events"><span>Events</span></a></li>
                    </ul>
                </li>
                <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Membership</span></a>
                    <ul class="aside-menu__sub-list">
                        <li><a href="team"><span>Members</span></a></li>
                        <li><a href="membership-category"><span>Membership Category</span></a></li>
                        <li><a href="benefits-of-members"><span>Benefits Of Members</span></a></li>
                        <li><a href="membership-application-form"><span>Membership Application Form</span></a></li>
                        <li><a href="volunteer-opportunities"><span>Volunteer Opportunities</span></a></li>
                    </ul>
                </li>
                <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Programmes</span></a>
                    <ul class="aside-menu__sub-list">
                        <li><a href="awareness"><span>Awareness</span></a></li>
                        <li><a href="research"><span>Research</span></a></li>
                        <li><a href="fund-raising"><span>Fund Raising</span></a></li>
                    </ul>
                </li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="contacts"><span>Contact Us</span></a></li>
            </ul>
        </div>
        <div class="aside-dropdown__item">
            <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:<?php print $siteEmail;?>"><?php print $siteEmail;?></a></div>
            <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:<?php print $sitePhone;?>"><?php print $sitePhone;?></a><a class="aside-inner__link" href="tel:<?php print $sitePhone;?>"><?php print $sitePhone;?></a></div>
            <ul class="aside-socials">
                <li class="aside-socials__item"><a class="aside-socials__link" href="https://instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link" href="https://facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="aside-dropdown__item"><a class="button button--squared" href="donate"><span>Donate</span></a></div>
    </div>
</div>
<!-- aside dropdown end-->
<!-- header start-->
<header class="header header--inner">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-between">
            <div class="col-auto d-flex align-items-center">
                <div class="dropdown-trigger dropdown-trigger--inner d-none d-sm-block">
                    <div class="dropdown-trigger__item"></div>
                </div>
                <div class="header-logo"><a class="header-logo__link" href="./"><img class="header-logo__img" src="img/logo_dark.png" alt="logo"/></a></div>
            </div>
            <div class="col-auto">
                <!-- main menu start main-menu--inner-->
                <nav>
                    <ul class="main-menu main-menu--inner">
                        <!--<li class="main-menu__item main-menu__item--active"><a class="main-menu__link" href="./"><span>Home</span></a>
                        </li>-->
                        <li class="main-menu__item"><a class="main-menu__link" href="about"><span>About</span></a>
                        </li>
                        <li class="main-menu__item"><a class="main-menu__link" href="faq"><span>FAQs</span></a>
                        </li>
                        <li class="main-menu__item"><a class="main-menu__link" href="gallery"><span>Gallery</span></a>
                        </li>
                        <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>News/Events</span></a>
                            <ul class="main-menu__sub-list">
                                <li><a href="news"><span>News</span></a></li>
                                <li><a href="events"><span>Events</span></a></li>
                            </ul>
                        </li>
                        <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>Membership</span></a>
                            <ul class="main-menu__sub-list">
                                <li><a href="team"><span>Members</span></a></li>
                                <li><a href="membership-category"><span>Membership Category</span></a></li>
                                <li><a href="benefits-of-members"><span>Benefits Of Members</span></a></li>
                                <li><a href="membership-application-form"><span>Membership Application Form</span></a></li>
                                <li><a href="volunteer-opportunities"><span>Volunteer Opportunities</span></a></li>
                            </ul>
                        </li>
                        <li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>Programmes</span></a>
                            <ul class="main-menu__sub-list">
                                <li><a href="awareness"><span>Awareness</span></a></li>
                                <li><a href="research"><span>Research</span></a></li>
                                <li><a href="fund-raising"><span>Fund Raising</span></a></li>
                                <li><a href="donors"><span>Donors</span></a></li>
                            </ul>
                        </li>
                        <!--<li class="main-menu__item"><a class="main-menu__link" href="contact"><span>Contacts</span></a></li>-->
                    </ul>
                </nav>
                <!-- main menu end-->
            </div>
            <div class="col-auto d-flex align-items-center">
                <!-- lang select start-->
                <ul class="lang-select lang-select--inner">
                    <li class="lang-select__item lang-select__item--active"><span>En</span>
                        <ul class="lang-select__sub-list">
                            <li><div  id="google_translate_element"></div></li>
                        </ul>
                    </li>
                </ul>
                <!-- lang select end-->
                <div class="dropdown-trigger d-block d-sm-none">
                    <div class="dropdown-trigger__item"></div>
                </div><a class="button button--squared" href="donate"><span>Donate</span></a>
            </div>
        </div>
    </div>
</header>
<!-- header end-->
