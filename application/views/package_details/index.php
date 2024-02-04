<?php $this->load->view('includes/header', ['title' => 'Package Details']); ?>
<main class=" main">
    <!--==================== HOME ====================-->

    <section class="heli__home section" id="helicopter">
        <img src="assets/img/package.jpg" alt="image" class="heli__home__bgImg">
        <div class="heli__home__bg">
            <h2 class="heli__home__title">Packages :</h2>
        </div>
    </section>
    <!--==================== Details ====================--> 
    <section class="details container section_second">
        <div class="little__info">
            <h3 class="text-center">About Packages</h3>
            <div class="row mt-5">
                <div class="col-md-7 d-flex align-items-baseline flex-column">
                    <div class="packages_heading_text">
                        <h3>Indian Tour&Travels - <span style="color: crimson;">UTTARAKHAND</span> </h3>
                    </div>
                    <div class="mt-3">
                        <p style="font-size: 15px;">Along with coffee/tea in a common area, this aparthotel has 24-hour room service and free valet parking. Free WiFi in public areas and a free manager's reception are also provided. 
                        The apartment boasts a fireplace and offers free WiFi and a kitchen. Comforts include premium bedding and a down comforter, and guests will also find conveniences, such as a sofa bed and a dining area. 
                        This Ahmedabad aparthotel provides complimentary wireless Internet access. Business-friendly amenities include desks, complimentary newspapers and telephones. Additionally, rooms include coffee/tea makers and an iron/ironing board. 
                        Housekeeping is provided on a daily basis.</p>
                    </div>
                    <div class="points mt-1">
                        <p>
                            <b><i class="ri-check-line"></i></b> <span><i>A complimentary manager's reception is offered every day.</i></span>
                        </p>
                        <p>
                            <b><i class="ri-check-line"></i></b> <span><i>This aparthotel offers 40 forms of accommodation with fireplaces and a safe.</i></span>
                        </p>
                        <p>
                            <b><i class="ri-check-line"></i></b> <span><i>Comforts include premium bedding and a down comforter.</i></span>
                        </p>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <div class="swiper_new">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide package_slides">
                                <img src="<?= base_url('assets/img/package/uttrakhand-1.jpg'); ?>" alt="image">
                            </div>
                            <div class="swiper-slide package_slides">
                                <img src="<?= base_url('assets/img/package/uttrakhand-2.jpg'); ?>" alt="image">
                            </div>
                            <div class="swiper-slide package_slides">
                                <img src="<?= base_url('assets/img/package/uttrakhand-3.jpg'); ?>" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="plans__list">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="plans__list__head text-center position-relative">
                        <h3>Explore Our <span style="color: crimson;">Locations</span></h3>
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <div class="location-names-div">
                        <div class="location-names active" data-name="uttarakhand">uttrakhand</div>
                        <div class="location-names" data-name="rajasthan">Rajasthan</div>
                        <div class="location-names" data-name="goa">Goa</div>
                        <div class="location-names" data-name="kerala">Kerala</div>
                        <div class="location-names" data-name="manali">Manali</div>
                        <div class="location-names" data-name="gujrat">Gujrat</div>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center flex-column align-items-center" id="price-card-body">
                    <?php foreach ($data['list'] as $row) { ?>
                        <div class="price-card mb-3">
                            <div class="row">
                                <div class="col-md-6 price-card-img">
                                    <img src="<?= base_url($row['image']); ?>" alt="image">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="package-info ms-4">
                                        <h4><?= $row['name'] ?></h4>
                                        <div class="rating mb-3">
                                            <div class="d-inline-block me-3">
                                                <span><i class="ri-star-fill"></i></span>
                                                <span><i class="ri-star-fill"></i></span>
                                                <span><i class="ri-star-fill"></i></span>
                                                <span><i class="ri-star-fill"></i></span>
                                                <span><i class="ri-star-half-line"></i></span>
                                            </div>
                                            <span><?= $row['reviews'] ?> CUSTOMER REVIEWS</span>
                                        </div>
                                        <div class="duration">
                                            <span class="me-3"><i class="ri-time-fill"></i></span>
                                            <span><?= $row['time'] ?></span>
                                        </div>
                                        <div class="type">
                                            <span class="me-3"><i class="ri-shield-star-fill"></i></span>
                                            <span>Deluxe Premium Package</span>
                                        </div>
                                        <div class="conditions">
                                            <span class="me-3"><i class="ri-check-line"></i></span>
                                            <span><?= $row['condition'] ?></span>
                                        </div>
                                        <div class="price">
                                            <span class="me-3"><i class="ri-money-dollar-circle-line"></i></span>
                                            <span>Affordable Price</span>
                                        </div>
                                        <div class="book-now mt-3">
                                            <button class="join__button button" type="button" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                                BOOK NOW <i class="ri-arrow-right-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rate text-center">
                                <span><?= $row['price'] ?></span> <br>
                                <span>PER PERSON</span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container section-third mb-5">
        <div class="hiw_container position-relative">
            <img src="<?= base_url('assets/img/package/hiw-line.svg'); ?>" alt="line" class="hiw_line">
            <div class="text-center mb-5 hiw_container_head">
                <h3>How it work - <span style="color: crimson;">Keep calm & travel on</span></h3>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center align-items-center flex-column">
                    <img src="<?= base_url('assets/img/package/hiw-1.png'); ?>" alt="relax" class="hiw">
                    <div class="text-center hiw_text">
                        <h5>Book & relax</h5>
                        <p>Let each trip be an inspirational journey, each room a peaceful space</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center flex-column">
                    <img src="<?= base_url('assets/img/package/hiw-2.png'); ?>" alt="checklist" class="hiw">
                    <div class="text-center">
                        <h5>Smart checklist</h5>
                        <p>Let each trip be an inspirational journey, each room a peaceful space</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center flex-column">
                    <img src="<?= base_url('assets/img/package/hiw-3.png'); ?>" alt="savemore" class="hiw">
                    <div class="text-center">
                        <h5>Save more</h5>
                        <p>Let each trip be an inspirational journey, each room a peaceful space</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid fourth_container mb-4">
        <div class="grid-container">
            <div class="gallery" id="photos">
                <img src="https://source.unsplash.com/random/?uttarakhand">
                <img src="https://source.unsplash.com/random/?kerala">
                <img src="https://source.unsplash.com/random/?manali">

                <img src="https://source.unsplash.com/random/?uttarakhand">
                <img src="https://source.unsplash.com/random/?kerala">
                <img src="https://source.unsplash.com/random/?manali">

                <img src="https://source.unsplash.com/random/?beach">
                <img src="https://source.unsplash.com/random/?gujrat">
                <img src="https://source.unsplash.com/random/?desert">

                <img src="https://source.unsplash.com/random/?uttarakhand">
                <img src="https://source.unsplash.com/random/?gujrat">
                <img src="https://source.unsplash.com/random/?desert">
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>
</body>

</html>