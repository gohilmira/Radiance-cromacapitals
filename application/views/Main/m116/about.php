
    <!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">About Company</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <p>How <?= $this->conn->company_info('company_name');?> Works</p>
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="<?= $panel_url;?>assets/images/banner/inner-bg.png" alt="banner" class="shape shape1">
            <img src="<?= $panel_url;?>assets/images/banner/inner-thumb.png" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Brand Section Starts Here -->
    <div class="padding-top padding-bottom">
        <!-- <div class="container">
            <div class="brand__slider">
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="<?= $panel_url;?>assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="<?= $panel_url;?>assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="<?= $panel_url;?>assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="<?= $panel_url;?>assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="<?= $panel_url;?>assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Brand Section Ends Here -->


    <!-- Feature Two Section Starts Here -->
    <section class="feature-section padding-bottom">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <div class="section__header m-0">
                        <h2 class="section__header-title">Let`s Go for Investment & Get Your Profit</h2>
                        <span class="d-block">Get involved in our tremendous platform and Invest. We will utilize your money and give you profit in your wallet automatically. </span>
                        <a href="<?= base_url();?>register" class="cmn--btn mt-4">Register</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gy-sm-5 gy-4 gx-xl-5 h-100 justify-content-between">
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two style--two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-coins"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Get More Profit</h3>
                                    <p>you can increase your income by simply refer a few people.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two style--two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-headset"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">24/7 Support</h3>
                                    <p>We provide 24/7 customer support through e-mail and telegram.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two style--two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-shield-alt"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Strong Protection </h3>
                                    <p>We are working hard constantly to improve the level of our security </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <div class="feature__item__two style--two">
                                <div class="feature__item__two-thumb">
                                    <i class="las la-user-check"></i>
                                </div>
                                <div class="feature__item__two-content">
                                    <h3 class="title mb-2">Relability</h3>
                                    <p>Our company conducts absolutely legal activities in the legal field. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Two Section Ends Here -->


    <!-- Plan Section Starts Here -->
    <section class="plan-section padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Our Investment Plan</h2>
                        <p class="text-muted">To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</p>
                    </div>
                </div>
            </div>
            <div class="plan__slider">
                <div class="single-slide">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h6 class="plan-parcent">Slivesto</h6>
                            <p class="plan-parcent-info">5%</p>
                            <p class="plan-parcent-info">After 6 Hours</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> FOREVER</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h6 class="plan-parcent">Platinum</h6>
                            <p class="plan-parcent-info">69%</p>
                            <p class="plan-parcent-info">Hourly</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> FOR 8 HOURS</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h6 class="plan-parcent">Gold</h6>
                            <p class="plan-parcent-info">120%</p>
                            <p class="plan-parcent-info">Hourly</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> After 3 Months</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="single-slide">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">200%</h2>
                            <p class="plan-parcent-info">After 6 Hours</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> After 6 Months</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="single-slide">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">250%</h2>
                            <p class="plan-parcent-info">After 8 Hours</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> FOREVER</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Plan Section Ends Here -->


    <!-- Referral Section Starts Here -->
    <section class="referral-section padding-top padding-bottom section-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 align-self-end d-none d-lg-block">
                    <div class="section__thumb rtl me-5">
                        <img src="<?= $panel_url;?>assets/images/referral/thumb.png" alt="referral">
                        <div class="shapes">
                            <img src="<?= $panel_url;?>assets/images/referral/clock.png" alt="referral" class="shape shape1">
                            <img src="<?= $panel_url;?>assets/images/referral/man.png" alt="referral" class="shape shape2">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__header">
                        <h2 class="section__header-title">How G-Globe Works</h2>
                        <p>Get involved in our tremendous platform and Invest. We will utilize your money and give you profit in your wallet automatically.</p>
                    </div>
                    <a href="<?= base_url();?>register" class="cmn--btn">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Referral Section Ends Here -->


    <!-- Investor Section Starts Here -->
     <section class="investor-section padding-top padding-bottom">
      <!--  <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Our Best Investor</h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-5">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="<?= $panel_url;?>assets/images/investor/investor1.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Robart Williams</h3>
                            <p class="invest-amount">Invest 250 USD</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="<?= $panel_url;?>assets/images/investor/investor2.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Munna Ahmed</h3>
                            <p class="invest-amount">Invest 350 USD</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="<?= $panel_url;?>assets/images/investor/investor3.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Maliha Mahtab</h3>
                            <p class="invest-amount">Invest 450 USD</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="<?= $panel_url;?>assets/images/investor/investor4.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Taposhi Ahmed</h3>
                            <p class="invest-amount">Invest 550 USD</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- Investor Section Ends Here -->


    <!-- Faq Section Starts Here -->
    <section class="faq-section padding-bottom overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="section__header mb-0">
                        <h2 class="section__header-title">What Your Want to Know About Us ?</h2>
                        <div class="faq__wrapper">
                            <div class="faq__item style--two">
                                <div class="faq__item-title">
                                    <h4 class="title">Why You should become an Investor?</h4>
                                </div>
                                <div class="faq__item-content">
                                    <p> Investing is an effective way to put your money to work and potentially build wealth.</p>
                                </div>
                            </div>
                            <div class="faq__item style--two">
                                <div class="faq__item-title">
                                    <h4 class="title">Why You Choose Us?</h4>
                                </div>
                                <div class="faq__item-content">
                                    <p>services can include several benefits, such as: Increased wealth: Investment firms can set up a low-risk investment strategy that helps improve your wealth holdings or retirement funds.</p>
                                </div>
                            </div>
                            <div class="faq__item style--two open active">
                                <div class="faq__item-title">
                                    <h4 class="title">What is G-Globe  Investment?</h4>
                                </div>
                                <div class="faq__item-content">
                                    <p>The main business of G-Globe investment company is to hold and manage securities for investment purposes.</p>
                                </div>
                            </div>
                            <div class="faq__item style--two">
                                <div class="faq__item-title">
                                    <h4 class="title">How to do we work?</h4>
                                </div>
                                <div class="faq__item-content">
                                    <p>G-Globe invest on behalf of the investors and share the profit and losses with them in proportion to the investor's share of interest.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="section__thumb ">
                        <img src="<?= $panel_url;?>assets/images/faq/thumb.png" alt="download">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Section Ends Here -->
