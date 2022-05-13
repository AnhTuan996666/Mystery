<div class="payment-cart">
    <div class="payment-cart-header d-flex justify-content-between align-items-center">
        <span class="payment-cart__title">GIỎ HÀNG</span>
        <div class="payment-cart__toggle-btn">
            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 1.96554L12.59 0.555542L7 6.14554L1.41 0.555542L0 1.96554L5.59 7.55554L0 13.1455L1.41 14.5555L7 8.96554L12.59 14.5555L14 13.1455L8.41 7.55554L14 1.96554Z" fill="#979797"/>
            </svg>
        </div>
    </div>
    <div class="cart-list">
        <? for($item = 1; $item <= 2; $item++) : ?>
            <div class="cart-item d-flex flex-column align-items-center">
                <div class="d-flex justify-content-between w-100">
                    <div class="cart-item__img">
                        <img src="theme/frontend/images/dongho1.png" alt="">
                    </div>
                    <div class="cart-item-info">
                        <div class="cart-item__name">Longines</div>
                        <p class="cart-item__desc">
                            Đồng hồ chạy cơ nữ<br>E-8000.700.28.85
                        </p>
                        <div class="item-remain">
                            <div class="item-remain__text">Còn <span>20</span> sản phẩm còn lại</div>
                            <div class="item-remain-progress">
                                <div class="item-remain-progress__value"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-between w-100">
                    <div class="cart-item-price">
                        <div class="cart-item-price__old">
                            <span>35.000.000 </span> vnđ
                        </div>
                        <span class="cart-item-price__sale">
                            20.000.000 vnđ
                        </span>
                    </div>
                    <div class="product-add-cart d-flex">
                        <div class="box-quantity d-flex ">
                            <input class="minus is-form btn" type="button" value="-">
                            <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="text" value="1">
                            <input class="plus is-form btn" type="button" value="+">
                        </div>
                        <div class="cart-item-trash d-flex">
                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 1H10.5L9.5 0H4.5L3.5 1H0V3H14V1ZM1 16C1 16.5304 1.21071 17.0391 1.58579 17.4142C1.96086 17.7893 2.46957 18 3 18H11C11.5304 18 12.0391 17.7893 12.4142 17.4142C12.7893 17.0391 13 16.5304 13 16V4H1V16Z" fill="#979797"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cart-item-line"></div>
            </div>
        <? endfor; ?>
    </div>
    <div class="payment-cart-item cart-maintain d-flex justify-content-between align-items-center">
        <h5 class="payment-cart-item__title">Gói bảo dưỡng máy</h5>
        <input class="payment-cart-item__check" type="checkbox" value="">
    </div>
    <div class="payment-cart-item cart-voucher d-flex justify-content-between align-items-center">
        <h5 class="payment-cart-item__title">Nhập mã voucher</h5>
        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.41 -7.62939e-08L6 4.59L10.59 -7.62939e-08L12 1.42L6 7.42L0 1.42L1.41 -7.62939e-08Z" fill="#979797"/>
        </svg>
    </div>

    <div class="payment-cart-item payment-price">
        <div class="payment-price-item d-flex justify-content-between align-items-center">
            <span>Giá tiền</span>
            <span>40.000.000 vnđ</span>
        </div>
        <div class="payment-price-item d-flex justify-content-between align-items-center">
            <span>Mã giảm giá</span>
            <span>-10.000.000 vnđ</span>
        </div>
        <div class="payment-price-item d-flex justify-content-between align-items-center">
            <span>Thuế VAT</span>
            <span>0 vnđ</span>
        </div>
        <div class="payment-price-item d-flex justify-content-between align-items-center">
            <span>Thành tiền</span>
            <span>30.000.000 vnđ</span>
        </div>
    </div>
</div>