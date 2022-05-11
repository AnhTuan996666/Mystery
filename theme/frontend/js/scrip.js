var SLIDESHOW = (function() {

    var slideBanner = function() {
        if ($('.slide-baner').find('.swiper-slide').length >= 2) {
            var swiper = new Swiper(".slide-baner", {
                navigation: {
                    nextEl: ".banner-next",
                    prevEl: ".banner-prev",
                },
                speed: 1000,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
            });
        }
    }
    var dealSlide = function() {
        if ($('.deal-slideshow').length > 0) {
            var swiper = new Swiper(".deal-slideshow", {
                centeredSlides: true,
                roundLengths: true,
                loop: true,
                loopAdditionalSlides: 30,
                pagination: {
                  el: ".deal-slideshow .swiper-pagination",
                  clickable: true,
                },
                navigation: {
                    nextEl: ".product-left-next",
                    prevEl: ".product-left-prev",
                },
                breakpoints: {
                    320: {
                      slidesPerView: 2,
                      spaceBetween: 20
                    },
                    480: {
                      slidesPerView: 3,
                      spaceBetween: 30
                    },
                    769: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1200: {
                        spaceBetween: 50,
                        slidesPerView: 5,
                    },
                }
            });
        }
    }
    var productNewSlide = function() {
        if ($('.product-new-slideshow').length > 0) {
            var swiper = new Swiper(".product-new-slideshow", {
                loop: true,
                pagination: {
                  el: ".product-new .swiper-pagination",
                  clickable: true,
                },
                navigation: {
                    nextEl: ".product-new .swiper-button-next",
                    prevEl: ".product-new .swiper-button-prev",
                },
                breakpoints: {
                    320: {
                      slidesPerView: 2,
                      spaceBetween: 20
                    },
                    769: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1200: {
                        spaceBetween: 30,
                        slidesPerView: 4,
                    },
                }
            });
        }
    }
    var productFlashSaleSlideshow = function() {
        if ($('.product-flash-sale-slideshow').length > 0) {
            var swiper = new Swiper(".product-flash-sale-slideshow", {
                loop: true,
                pagination: {
                  el: ".product-flash-sale-slideshow .swiper-pagination",
                  clickable: true,
                },
                navigation: {
                    nextEl: ".btn-product-flash-next",
                    prevEl: ".btn-product-flash-prev",
                },
                breakpoints: {
                    320: {
                      slidesPerView: 2,
                      spaceBetween: 20
                    },
                    767: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    992: {
                        slidesPerView: 1,
                    },
                }
            });
        }
    }
    var productDetail = function() {
        if ($('.product-detail-slide').length > 0) {
            var swiper = new Swiper(".mySwiper", {
                loop: true,
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
              });
              var swiper2 = new Swiper(".mySwiper2", {
                loop: true,
                spaceBetween: 10,
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
                thumbs: {
                  swiper: swiper,
                },
              });
        }
    }
    return {
        _: function() {
            slideBanner();
            dealSlide();
            productNewSlide();
            productFlashSaleSlideshow();
            productDetail();
        }
    }
})();
var WEBS = (function() {
    var scrollHeader = function() {
        if ($('.header').length > 0) {
            $(window).scroll(function() {
                var header = $('.header').height();
                var height = $(this).scrollTop();

                if (height > header) {
                    $('.header-top').hide();
                    $('.header').addClass('fixed');
                } else {
                    $('.header-top').show();
                    $('.header').removeClass('fixed');
                }
            });
        }
    }
    var backTop = function () {
        var backTop = $('.back-to-top');  
          $(window).scroll(function (event) {
              if ($(this).scrollTop() > 1200) {
               
                  backTop.show(200);
              } else {
                  backTop.hide(200);
              }
          }); 
          backTop.click(function (event) {
            $('html,body').animate({scrollTop: 0}, 300);         
        });
    }
    var showSearch = function () {
        if($(document) >= 992) {
            var showSearch = $(".icon-mobie , .btn-search");
            if (typeof showSearch !== 'undefined') {
                showSearch.click(function (event) {
                    $('.main-search-top').toggleClass('show');
                });
            }
        }else {
            var showSearch = $(".btn-search");
            if (typeof showSearch !== 'undefined') {
                showSearch.click(function (event) {
                    $('.main-search-top').toggleClass('show');
                });
            }
        }
      
    }
    var showFooter = function () {
        var showFooter = $(".title-footer");
        if ($(document).width() <= 991) {
        showFooter.click(function (event) {
            $(".item-menu").slideToggle(300);
        })
    }
}
var productFancy = function () {
    if ($('[data-fancybox]').length > 0) {
        $('[data-fancybox]').fancybox({
            buttons: [
                'close'
            ],
            wheel: false,
            transitionEffect: "slide",
            loop: true,
            toolbar: false,
            clickContent: false
        });
    }
}

var quantity = function () {
    if ($('.box-quantity').length > 0) {
        $('.input-qty').each(function () {
            var $this = $(this),
                qty = $this.parent().find('.is-form'),
                min = Number($this.attr('min')),
                max = Number($this.attr('max'))
            if (min == 0) {
                var d = 0;
            } else {
                d = min;
            }
            $(qty).on('click', function () {
                if ($(this).hasClass('minus')) {
                    if (d > min) d += -1;
                } else if ($(this).hasClass('plus')) {
                    var x = Number($this.val()) + 1;
                    if (x <= max) d += 1;
                }
                $this.attr('value', d).val(d);
            });
        });
    }
}
var initAnimation = function(){
    var wow = new WOW();
    wow.init();
  };
    return {
        _: function() {
            scrollHeader();
            backTop();
            showSearch();
            showFooter();
            initAnimation();
            quantity();
            productFancy();
        }
    }
})();

