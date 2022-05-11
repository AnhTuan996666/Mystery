<div class="pt-mb-3 pt-5 pb-mb-3 pb-5 product-hot">
    <div class="container-fluid ">
        <h2 class="title text-uppercase text-center mb-4">HOT NHẤT HIỆN NAY</h2>
        <ul class="nav product-tabs" id="myTab" role="tablist">
            <?php for ($i = 1; $i <= 3; $i++) { ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php if ($i == 1) {
                                                echo ' active';
                                            } ?> " id="home-tab<?php echo $i; ?>" data-bs-toggle="tab" data-bs-target="#home<?php echo $i; ?>" type="button" role="tab" aria-controls="home">Đồng hồ</button>
                </li>
            <?php } ?>
        </ul>
        <div class="tab-content" id="myTabContent">
            <?php for ($j = 1; $j <= 3; $j++) { ?>
                <div class="tab-pane fade <?php if ($j == 1) {
                                                echo 'show active';
                                            } ?>" id="home<?php echo $j ?>" role="tabpanel" aria-labelledby="home-tab<?php echo $j; ?>">
                    <div class="row">
                        <?php for ($h = 1; $h <= 5; $h++) { ?>
                            <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xxxl-2">
                                <?php include('./block/product_card.php');?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

