<div class="deal pt-mb-3 pt-5 pb-mb-3 pb-5">
    <h2 class="title text-center fw-600 text-uppercase">DEAL SỐC</h2>
    <p class="text-center mt-3 mb-md-5 mb-3"><a class="view-detail" href="" title="Xem chi tiết">Xem chi tiết</a></p>

    <div class="swiper deal-slideshow ">
        <div class="swiper-wrapper">
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                <div class="swiper-slide">
                <?php include('./block/product_card.php');?>

                </div>
            <?php } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>