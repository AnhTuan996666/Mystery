<?php include('header.php');?>
<div class="page-product">
  <div class="container">
    <div class="row">
      <div class="product-item  d-flex align-items-center justify-content-between">
        <h3 class="product-item__title">SẢN PHẨM & DỊCH VỤ</h3>
        <div class="product-seach d-flex align-items-center">
          <span class="me-3">Hiển thị 1–12 của 19 kết quả</span>
            <form method="post" action="">
              <select class="form-select" name="cars" id="cars">
                <option value="volvo">Thứ tự theo mức độ phổ biến</option>
                <option value="saab">Mới nhất</option>
                <option value="mercedes">Thứ tự theo giá: thấp đến cao</option>
                <option value="audi">Thứ tự theo giá: cao xuống thấp</option>
              </select>
          </form>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="product-left">
          <p class="product-item__title">DANH MỤC</p>
          <div class="product-left-list">
            <ul>
            <?php for($i = 0; $i <= 5; $i++) :?>
              <li>
                <a href="#" title="" class="product-left__link">In ấn bao bì, vỏ hộp</a>
                <span>(<?= $i?>)</span>
              </li>
              <?php endfor; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
        <?php for($i = 1; $i <= 9; $i++) :?>
            <div class="col-12 col-sm-6 col-lg-4 mb-3">
              <div class="product-left-item">
                <div class="product-left-image position-relative">
                  <div class="item">
                    <a href="#" class="product-item-image__links" title="">
                      <img  alt="" src="theme/frontend/images/tui-giay-4-600x600.jpg"/>
                    </a>
                  </div>
                  <div class="item item-hover">
                    <a href="#" class="product-item-image__links" title="">
                      <img  alt="" src="theme/frontend/images/hop-cung-9-600x600.jpg"/>
                    </a>
                  </div>
                </div>
                <div class="product-left-slug">
                    <div class="item text-center">
                      <a href="#" class="product-item-image" title="">Túi giấy</a>
                      <p class="product-item-cat">In Ấn các loại</p>
                    </div>
                    <p  class="product-item-money"><span class="product-item-money__sale">60.000₫</span> 19.000₫</p>
                </div>
              </div>
            </div>
          <?php endfor; ?>
          <div class="pagin text-center">
            <ul class="pagination pt-4 pb-5">
              <li><a href="" class="active" title="">1</a></li>
              <li><a href="" class="">2</i></a></li>
              <li><a href="" class="" title=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php');?>