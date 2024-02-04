<?php $this->load->view('includes/header', ['title' => 'About']); ?>
<main class=" main">
    <!--==================== HOME ====================-->
    <section class="heli__home section" id="helicopter">
        <img src="assets/img/aboutus-bg.jpg" alt="about image" class="heli__home__bgImg">
        <div class="heli__home__bg">
            <h2 class="heli__home__title">About Us</h2>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about__us heli__section container section_second" id="about__us">
        <div class="row mt-5 mb-5">
            <div class="col-md-6">
                <div class="about_images position-relative">
                    <div class="about_image-1">
                        <span>12+ years of experiences</span>
                    </div>
                    <div class="about_image-2">
                        <img src="<?= base_url('assets/img/about-us.jpg'); ?>" alt="aboutus" class="about_image_main">
                    </div>
                </div>
            </div>
            <div class="col-md-6 about_text">
                <h5 style="color: #127384;">ABOUT OUR COMPANY</h5>
                <h3 class="position-relative">Best Solution For <span style="color: crimson;">Travel Services</span></h3>
                <p>Welcome to Indian Tour&Travels, where travel dreams come to life. We are passionate about exploration, adventure, and creating unforgettable memories for travelers just like you. Our journey began with a simple belief: that travel has the power to transform lives.</p>
                <p>Founded in 2012, Indian Tour&Travels was born out of a deep love for travel and a desire to share the beauty of the world with others. What started as a small team of explorers has grown into a dedicated family of travel enthusiasts who are committed to crafting exceptional travel experiences.</p>
                <div class="row about_points">
                    <div class="col-md-6"><i class="ri-checkbox-circle-fill"></i> <span>Expertise</span></div>
                    <div class="col-md-6"><i class="ri-checkbox-circle-fill"></i> <span>Personalized Service</span></div>
                    <div class="col-md-6"><i class="ri-checkbox-circle-fill"></i> <span>Safety and Comfort</span></div>
                    <div class="col-md-6"><i class="ri-checkbox-circle-fill"></i> <span>Sustainability</span></div>
                </div>
            </div>
        </div>
    </section>


    <!--==================== ATTORNEY ====================-->
    <section class="popular" id="popular">
        <div class="about__attorney">
            <div class="about__attorney__text">
                <h2 class="position-relative">Let's Meet Our <span style="color: crimson;">Attorney</span></h2>
                <p> Your Trusted Legal Advisor, Ready to Advocate for You with Expertise and Dedication. <br>Legal Solutions Await.</p>
            </div>
            <div class="popular__container container grid">
                <article class="popular__card">
                    <div class="popular__image">
                        <img src="<?= base_url('assets/img/attorney1.webp'); ?>" alt="popular image" class="attorney__img">
                        <div class="popular__shadow"></div>
                    </div>

                    <h2 class="popular__title">
                        Mukesh Ambani
                    </h2>

                    <div class="popular__location">
                        <span>Founder</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="<?= base_url('assets/img/attorney2.jpeg'); ?>" alt="popular image" class="attorney__img">
                        <div class="popular__shadow"></div>
                    </div>

                    <h2 class="popular__title">
                        Manoj Modi
                    </h2>

                    <div class="popular__location">
                        <span>Manager</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="<?= base_url('assets/img/attorney3.jpeg'); ?>" alt="popular image" class="attorney__img">
                        <div class="popular__shadow"></div>
                    </div>

                    <h2 class="popular__title">
                        Sajjan Jindal
                    </h2>

                    <div class="popular__location">
                        <span>Employee</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!--==================== ABOUT ====================-->

    <section class="about__numericData mt-5 mb-5" id="about__numericData">

        <div class="parent__about__numericData row">
            <div class="numericdata_heading col-md-12 mb-3">
                <h2 class="position-relative">Facts By The <span style="color: crimson;">Numbers</span></h2>
                <p class="text-center">Over delighted travelers have shared their glowing reviews, <br>a testament to our commitment to excellence in service and unforgettable experiences.</p>
            </div>
            <div class="col-md-2"></div>
            <div class="clients numeric__data col-md-2">
                <div class="count__data">
                    <h1 class="count1">1000</h1>
                    <h1>+</h1>
                </div>
                <span>Peoples Travel</span>
            </div>
            <div class="trips numeric__data col-md-2">
                <div class="count__data">
                    <h1 class="count2">50</h1>
                    <h1>+</h1>
                </div>
                <span>Trips Placed</span>
            </div>
            <div class="places numeric__data col-md-2">
                <div class="count__data">
                    <h1 class="count3">15</h1>
                    <h1>+</h1>
                </div>
                <span>Places Visited</span>
            </div>
            <div class="reviews numeric__data col-md-2">
                <div class="count__data">
                    <h1 class="count4">999</h1>
                    <h1>+</h1>
                </div>
                <span>Reviews Achevied</span>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>

    <!--==================== WHY CHOOSE US ====================-->
    <section class="choose" id="choose">
        <div class="warning__text container">
            <h2 class="position-relative">WHY CHOOSE <span style="color: crimson;">US ?</span></h2>
        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-5 d-flex justify-content-center align-items-baseline flex-md-column">
                    <div><span>Reasons of our success</span> </div>
                    <div>
                        <h2 style="border-bottom: 1px solid crimson; width:fit-content">WHY CHOOSE US ?</h2>
                    </div>
                    <div>
                        <p> Our first priority is to provide the best services to our clientele. To become one of the favored selections of our customers, we are working in a keen way. Owing to our quality services assured assortment to budget-friendly rates and keep everythings transparent with the clients, we have been applauded in the domain.</p>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 choose__points">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="ri-trophy-fill"></i>
                            <h6> TRANSPARENT SERVICES </h6>
                            <p>We keep everythings transparent with the clients and give the same as we said.</p>
                        </div>
                        <div class="col-md-6">
                            <i class="ri-money-pound-circle-fill"></i>
                            <h6>AFFORDABLE PRICE</h6>
                            <p>The cost of our Services are so affordable that fits your budget very nicely.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <i class="ri-user-3-fill"></i>
                            <h6>CUSTOMER SATISFACTION</h6>
                            <p>Our first motive is to provide 100% satisfaction to our clients with our sevices.</p>
                        </div>
                        <div class="col-md-6">
                            <i class="ri-truck-fill"></i>
                            <h6>VARIOUS PACKAGES</h6>
                            <p>We have a wide packages of tour so you can select any one according to your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================== WHY CHOOSE US ====================-->
    <section class="testimonials">
        <div class="row">
            <div class="col-md-12 testimonials_heading mb-4">
                <p style="color: #127384; margin-bottom: 2px;" class="text-center"><b>What People Say</b></p>
                <h2 class="position-relative text-center">Testimonials</h2>
            </div>
            <div class="testimonial_box_parent">
                <div class="col-md-3 testimonial_box">
                    <div class="row">
                        <div class="col-md-2 quotes_icon_div"><span><i class="ri-double-quotes-l quotes_icon"></i></span></div>
                        <div class="col-md-10"><p class="quote">Thank you for making it so easy. I really love the way I can view the itinerary and put payment info on the same page and much more!</p></div>
                        <div class="col-md-5 mt-3"><img src="<?= base_url('assets/img/santosh.jpg'); ?>" alt="testimonial" class="testimonial_img"></div>
                        <div class="col-md-7 mt-3">
                            <p><b>Dr. Santosh Kumar Vipparthi</b><br><small><i>regular customer</i></small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 testimonial_box">
                    <div class="row">
                        <div class="col-md-2 quotes_icon_div"><span><i class="ri-double-quotes-l quotes_icon"></i></span></div>
                        <div class="col-md-10"><p class="quote">I am so impressed that you would do such a thing as lower my ticket price when the fare dropped, even when I've already paid for it.</p></div>
                        <div class="col-md-5 mt-3"><img src="<?= base_url('assets/img/ashwani.jpg'); ?>" alt="testimonial" class="testimonial_img"></div>
                        <div class="col-md-7 mt-3">
                            <p><b>Dr. Ashwani Sharma</b><br><small><i>regular customer</i></small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 testimonial_box">
                    <div class="row">
                        <div class="col-md-2 quotes_icon_div"><span><i class="ri-double-quotes-l quotes_icon"></i></span></div>
                        <div class="col-md-10"><p class="quote">I found your web site very easy to use. The entire process was very quick, and the price of my ticket was very affordable.</p></div>
                        <div class="col-md-5 mt-3"><img src="<?= base_url('assets/img/mahendra.jpeg'); ?>" alt="testimonial" class="testimonial_img"></div>
                        <div class="col-md-7 mt-3">
                            <p><b>Dr. Mahendra Sakare</b><br><i><small>regular customer</small></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php $this->load->view('includes/footer'); ?>

</body>

</html>