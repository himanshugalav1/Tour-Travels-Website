 <!--==================== FOOTER ====================-->
 <footer class="footer">
     <img src="<?= base_url('assets/img/design.svg'); ?>" alt="svg" class="footer__svg">
     <div class="footer__container container grid">
         <div class="footer__content grid">
             <div>
                 <a href="#" class="footer__logo">Indian Tour&Travels</a>

                 <p class="footer__description">
                     Travel with us and explore <br>
                     the world without limits.
                 </p>
             </div>

             <div class="footer__data grid">
                 <div>
                     <h3 class="footer__title">About</h3>

                     <ul class="footer__links">
                         <li>
                             <a href="#" class="footer__link">About Us</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Features</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">News & Blogs</a>
                         </li>
                     </ul>
                 </div>

                 <div>
                     <h3 class="footer__title">Company</h3>

                     <ul class="footer__links">
                         <li>
                             <a href="#" class="footer__link">FAQs</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">History</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Testimonials</a>
                         </li>
                     </ul>
                 </div>

                 <div>
                     <h3 class="footer__title">Contact</h3>

                     <ul class="footer__links">
                         <li>
                             <a href="#" class="footer__link">Call Center</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Support Center</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Contact Us</a>
                         </li>
                     </ul>
                 </div>

                 <div>
                     <h3 class="footer__title">Support</h3>

                     <ul class="footer__links">
                         <li>
                             <a href="#" class="footer__link">Privacy Policy</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Terms & Services</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Payments</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>

         <div class="footer__group">
             <div class="footer__social">
                 <a href="https:/www.facebook.com/" class="footer__social-link" target="_blank"><i class="ri-facebook-line"></i></a>

                 <a href="https:/www.instagram.com/" class="footer__social-link" target="_blank"><i class="ri-instagram-line"></i></a>

                 <a href="https:/www.twitter.com/" class="footer__social-link" target="_blank"><i class="ri-twitter-line"></i></a>

                 <a href="https:/www.youtube.com/" class="footer__social-link" target="_blank"><i class="ri-youtube-line"></i></a>
             </div>

             <span class="footer__copy">&#169; Copyright Indian Tour&Travels. All rights reserved</span>
         </div>
     </div>
 </footer>

 <!-- ========== MODAL BOX ========== -->
 <button type="button" class="modal_button" data-bs-toggle="modal" data-bs-target="#bookingModal">
     Book Now
 </button>
 <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content" style="border-radius: 0px;">
             <div class="modal-header">
                 <h2 class="modal-title fs-5 cont_color" id="bookingModalLabel">BOOK YOUR TRIP NOW</h2>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form id="bookNow">
                     <input type="hidden" id="setUrl" value="<?php echo base_url('bookNow'); ?>" />
                     <div class="row">
                         <div class="col-md-12 mb-2">
                             <label for="name" class="form-label">Full Name</label>
                             <input type="text" name="name" placeholder="Enter Your Name" class="form-control-sm" maxlength="35" autocomplete="off" required>
                         </div>
                         <div class="col-md-12 mb-2">
                             <label for="phone" class="form-label">Mobile No.</label>
                             <input type="text" name="phone" placeholder="Enter Your Mobile" class="form-control-sm" maxlength="10" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                         </div>
                         <div class="col-md-12 mb-2">
                             <label for="email" class="form-label">Email address</label>
                             <input type="email" name="email" placeholder="Enter Your Email" class="form-control-sm" maxlength="50" autocomplete="off" required>
                         </div>
                         <div class="col-md-12 mb-2">
                             <label for="package" class="form-label">Package</label>
                             <select name="package" class="form-select form-select-sm">
                                 <option value="">Select your favourite destination</option>
                                 <option value="kerala">Kerala</option>
                                 <option value="kedarnath">Kedarnath</option>
                                 <option value="tungnath">Tungnath</option>
                                 <option value="flower_valley">Flower Valley</option>
                                 <option value="uttrakhand">Uttrakhand</option>
                             </select>
                         </div>
                         <div class="col-md-6 mb-2">
                             <label for="check_in" class="form-label">CheckIn Date</label>
                             <input type="text" name="check_in" placeholder="Check in date" class="form-control-sm datepicker" maxlength="50" autocomplete="off" required>
                         </div>
                         <div class="col-md-6 mb-2">
                             <label for="check_out" class="form-label">CheckOut Date</label>
                             <input type="text" name="check_out" placeholder="Check out date" class="form-control-sm datepicker" maxlength="50" autocomplete="off" required>
                         </div>
                         <div class="col-md-12 mb-2">
                             <label for="message" class="form-label">Message</label>
                             <textarea name="message" id="message" cols="30" rows="5" class="form-control-sm" placeholder="Message" maxlength="200" autocomplete="off" required></textarea>
                         </div>
                     </div>
             </div>
             <div class="modal-footer">
                 <button class="btn btn-primary btn-sm" type="button" id="submit" onclick="addData('bookNow')"><i class="ri-check-line"></i> Book Now</button>
                 <button class="btn btn-danger btn-sm" type="button" data-bs-dismiss="modal"><i class="ri-close-line"></i> Close</button>
             </div>
             </form>
         </div>
     </div>
 </div>


 <!--========== SCROLL UP ==========-->
 <a href="#" class="scrollup" id="scroll-up">
     <i class="ri-arrow-up-line"></i>
 </a>

 <!--=============== Animation ===============-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 <script src="<?= base_url('assets/js/notify.min.js'); ?>"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
 <script src="<?= base_url('assets/js/swiper.js'); ?>"></script>
 <script src="<?= base_url('assets/js/scrollreveal.min.js'); ?>"></script>
 <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdUXXMoAAAAACRkYvn-MQKHubJbiqGR1W7O1MDO"></script>
 <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

 <!--=============== MAIN JS ===============-->
 <script src="<?= base_url('assets/js/main.js'); ?>"></script>

 <script>
     $(function() {
         $(".datepicker").datepicker({
             dateFormat: "dd-mm-yy"
         });

     });
 </script>
