<?php $this->load->view('includes/header', ['title' => 'Contact Us']); ?>
<main class=" main">
    <!--==================== HOME ====================-->

    <section class="heli__home section" id="helicopter">
        <img src="assets/img/contact-us1.avif" alt="contact-us" class="heli__home__bgImg">
        <div class="heli__home__bg">
            <h2 class="heli__home__title">Contact Us :</h2>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="section_second heli__section" id="heli__about">
        <div class="contact__about__container grid mt-5 mb-4">

            <div class="about__image">
                <img src="<?= base_url('assets/img/contact-us2.avif'); ?>" alt="about image" class="contact__about__img">
                <div class="about__shadow"></div>
            </div>

            <div class="about__data">
                <form class="join__form" id="contact">
                    <input type="hidden" id="setUrl" value="<?php echo base_url('contact'); ?>" />
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input type="text" name="first_name" placeholder="First name" class="join__input" maxlength="15" autocomplete="off" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" name="last_name" placeholder="Last name" class="join__input" maxlength="15" autocomplete="off" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" name="phone" placeholder="Enter your mobile no." class="join__input" maxlength="10" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="email" name="email" placeholder="Enter your email" class="join__input" maxlength="50" autocomplete="off" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <textarea name="message" id="message" cols="30" rows="5" class="join__input" placeholder="Message" maxlength="200" autocomplete="off" required></textarea>
                        </div>
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        <input type="hidden" name="action" value="validate_captcha">
                        <div class="col-md-12 mb-2">
                            <button class="join__button button" type="button" id="submit" onclick="addData('contact')">
                                Submit <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="contact_details">
        <div class="container">
            <div class="intouch d-flex justify-content-around align-items-center mb-5">
                <div class="intouch__phone intouch__icon">
                    <img src="<?= base_url('assets/img/telephone.png'); ?>" alt="phone" class="contact__icon">
                    <span>+91 6367630795</span>
                </div>
                <div class="intouch__email intouch__icon">
                    <img src="<?= base_url('assets/img/mail.png'); ?>" alt="email" class="contact__icon">
                    <span>indiantourandtravels@support.com</span>
                </div>
                <div class="intouch__address intouch__icon">
                    <img src="<?= base_url('assets/img/location.png'); ?>" alt="location" class="contact__icon">
                    <span>IIT Ropar Main Campus, Rupnagar <br> PIN CODE 140001</span>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>

<script>

    grecaptcha.ready(function() {
        grecaptcha.execute('6LcclB8oAAAAAFrK2Xtjx31JFbqCmy0s941Vg3LK', {
                action: 'validate_captcha'
            })
            .then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
    });
    
</script>

</body>

</html>