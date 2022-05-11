<div class="category-left">
    <div class="category-view-option">
        <span class="mb-0 remove-option mb-3">Xóa tất cả</span>
        <div class="category-view-option-box mb-3">
            <span>Đồng hồ nữ <span></span></span>
            <span>Đồng hồ nữ <span></span></span>
            <span>Đồng hồ nữ <span></span></span>
            <span>Đồng hồ nữ <span></span></span>
        </div>
        <div class="category-box-option">
            <ul>
                <li>
                    <p>Danh mục <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>
                        <?php for ($a = 1; $a <= 6; $a++) { ?>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span>Đồng hồ nam</span>
                                </label>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <p>Thương hiệu <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>
                        <li>
                            <div class="category-box-search mb-3">
                                <input type="text" class="input-search form-control" placeholder="Tìm kiếm">
                                <button type="button" class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <?php for ($a = 1; $a <= 6; $a++) { ?>
                            <li>
                                <input type="checkbox">
                                <span>Rolex</span>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="" title="" class="view-more mt-3 d-flex">Xem thêm</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>Khoảng giá <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>
                        <?php for ($a = 1; $a <= 6; $a++) { ?>
                            <li>
                                <input type="checkbox">
                                <span>1.000.000 vnđ - 5.000.000 vnđ</span>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <p>Màu sắc <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>

                        <div class="row pt-2">
                            <div class="col-12 col-md-6">
                                <label class="radio-custom">Màu trắng
                                    <input type="radio" checked="checked" name="a">
                                    <span class="checkmark" style="background: #fff"> </span>
                                </label>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="radio-custom">Màu đỏ
                                    <input type="radio" name="a">
                                    <span class="checkmark" style="background: #D10000"></span>
                                </label>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="radio-custom">Màu vàng
                                    <input type="radio" name="a">
                                    <span class="checkmark" style="background: #FAFF00"></span>
                                </label>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="radio-custom">Màu hồng
                                    <input type="radio" name="a">
                                    <span class="checkmark" style="background: #FF00F5"></span>
                                </label>
                            </div>
                        </div>

                    </ul>
                </li>
                <li>
                    <p>Giới tính <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>
                        <li>
                            <span>
                                <input type="checkbox">
                                <span>Nam</span>
                            </span>
                        </li>
                        <li>
                            <span>
                                <input type="checkbox">
                                <span>Nữ</span>
                            </span>
                        </li>
                        <li>
                            <span>
                                <input type="checkbox">
                                <span>Unisex</span>
                            </span>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>Kiểu dáng <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                    <ul>
                        <?php for ($a = 1; $a <= 6; $a++) { ?>
                            <li>
                                <input type="checkbox">
                                <span>Kiểu dáng <?php echo $a; ?></span>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
