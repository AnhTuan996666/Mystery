<div class="product-new position-relative pt-mb-3 pt-5 pb-mb-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="product-left">
                    <h2 class="title fw-600">DEAL SỐC</h2>
                    <p class="title-n">Bộ sưu tập mới nhất</p>

                    <div class="s-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate vel feugiat rhonc us, varius turpis </p>
                    </div>
                    <a href="" class="view-now d-flex align-items-center" title=""><span class="mr-2">Xem ngay</span> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-12 col-lg-9 product-new__absolute">
                <div class="product-new-slide-button">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper product-new-slideshow ">
                    <div class="swiper-wrapper">
                        <?php for ($i = 1; $i <= 12; $i++) { ?>
                            <div class="swiper-slide">
                            <?php include('./block/product_card.php');?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
