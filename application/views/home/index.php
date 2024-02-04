<?php $this->load->view('includes/header', ['title' => 'Home']); ?>
<!--==================== MAIN ====================-->
<main class=" main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <img src="<?= base_url('assets/img/home-bg.jpg'); ?>" alt="home image" class="home__bg">
        <div class="home__shadow"></div>

        <div class="home__container">
            <div class="home__data">
                <h3 class="home__subtitle">
                    Welcome To Indian Tour&Travels
                </h3>

                <h1 class="home__title">
                    Explore <br>
                    The Uttarakhand
                </h1>

                <p class="home__description">
                    Live the trips exploring the Uttrakhand, discover temples, rivers, mountains and much more, get
                    your trip now.
                </p>

                <a href="#" class="button">
                    Start Your Journey <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>


        <!-- <div class="home__cards container"> -->
        <div class="swiper-container">
            <div class="swiper" style="margin: auto; width:70vw;">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <article class="home__card">
                            <img src="<?= base_url('assets/img/char-dham-card.avif'); ?>" alt="home image" class="home__card-img">
                            <h3 class="home__card-title">CHARDHAM YATRA</h3>
                            <div class="home__card-shadow"></div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="home__card">
                            <img src="<?= base_url('assets/img/mussoorie-card.jpg'); ?>" alt="home image" class="home__card-img">
                            <h3 class="home__card-title">Mussoorie</h3>
                            <div class="home__card-shadow"></div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="home__card">
                            <img src="<?= base_url('assets/img/somnath-card.webp'); ?>" alt="home image" class="home__card-img">
                            <h3 class="home__card-title">Gujrat</h3>
                            <div class="home__card-shadow"></div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="home__card">
                            <img src="<?= base_url('assets/img/rajasthan1-card.jpg'); ?>" alt="home image" class="home__card-img">
                            <h3 class="home__card-title">Rajasthan</h3>
                            <div class="home__card-shadow"></div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="home__card">
                            <img src="<?= base_url('assets/img/kerala-card.jpg'); ?>" alt="home image" class="home__card-img">
                            <h3 class="home__card-title">Kerala</h3>
                            <div class="home__card-shadow"></div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="home__card">
                            <img src="<?= base_url('assets/img/goa-card.jpg'); ?>" alt="home image" class="home__card-img">
                            <h3 class="home__card-title">Goa</h3>
                            <div class="home__card-shadow"></div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="home__card">
                            <img src="<?= base_url('assets/img/kashmir-card.jpg'); ?>" alt="home image" class="home__card-img">
                            <h3 class="home__card-title">Kashmir</h3>
                            <div class="home__card-shadow"></div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="home__card">
                            <img src="<?= base_url('assets/img/amarnath-card.jpg'); ?>" alt="home image" class="home__card-img">
                            <h3 class="home__card-title">Amarnath</h3>
                            <div class="home__card-shadow"></div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="home__card">
                            <img src="<?= base_url('assets/img/ladakh-card.jpg'); ?>" alt="home image" class="home__card-img">
                            <h3 class="home__card-title">Ladakh</h3>
                            <div class="home__card-shadow"></div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- </div> -->

    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <div class="about__container container grid">
            <div class="about__data">
                <h2 class="section__title">
                    WELCOME TO <br>
                    <small class="small">Indian Tour&Travels</small>
                </h2>

                <p class="about__description">
                    Indian Tour&Travels, your dedicated partner in crafting unforgettable journeys. <br>
                    Indian Tour&Travels stands as a beacon of convenience, offering a one-stop platform for all Chardham
                    Yatra packages in the enchanting realm of Uttarakhand. At Indian Tour&Travels, our journey is to create
                    enriching memories that linger long after the adventure ends.
                </p>

                <a href="#" class="button">Explore Travel <i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="about__image">
                <img src="<?= base_url('assets/img/about-beach.jpg'); ?>" alt="about image" class="about__img">
                <div class="about__shadow">

                </div>
            </div>
        </div>
    </section>

    <!--==================== POPULAR ====================-->
    <section class="popular section" id="popular">
        <h2 class="section__title">
            Enjoy The Beauty <br>
            Of The India
        </h2>

        <div class="popular__container container grid">
            <article class="popular__card">
                <div class="popular__image">
                    <img src="<?= base_url('assets/img/popular-mountain.jpg'); ?>" alt="popular image" class="popular__img">
                    <div class="popular__shadow"></div>
                </div>

                <h2 class="popular__title">
                    Mussoorie Fall
                </h2>

                <div class="popular__location">
                    <i class="ri-map-pin-line"></i>
                    <span>Mussoorie</span>
                </div>
            </article>

            <article class="popular__card">
                <div class="popular__image">
                    <img src="<?= base_url('assets/img/popular-forest.jpg'); ?>" alt="popular image" class="popular__img">
                    <div class="popular__shadow"></div>
                </div>

                <h2 class="popular__title">
                    Hill Station
                </h2>

                <div class="popular__location">
                    <i class="ri-map-pin-line"></i>
                    <span>Ooty</span>
                </div>
            </article>

            <article class="popular__card">
                <div class="popular__image">
                    <img src="<?= base_url('assets/img/popular-lake.jpg'); ?>" alt="popular image" class="popular__img">
                    <div class="popular__shadow"></div>
                </div>

                <h2 class="popular__title">
                    Garda Lake
                </h2>

                <div class="popular__location">
                    <i class="ri-map-pin-line"></i>
                    <span>Italy</span>
                </div>
            </article>
        </div>
    </section>

    <!--==================== EXPLORE ====================-->
    <section class="explore section" id="explore">
        <div class="explore__container">
            <div class="explore__image">
                <img src="<?= base_url('assets/img/explore-beach.jpg'); ?>" alt="explore image" class="explore__img">
                <div class="explore__shadow"></div>
            </div>

            <div class="explore__content container grid">
                <div class="explore__data">
                    <h2 class="section__title">
                        Explore The <br>
                        Best Paradises
                    </h2>

                    <p class="explore__description">
                        Exploring paradises such as islands and
                        valleys when traveling the india is one of
                        the greatest experiences when you travel, it
                        offers you harmony and peace and you
                        can enjoy it with great comfort.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--==================== JOIN ====================-->
    <section class="join section">
        <div class="join__container container grid">
            <div class="join__data">
                <h2 class="section__title">
                    Your Journey <br>
                    Starts Here
                </h2>

                <p class="join__description">
                    Get up to date with the latest
                    travel and information from us.
                </p>

                <form class="join__form" id="subscribe">
                    <input type="email" name="email" placeholder="Enter your email" class="join__input" maxlength="50" required>

                    <button class="join__button button" type="button" onclick="addData('subscribe')">
                        Subscribe Our Newsletter <i class="ri-arrow-right-line"></i>
                    </button>
                </form>
            </div> 

            <div class="join__image">
                <img src="<?= base_url('assets/img/join-island.jpg'); ?>" alt="join image" class="join__img">
                <div class="join__shadow"></div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>

<script>
    $(document).ready(function() {
        visitData();
    });

    function visitData() {
        let url = 'contact/visit';
        $.ajax({
            type: 'POST',
            url: url,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'JSON',
            success: function(data) {
                console.log('Welcome to our website');
            }
        });
    }
</script>

</body>

</html>