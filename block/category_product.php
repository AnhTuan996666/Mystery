<div class="category-product">
    <div class="category-product-head pt-4 pb-3">
        <p class="category-product-title">ĐỒNG HỒ NỮ (17,2345)</p>
        <select name="" id="" class="category-product-sort">
            <option value="">Sắp xếp theo</option>
            <option value=""></option>
        </select>
    </div>
    <?php include('./block/breadcrumb.php'); ?>
    <div class="row">
        <?php for ($i = 1; $i <= 12; $i++) { ?>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 mb-3">
                <?php include('./block/product_card.php'); ?>
            </div>
        <?php } ?>
    </div>

    <u class="pagination pt-4 pb-5">
        <li><a href="" class="" title=""><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
        <li><a href="" class="" title=""><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
        <li><a href="" class="" title="">1</a></li>
        <li><span class="active">2</i></span></li>
        <li><a href="" class="" title="">...</a></li>
        <li><a href="" class="" title="">10</a></li>
        <li><a href="" class="" title="">11</a></li>
        <li><a href="" class="" title=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
        <li><a href="" class="" title=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
    </u>

</div>
