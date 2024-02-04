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