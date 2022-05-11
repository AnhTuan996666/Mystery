<div class="product-flash-sale pt-mb-3 pt-5 pb-mb-3 pb-5">
    <div class="container product-flash-container position-relative">
        <div class="row">
            <div class="col-7 col-lg-8 product-flash-col">
                <div class="box-img">
                    <img src="theme/frontend/images/flash_sale_1.png" alt="">
                </div>
            </div>
            <div class=" col-12 col-lg-4">
                <h2 class="title fw-600 text-uppercase">FLASH SALE</h2>
                <p class="mt-2 mb-3 title-n">Khuyến mại không giới hạn</p>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                <div class="swiper product-flash-sale-slideshow ">
                    <div class="swiper-wrapper">
                        <?php for ($l = 1; $l <= 5; $l++) { ?>
                            <div class="swiper-slide">
                            <?php include('./block/product_card.php');?>

                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>