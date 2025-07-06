<!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Get in Touch With us</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="#">Home</a>//</li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="<?= $panel_url;?>assets/images/banner/inner-bg.png" alt="banner" class="shape shape1">
            <img src="<?= $panel_url;?>assets/images/banner/inner-thumb.png" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Contact Section Starts Here -->
    <div class="contact-section">
        <div class="container">
            <div class="row padding-top padding-bottom gy-4 justify-content-center">
                <div class="section__header text-center">
                    <h3 class="section__header-title">Contact With Us</h3>
                    <p class="text-muted">If you have any questions or queries that are not answered on our website,<BR> please feel free to contact us. We will try to respond to you as soon as possible. Thank you so much.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact__info__item plan__item">
                        <div class="icon">
                            <i class="las la-map-marker"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Office Address</h3>
                            <p> <?= $this->conn->company_info('company_address');?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact__info__item plan__item">
                        <div class="icon">
                            <i class="las la-envelope-open-text"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Email Address</h3>
                            <ul class="contacts">
                                <li><a href="https://template.viserlab.com/cdn-cgi/l/email-protection#157170787a557278747c793b767a78"><span class="__cf_email__" data-cfemail="234b464f4f4c0d405a41465163444e424a4f0d404c4e"> <?= $this->conn->company_info('company_email');?></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact__info__item plan__item">
                        <div class="icon">
                            <i class="las la-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Phone Number</h3>
                            <ul class="contacts">
                                <li><a href="tel:<?= $this->conn->company_info('company_mobile');?>"><?= $this->conn->company_info('company_mobile');?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative map__area">
            <div class="container padding-top padding-bottom contact__area">
                <div class="contact__form__wrapper mx-auto me-lg-0">
                    <h3 class="title">Send Your Messages</h3>
                    <form class="contact__form form" id="contact_form_submit" action="#">
                        <div class="form-group">
                            <input type="text" class="form-control form--control" placeholder="Full Name" name="contact_name" id="contact_name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form--control" name="contact_email" placeholder="Email" id="contact_email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form--control" name="contact_message" placeholder="Write Your Messages" id="contact_message"></textarea>
                        </div>
                        <button type="submit" class="cmn--btn btn">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="map__wrapper">
                <div class="overlay01"></div>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4340.214604426607!2d90.39243230460072!3d23.830298940050135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1638968781774!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!-- Contact Section Ends Here -->