var OPTIONS = (function () {
    var toggleOption = function () {
        if ($('.category-box-option').length > 0) {
            let li = $('.category-box-option > ul > li > p');
            li.click(function (e) {
                e.preventDefault();
                $(this).parents('li').children('ul').toggle();
                if ($(this).parents('li').children('ul').is(":hidden")) {
                    $(this).children('i').addClass('fa-angle-down').removeClass('fa-angle-up');
                } else {
                    $(this).children('i').addClass('fa-angle-up').removeClass('fa-angle-down');
                }
            });
        }
    }

    return {
        _: function () {
            toggleOption();
        }
    }
})();

var MENU = (function() {
    var menu = function() {
        if ($(document).width() <= 991) {
            $('.menu').find("ul>li>ul").hide();
            $('.menu').find("ul li").each(function() {
                if ($(this).find("ul>li").length > 0) {
                    $(this).prepend('<i class=" fa fa-angle-right smooth"></i>');
                    $(this).addClass('active');
                }
            });
        }
        $('.menu').find('li i').click(function(event) {

            var ul = $(this).nextAll("ul");

            if (ul.is(":hidden") === true) {

                ul.slideDown(200);
            } else {
                ul.slideUp(200);
            }

            if ($(this).hasClass('fa-angle-right')) {
                $(this).addClass('fa-angle-down');
                $(this).removeClass('fa-angle-right');
                return;
            } else {
                $(this).addClass('fa-angle-right');
                $(this).removeClass('fa-angle-down');
                return;
            }
        });

    }
    var openMenuMobile = function() {
        if ($('.nav-menu').length > 0) {
            $('.show_menu').click(function() {
                $('.header-body').addClass('active');
                $('body').addClass('overflow-hidden');
                $('.nav-menu').toggleClass('nav_active');
                $('.menu_container').toggleClass('active');
                $('.nav-menu').toggleClass('col_active');
                $('.bg-menu').toggleClass('active');
                $('.bg-menu').addClass('smooth');
                $('.nav-menu').addClass('smooth');
                $('.header-body').addClass('smooth');

            });
        }
    }
    var closeMenuMobile = function() {
        if ($('.nav-menu').length > 0) {
            $('.bg-menu').click(function() {
                $('body').removeClass('overflow-hidden');
                $('.nav-menu').removeClass('nav_active');
                $('.menu_container').removeClass('active');
                $('.nav-menu').removeClass('col_active');
                $('.bg-menu').removeClass('active');
                $('.header-body').removeClass('active');
            });
        }
    }
    var siderbar = function() {
        $('.categories').find("ul>li>ul").hide();
        $('.categories').find("ul li").each(function() {
            if ($(this).find("ul>li").length > 0) {
                $(this).prepend('<i class=" fa fa-plus smooth"></i>');
                $(this).addClass('active');
            }
        });
        $('.categories').find('li i').click(function(event) {

            var ul = $(this).nextAll("ul");

            if (ul.is(":hidden") === true) {

                ul.slideDown(200);
            } else {
                ul.slideUp(200);
            }

            if ($(this).hasClass('fa-plus')) {
                $(this).addClass(' fa-minus');
                $(this).removeClass(' fa-plus');
                return;
            } else {
                $(this).addClass(' fa-plus');
                $(this).removeClass(' fa-minus');
                return;
            }
        });
    }
    return {
        _: function() {
            menu();
            openMenuMobile();
            closeMenuMobile();
            siderbar();
        }
    }

})();
$(document).ready(function() {
    MENU._();
    SLIDESHOW._();
    OPTIONS._();
    WEBS._();
});