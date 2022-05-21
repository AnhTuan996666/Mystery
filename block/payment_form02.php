<form action="" method="POST" class="payment-form payment-form--method">
  <h3 class="payment-form__title mb-5">PHƯƠNG THỨC THANH TOÁN</h3>
  <div class="payment-form__head row">
    <div class="col col-10 d-flex">
      <p class="me-3">
        <img src="theme/frontend/images/location_ico.png" alt=""/>
      </p>
      <div class="payment-form__location">
        <p class="mb-1">Thông tin nhận hàng</p>
        <p>Hoàng Nam - 0987656790<br>Iris Garden, tòa ct1b, 30 Trần Hữu Dực, Phường Cầu Diễn, Quận Nam Từ Liêm, Hà Nội</p>
      </div>
    </div>
    <div class="col col-2">
      <a class="payment-form__edit" href="#"><span class="me-2"><img src="theme/frontend/images/pen_ico.png" alt=""></span>Thay đổi</a>
    </div>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethodCod">
    <label class="form-check-label" for="paymentMethodCod">Thanh toán khi nhận hàng</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethodCard" checked>
    <label class="form-check-label" for="paymentMethodCard">Thanh toán qua thẻ</label>
  </div>

  <div class="d-flex justify-content-between mt-2 mb-2 payment-form-card">
    <div class="payment-form-card__item">
      <input type="radio" name="payment-card" class="btn-check" id="btn-card-visa">
      <label class="btn p-0" for="btn-card-visa"><img src="theme/frontend/images/visa_img.png" alt=""></label>
    </div>
    <div class="payment-form-card__item">
      <input type="radio" name="payment-card" class="btn-check" id="btn-card-mastercard">
      <label class="btn p-0" for="btn-card-mastercard"><img src="theme/frontend/images/mastercard_img.png" alt=""></label>
    </div>
    <div class="payment-form-card__item">
      <input type="radio" name="payment-card" class="btn-check" id="btn-card-napas">
      <label class="btn p-0" for="btn-card-napas"><img src="theme/frontend/images/napas_img.png" alt=""></label>
    </div>
    <div class="payment-form-card__item">
      <input type="radio" name="payment-card" class="btn-check" id="btn-card-jcb">
      <label class="btn p-0" for="btn-card-jcb"><img src="theme/frontend/images/jcb_img.png"alt=""></label>
    </div>
  </div>

  <div class="input-group input-group--first js-input-group-animate">
      <label for="">Tên trên thẻ <span>*</span></label>
      <input type="text" class="form-control payment-form__input" aria-describedby="button-addon1">
  </div>
  <div class="input-group js-input-group-animate">
      <label for="">Số thẻ tín dụng <span>*</span></label>
      <input type="text" class="form-control payment-form__input" aria-describedby="button-addon1">
  </div>
  <div class="d-flex justify-content-between">
    <div class="pe-2 input-group js-input-group-animate">
        <label for="">Ngày hết hạn <span>*</span></label>
        <input type="phone" class="form-control payment-form__input" aria-describedby="button-addon1">
    </div>
    <div class="ms-2 input-group js-input-group-animate">
        <label for="">CVC</label>
        <input type="phone" class="form-control payment-form__input" aria-describedby="button-addon1">
    </div>
  </div>

  <div class="d-flex justify-content-center">
      <button type="button" class="btn payment-form-btn payment-form-btn--cancel">Huỷ</button>
      <button type="button" class="btn payment-form-btn payment-form-btn--continue ">Thanh Toán</button>
  </div>
</form>